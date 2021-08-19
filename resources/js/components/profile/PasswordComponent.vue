<template lang="">
    <div class="col-lg-4">
        <div class="page-separator">
            <div class="page-separator__text">Change Password</div>
        </div>
    </div>
    <div class="col-lg-8 d-flex align-items-center">
        <div class="flex" style="max-width: 100%">
          <form @submit.prevent="handleFormSubmit()">
            <div class="form-group">
                <label class="form-label" for="oldpassword">Old Password:</label>
                <input id="oldpassword" type="password" class="form-control" v-model="oldPassword" placeholder="Type your old password ...">
            </div>
            <div class="form-group">
                <label class="form-label" for="password">New Password:</label>
                <input id="password" type="password" class="form-control" v-model="password" placeholder="Type a new password ...">
            </div>
            <div class="form-group">
                <label class="form-label" for="password_confirmation">Confirm Password:</label>
                <input id="password_confirmation" type="password" class="form-control" 
                    v-model="password_confirmation" :class="!passwordMatched() && 'is-invalid'" placeholder="Confirm your new password ...">
                <div class="invalid-feedback" v-if="!passwordMatched()">Password doesn't matched.</div>
            </div>
            <button type="submit" class="btn btn-primary" :class="isLoading && 'is-loading'" :disabled="!isValid">Save password</button>
          </form>
        </div>
    </div>
</template>
<script>
import axios from "axios";
import Swal from "sweetalert2";
export default {
  data() {
    return {
      oldPassword: "",
      password: "",
      password_confirmation: "",
      isLoading: false,
    };
  },
  methods: {
    passwordMatched() {
      if (
        this.password_confirmation != "" &&
        this.password != this.password_confirmation
      ) {
        return false;
      } else {
        return true;
      }
    },
    handleFormSubmit() {
      this.isLoading = true;
      axios
        .post("update-password", {
          oldPassword: this.oldPassword,
          password: this.password,
          password_confirmation: this.password_confirmation,
        })
        .then((res) => {
          this.oldPassword = "";
          this.password = "";
          this.password_confirmation = "";
          this.isLoading = false;
          Swal.fire({
            title: "Success",
            text: res.data.message,
            icon: "success",
          });
        })
        .catch((error) => {
          this.isLoading = false;
          Swal.fire({
            title: "Warning",
            text: "Internal Server Error! This could happend if your old password is wrong.",
            icon: "warning",
          });
        });
    },
  },
  computed: {
    isValid() {
      return (
        this.oldPassword &&
        this.password &&
        this.passwordMatched() &&
        !this.isLoading
      );
    },
  },
};
</script>
<style lang="">
</style>
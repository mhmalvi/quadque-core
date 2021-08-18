<template lang="">
    <div class="col-lg-4">
        <div class="page-separator">
            <div class="page-separator__text">Contact Informations</div>
        </div>
    </div>
    <div class="col-lg-8 d-flex align-items-center">
        <div class="flex" style="max-width: 100%">
            <form @submit.prevent="handleFormSubmit()">
                <div class="form-group">
                    <label class="form-label" for="email">Email address</label>
                    <input type="email" class="form-control" value="alexander.watson@fake-mail.com" placeholder="Your email address ..." id="email" readonly>
                    <small class="form-text text-muted">Note that if you want to change your email, you have to contact to the admin</small>
                </div>
                <div class="form-group">
                    <label class="form-label" for="phone">Phone Number</label>
                    <input type="text" class="form-control" placeholder="Enter your phone number ..." id="phone" v-model="user_contact">
                </div>
                <div class="form-group">
                    <label class="form-label">Address</label>
                    <textarea rows="3" class="form-control" placeholder="Enter your address ..." style="resize: none;" v-model="user_address"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" :disabled="!isValid" :class="isLoading && 'is-loading'">Save Changes</button>
            </form>
        </div>
    </div>
</template>
<script>
import axios from "axios";
import Swal from "sweetalert2";
export default {
  props: ["phone", "address"],
  data() {
    return {
      user_contact: this.phone,
      user_address: this.address,
      isLoading: false,
    };
  },
  methods: {
    handleFormSubmit() {
      this.isLoading = true;
      axios
        .post("edit-profile", {
          user_contact: this.user_contact,
          user_address: this.user_address,
        })
        .then((res) => {
          this.isLoading = false;
          Swal.fire({
            title: "Success",
            text: res.data.message,
            icon: "success",
          });
        })
        .catch((err) => {
          this.isLoading = false;
          Swal.fire({
            title: "Warning",
            text: "Internal Server Error!",
            icon: "warning",
          });
        });
    },
  },
  computed: {
    isValid() {
      return this.user_contact && this.user_address;
    },
  },
};
</script>
<style lang="">
</style>
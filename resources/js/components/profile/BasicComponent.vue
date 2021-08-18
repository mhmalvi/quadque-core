<template lang="">
    <div class="col-lg-4">
        <div class="page-separator">
            <div class="page-separator__text">Personal Informations</div>
        </div>
    </div>
    <div class="col-lg-8 d-flex align-items-center">
        <div class="flex" style="max-width: 100%">
            <form @submit.prevent="handleFormSubmit()">
                <div class="form-group">
                    <label class="form-label" for="username">User Name</label>
                    <input type="text" class="form-control" placeholder="Enter your username ..." v-model="user_name" id="username">
                </div>
                <div class="form-group">
                    <label class="form-label" for="name">Full Qualified Name</label>
                    <input type="text" class="form-control" placeholder="Enter your full name ..." v-model="full_name" id="name">
                </div>
                <div class="form-group">
                    <label class="form-label">About you</label>
                    <textarea rows="3" class="form-control" placeholder="About you ..." v-model="about_user" style="resize: none;"></textarea>
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
  props: ["username", "name", "about"],
  data() {
    return {
      user_name: this.username,
      full_name: this.name,
      about_user: this.about,
      isLoading: false,
    };
  },
  methods: {
    handleFormSubmit() {
      this.isLoading = true;
      axios
        .post("edit-profile", {
          user_name: this.user_name,
          full_name: this.full_name,
          about_user: this.about_user,
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
      return this.user_name;
    },
  },
};
</script>
<style lang="">
</style>
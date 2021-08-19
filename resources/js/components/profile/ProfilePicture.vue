<template lang="">
    <div class="col-lg-4">
        <div class="flex" style="max-width: 100%">
            <div class="avatar avatar-xxl">
                <img src="../../../../public/assets/images/people/256/256_rsz_nicolas-horn-689011-unsplash.jpg" alt="Avatar" class="avatar-img rounded">
            </div>
        </div>
    </div>
    <div class="col-lg-8 d-flex align-items-center">
        <div class="flex" style="max-width: 100%">
            <div class="form-group">
                <label class="form-label">Your photo</label>
                <div class="flex" style="max-width: 100%" v-if="isLoading">
                    <div class="progress" style="height: 20px;">
                        <div class="progress-bar" role="progressbar" :style="{width: percent}" aria-valuenow="{{progress}}" aria-valuemin="0" aria-valuemax="100">{{percent}}</div>
                    </div>
                </div>
                <div class="media align-items-center" v-else>
                    <div class="media-body">
                        <div class="input-group">
                            <input type="file" class="form-control" @change="uploadHandler">
                            <div class="input-group-append">
                                <button class="btn btn-sm btn-primary" :disabled="!isValid" @click="submitHandler()" type="button">
                                    <span class="material-icons">file_upload</span>
                                    Upload
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import Swal from "sweetalert2";
export default {
  data() {
    return {
      avatar: "",
      percent: "",
      progress: 0,
      isLoading: false,
      isValid: false,
    };
  },
  methods: {
    uploadHandler(event) {
      this.isValid = true;
      this.avatar = event.target.files[0];
    },
    submitHandler() {
      this.isLoading = true;
      var formData = new FormData();
      formData.append("avatar", this.avatar);
      axios
        .post("edit-profile-picture", formData, {
          onUploadProgress: (uploadEvent) => {
            this.percent = `${Math.round(
              (uploadEvent.loaded / uploadEvent.total) * 100
            )}%`;
            this.progress = Math.round(
              (uploadEvent.loaded / uploadEvent.total) * 100
            );
          },
        })
        .then((res) => {
          this.isLoading = false;
          this.isValid = false;
          Swal.fire({
            title: "Success",
            text: res.data.message,
            icon: "success",
          });
        })
        .catch((err) => {
          this.isLoading = false;
          this.isValid = false;
          Swal.fire({
            title: "Warning",
            text: "Internal Server Error! This could happen if you submit in-valid file type.",
            icon: "warning",
          });
        });
    },
  },
};
</script>
<style lang="">
</style>
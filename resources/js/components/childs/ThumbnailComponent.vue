<template lang="">
        <div class="col-lg-4">
            <div class="page-separator">
                <div class="page-separator__text">Thumbnail Image</div>
            </div>

            <div class="card-subtitle">
                <transition name = "fade">
                    <img :src="image" alt="thumbnail" class="img-fluid rounded" v-if = "image">
                </transition>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="flex" style="max-width: 100%">
                <div class="form-group">
                    <div class="flex" style="max-width: 100%" v-if="isLoading">
                        <div class="progress" style="height: 20px;">
                            <div class="progress-bar" role="progressbar" :style="{width: percent}" aria-valuenow="{{progress}}" aria-valuemin="0" aria-valuemax="100">{{percent}}</div>
                        </div>
                    </div>
                    <label for="thumbnail" class="border border-secondary rounded p-3 w-100 text-center thumbnail-select" v-else>
                        Click here to select thumbnail image
                    </label>
                    <input type="file" id="thumbnail" class="form-control d-none" @change="uploadHandler">
                </div>
                <slot></slot>
            </div>
        </div>
</template>
<script>
import axios from "axios";
import Swal from "sweetalert2";
export default {
  props: ["contents"],
  data() {
    return {
      image: "",
      percent: "",
      progress: 0,
      isLoading: false,
    };
  },

  methods: {
    uploadHandler(event) {
      this.isLoading = true;
      let formData = new FormData();
      this.thumbnail = event.target.files[0];
      formData.append("thumbnail", this.thumbnail);
      axios
        .post("admin/tmp-file-upload", formData, {
          onUploadProgress: (uploadEvent) => {
            this.percent = `${Math.round(
              (uploadEvent.loaded / uploadEvent.total) * 100
            )}%`;
            this.progress = Math.round(
              (uploadEvent.loaded / uploadEvent.total) * 100
            );
            if (this.progress == 100) {
              let reader = new FileReader();

              reader.onload = (e) => {
                this.image = e.target.result;
              };

              reader.readAsDataURL(this.thumbnail);
            }
          },
        })
        .then((res) => {
          this.$emit("imageHandler", res.data.file);
          this.thumbnail = res.data.file;
          this.isLoading = false;
        })
        .catch((err) => {
          this.isLoading = false;
          this.progress = 0;
          this.percent = "";
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
<style>
.fade-enter-from {
  opacity: 0;
}

.fade-enter-to {
  opacity: 1;
}

.fade-enter-active {
  transition: all 1s;
}
</style>
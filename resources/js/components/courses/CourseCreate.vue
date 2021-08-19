<template lang="">
    <div class="row mb-32pt">
        <div class="col-lg-4">
            <div class="page-separator">
                <div class="page-separator__text">Basic Informations</div>
            </div>
            <p class="card-subtitle text-70 mb-16pt mb-lg-0">
                
            </p>
        </div>
        <div class="col-lg-8 d-flex align-items-center">
            <div class="flex" style="max-width: 100%">
                <div class="form-group">
                    <label class="form-label" for="title">Course Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter course title ..">
                </div>
                <div class="form-group">
                    <label class="form-label" for="category">Course Category</label>
                    <select id="category" class="form-control custom-select">
                        <option selected="">Open this to select category</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label" for="lessons">Number of lessons</label>
                    <input type="text" class="form-control" id="lessons" placeholder="Enter total number of lessons ..">
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-32pt">
        <div class="col-lg-4">
            <div class="page-separator">
                <div class="page-separator__text">Course Informations</div>
            </div>
            <p class="card-subtitle text-70 mb-16pt mb-lg-0">
                
            </p>
        </div>
        <div class="col-lg-8 d-flex align-items-center">
            <div class="flex" style="max-width: 100%">
                <div class="form-group">
                    <label class="form-label" for="details">Descriptions</label>
                    <textarea id="details" rows="10" class="form-control" style="resize: none;"></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-32pt">
        <div class="col-lg-4">
            <div class="page-separator">
                <div class="page-separator__text">Thumbnail Image</div>
            </div>
        </div>
        <div class="col-lg-8 d-flex align-items-center">
            <div class="flex" style="max-width: 100%">
                <div class="form-group">
                    <div class="flex mb-2" style="max-width: 100%" v-if="isLoading">
                        <div class="progress" style="height: 20px;">
                            <div class="progress-bar" role="progressbar" :style="{width: percent}" aria-valuenow="{{progress}}" aria-valuemin="0" aria-valuemax="100">{{percent}}</div>
                        </div>
                    </div>
                    <label for="thumbnail" class="border border-secondary rounded p-3 w-100 mt-2 text-center thumbnail-select" v-else>
                        Click here to select thumbnail image
                    </label>
                    <div class="">
                        <img src="../../../../public/assets/images/1280_work-station-straight-on-view.jpg" alt="thumbnail" class="img-fluid rounded">
                    </div>
                    
                    <input type="file" id="thumbnail" class="form-control d-none" @change="uploadHandler">
                    <input type="hidden" v-model="thumbnail">
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-32pt">
        <div class="col-lg-4">
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" value="" id="draft">
                    <label class="custom-control-label" for="draft">
                        Save as draft
                    </label>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <button class="btn btn-primary">
                <span class="material-icons mr-2">save</span>
                Save Now
            </button>
            
            <button type="reset" class="btn btn-light ml-2">
                <span class="material-icons mr-2">clear_all</span>
                Clear all
            </button>
        </div>
    </div>
</template>
<script>
import axios from "axios";
import Swal from "sweetalert2";
export default {
  data() {
    return {
      thumbnail: "",
      percent: "",
      progress: 0,
      isLoading: false,
      isValid: false,
    };
  },
  methods: {
    uploadHandler(event) {
      this.isLoading = true;
      var formData = new FormData();
      this.thumbnail = event.target.files[0];
      formData.append("thumbnail", this.thumbnail);
      axios
        .post("file-upload", formData, {
          onUploadProgress: (uploadEvent) => {
            this.percent = `${Math.round(
              (uploadEvent.loaded / uploadEvent.total) * 100
            )}%`;
            this.progress = Math.round(
              (uploadEvent.loaded / uploadEvent.total) * 100
            );
          },
        })
        .then((res) => {})
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
<style lang="">
</style>
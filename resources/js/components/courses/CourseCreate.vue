<template lang="">
    <form @submit.prevent="onFormSubmitHandlar()">
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
                        <quill-editor theme="snow" v-model:content="details" contentType="html"></quill-editor>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-32pt">
            <!-- Thumbnail -->
            <thumbnail-component @imageHandler="onImageUpload">
                <slot>
                    <div class="form-group">
                        <label class="form-label" for="imgTitle">Image title</label>
                        <input type="text" class="form-control" id="imgTitle" placeholder="Set a nice image title ..">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="alt">Image Alternative Text</label>
                        <input type="text" class="form-control" id="alt" placeholder="Set a nice alternative image title ..">
                    </div>
                </slot>
            </thumbnail-component>
            <input type="hidden" v-model="thumbnail">
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
                <button type="submit" class="btn btn-primary">
                    <span class="material-icons mr-2">save</span>
                    Save Now
                </button>
                
                <button type="reset" class="btn btn-light ml-2">
                    <span class="material-icons mr-2">clear_all</span>
                    Clear all
                </button>
            </div>
        </div>
    </form>
</template>
<script>
import axios from "axios";
import ThumbnailComponent from "../childs/ThumbnailComponent.vue";
import { QuillEditor } from "@vueup/vue-quill";
import "@vueup/vue-quill/dist/vue-quill.snow.css";
export default {
  components: {
    ThumbnailComponent,
    QuillEditor,
  },
  data() {
    return {
      isValid: false,
      thumbnail: "",
      details: "",
    };
  },
  methods: {
    onImageUpload(image) {
      this.thumbnail = image;
    },

    onFormSubmitHandlar() {
      //   axios
      //     .post("store", {
      //       thumbnail: this.thumbnail,
      //     })
      //     .then((res) => {
      //       console.log(res);
      //     })
      //     .catch((err) => {
      //       console.log(err);
      //     });
    },
  },
};
</script>
<style>
.ql-container {
  height: 300px !important;
}
</style>
<template lang="">
    <div>
        <pagination-component 
          :totalPages="10" 
          :perPage="10" 
          :currentPage="currentpage"
          @pagechanged="onPageChange"
        ></pagination-component>
    </div>
</template>
<script>
import PaginationComponent from "../../services/PaginationComponent.vue";
export default {
  components: {
    PaginationComponent,
  },
  data() {
    return {
      currentpage: 1,
    };
  },
  methods: {
    onPageChange(page) {
      console.log(page);
      this.currentPage = page;
    },
  },
};
</script>
<style lang="">
</style>
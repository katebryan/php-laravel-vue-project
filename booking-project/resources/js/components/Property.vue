<template>
  <div>
    <div class="row">
      <div class="col-md-8 pb-4">
        <div class="card">
          <div class="card-body">
            <div v-if="!isLoading">
              <h2>{{ property.title }}</h2>
              <hr />
              <article>{{ property.content }}</article>
            </div>
            <div v-else>Loading...</div>
          </div>
        </div>
        <review-list></review-list>
      </div>
      <div class="col-md-4 pb-4"><availability></availability></div>
    </div>
  </div>
</template>

<script>
import Availability from "./Availability";
import ReviewList from "./ReviewList.vue";

export default {
  components: {
    Availability,
    ReviewList,
  },
  data() {
    return {
      property: null,
      isLoading: false,
    };
  },
  created() {
    this.isLoading = true;
    axios.get(`/api/bookables/${this.$route.params.id}`).then((response) => {
      this.property = response.data.data;
      this.isLoading = false;
    });
  },
};
</script> 
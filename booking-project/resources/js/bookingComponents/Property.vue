<template>
  <div>
    <div class="row">
      <div class="col-md-8">
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
      </div>
      <div class="col-md-4">availability & prices</div>
    </div>
  </div>
</template>

<script>
export default {
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
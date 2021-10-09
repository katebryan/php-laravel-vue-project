<template>
  <div><h2>hi</h2></div>
</template>

<script>
export default {
  data() {
    return {
      property: null,
    };
  },
  created() {
    axios
      .get(`/api/bookables/${this.$route.params.id}`)
      .then((response) => (this.property = response.data));
  },
};
</script> 
<template>
  <div>
    <div v-if="isLoading">Properties are loading...</div>
    <div v-else>
      <bookable-list-item
        v-for="(property, index) in properties"
        :key="index"
        :item-title="property.title"
        :item-content="property.content"
        :price="property.price"
      ></bookable-list-item>
    </div>
  </div>
</template>

<script>
import BookableListItem from "./BookableListItem.vue";
export default {
  components: {
    BookableListItem,
  },
  data() {
    return {
      properties: null,
      isLoading: false,
    };
  },
  created() {
    this.isLoading = true;
    // mocking api call
    setTimeout(() => {
      this.properties = [
        {
          title: "Cheap Villa",
          content: "A very cheap stay",
          price: 200,
        },
        {
          title: "Caravan",
          content: "A very cheap stay",
          price: 300,
        },
      ];
      this.isLoading = false;
    }, 2000);
  },
};
</script>
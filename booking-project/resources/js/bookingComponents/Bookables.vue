<template>
  <div>
    <div v-if="isLoading">Properties are loading...</div>
    <div v-else>
      <div class="row mb-4" v-for="row in rows" :key="'row' + row">
        <div
          class="col"
          v-for="(property, column) in propertiesInRow(row)"
          :key="'row' + row + column"
        >
          <bookable-list-item
            :item-title="property.title"
            :item-content="property.content"
            :price="property.price"
          ></bookable-list-item>
        </div>
        <div
          class="col"
          v-for="p in placeholdersInRow(row)"
          :key="'placeholder' + row + p"
        ></div>
      </div>
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
      columns: 3,
    };
  },
  computed: {
    rows() {
      return this.properties === null
        ? 0
        : Math.ceil(this.properties.length / this.columns);
    },
  },
  methods: {
    propertiesInRow(row) {
      return this.properties.slice(
        (row - 1) * this.columns,
        row * this.columns
      );
    },
    placeholdersInRow(row) {
      return this.columns - this.propertiesInRow(row).length;
    },
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
        {
          title: "Cruise Ship",
          content: "A very cheap stay",
          price: 300,
        },
        {
          title: "Rowing Boat",
          content: "A very cheap stay",
          price: 300,
        },
        {
          title: "Apartment",
          content: "A very cheap stay",
          price: 300,
        },
      ];
      this.isLoading = false;
    }, 2000);
  },
};
</script>
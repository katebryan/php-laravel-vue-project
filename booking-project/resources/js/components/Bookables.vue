<template>
  <div>
    <div v-if="isLoading">Properties are loading...</div>
    <div v-else>
      <div class="row mb-4" v-for="row in rows" :key="'row' + row">
        <div
          class="col d-flex align-items-stretch"
          v-for="property in propertiesInRow(row)"
          :key="property.id"
        >
          <bookable-list-item v-bind="property"></bookable-list-item>
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
    const bookablePropertyApiCall = axios
      .get("/api/bookables")
      .then((response) => {
        this.properties = response.data.data;
        this.isLoading = false;
      });
  },
};
</script>
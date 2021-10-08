<template>
    <div>
        <bookable-list-item v-if="property1" :item-title="property1.title" :item-content="property1.content" :price="property1.price"></bookable-list-item>
        <bookable-list-item v-if="property2" :item-title="property2.title" :item-content="property2.content" :price="property2.price"></bookable-list-item>
    </div>
</template>

<script>
import BookableListItem from './BookableListItem.vue'
export default {
    components: {
        BookableListItem
    },
    data() {
        return {
            property1: null,
            property2: null
        }
    },
    created() {
        // mocking api call
        setTimeout(() => {
            this.property1 = {
                title: "Cheap Villa",
                content: "A very cheap stay",
                price: 200
            },
            this.property2 = {
                title: "Caravan",
                content: "A very cheap stay",
                price: 300
            }
        }, 2000)
    },
}
</script>
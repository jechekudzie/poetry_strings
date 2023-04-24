<template>
    <div>
        <button @click="showModal = true" class="btn btn-primary buy-now-btn">Buy Now</button>
        <SelectBookModal :show="showModal" @update:show="showModal = $event" @bookSelected="onBookSelected"/>
    </div>
</template>

<script>
    import { defineComponent } from 'vue';
    import SelectBookModal from './SelectBookModal.vue';

    export default defineComponent({
        components: {
            SelectBookModal,
        },
        data() {
            return {
                showModal: false,
            };
        },
    });
</script>

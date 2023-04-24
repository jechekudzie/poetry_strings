import { createApp } from 'vue';
import BookStore from './components/BookStore.vue';
import SelectBookModal from './components/SelectBookModal.vue';

const app = createApp({});
app.component('book-store', BookStore);
app.component('SelectBookModal', SelectBookModal);
app.mount('#app');

<template>
    <div class="modal" tabindex="-1" role="dialog" ref="selectBookModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Select a Book</h5>
                    <button type="button" class="btn-close" @click="closeModal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Description</th>
                            <th>Softcopy Price</th>
                            <th>Hardcopy Price</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="book in books" :key="book.id">
                            <td>{{ book.title }}</td>
                            <td>{{ book.author }}</td>
                            <td>{{ book.description }}</td>
                            <td>{{ book.soft_copy_price }}</td>
                            <td>{{ book.hard_copy_price }}</td>
                            <td>
                                <button class="btn btn-primary" @click="selectBook(book)">
                                    Select
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" @click="closeModal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { defineComponent } from 'vue';
    import axios from 'axios';
    export default defineComponent({
        props: {
            show: {
                type: Boolean,
                default: false
            }
        },
        data() {
            return {
                books: [],
                selectedBook: {},
                selectedBookType: null,
                quantity: 1,
                currency: 'USD',
                total: 0
            };
        },
        methods: {
            getBooks() {
                axios.get('/books')
                    .then(response => {
                        this.books = response.data;
                    })
                    .catch(error => {
                        console.log(error);
                    });
            },
            selectBook(book) {
                this.selectedBook = book;
                this.selectedBookType = book.book_types[0].id;
                this.$options.methods.calculateTotal.call(this);
                $(this.$refs.selectBookModal).modal('show');
            }
            ,

            calculateTotal() {
                const bookType = this.selectedBook.book_types.find(type => type.id === this.selectedBookType);
                const price = bookType.price;
                this.total = price * this.quantity;
            },
            addToCart() {
                // Add selected book, book type, quantity, currency, and total to cart
                $(this.$refs.selectBookModal).modal('hide');
            },
            closeModal() {
                this.$emit('update:show', false);
            }
        },
        watch: {
            show(val) {
                if (val) {
                    this.getBooks();
                    $(this.$refs.selectBookModal).modal('show');
                } else {
                    $(this.$refs.selectBookModal).modal('hide');
                }
            }
        },
        mounted() {
            $(this.$refs.selectBookModal).on('hidden.bs.modal', this.closeModal);
        },
        beforeUnmount() {
            $(this.$refs.selectBookModal).off('hidden.bs.modal', this.closeModal);
        }
    });
</script>

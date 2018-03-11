<template>
	<div class="panel panel-default">
        <div class="panel-heading">
            ALL CATEGORIES
            <div class="panel-action">
                <button type="button" class="btn btn-primary" v-on:click="addCategory">ADD CATEGORY</button>
            </div>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>NAME</th>
                        <th class="text-center" width="1%">MANAGE</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-if="!isStarting && categories.length == 0 && !showAddLine">
                        <td colspan="2" class="text-center">No categories found.</td>
                    </tr>
                    <tr v-if="showAddLine">
                        <td v-bind:class="{ 'has-error': errorCreate }">
                            <input ref="categoryName"
                                   type="text"
                                   class="form-control"
                                   v-on:keyup.enter="saveCategory"
                                   v-model="categoryName">
                            <small class="help-block" v-if="errorCreate">{{ errorCreate }}</small>
                        </td>
                        <td></td>
                    </tr>
                    <tr v-for="category in categories">
                    	<td v-bind:class="{ 'has-error': checkError(category) }" v-on:click="editCategory(category)">
                            <span v-if="!editedCategory || editedCategory.id !== category.id">{{ category.name }}</span>
                            <input type="text"
                                   class="form-control"
                                   v-if="editedCategory && editedCategory.id === category.id"
                                   v-model="editedCategory.name"
                                   title="Category name"
                                   v-on:keyup.enter="updateCategory" ref="categories" v-focus>
                            <small class="help-block" v-if="checkError(category)">
                                {{ errors[editedCategory.id] }}
                            </small>
                        </td>
                    	<td>
                            <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5" v-on:click="deleteCategory(category)">
                                <i class="ti-trash"></i>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
    	data() {
    		return {
    			categories: [],
                showAddLine: false,
                categoryName: '',
                editedCategory: null,
                errorCreate: '',
                errors: {},
                isStarting: true
    		};
    	},
        methods: {
        	getCategories: function () {
        		this.$http.get('/api/categories/list')
        			.then(function (response) {
        			    this.isStarting = false;
                        this.categories = response.body;
                    });
        	},
            addCategory: function () {
        	    this.errorCreate = '';

        	    if (!this.showAddLine) {
                    this.showAddLine = true;

                    this.$nextTick(() => this.$refs.categoryName.focus());
                } else {
                    this.showAddLine = false;
                }
            },
            saveCategory: function () {
        	    this.errorCreate = '';

        	    let data = {
        	        name: this.categoryName
                };

                this.$http.post('/api/categories', data).then(function (response) {
                    this.categories = response.body.categories;
                    this.showAddLine = false;
                    this.categoryName = '';
                }).catch(function (response) {
                    let errors = response.body.errors;

                    this.errorCreate = errors.name[0];
                });
            },
            editCategory: function (category) {
        	    this.showAddLine = false;
        	    this.errors = {};

        	    if (this.editedCategory && this.editedCategory.id === category.id) {
        	        this.editedCategory = null;
                } else {
                    this.editedCategory = Object.assign({}, category);
                }
            },
            updateCategory: function () {
                this.errors = {};

        	    let data = {
        	        name: this.editedCategory.name
                };

                this.$http.put('/api/categories/' + this.editedCategory.id, data).then(function (response) {
                    this.editedCategory = null;
                    this.categories = response.body.categories;
                }).catch(function (response) {
                    this.$set(this.errors, this.editedCategory.id, response.body.errors.name[0]);
                });
            },
            checkError: function (category) {
                return this.errors[category.id] !== undefined;
            },
            deleteCategory: function (category) {
                /*this.$swal('Hello Vue world!!!');*/

                this.$swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes',
                    showLoaderOnConfirm: true,
                }).then((result) => {
                    console.log(result);

                    if (result.value) {
                        this.$http.delete('/api/categories/' + category.id).then(function (response) {
                            this.categories = response.body.categories;
                        });
                    }
                });

                /*this.$http.delete('/api/categories/' + category.id).then(function (response) {
                    this.categories = response.body.categories;
                });*/
            }
        },
        mounted() {
            this.getCategories();
        },
        directives: {
            focus: {
                // directive definition
                inserted: function (el) {
                    el.focus()
                }
            }
        }
    }
</script>
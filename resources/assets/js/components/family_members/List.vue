<template>
    <div class="panel panel-default">
        <div class="panel-heading">
            ALL FAMILY MEMBERS
            <div class="panel-action">
                <button type="button" class="btn btn-primary" v-on:click="addFamilyMember">ADD FAMILY MEMBER</button>
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
                    <tr v-if="!isStarting && familyMembers.length == 0 && !showAddLine">
                        <td colspan="2" class="text-center">No family members found.</td>
                    </tr>
                    <tr v-if="showAddLine">
                        <td v-bind:class="{ 'has-error': errorCreate }">
                            <input ref="familyMemberName"
                                   type="text"
                                   class="form-control"
                                   v-on:keyup.enter="saveFamilyMember"
                                   v-model="familyMemberName">
                            <small class="help-block" v-if="errorCreate">{{ errorCreate }}</small>
                        </td>
                        <td></td>
                    </tr>
                    <tr v-for="familyMember in familyMembers">
                        <td v-bind:class="{ 'has-error': checkError(familyMember) }" v-on:click="editFamilyMember(familyMember)">
                            <span v-if="!editedFamilyMember || editedFamilyMember.id !== familyMember.id">{{ familyMember.name }}</span>
                            <input type="text"
                                   class="form-control"
                                   v-if="editedFamilyMember && editedFamilyMember.id === familyMember.id"
                                   v-model="editedFamilyMember.name"
                                   title="Family member name"
                                   v-on:keyup.enter="updateFamilyMember" ref="familyMembers" v-focus>
                            <small class="help-block" v-if="checkError(familyMember)">
                                {{ errors[editedFamilyMember.id] }}
                            </small>
                        </td>
                        <td>
                            <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5" v-on:click="deleteFamilyMember(familyMember)">
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
                familyMembers: [],
                showAddLine: false,
                familyMemberName: '',
                editedFamilyMember: null,
                errorCreate: '',
                errors: {},
                isStarting: true
            };
        },
        methods: {
            getFamilyMembers: function () {
                this.$http.get('/api/family-members/list')
                    .then(function (response) {
                        this.isStarting = false;
                        this.familyMembers = response.body;
                    });
            },
            addFamilyMember: function () {
                this.errorCreate = '';

                if (!this.showAddLine) {
                    this.showAddLine = true;

                    this.$nextTick(() => this.$refs.familyMemberName.focus());
                } else {
                    this.showAddLine = false;
                }
            },
            saveFamilyMember: function () {
                this.errorCreate = '';

                let data = {
                    name: this.familyMemberName
                };

                this.$http.post('/api/family-members', data).then(function (response) {
                    this.familyMembers = response.body.familyMembers;
                    this.showAddLine = false;
                    this.familyMemberName = '';
                }).catch(function (response) {
                    let errors = response.body.errors;

                    this.errorCreate = errors.name[0];
                });
            },
            editFamilyMember: function (familyMember) {
                this.showAddLine = false;
                this.errors = {};

                if (this.editedFamilyMember && this.editedFamilyMember.id === familyMember.id) {
                    this.editedFamilyMember = null;
                } else {
                    this.editedFamilyMember = Object.assign({}, familyMember);
                }
            },
            updateFamilyMember: function () {
                this.errors = {};

                let data = {
                    name: this.editedFamilyMember.name
                };

                this.$http.put('/api/family-members/' + this.editedFamilyMember.id, data).then(function (response) {
                    this.editedFamilyMember = null;
                    this.familyMembers = response.body.familyMembers;
                }).catch(function (response) {
                    this.$set(this.errors, this.editedFamilyMember.id, response.body.errors.name[0]);
                });
            },
            checkError: function (familyMember) {
                return this.errors[familyMember.id] !== undefined;
            },
            deleteFamilyMember: function (familyMember) {
                this.$swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes',
                    showLoaderOnConfirm: true,
                    preConfirm: null
                }).then((result) => {
                    if (result.value) {
                        this.$http.delete('/api/family-members/' + familyMember.id).then(function (response) {
                            this.familyMembers = response.body.familyMembers;
                        });
                    }
                });
            }
        },
        mounted() {
            this.getFamilyMembers();
        },
        directives: {
            focus: {
                inserted: function (el) {
                    el.focus()
                }
            }
        }
    }
</script>
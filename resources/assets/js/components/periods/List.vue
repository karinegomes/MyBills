<template>
    <div class="panel panel-default">
        <div class="panel-heading">
            ALL PERIODS
            <div class="panel-action">
                <button type="button" class="btn btn-primary" v-on:click="addPeriod">ADD PERIOD</button>
            </div>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>MONTH</th>
                        <th>YEAR</th>
                        <th class="text-center" width="1%">MANAGE</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-if="!isStarting && periods.length == 0 && !showAddLine">
                        <td colspan="3" class="text-center">No periods found.</td>
                    </tr>
                    <tr v-if="showAddLine">
                        <td v-bind:class="{ 'has-error': checkErrorCreate('month') }">
                            <select class="form-control" name="month" v-model="period.month">
                                <option></option>
                                <option v-for="month in months"
                                        v-bind:value="month.id"
                                        v-bind:selected="isCurrentMonth(month.id)">{{ month.name }}</option>
                            </select>
                            <small class="help-block" v-if="checkErrorCreate('month')">
                                {{ createErrors.month[0] }}
                            </small>
                        </td>
                        <td v-bind:class="{ 'has-error': checkErrorCreate('year') }">
                            <input class="form-control" name="year" v-model="period.year" v-on:keyup.enter="savePeriod">
                            <small class="help-block" v-if="checkErrorCreate('year')">
                                {{ createErrors.year[0] }}
                            </small>
                        </td>
                        <td><button type="button" class="btn btn-success" v-on:click="savePeriod">Save</button></td>
                    </tr>
                    <tr v-for="period in periods">
                        <td v-bind:class="{ 'has-error': checkError(period, 'month') }" v-on:click="editPeriod(period)">
                            <span v-if="!editedPeriod || editedPeriod.id !== period.id">
                                {{ getMonthName(period.month) }}
                            </span>
                            <select class="form-control" name="month" v-if="editedPeriod && editedPeriod.id === period.id" v-model="period.month">
                                <option></option>
                                <option v-for="month in months"
                                        v-bind:value="month.id"
                                        v-bind:selected="month.id === period.month">{{ month.name }}</option>
                            </select>
                            <!--<input type="text"
                                   class="form-control"
                                   v-if="editedCategory && editedCategory.id === category.id"
                                   v-model="editedCategory.name"
                                   title="Category name"
                                   v-on:keyup.enter="updateCategory" ref="categories" v-focus>-->
                            <small class="help-block" v-if="checkError(period, 'month')">
                                {{ errors.messages.month[0] }}
                            </small>
                        </td>
                        <td v-bind:class="{ 'has-error': checkError(period, 'year') }" v-on:click="editPeriod(period)">
                            <span v-if="!editedPeriod || editedPeriod.id !== period.id">
                                {{ period.year }}
                            </span>
                            <input class="form-control"
                                   name="year"
                                   v-if="editedPeriod && editedPeriod.id === period.id"
                                   v-on:keyup.enter="updatePeriod(period)"
                                   v-model="period.year">
                            <small class="help-block" v-if="checkError(period, 'year')">
                                {{ errors.messages.year[0] }}
                            </small>
                        </td>
                        <td>
                            <button type="button"
                                    class="btn btn-info btn-outline btn-circle btn-lg m-r-5"
                                    v-on:click="deletePeriod(period)"
                                    v-if="!editedPeriod || editedPeriod.id !== period.id">
                                <i class="ti-trash"></i>
                            </button>
                            <div v-if="isEditing(period)" class="nowrap">
                                <button type="button" class="btn btn-success" v-on:click="updatePeriod(period)">Save</button>
                                <button type="button" class="btn btn-warning" v-on:click="cancelEditing">Cancel</button>
                            </div>
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
                showModal: false,
                showAddLine: false,
                isStarting: true,
                periods: [],
                editedPeriod: null,
                errors: {
                    periodId: null,
                    messages: null
                },
                months: [
                    { 'id': 1, 'name': 'January' },
                    { 'id': 2, 'name': 'February' },
                    { 'id': 3, 'name': 'March' },
                    { 'id': 4, 'name': 'April' },
                    { 'id': 5, 'name': 'May' },
                    { 'id': 6, 'name': 'June' },
                    { 'id': 7, 'name': 'July' },
                    { 'id': 8, 'name': 'August' },
                    { 'id': 9, 'name': 'September' },
                    { 'id': 10, 'name': 'October' },
                    { 'id': 11, 'name': 'November' },
                    { 'id': 12, 'name': 'December' },
                ],
                period: {
                    month: this.getCurrentMonth(),
                    year: this.getCurrentYear()
                },
                createErrors: {}
            };
        },
        methods: {
            addPeriod: function () {
                this.showAddLine = !this.showAddLine;
                this.createErrors = {};
                this.editedPeriod = null;
            },
            getPeriods: function () {
                this.$http.get('/api/periods/list')
                    .then(function (response) {
                        this.isStarting = false;
                        this.periods = response.body;
                    });
            },
            checkError: function (period, field = '') {
                var hasError = this.errors.periodId === period.id;

                if (field === '') {
                    return hasError;
                }

                if (hasError && this.errors.messages[field] !== undefined) {
                    return true;
                }
            },
            checkErrorCreate: function (field) {
                return this.createErrors[field] !== undefined;
            },
            savePeriod: function () {
                this.$nextTick(function () {
                    console.log(this.period.month);
                    console.log(this.period.year);
                });

                this.$http.post('/api/periods', this.period).then(function (response) {
                    this.periods = response.body.periods;
                    this.showAddLine = false;
                    this.createErrors = {};
                }).catch(function (response) {
                    let errors = response.body.errors;

                    console.log(errors);

                    this.createErrors = errors;
                });
            },
            editPeriod: function (period) {
                this.showAddLine = false;
                this.editedPeriod = period;
            },
            updatePeriod: function (period) {
                console.log(period);

                this.$http.put('/api/periods/'+period.id, period).then(function (response) {
                    this.periods = response.body.periods;
                    this.editedPeriod = null;

                    this.errors = {
                        periodId: null,
                        messages: null
                    };
                }).catch(function (response) {
                    let errors = response.body.errors;

                    console.log(errors);

                    this.errors = {
                        periodId: period.id,
                        messages: errors
                    };

                    console.log(this.errors);

                    //this.createErrors = errors;
                });
            },
            deletePeriod: function () {

            },
            isCurrentMonth: function (month) {
                return month === this.period.month;
            },
            getCurrentMonth: function () {
                return parseInt(moment().format('M'));
            },
            getCurrentYear: function () {
                return parseInt(moment().format('YYYY'));
            },
            getMonthName: function (month) {
                let _month = this.months.find(function (item) {
                    return item.id === month;
                });

                return _month.name;
            },
            isEditing: function (period) {
                return this.editedPeriod && this.editedPeriod.id === period.id;
            },
            cancelEditing: function () {
                this.editedPeriod = null;
            }
        },
        mounted() {
            this.getPeriods();
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
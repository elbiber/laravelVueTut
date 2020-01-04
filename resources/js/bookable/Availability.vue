
<template>
  <div>
    <h6 class="text-uppercase text-secondary font-weight-bolder">
      Check Availability
      <transition name="fade">
        <span
          v-if="noAvailability"
          class="text-danger"
        >(NOT AVAILABLE)</span>
        <span
          v-if="hasAvailability"
          class="text-success"
        >(AVAILABLE)</span>
      </transition>
    </h6>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="from">From</label>
        <input
          v-model="from"
          type="text"
          name="from"
          class="form-control form-control-sm"
          placeholder="Start date"

          :class="[ {'is-invalid': errorFor('from') }]"
          @keyup.enter="check"
        ><!--
        <v-errors :errors="errorFor('from')" /> -->
        <div
          v-for="(error, index) in errorFor('from')"
          :key="'from' + index"
          class="invalid-feedback"
        >
          {{ error }}
        </div>
      </div>
      <div class="form-group col-md-6">
        <label for="to">To</label>
        <input
          v-model="to"
          type="text"
          name="to"
          class="form-control form-control-sm"
          placeholder="End date"
          :class="[ {'is-invalid': errorFor('to') }]"
          @keyup.enter="check"
        ><!--
        <v-errors :errors="errorFor('to')" /> -->
        <div
          v-for="(error, index) in errorFor('to')"
          :key="'to' + index"
          class="invalid-feedback"
        >
          {{ error }}
        </div>
      </div>
      <button
        class="btn btn-secondary btn-block"
        @click="check"
      >
        Check!
      </button>
    </div>
  </div>
</template>

<script>
export default {
    data() {
        return {
            from: null,
            to: null,
            loading: false,
            status: null,
            errors: null
        }
    },
    computed: {
        hasErrors() {
            return 422 === this.status && this.errors !== null
        },
        hasAvailability() {
            return 200 === this.status
        },
        noAvailability() {
            return 404 === this.status
        }
    },
    methods: {
        check() {
            this.loading = true
            axios.get(`/api/bookables/${this.$route.params.id}/availability?from=${this.from}&to=${this.to}`)
                .then(response => {
                    this.status = response.status
                })
                .catch(error => {
                    if (422 === error.response.status) {
                        this.errors = error.response.data.errors
                    }
                    this.status =error.response.status
                })
                .then(() => this.loading = false)
        },
        errorFor(field) {
            return this.hasErrors && this.errors[field] ? this.errors[field] : null
        }
    }
}
</script>

<style scoped>
label {
  font-size: 0.7rem;
  text-transform: uppercase;
  color: gray;
  font-weight: bolder;
}
.is-invalid {
  border-color: #b22222;
  background-image: none;
}
.invalid-feedback {
  color: #b22222;
}
</style>

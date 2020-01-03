
<template>
  <div>
    <h6 class="text-uppercase text-secondary font-weight-bolder">
      Check Availability
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
          @keyup.enter="check"
        ><!--
        <v-errors :errors="errorFor('from')" /> -->
      </div>
      <div class="form-group col-md-6">
        <label for="to">To</label>
        <input
          v-model="to"
          type="text"
          name="to"
          class="form-control form-control-sm"
          placeholder="End date"
          @keyup.enter="check"
        ><!--
        <v-errors :errors="errorFor('to')" /> -->
      </div>
    </div>
    <button
      class="btn btn-secondary btn-block"
      @click="check"
    >
      Check!
    </button>
  </div>
</template>

<script>
export default {
    data() {
        return {
            from: null,
            to: null,
            loading: false,
            status: null
        }
    },
    methods: {
        check() {
            alert('hello9')
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

<template>
  <div class="card w-100">
    <div class="card-body">
      <router-link :to="{ name: 'bookable', params: { id }}">
        <h5>{{ title }}</h5>
      </router-link>
      <p class="card-text">
        {{ description }}
      </p>
      <p class="card-text">
        {{ id }}
      </p>
    </div>
  </div>
</template>

<script>
export default {
    props: {
        id: {
            type:  Number,
            default: 0
        },
        title: {
            type:  String,
            default: ''
        },
        description: {
            type:  String,
            default: ''
        }
    },
    mounted() {
        console.log(this.itemTitle)
    }
}
</script>

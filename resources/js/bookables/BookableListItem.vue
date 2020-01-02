<template>
  <div class="card w-100">
    <div class="card-body">
      <h5>{{ itemTitle }}</h5>
      <p class="card-text">
        {{ itemDescription }}
      </p>
      <p class="card-text">
        {{ price }}€
      </p>
    </div>
  </div>
</template>

<script>
export default {
    props: {
        itemTitle: {
            type:  String,
            default: ''
        },
        itemDescription: {
            type:  String,
            default: ''
        },
        price: {
            type:  Number,
            default: 0
        }
    },
    mounted() {
        console.log(this.itemTitle)
    }
}
</script>

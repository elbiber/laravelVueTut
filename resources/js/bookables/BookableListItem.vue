<template>
  <div class="card">
    <div class="card-body">
      <h5>{{ itemTitle }}</h5>
      <p class="card-text">
        {{ itemContent }}
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
        itemContent: {
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

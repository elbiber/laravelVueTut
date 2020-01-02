<template>
  <div>
    <div v-if="loading">
      Data is loading ......
    </div>
    <div v-else>
      <div
        v-for="row in rows"
        :key="'row' + row"
        class="row mb-4"
      >
        <div
          v-for="(bookable, column) in bookablesInRow(row)"
          :key="'row' + row + column"
          class="col"
        >
          <bookable-list-item
            :key="index"
            :item-title="bookable.title"
            :item-content="bookable.content"
            :price="1000"
          />
        </div>
        <div
          v-for="p in placeholdersInRow(row)"
          :key="'placeholder' + row + p"
          class="col"
        />
      </div>
    </div>
  </div>
</template>

<script>

import BookableListItem from './BookableListItem'

export default {
    components: {
        BookableListItem
    },
    data() {
        return {
            bookables: null,
            loading: false,
            columns: 3
        }
    },
    computed: {
        rows() {
            return this.bookables === null
                ? 0
                : Math.ceil(this.bookables.length / this.columns)
        }
    },
    created() {
        this.loading = true
        setTimeout(() => {
            this.bookables=[
                {
                    title: 'Expensive Villa 1',
                    content: 'Very Expensive Villa 1'
                },
                {
                    title: 'Expensive Villa 2',
                    content: 'Very Expensive Villa 2'
                },
                {
                    title: 'Expensive Villa 3',
                    content: 'Very Expensive Villa 3'
                },                {
                    title: 'Expensive Villa 1',
                    content: 'Very Expensive Villa 1'
                },
                {
                    title: 'Expensive Villa 2',
                    content: 'Very Expensive Villa 2'
                },
                {
                    title: 'Expensive Villa 3',
                    content: 'Very Expensive Villa 3'
                },                {
                    title: 'Expensive Villa 1',
                    content: 'Very Expensive Villa 1'
                }
            ]
            this.loading = false
        }, 500)
    },
    methods: {
        bookablesInRow(row) {
            return this.bookables.slice((row - 1) * this.columns, row * this.columns)
        },
        placeholdersInRow(row) {
            return this.columns - this.bookablesInRow(row).length
        }
    }
}
</script>

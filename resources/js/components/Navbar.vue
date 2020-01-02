<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <router-link class="navbar-brand mr-auto" :to="{name: 'dashboard'}">CSGO-ECOSIM</router-link>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item" v-for="link in links" v-bind:key="link.text">
                    <router-link  class="nav-link" :to="link.route">{{ link.text }}</router-link>
                </li>
            </ul>
        </div>
        <router-link class="btn nav-buttom" :to="{name: 'signin'}">Sign In</router-link>
        <router-link class="btn nav-buttom" :to="{name: 'signup'}">Sign Up</router-link>
    </nav>
</template>

<script>
export default {
    data: () => ({
        links: [
            { text: 'Simulator', route: '/' },
            { text: 'Items', route: '/Items' },
            { text: 'Profile', route: '/profile' }
        ]
    }),
    methods: {
        signOut() {
            // localStorage.removeItem('token')
        },
        logout() {
            /* this.$store.dispatch('logout').then(() => {
                this.$router.push('/login')
            })*/
        }
    },
    computed: {
        isLoggedIn() {
            return false
        }
    }
}
</script>

<style lang="scss" scoped>

</style>

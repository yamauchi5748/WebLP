<template>
    <div id="app" class="container">
        <h1>My Counter</h1>
        <hr>
        <p class="count">{{ count }}</p>
        <Home class="blue" @handleCount="doCount('up')">Up</Home>
        <Home class="green" @handleCount="doCount('down')">Down</Home>
    </div>
</template>

<script>
import Home from "./components/Home"

export default {
    components: {
        Home
    },
    data () {
        return {
            count: 0,
        }
    },
    methods: {
        doCount(countType) {
            this.count += (countType === "up" ? 1 : -1)
        },
    },
}
</script>

<template>
    <inertia-link :href="href" :class="classes">
        <slot></slot>
    </inertia-link>
</template>

<script>
    export default {
        props: ['href', 'active'],

        computed: {
            classes() {
                return this.active
                            ? 'inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-white focus:outline-none focus:border-indigo-700 transition w-full'
                            : 'inline-flex py-4 w-full text-white hover:bg-blue-400 text-md font-medium leading-5 text-gray-500 hover:text-black focus:outline-none focus:black focus:bg-blue-100 transition'
            }
        }
    }
</script>

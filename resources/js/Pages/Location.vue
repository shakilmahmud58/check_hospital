<template>
    <app-layout>
    <div class="bg-white">
        {{ip}}
    </div>
    </app-layout>
</template>

<script>

 import AppLayout from '@/Layouts/AppLayout'
export default {
    props: ['ip'],

    components: {
        AppLayout
    },
}
</script>

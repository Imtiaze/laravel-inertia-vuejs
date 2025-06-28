<script setup>
import Layout from './Layouts/Layout.vue'

defineOptions({
  layout: Layout,
})
defineProps({
  user: Object,
})

</script>

<template>
      <Head title="Home" />
      <h1>Home Vue, {{ user.name }}</h1>

      <Link class="mt-[1200px] inline-block ml-8 mb-8 px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded" :href="route('home')" preserve-scroll>Refresh</Link>

</template>
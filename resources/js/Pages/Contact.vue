<script setup>

import Layout from './Layouts/Layout.vue'

defineOptions({
  layout: Layout,
})

defineProps({
    title: String
})

</script>


<template>
      <Head title="Contact" />

    
    <h1> From {{ title }} </h1>

</template>
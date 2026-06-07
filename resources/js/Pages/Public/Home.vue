<template>
  <PublicLayout>
    <section class="min-h-[90vh] flex flex-col items-center justify-center text-center px-6 bg-gradient-to-br from-gray-900 to-indigo-950 text-white">
      <h1 class="text-5xl font-extrabold mb-4">Benvinguts</h1>
      <p class="text-xl text-gray-300 max-w-xl mb-8">Pàgina principal. El contingut s'afegirà properament.</p>
      <Link href="/qui-som" class="px-8 py-3 bg-indigo-600 rounded-full font-semibold hover:bg-indigo-700 transition-colors">Qui som</Link>
    </section>
  </PublicLayout>
</template>

<script setup>
import PublicLayout from '@/Layouts/PublicLayout.vue';
import { Link } from '@inertiajs/vue3';
</script>

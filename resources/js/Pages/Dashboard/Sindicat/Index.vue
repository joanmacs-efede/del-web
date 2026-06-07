<template>
  <DashboardLayout>
    <template #sidebar>
      <Link href="/dashboard/sindicat/subpagines" class="block px-3 py-2 rounded hover:bg-indigo-50 hover:text-indigo-600 transition-colors">Subpàgines</Link>
      <Link href="/dashboard/sindicat/arxius" class="block px-3 py-2 rounded hover:bg-indigo-50 hover:text-indigo-600 transition-colors">Arxius</Link>
    </template>
    <h1 class="text-2xl font-bold mb-4">Taulell de sindicat</h1>
    <p class="text-gray-500">Contingut pendent.</p>
  </DashboardLayout>
</template>

<script setup>
import DashboardLayout from '@/Layouts/DashboardLayout.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
  <DashboardLayout>
    <template #sidebar>
      <Link href="/dashboard/documents" class="block px-3 py-2 rounded hover:bg-indigo-50 hover:text-indigo-600 transition-colors">Documents</Link>
      <Link href="/dashboard/fotos" class="block px-3 py-2 rounded hover:bg-indigo-50 hover:text-indigo-600 transition-colors">Fotos</Link>
    </template>
    <h1 class="text-2xl font-bold mb-4">Taulell d'usuari</h1>
    <p class="text-gray-500">Contingut pendent.</p>
  </DashboardLayout>
</template>

<script setup>
import DashboardLayout from '@/Layouts/DashboardLayout.vue';
import { Link } from '@inertiajs/vue3';
</script>

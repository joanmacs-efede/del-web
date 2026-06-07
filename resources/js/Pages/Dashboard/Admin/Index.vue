<template>
  <DashboardLayout>
    <template #sidebar>
      <Link href="/admin/usuaris" class="block px-3 py-2 rounded hover:bg-indigo-50 hover:text-indigo-600 transition-colors">Usuaris</Link>
      <Link href="/admin/noticies" class="block px-3 py-2 rounded hover:bg-indigo-50 hover:text-indigo-600 transition-colors">Notícies</Link>
      <Link href="/admin/mobilitzacions" class="block px-3 py-2 rounded hover:bg-indigo-50 hover:text-indigo-600 transition-colors">Mobilitzacions</Link>
      <Link href="/admin/pagines" class="block px-3 py-2 rounded hover:bg-indigo-50 hover:text-indigo-600 transition-colors">Pàgines</Link>
    </template>
    <h1 class="text-2xl font-bold mb-4">Taulell d'administració</h1>
    <p class="text-gray-500">Contingut pendent.</p>
  </DashboardLayout>
</template>

<script setup>
import DashboardLayout from '@/Layouts/DashboardLayout.vue';
import { Link } from '@inertiajs/vue3';
</script>

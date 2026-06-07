<template>
  <div class="min-h-screen flex bg-gray-100">
    <aside class="w-64 bg-white shadow-md flex flex-col">
      <div class="p-6 font-bold text-indigo-600 text-lg border-b">del-web</div>
      <nav class="flex-1 p-4 space-y-1 text-sm">
        <Link href="/dashboard" class="block px-3 py-2 rounded hover:bg-indigo-50 hover:text-indigo-600 transition-colors">Inici</Link>
        <slot name="sidebar" />
      </nav>
      <div class="p-4 border-t text-sm">
        <Link href="/logout" method="post" as="button" class="text-gray-500 hover:text-red-500 transition-colors">Tancar sessió</Link>
      </div>
    </aside>
    <main class="flex-1 p-8">
      <slot />
    </main>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>

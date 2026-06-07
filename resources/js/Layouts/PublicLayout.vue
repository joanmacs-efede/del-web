<template>
  <div class="min-h-screen flex flex-col">
    <header class="sticky top-0 z-50 bg-white shadow-sm">
      <nav class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
        <Link href="/" class="text-xl font-bold text-indigo-600">del-web</Link>
        <ul class="flex gap-6 text-sm font-medium">
          <li><Link href="/qui-som" class="hover:text-indigo-600 transition-colors">Qui som</Link></li>
          <li><Link href="/noticies" class="hover:text-indigo-600 transition-colors">Notícies</Link></li>
          <li><Link href="/mobilitzacions" class="hover:text-indigo-600 transition-colors">Mobilitzacions</Link></li>
          <li><Link href="/contacte" class="hover:text-indigo-600 transition-colors">Contacte</Link></li>
        </ul>
        <div class="flex gap-3">
          <Link href="/login" class="text-sm font-medium hover:text-indigo-600 transition-colors">Accedir</Link>
        </div>
      </nav>
    </header>

    <main class="flex-1">
      <slot />
    </main>

    <footer class="bg-gray-900 text-gray-400 text-center py-6 text-sm">
      <p>&copy; {{ new Date().getFullYear() }} del-web</p>
    </footer>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>

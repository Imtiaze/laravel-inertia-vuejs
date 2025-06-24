<script setup>


</script>

<template>
    <Head>
        <title>My Inertia app</title>
        <meta head-key="description" name="description" content="Layout Content">
    </Head>

    <div>
        <header class="bg-gray-600 text-white shadow">
            <nav class="p-4">
                <div class="flex space-x-6 text-lg font-medium">
                    <Link :href="route('home')" class="hover:text-blue-200 transition">Home</Link>
                    <Link href="/about" class="hover:text-blue-200 transition">About</Link>
                    <Link href="/contact" class="hover:text-blue-200 transition">Contact</Link>
                </div>
            </nav>
        </header>

        <main>
            <slot />
        </main>
    </div>
    
</template>
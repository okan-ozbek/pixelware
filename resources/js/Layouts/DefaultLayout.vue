<template>
    <Header
        :company="company"
        :slogan="slogan"
    />
    <main>
        <slot />
    </main>
    <hr class="w-3/4 mx-auto bg-gray-400">
    <Footer
        :company="company"
    />
</template>
<script setup lang="ts">
    import {defineProps} from "vue";
    import Header from "../Components/Customer/Header.vue";
    import Footer from "../Components/Customer/Footer.vue";

    interface Props {
        company: string,
        slogan: string,
    }

    const props = defineProps<Props>();
</script>

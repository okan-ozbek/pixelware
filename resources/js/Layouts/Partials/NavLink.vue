<template>
    <li
        :class="{'font-bold text-white': (slug === pageSlug)}"
        class="px-4 text-slate-100 hover:cursor-pointer hover:text-white hover:underline"
    >
        <Link :href="route(routeName)" :method="method"> <slot /> </Link>
    </li>
</template>
<script setup lang="ts">
import {Link, usePage} from "@inertiajs/vue3";
import {defineProps, computed} from "vue";

interface Props {
    routeName: string,
    slug: string
    method?: string,
}

const props = withDefaults(defineProps<Props>(), {
    method: 'get',
})

const page = usePage();
const pageSlug = computed(() => page.url.split('/')[2]);

</script>

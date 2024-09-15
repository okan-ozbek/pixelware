<template>
    <section :id="id">
        <img :alt="logoAlt" :src="logoSrc"/>
        <div>
            <div class="rectangle"></div>
        </div>
        <div class="resume">
            <p class="intro" v-show="hasIntro">
                <slot name="intro" />
            </p>
            <div class="expertise">
                <p v-show="hasExpertiseParagraph">
                    <slot name="expertise-paragraph" />
                </p>
                <ul v-show="hasList">
                    <slot name="list" />
                </ul>
            </div>
        </div>
    </section>
</template>
<script setup>
import {computed} from "vue";

const props = defineProps({
    id: String,
    logoSrc: String,
    hasIntro: {
        type: Boolean,
        default: true,
    },
    hasExpertiseParagraph: {
        type: Boolean,
        default: true,
    },
    hasList: {
        type: Boolean,
        default: true,
    },
})

const logoAlt = computed(() => {
    return props.id[0].toUpperCase() + props.id.slice(1) + " Logo";
})
</script>
<style>

</style>

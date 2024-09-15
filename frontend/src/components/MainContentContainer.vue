<template>
    <main>
        <slot />
    </main>
</template>
<style>
/*
     * Main section styling
     */
main {
    width: 70%;
    margin: 22em auto 0 auto;
    line-height: 200%;
    font-size: 20px;
}

main section {
    display: flex;
    width: 100%;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-bottom: 16rem;
    text-align: justify;
}

main section .resume
{
    width: 65%;
    margin-top: 4rem;
}

main section .resume .intro
{
    font-weight: 600;

}

main section .resume .expertise
{
    margin-top: 4rem;
}

main section .resume .expertise ul
{
    margin-top: 2rem;
    margin-left: 1.5rem;
}
</style>
<script setup>
import MainContent from "@/components/MainContent.vue";
</script>
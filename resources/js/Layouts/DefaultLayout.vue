<script setup>
import { Head } from "@inertiajs/vue3";
defineProps(["title"]);
</script>

<template>
    <div class="layout">
        <div class="black-bar">
            <svg
                class="w-10"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <rect width="24" height="24" fill="white" />
                <path
                    d="M6 12H18"
                    stroke="#000000"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
                <path
                    d="M6 15.5H18"
                    stroke="#000000"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
                <path
                    d="M6 8.5H18"
                    stroke="#000000"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
            </svg>
        </div>
        <Head :title="title"></Head>

        <main>
            <slot></slot>
        </main>
    </div>
</template>

<style>
.layout {
    background-color: rgb(224, 224, 224);
    min-height: 100vh;
}

.black-bar {
    background-color: black;
    height: 50px;
    width: 100%;
    display: flex;
    align-items: center;
    padding-left: 10px;
}

.menu-icon {
    color: white;
    font-size: 24px;
}
</style>

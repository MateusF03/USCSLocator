<script setup>
import DefaultLayout from "@/Layouts/DefaultLayout.vue";
import { Button } from "@/Components/ui/button";
import { Link } from "@inertiajs/vue3";

defineProps(["professor"]);
/*
'name',
        'email',
        'discipline',
        'time_range',
        'room'
*/
</script>

<template>
    <DefaultLayout :title="professor.name">
        <!-- Info Card -->
        <div class="bg-white shadow-sm rounded-md p-6">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-semibold">{{ professor.name }}</h1>
                <div class="flex space-x-2">
                    <Link :href="route('professors.edit', professor.id)">
                        <Button variant="secondary">Editar</Button>
                    </Link>
                    <Link
                        :href="route('professors.destroy', professor.id)"
                        method="delete"
                        as="div"
                    >
                        <Button variant="destructive">Deletar</Button>
                    </Link>
                </div>
            </div>
            <div class="flex space-x-4 mt-4">
                <img
                    :src="professor.profile_photo_url"
                    alt="profile photo"
                    class="w-32 h-32 rounded-full"
                />
                <div>
                    <p><strong>Email:</strong> {{ professor.email }}</p>
                    <p><strong>Matéria:</strong> {{ professor.discipline }}</p>
                    <p><strong>Horário:</strong> {{ professor.time_range }}</p>
                    <p><strong>Sala:</strong> {{ professor.room }}</p>
                </div>
            </div>
        </div>
        <!-- placeholder map -->
        <div class="bg-white shadow-sm rounded-md p-6 mt-4">
            <h2 class="text-xl font-semibold">Location</h2>
            <div class="h-96 bg-gray-200 rounded-md">
                <p class="text-center text-gray-500 pt-20">Map placeholder</p>
            </div>
        </div>
    </DefaultLayout>
</template>

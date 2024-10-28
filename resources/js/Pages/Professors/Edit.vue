<script setup>
import DefaultLayout from "@/Layouts/DefaultLayout.vue";
import { Input } from "@/Components/ui/input";
import { Button } from "@/Components/ui/button";
import InputError from "@/Components/InputError.vue";
import { vMaska } from "maska/vue";

import { useForm, Link } from "@inertiajs/vue3";

const props = defineProps(["professor"]);

const form = useForm({
    name: props.professor.name,
    email: props.professor.email,
    discipline: props.professor.discipline,
    room: props.professor.room,
    time_range: props.professor.time_range,
});
</script>

<template>
    <DefaultLayout title="Edit">
        <div class="flex flex-col items-center justify-center h-screen">
            <h1 class="text-2xl font-semibold mb-4">Editar Professor</h1>
            <form
                @submit.prevent="
                    form.put(route('professors.update', professor.id), {
                        onSuccess: () => form.reset(),
                    })
                "
            >
                <div class="space-y-2">
                    <div class="flex space-x-2">
                        <div>
                            <Input placeholder="Nome" v-model="form.name" />
                            <InputError :message="form.errors.name" />
                        </div>
                        <div>
                            <Input placeholder="Email" v-model="form.email" />
                            <InputError :message="form.errors.email" />
                        </div>
                    </div>
                    <div class="flex space-x-2">
                        <div>
                            <Input
                                placeholder="Matéria"
                                v-model="form.discipline"
                            />
                            <InputError :message="form.errors.discipline" />
                        </div>
                        <div>
                            <Input placeholder="Sala" v-model="form.room" />
                            <InputError :message="form.errors.room" />
                        </div>
                    </div>
                    <div>
                        <Input
                            placeholder="Horário"
                            v-model="form.time_range"
                            v-maska="'##:##-##:##'"
                        />
                        <InputError :message="form.errors.time_range" />
                    </div>
                </div>
                <div class="flex justify-center mt-4 space-x-2">
                    <Button type="submit">Cadastrar</Button>
                    <Link :href="route('professors.index')">
                        <Button type="button" @click="form.reset()">
                            Cancelar
                        </Button>
                    </Link>
                </div>
            </form>
        </div>
    </DefaultLayout>
</template>

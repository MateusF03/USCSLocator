<script setup>
import DefaultLayout from "@/Layouts/DefaultLayout.vue";
import {
    Table,
    TableBody,
    TableCaption,
    TableCell,
    TableHead,
    TableHeader,
    TableRow,
} from "@/Components/ui/table";
import { Link } from "@inertiajs/vue3";
import { Button } from "@/Components/ui/button";
defineProps(["professors"]);
</script>

<template>
    <DefaultLayout title="Index">
        <!-- create button -->
        <div class="flex justify-end p-2">
            <Link :href="route('professors.create')">
                <Button>Create</Button>
            </Link>
        </div>
        <div class="p-0 sm:p-6 lg:p-8">
            <Table class="bg-white shadow-sm rounded-md">
                <TableCaption>Professors</TableCaption>
                <TableHeader>
                    <TableRow>
                        <TableHead>Photo</TableHead>
                        <TableHead>Name</TableHead>
                        <TableHead>Email</TableHead>
                        <TableHead>Discipline</TableHead>
                        <TableHead>Room</TableHead>
                        <TableHead>Time Range</TableHead>
                    </TableRow>
                </TableHeader>
                <TableBody>
                    <TableRow
                        v-for="professor in professors"
                        :key="professor.id"
                        @click="console.log(professor)"
                        class="cursor-pointer"
                    >
                        <TableCell>
                            <img
                                :src="professor.profile_photo_url"
                                alt="profile photo"
                            />
                        </TableCell>
                        <TableCell>{{ professor.name }}</TableCell>
                        <TableCell>{{ professor.email }}</TableCell>
                        <TableCell>{{ professor.discipline }}</TableCell>
                        <TableCell>{{ professor.room }}</TableCell>
                        <TableCell>{{ professor.time_range }}</TableCell>
                    </TableRow>
                </TableBody>
            </Table>
        </div>
    </DefaultLayout>
</template>

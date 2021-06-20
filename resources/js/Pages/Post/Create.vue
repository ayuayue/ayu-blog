<template>
    <layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                发布文章
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <post-create-form />
                <jet-section-border />
            </div>
        </div>
    </layout>
</template>

<script>
import Layout from '@/Layouts/Layout'
import JetSectionBorder from '@/Jetstream/SectionBorder'
import PostCreateForm from "@/Pages/Post/PostCreateForm";

export default {
    components: {
        Layout,
        JetSectionBorder,
        PostCreateForm
    },
}
</script>

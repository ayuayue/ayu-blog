<template>
    <layout>
        <template #header>
            <h2 class="font-semibold text-ml text-gray-400 leading-tight text-right">
                {{ hot }}
            </h2>
        </template>
        <template v-for="(item,k) in posts">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        {{ item.title }}
                    </div>
                </div>
            </div>
        </template>

    </layout>
</template>

<script>
import Layout from '@/Layouts/Layout'
import Posts from '@/Pages/Post/Posts'

export default {
    components: {
        Layout,
        Posts,
    },
    props:{
        hot:String,
        posts:Array
    }
}
</script>

<template>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <inertia-link v-if="!$page.props.user" href="/dashboard" class="text-sm text-gray-700 underline">
                个人主页
            </inertia-link>

            <template v-else>
                <inertia-link :href="route('login')" class="text-sm text-gray-700 underline">
                    登录
                </inertia-link>

                <inertia-link v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-gray-700 underline">
                    注册
                </inertia-link>
            </template>
        </div>

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0 items-center space-x-4 h-12 ">
                <p class="text-4xl text-gray-600 ">{{ hot }}</p>
            </div>

        </div>
        <div class="absolute inset-x-100 bottom-0 mt-4 sm:items-center sm:justify-between ">
            <div class="text-center text-lg text-gray-500 sm:text-left ">
                <div class="flex items-center">
                    <a href="mailto:1401262639@qq.com" class="ml-1 hover:text-blue-700">
                        邮箱
                    </a>
                    <a href="https://github.com/ayuayue" class="ml-1 hover:text-blue-700">
                        Github
                    </a>
                    <a href="https://space.bilibili.com/109011082" class="ml-1 hover:text-blue-700">
                        b站
                    </a>
<!--                    <a href="https://blog.caoayu.xyz/index.xml" class="ml-1 underline">-->
<!--                        github-->
<!--                    </a>-->
                </div>
            </div>
            <div class="text-center text-lg text-gray-500 sm:text-left ">
                <div class="flex items-center">
                    <a href="#" class="ml-1 ">
                        © Caoayu
                    </a>
                    <a href="#" class="ml-1 ">
                        |   豫ICP备19012822号-2
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>



<script>
    export default {
        props: {
            canLogin: Boolean,
            canRegister: Boolean,
            hot:String
        }
    }
</script>

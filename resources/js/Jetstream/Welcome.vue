<template>
    <div>
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <div>
                <jet-application-logo class="block h-12 w-auto" />
            </div>

            <div class="mt-8 text-2xl">
                欢迎登录!
            </div>

            <div class="mt-6 text-gray-500">
                欢迎浏览博客
            </div>
        </div>
    </div>
    <div>
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <div>
                <!--                <jet-application-logo class="block h-12 w-auto" />-->
            </div>

            <div class="mt-8 text-2xl">
                欢迎登录!
            </div>

            <div class="mt-6 text-gray-500">
                欢迎浏览博客
            </div>
        </div>
    </div>
</template>

<script>
    import JetApplicationLogo from '@/Jetstream/ApplicationLogo'

    export default {
        components: {
            JetApplicationLogo,
        },
    }
</script>

<template>
    <div
        :class="'w-fit h-fit ' + mainClassifiy"
    >
        <div :class="contentClassify">
            <slot />
        </div>
    </div>
</template>

<script>

export default {
    props: {
        mainClassifiy: {
            type: String,
            default: '',
            default: '',
        },
        contentClassify: {
            type: String,
            default: 'bg-gray-100'
        }
    }    
}
</script>
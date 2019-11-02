<template>
<div>
    <img v-on:click="replaceImages()" :src="src" class="img-responsive image" :data-symbol-id="symbolId" :data-photo-id="photoId">
<input :name="index" :data-symbol-id="symbolId" :data-photo-id="photoId" 
type="hidden" :value="src">
</div>
</template>

<script>
export default {
    name: 'photo',
    props: {
        src: {
            type : String,
            required: true
        },
        symbolId: {
            type: String,
            required: true
        },
        photoId: {
            type: Number,
            required: true
        },
        index: {
            type: Number,
            required: true
        }
    },
}
</script>
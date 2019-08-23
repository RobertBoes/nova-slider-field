<template>
    <div v-if="field.indexAsValue" :class="`text-${field.textAlign}`">
        <span class="whitespace-no-wrap">{{ field.value }}</span>
    </div>
    <vue-slider v-else ref="slider" v-model="field.value"
                tooltip="none"
                disabled
                :dot-style="{ display: 'none' }"
                :rail-style="{ cursor: 'default' }"
                :min="field.min || 0"
                :max="field.max || 100"
                :interval="field.interval || 1"
                style="cursor: default; opacity: 1;">
    </vue-slider>
</template>

<script>
    import VueSlider from 'vue-slider-component'
    import 'vue-slider-component/theme/default.css'

    export default {
        components: {
            VueSlider,
        },
        props: ['resourceName', 'field'],
    }
</script>

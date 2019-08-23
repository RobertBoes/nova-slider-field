<template>
    <panel-item :field="field">
        <template slot="value" v-if="!field.detailAsValue">
            <div class="flex items-center flex-wrap h-4">
                <div class="w-1/3">
                    <vue-slider ref="slider" v-model="field.value"
                                :tooltip="tooltip"
                                disabled
                                :dot-style="{ display: 'none' }"
                                :dot-size="0"
                                :rail-style="{ cursor: 'default' }"
                                :min="field.min || 0"
                                :max="field.max || 100"
                                :interval="field.interval || 1"
                                style="cursor: default; opacity: 1;">
                    </vue-slider>
                </div>
            </div>
        </template>
    </panel-item>
</template>

<script>
    import VueSlider from 'vue-slider-component'
    import 'vue-slider-component/theme/default.css'

    export default {
        components: {
            VueSlider,
        },
        props: ['resource', 'resourceName', 'resourceId', 'field'],
        computed: {
            tooltip() {
                if (this.field.hideTooltipOnDetail) {
                    return 'none'
                }

                return this.field.tooltip || 'always'
            },
        }
    }
</script>

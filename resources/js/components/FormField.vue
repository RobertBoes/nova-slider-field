<template>
    <default-field :field="field" :errors="errors">
        <template slot="field">
            <div class="py-2">
                <vue-slider ref="slider" v-model="value"
                            :min="field.min || 0"
                            :max="field.max || 100"
                            :interval="field.interval || 1"
                            :tooltip="field.tooltip || 'always'"
                            :formatter="field.formatter || null">

                </vue-slider>
            </div>
        </template>
    </default-field>
</template>

<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova'
import vueSlider from 'vue-slider-component'

export default {
    components: {
        vueSlider,
    },
    mixins: [FormField, HandlesValidationErrors],

    props: ['resourceName', 'resourceId', 'field'],

    methods: {
        /*
         * Set the initial, internal value for the field.
         */
        setInitialValue() {
            this.value = this.field.value || ''
        },

        /**
         * Fill the given FormData object with the field's internal value.
         */
        fill(formData) {
            formData.append(this.field.attribute, this.value || '')
        },

        /**
         * Update the field's internal value.
         */
        handleChange(value) {
            this.value = value
        },
    },
}
</script>

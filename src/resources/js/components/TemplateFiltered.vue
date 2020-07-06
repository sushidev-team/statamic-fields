<template>
    <div class="template-fieldtype-container">
        <v-select
            ref="input"
            :name="name"
            @input="update"
            :clearable="config.clearable"
            :placeholder="config.placeholder"
            :disabled="isReadOnly"
            :options="options"
            :reduce="selection => selection.value"
            :searchable="true"
            :push-tags="false"
            :multiple="false"
            :value="value" />
    </div>
</template>

<script>
export default {

    mixins: [Fieldtype],

    data: function() {
        return {
            loading: true,
            options: []
        }
    },

    mounted() {
        this.$axios.get(cp_url('api/templates')).then(response => {

            var templates = response.data;

            // Filter out partials
            if (this.config.hide_partials) {
                templates = _.reject(templates, function(template) {
                    return template.match(/(^_.*|\/_.*|\._.*)/g);
                });
            }

            if (this.config.folder !== undefined && this.config.folder !== null) {
                 templates = _.reject(templates, (template) =>  {
                    if (template.indexOf(this.config.folder) !== 0) {
                        return template;
                    }
                });
            }

            // Set default
            var options = [];

            _.each(templates, (template) => {

                let label = template.substr(this.config.folder != null ? this.config.folder.length : 0);

                options.push({
                    label: label,
                    value: template
                });
            });

            this.options = options;
            this.loading = false;
        });
    }

};
</script>

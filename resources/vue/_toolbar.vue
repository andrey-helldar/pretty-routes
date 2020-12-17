<template>
    <v-app-bar app>
        <v-toolbar-title>
        <span
            v-text="trans('title')"
            :class="{ link: isDirty() }"
            @click="resetFilters"
        /> (<span v-text="countRoutes"/>)
        </v-toolbar-title>

        <v-spacer/>

        <v-text-field
            v-model="filter"
            :label="trans('search')"
            append-icon="mdi-magnify"
            hide-details
            clearable
        ></v-text-field>

        <v-spacer/>

        <v-tooltip bottom>
            <template v-slot:activator="{ on, attrs }">
                <v-btn
                    v-bind="attrs"
                    v-on="on"
                    @click="openGitHubRepository"
                    icon
                >
                    <v-avatar size="36">
                        <img
                            :src="githubIcon()"
                            alt="Github Project Page"
                        >
                    </v-avatar>
                </v-btn>
            </template>
            <span v-text="trans('openGitHub')"></span>
        </v-tooltip>
    </v-app-bar>
</template>

<script>
export default {
    computed: {
        countRoutes: {
            get: function () {
            },

            set: function (value) {
            }
        },

        filter: {
            get: function () {
            },

            set: function (value) {
            }
        }
    },

    methods: {
        resetFilters() {

        },

        isDirty() {

        },

        openGitHubRepository() {
            window.open(window.repositoryUrl, '_blank');
        },

        githubIcon() {
            return window.githubIcon;
        },

        trans(key) {

        }
    }
};
</script>

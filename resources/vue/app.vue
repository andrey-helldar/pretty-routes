<template>
    <v-app>
        <toolbar-component/>
        <menu-component/>
        <content-component/>
    </v-app>
</template>

<script>
import ToolbarComponent from '@/vue/_toolbar';
import MenuComponent from '@/vue/_menu';
import ContentComponent from '@/vue/_content';

export default {
    components: { ToolbarComponent, MenuComponent, ContentComponent }
};
</script>

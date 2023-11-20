<template>
    <!-- navbar -->

    <Nav></Nav>


    <!-- navbar end-->



    <!-- body main part start -->
        <div class="py-12">
            <slot></slot>
        </div>
    <!-- body main part end -->

    <!-- footer start -->

    <Footer></Footer>

    <!-- footer end -->
</template>
<script setup>
import Nav from "./Nav.vue";
import Footer from "./Footer.vue";

import { onMounted } from "vue";
import {
    initAccordions,
    initCarousels,
    initCollapses,
    initDials,
    initDismisses,
    initDrawers,
    initDropdowns,
    initModals,
    initPopovers,
    initTabs,
    initTooltips,
} from "flowbite";

// initialize components based on data attribute selectors
onMounted(() => {
    initAccordions();
    initCarousels();
    initCollapses();
    initDials();
    initDismisses();
    initDrawers();
    initDropdowns();
    initModals();
    initPopovers();
    initTabs();
    initTooltips();
});
</script>

<style></style>

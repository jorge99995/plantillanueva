<template>
    <div class="layout-container">
        <Aside></Aside>
        <div class="layout-page">
            <Navbar></Navbar>
            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <router-view></router-view>
                </div>
                <Footer></Footer  >
            </div>
        </div>

    </div>
</template>

<script setup>

import Aside from './Page/Plantilla/Aside.vue';
import Navbar from './Page/Plantilla/Navbar.vue';
import Footer from './Page/Plantilla/Footer.vue';


components: {
    Aside;
    Navbar;
    Footer;
}
</script>

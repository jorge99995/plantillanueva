<template>
    <div class="layout-container">
        <Aside></Aside>
        <div class="layout-page">
            <Navbar></Navbar>
            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <router-view></router-view>
                </div>
            <Footer></Footer>
        </div>
        </div>

    </div>
</template>

<script >
import Aside from "./Page/Plantilla/aside.vue";
import Navbar from "./Page/Plantilla/navbar.vue";
import Footer from "./Page/Plantilla/footer.vue";
components: {
    Aside;
    Navbar;
    Footer;
}
</script>

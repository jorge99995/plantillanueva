<template>
    <aside
        id="layout-menu"
        class="layout-menu menu-vertical menu bg-menu-theme"
    >
        <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
                <span class="app-brand-text demo menu-text fw-bold ms-2"
                    >aaa</span
                >
            </a>

            <a
                href="javascript:void(0);"
                class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none"
            >
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
            <!-- Dashboards -->
            <li class="menu-item active open">
                <router-link to="/" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Dashboards">Dashboards</div>
                </router-link>
            </li>

            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">GESTIÓN DE USUARIOS</span>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-user"></i>
                    <div data-i18n="Account Settings">Usuarios</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <router-link to="/usuarios" class="menu-link">

                            <div data-i18n="Account">Lista de Usuarios</div>
                        </router-link>
                    </li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                    <div data-i18n="Authentications">Roles</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a
                            href="pages-account-settings-account.html"
                            class="menu-link"
                        >
                            <div data-i18n="Account">Lista de Roles</div>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">GESTIÓN DE CATEGORIAS</span>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-category"></i>
                    <div data-i18n="Account Settings">CATEGORIAS</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <router-link to="/categorias" class="menu-link">

                            <div data-i18n="Account">Lista de Categorias</div>
                        </router-link>
                    </li>
                </ul>
            </li>


            <!--GESTION DE CLIENTES -->

            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">GESTIÓN DE CLIENTES</span>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-category"></i>
                    <div data-i18n="Account Settings">CLIENTES</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <router-link to="/clientes" class="menu-link">

                            <div data-i18n="Account">Lista de Clientes</div>
                        </router-link>
                    </li>
                </ul>
            </li>



        </ul>
    </aside>
</template>

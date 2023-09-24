<template>
    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="#">
                <i class="bx bx-menu bx-sm"></i>
            </a>
        </div>

        <div class="d-flex d-xl-none align-items-center mx-auto" id="navbar-collapse">
            <div class="navbar-nav align-items-center">

                <!-- <Link :href="route('home')" class="app-brand-link flex-grow-1">
                    <p class="mb-0 w-100 d-flex flex-row">
                        <span class="app-brand-logo"> WebChefe </span>
                        <span class="app-brand-text menu-text text-black fw-bolder ms-2 text-capitalize">
                            Usuario Tipo
                        </span>
                    </p>
                </Link> -->
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: 'Footer',
}
</script>
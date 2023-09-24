<template>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <div class="layout-page">
                <Navbar />

                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y bg-primary">
                        <slot />
                    </div>
                </div>

                <Footer />
                <div class="content-backdrop fade"></div>
            </div>
        </div>
    </div>

    <div class="layout-overlay layout-menu-toggle"></div>
</template>

<script>
import Footer from '@/Layouts/Footer.vue'
import Navbar from '@/Layouts/Navbar.vue'

export default {
    name: 'Layout',
    components: {
        Footer,
        Navbar,
    }
}
</script>
<template>
    <!-- <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="#">
                <i class="bi bi-menu bi-sm"></i> 
                <i class="bi bi-amazon"></i>
            </a>
        </div>

        <div class="d-flex d-xl-none align-items-center mx-auto" id="navbar-collapse">
            <div class="navbar-nav align-items-center">

                <Link :href="null" class="app-brand-link flex-grow-1">
                    <p class="mb-0 w-100 d-flex flex-row">
                        <span class="app-brand-logo"> WebChefe </span>
                        <span class="app-brand-text menu-text text-black fw-bolder ms-2 text-capitalize">
                            Usuario Tipo
                        </span>
                    </p>
                </Link> 
            </div>
        </div>
    </nav> -->

    <header class="py-3">
            <div class="container">
                <nav>
                    <div id="logo">
                        <a href="/">
                            <img src="/img/logoTemp.png" alt="logo do site" id="logo">
                        </a>
                    </div>
                    <ul class="navbar-items d-flex align-items-center">
                        <Link
                            v-if="$page.props.auth.user"
                            :href="route('dashboard')"
                            class="navbar-item"
                            >Dashboard</Link
                        >
                        <Link
                            v-if="$page.props.auth.user"
                            :href="route('meuEstoque.index')"
                            class="navbar-item"
                            >Meu estoque</Link
                        >
                        <Link
                            v-if="$page.props.auth.user"
                            :href="route('reestoque.index')"
                            class="navbar-item"
                            >Reestoque</Link
                        >
                        <Link
                            v-if="$page.props.auth.user"
                            :href="route('cestas.index')"
                            class="navbar-item"
                            >Cestas</Link
                        >
                        <Link
                            v-if="$page.props.auth.user"
                            :href="route('validade.index')"
                            class="navbar-item"
                            >Validade</Link
                        >
                    </ul>
                </nav>
            </div>
        </header>
</template>

<script>
export default {
    name: 'Navbar',
}
</script>

<style scoped>
    :root {
        --defaultColor: #4B04BE;
    }

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        list-style-type: none;
        text-decoration: none;
        font-family: 'Roboto', sans-serif;
    }

    #homeContent {
        width: 100%;
        height: 92vh;
    }

    .container {
        width: 90%;
        height: 100%;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    #logo {
        width: 40px;
    }

    header {
        width: 100%;
        height: 8vh;
    }

    header nav{
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    header nav .navbar-items{
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 15px;
    }

    header nav .navbar-items .navbar-item{
        color: var(--defaultColor);
        font-size: 1.3rem;
    }
</style>
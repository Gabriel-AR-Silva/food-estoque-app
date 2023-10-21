<script setup>
defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Head title="Food Estoque" />

    <div
        class="relative sm:flex sm:justify-center sm:items-center bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white"
    >
        <div v-if="canLogin" class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                >Dashboard</Link
            >

            <template v-else>
                <Link
                    :href="route('login')"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                    >Entrar</Link
                >

                <Link
                    v-if="canRegister"
                    :href="route('register')"
                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                    >Cadastrar</Link
                >
            </template>
        </div>
    </div>
    <div id="homeContent">
        <div class="container">
            <div id="homeApresentationContent">
                <h1>Food Estoque</h1>
                <p>
                    Gerencie seu estoque de alimentos de maneira fácil e simples com o novo sistema
                    de estoque alimentício da <em>Food Estoque</em> ! 
                </p>
                <a href="/food-estoque" id="starting-home-a"><button id="btn-home">Começar</button></a>
            </div>
            <div id="homeImgBox">
                <!-- <img src="/img/imgTempHome.png" alt="" id="homeImg"> -->
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Home'
    }
</script>

<style>
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

    /* 
        HOME CSS
    */
    #homeImgBox {
        width: 500px;
        height: 600px;
        margin-right: 10%;
    }

    #homeImg {
        width: 100%;
        height: 100%;
    }

    #homeApresentationContent {
        width: 600px;
    }

    #homeApresentationContent h1 {
        color: var(--defaultColor);
        font-size: 5.5rem;
        background-image: linear-gradient(to bottom, var(--defaultColor) 68%, #ffffff00);
        -webkit-background-clip: text;
        -moz-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    #homeApresentationContent p {
        font-size: 1.2rem;
        margin: 15px 0 45px;
    }

    #btn-home {
        background-color: transparent;
        width: 163px;
        height: 55px;
        color: var(--defaultColor);
        letter-spacing: 1px;
        font-size: 1.5rem;
        font-weight: 600;
        border: 3px solid var(--defaultColor);
        border-radius: 5px;
        cursor: pointer;
        transition: all .4s ease-out;
    }

    #btn-home:hover {
    letter-spacing: 3px;
    }
</style>

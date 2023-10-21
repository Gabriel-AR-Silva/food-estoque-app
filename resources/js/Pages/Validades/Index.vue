<template>
    <Head title="Validade" />

    <Layout> 
        <h1 class="text-center my-5">Data de validade dos alimentos</h1>

        <!-- TODO: Componente para pesquisa filtrada -->
        <!-- TODO: Add status para o alimento, Status ['fresco', 'bom', 'perto da validade', 'estragado'] -->

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Status</th>
                        <th scope="col">Validade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item, index) in itensValidade" :key="index">
                        <th scope="row">{{ index + 1 }}</th>
                        <td>{{ item.titulo }}</td>
                        <td>{{ item.categoria }}</td>
                        <td>Fresco</td>
                        <td>{{ item.validade }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </Layout>
</template>

<script>
    import Layout from '@/Layouts/AdminLayout.vue';
    
    export default {
        components: {
            Layout
        },
        props: {
            itensValidade: Object,
        }
    }
</script>

<template>
    <div>
        <h1 class="display-4 text-center"> Erro no Pagamento! <br/>
            <strong style="color: darkred" v-if="exception"> {{ exception }} </strong><br/>
            <small class="text-muted">
                Tente novamente usando outro meio de pagamento.
            </small>
        </h1>
    </div>
</template>
<script>
export default {
    props: ['exception']
}
</script>

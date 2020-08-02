<template>
    <div>
        <h1 class="display-3">Pagamento Efetuando com o Status: {{ payStatus }}</h1>
    </div>
</template>
<script>
export default {
    props: ['payStatus']
}
</script>

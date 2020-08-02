<template>
    <div class="justify-content-center">
    <h1 class="display-4">Lista de Produtos</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Produto</th>
            <th scope="col">Preço (R$)</th>
            <th scope="col">Ação</th>
        </tr>
        </thead>
        <tbody v-for="(product, index) in products" v-bind:key="index">
        <tr>
            <th scope="row">{{ product.productID }}</th>
            <td>{{ product.productName }}</td>
            <td>{{ product.productValue }}</td>
            <td>
                <div v-on:click="addToCart(index)" class="btn btn-success">Comprar</div>
            </td>
        </tr>
        </tbody>
    </table>
        <div class="list-group">
            <h2 v-if="productsCart.length <= 0" class="text-muted"> Sem Itens no seu Carrinho de Compras... </h2>

            <div v-for="(productCart, index) in productsCart" v-bind:key="index" class="list-group-item">
                <span>Produto: <strong>{{ productCart.productName }}</strong> </span>
                <p>Valor: {{ productCart.productValue }}</p>
                <div>
                    <div v-on:click="removeProductCart(index)" class="btn btn-danger">
                        Remover
                    </div>
                </div>
            </div>

            <h4 v-if="totalValue > 0" class="total-value">
               Valor total do seu Carrinho: <strong>R$ {{ totalValue.toFixed(2) }}</strong>
            </h4>
            <button type="submit"  v-if="productsCart.length > 0" v-on:click="checkout(productsCart.length, totalValue.toFixed(2))" class="btn btn-primary offset-8 col-3 float-right btn-control">
                Finalizar compra
            </button >
        </div>
    </div>

</template>
<script>
    export default {
        data() {
            return {
                products: [
                    {
                        productID: 1,
                        productName: 'DVD - Vingadores Ultimato',
                        productValue: 'R$ 19,90'
                    },
                    {
                        productID: 2,
                        productName: 'Livros - Box Senhor dos Aneis',
                        productValue: 'R$ 114,90'
                    },
                    {
                        productID: 3,
                        productName: 'Camisa Foo Fighters',
                        productValue: 'R$ 34,90'
                    },
                ],
                productsCart: [],
                totalValue: 0
            }
        },
        methods: {
            addToCart(index) {
                this.productsCart.push({
                    productName: this.products[index]['productName'],
                    productValue: this.products[index]['productValue']
                })
                    var str = this.products[index]['productValue'];
                    var res = str.replace(/R\$/g, "");
                        res = res.replace(/,/g, ".");
                    this.totalValue += parseFloat(res);
            },
            removeProductCart(index) {
                var str = this.productsCart[index]['productValue'];
                var res = str.replace(/R\$/g, "");
                    res = res.replace(/,/g, ".");
                this.totalValue -= parseFloat(res);

                this.productsCart.splice(index, 1)
            },
            checkout(qntProdutos, totalValue) {
                window.location = window.location + 'checkout/' + qntProdutos + '/' + totalValue
            }
        }
    }
</script>

<template>
    <div>
        <div class="bg-form">
            <div class="form-group">
                <label for="description">Quantidade de Produtos</label>
                <input class="form-control" type="text" name="description" id="description" :value="qntProdutos"
                       readonly/>
            </div>
            <div class="form-group">
                <label for="transaction_amount">Valor a pagar</label>
                <input class="form-control" name="transaction_amount" id="transaction_amount" :value="valorTotal"
                       readonly/>
            </div>
            <div class="form-group">
                <label for="cardNumber">Número do cartão <span style="color: darkred">*</span> </label>
                <input class="form-control" type="text" id="cardNumber" data-checkout="cardNumber" name="cardNumber"
                       onselectstart="return false" onCopy="return false"
                       onCut="return false"
                       onDrag="return false" onDrop="return false" autocomplete=off required/>
            </div>
            <div class="form-group">
                <label for="cardholderName">Nome e sobrenome <span style="color: darkred">*</span></label>
                <input class="form-control" type="text" id="cardholderName" data-checkout="cardholderName"
                       name="cardholderName"/>
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label for="cardExpirationMonth">Mês de vencimento<span style="color: darkred">*</span></label>
                    <input class="form-control" type="text" id="cardExpirationMonth"
                           data-checkout="cardExpirationMonth" name="cardExpirationMonth"
                           onselectstart="return false" onpaste="return false" onCopy="return false"
                           onCut="return false"
                           onDrag="return false" onDrop="return false" autocomplete=off required/>
                </div>
                <div class="form-group col-6">
                    <label for="cardExpirationYear">Ano de vencimento<span style="color: darkred">*</span></label>
                    <input class="form-control" type="text" id="cardExpirationYear"
                           data-checkout="cardExpirationYear" name="cardExpirationYear"
                           onselectstart="return false" onpaste="return false" onCopy="return false"
                           onCut="return false"
                           onDrag="return false" onDrop="return false" autocomplete=off required/>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label for="securityCode">Código de segurança<span style="color: darkred">*</span></label>
                    <input class="form-control" type="text" id="securityCode" data-checkout="securityCode"
                           name="securityCode"
                           onselectstart="return false" onpaste="return false" onCopy="return false"
                           onCut="return false"
                           onDrag="return false" onDrop="return false" autocomplete=off/>
                </div>
                <div class="form-group col-6">
                    <label for="installments">Parcelas</label>
                    <select readonly id="installments" class="form-control" name="installments">
                        <option value="1">x1</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="email">E-mail<span style="color: darkred">*</span></label>
                <input class="form-control" type="email" id="email" name="email" required/>
            </div>
            <h5 class="btn-margin"><span style="color: darkred">* Consteúdos Obrigatórios</span></h5>
        </div>
        <input type="hidden" name="payment_method_id" id="payment_method_id" value="3"/>
        <button type="sumbit" class="btn btn-primary offset-10 col-2 btn-margin">Pagar</button>
    </div>
</template>
<script>
export default {
    props: ['qntProdutos', 'valorTotal'],
}
</script>

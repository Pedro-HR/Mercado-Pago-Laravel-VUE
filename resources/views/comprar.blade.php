<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pagamento</title>
        <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
        <script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
    </head>
    <body>
    <div class="container">
        <div id="app">
            <div class="col-10" style="margin: auto">
                <div class="justify-content-center">
                    <div class="form-group">
                        <label class="display-4" for="methodPay">Selecione a forma de Pagamento</label>
                        <select v-model="selected" class="form-control" name="formaPagamento" id="methodPay">
                            <option value="1">Selecione ...</option>
                            <option value="2">Boleto</option>
                            <option value="3">Cartão de Crédito</option>
                        </select>
                    </div>
                    <hr>
                    <form method="POST" id="pay" name="pay" action="{{ secure_url('payCheckout') }}">
                        @csrf
                        <form-boleto v-if="selected === '2'"></form-boleto>
                        <form-credit v-if="selected === '3'" valor-total="{{ $valorTotal ?? 1 }}"
                                     qnt-produtos="{{ $qntProdutos ?? 'R$ 99,90' }}"></form-credit>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ secure_asset('js/app.js') }}"></script>
    <script>window.Mercadopago.setPublishableKey("TEST-33d6d38f-395c-4f24-a9e7-2267ddf4d259");</script>
    </body>
</html>

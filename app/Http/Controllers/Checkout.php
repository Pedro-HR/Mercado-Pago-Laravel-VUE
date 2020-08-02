<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use MercadoPago;

class Checkout extends Controller
{
    private  $qntProdutos;
    private  $valorTotal;

    /**
     * @return mixed
     */
    public function getQntProdutos()
    {
        return $this->qntProdutos;
    }

    /**
     * @param mixed $qntProdutos
     */
    public function setQntProdutos($qntProdutos): void
    {
        $this->qntProdutos = $qntProdutos;
    }

    /**
     * @return mixed
     */
    public function getValorTotal()
    {
        return $this->valorTotal;
    }

    /**
     * @param mixed $valorTotal
     */
    public function setValorTotal($valorTotal): void
    {
        $this->valorTotal = $valorTotal;
    }


    public function checkCheckout($qntProdutos, $valorTotal)
    {
        $this->setQntProdutos($qntProdutos);
        $this->setValorTotal($valorTotal);
        return view('comprar', ['qntProdutos' => $this->getQntProdutos(),'valorTotal' => "R$" . $this->getValorTotal()]);
    }

    public function  payCheckout(Request $request)
    {
        switch ((int)$request['payment_method_id']) {
            case 2:
                return view('boleto');

            case 3:
                try {
                    MercadoPago\SDK::setAccessToken("TEST-6765632652566384-031220-09d9a467a746d7d9b06febde7e32f41c-249922967");

                    $payment = new MercadoPago\Payment();
                    $payment->transaction_amount = $this->getValorTotal();
                    $payment->token = $request['cardNumber'];
                    $payment->description = "Quantidade de Produtos: " . $this->getQntProdutos();
                    $payment->installments = $request['installments'];
                    $payment->payment_method_id = "visa";
                    $payment->payer = array(
                        "email" => $request['email']
                    );
                    $payment->save();
                    return view('success', ['status' => $payment->status]);
                } catch (Exception $e) {
                    return view('error', ['exception' => $e->getMessage()]);
                }
            default:
                return view('error');
        }
    }
}

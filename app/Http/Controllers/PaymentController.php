<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Stripe\Charge;
use Stripe\Stripe;
use Illuminate\Http\Request;

class PaymentController extends Controller
{   
        public function showCheckout(Ad $ad)
        {
                return view('payment.show',compact('ad'));  
        }
    
    public function processPayment(Request $request)
    {
        $amount = 1000; // Monto en centavos (por ejemplo, 1000 centavos = $10)
        
        Stripe::setApiKey(config('services.stripe.secret'));
    
        try {
            $charge = Charge::create([
                'amount' => $amount,
                'currency' => 'euro',
                'source' => $request->stripeToken,
                'description' => 'Descripción del pago',
            ]);
    
           
    
            return redirect()->back()->with('success', 'Pago exitoso. Gracias por tu compra.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al procesar el pago: ' . $e->getMessage());
        }
    }
    
}

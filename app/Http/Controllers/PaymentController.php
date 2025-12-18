<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    /**
     * Display payment list
     */
    public function index()
    {
        $payments = Payment::all();
        return view('payment-index',  compact('payments'));
    }
}



    /**
     * Show create payment form
     */
//     public function create()
//     {
//         return view('payment-create');
//     }

//     /**
//      * Store payment type
//      */
//     public function store(Request $request)
//     {
//         $request->validate([
//             'payment_type' => 'required|string|max:255',
//             'status' => 'required|in:0,1'
//         ]);

//         Payment::create([
//             'payment_type' => $request->payment_type,
//             'status'       => $request->status
//         ]);

//         return redirect()
//             ->route('payment.index')
//             ->with('success', 'Payment type added successfully');
//     }

//     /**
//      * Edit payment type
//      */
//     public function edit($id)
//     {
//         $payment = Payment::findOrFail($id);
//         return view('payment-edit', compact('payment'));
//     }

//     /**
//      * Update payment type
//      */
//     public function update(Request $request, $id)
//     {
//         $request->validate([
//             'payment_type' => 'required|string|max:255',
//             'status' => 'required|in:0,1'
//         ]);

//         $payment = Payment::findOrFail($id);
//         $payment->update([
//             'payment_type' => $request->payment_type,
//             'status'       => $request->status
//         ]);

//         return redirect()
//             ->route('payment.index')
//             ->with('success', 'Payment type updated successfully');
//     }
// }

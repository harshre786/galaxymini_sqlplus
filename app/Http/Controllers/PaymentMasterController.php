<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentMasterController extends Controller
{
    public function index()
    {
        $payments = Payment::orderBy('id', 'desc')->paginate(10);
        
        return view('masters.paymentMaster', compact('payments'));
    }

    // 🔹 CREATE PAGE
    public function create()
    {
        return view('payment-create');   // <-- tera blade
    }

    // 🔹 STORE DATA
    

    public function store(Request $request)
{
    // 🔍 DEBUG (ek baar dekhne ke liye)
    // dd($request->all());

    $request->validate([
        'payment_type' => 'required|string|max:255',
        'status' => 'required',
    ]);

    Payment::create([
        'type'         => $request->payment_type, // ✅ FIXED
        'status'       => $request->status,
        'created_by'   => auth()->id() ?? 1,
        'created_date' => date('Y-m-d'), // ✅ since DB me date hai
    ]);

    return redirect()
        ->route('masters.payment')
        ->with('success', 'Payment type added successfully');
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

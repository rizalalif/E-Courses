<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\User;
use Illuminate\Http\Request;

class UserTransactionController extends Controller
{
    public function buySingle(Paket $paket)
    {
        $user = User::first();

        // dd($paket);

        $saving = $paket->price * $paket->discount / 100;
        $total = $paket->price - $saving;
        // dd($saving);

        return view('user.chekout', compact('user', 'paket', 'saving', 'total'));
    }

    public function checkout(Request $request)
    {
        try {
            //code...
            $transaction = Transaction::create([
                'code' => 'TSK' . random_int(100000, 999999),
                'buyer_id' => $request->buyer_id,
                'buyer_name' => $request->buyer_name,
                'buyer_phone' => $request->buyer_phone,
                'quantity' => 1,
                'total_price' => $request->total_price,
                'status' => 'pending',
                'payment_proof' => ' ',
            ]);

            TransactionDetail::create([
                'transaction_id' => $transaction->id,
                'paket_id' => $request->paket_id,
                // 'paket_name' => $request->paket_name,
                // 'paket_description' => $request->paket_desc,
                // 'price' => $request->total_price,
            ]);

            // $tr_paket = TransactionDetail::with('paket')->findOrFail($tr_detail->id);



            return redirect()->route('user.order.detail', ['transaction' => $transaction->code]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function orderDetail(Transaction $transaction)
    {
        // dd($transaction->transaction_detail);


        return view('user.orderdetail', compact('transaction'));
    }
    public function payment(Request $request)
    {
        $proof = $request->file('proof');
        try {
            //code...
            $proof = $request->file('proof');

            $request->validate([
                'proof' => 'required|image|mimes:jpeg,png,jpg|max:2048'
            ]);



            $trans = Transaction::where('id', $request->transaction_id)->update([
                'payment_proof' => $proof->getClientOriginalName()
            ]);
            // $proof->move(public_path('assets/img/proof'), $proof->getClientOriginalName());

            return redirect()->route('user.order');
        } catch (\Throwable $th) {
            throw $th;
            // return redirect()->back()->with('error', $th->getMessage())->withInput();
        }
    }
}

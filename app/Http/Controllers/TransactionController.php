<?php
namespace App\Http\Controllers;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function create()
    {
        return view('send_money');
    }

    public function store(Request $request)
    {
        $request->validate([
            'receiver_id' => 'required|exists:users,id',
            'amount' => 'required|numeric|min:20.00',
        ]);

        $sender = auth()->user();
        $receiver = User::findOrFail($request->receiver_id);
        $amount = $request->amount;
        if($sender->id == $request->receiver_id){
          
          return back()->with('err', 'Your no send money');;
        }
        

        // Check if sender has enough balance (assuming you have a balance column in the users table)
      else  if ($sender->balance < $amount) {
            return back()->with('err', 'Insufficient funds');
        }

        // Deduct amount from sender and add it to receiver
        $sender->balance -= $amount;
        $receiver->balance += $amount;

        // Save both users' updated balances
        $sender->save();
        $receiver->save();

        // Record the transaction
        Transaction::create([
            'sender_id' => $sender->id,
            'receiver_id' => $receiver->id,
            'amount' => $amount,
        ]);

        return redirect()->route('send.money.form')->with('success', 'Money sent successfully');
    }
}
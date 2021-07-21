<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Order;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function placeOrder(Request $request)
    {
        $items = [];
        $books = $request->get('books');
        $total = 0;
        for ($i = 0; $i < sizeof($books); $i++) {
            $id = $books[$i]["id"];
            $book = Book::select("books.id")
                ->selectFinalPrice()
                ->where('books.id', $id)
                ->get();
            $price=$book->toArray()[0]["final_price"];
            $quantity = $books[$i]["qty"];

            $items[] = array(
                'book_id' => $id,
                'price' => $price,
                'quantity' => $quantity
            );
            $total += ($price * $quantity);
        }
        $order = Order::create([
            'order_date' => now(),
            'order_amount' => 0
        ]);
        $order->orderItems()->createMany($items);
        $order->update(['order_amount' => $total]);
        return response()->json($order);
    }
}

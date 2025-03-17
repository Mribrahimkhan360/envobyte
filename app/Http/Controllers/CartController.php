<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function Symfony\Component\Console\Style\section;

class CartController extends Controller
{
    private $products;

    public function __construct()
    {
        $this->products = [
            ['id' => 1, 'name' => 'Fiest Product', 'price' => 30],
            ['id' => 2, 'name' => 'Second Product', 'price' => 30],
            ['id' => 3, 'name' => 'Third Product', 'price' => 30],
        ];
    }

    public function index()
    {
        return view('product', ['products' => $this->products]);
    }
    public function addtocart(Product $product)
    {
        return view('cart');
        $cart = session()->get('cart');

        if (!$cart)
        {
            $cart = [
                $product->id =>[
                 'name'             => $product->name,
                 'quantity'         => 1,
                 'price'            => $product->price,
                ]
            ];
            session()->put('cart',$cart);
            return redirect()->route('add-cart')->with('success','Added to Cart');
        }
        if (isset($cart[$product->id]))
        {
            $cart[$product->id]['quantity']++;
            session()->put('cart',$cart);
            return redirect()->route('add-cart')->with('success','Added to Cart');
        }
        $cart[$product->id] = [
                'name'             => $product->name,
                'quantity'         => 1,
                'price'            => $product->price,
        ];
        session()->put('cart',$cart);
        return redirect()->route('add-cart')->with('success','Added to Cart');
    }
    public function card()
    {
        return view('product');
    }
}

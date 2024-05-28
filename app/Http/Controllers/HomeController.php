<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUsEmail;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Header;
use App\Models\Medsos;
use App\Models\Product;


class HomeController extends Controller
{
    public function index()
     {
        $about = About::all();
        $header = Header::all();
        $medsos = Medsos::all();
        $product = Product::orderBy('created_at', 'desc')->take(6)->get();
        return view('home', [
            'about' => $about,
            'header' => $header,
            'medsos' => $medsos,
            'product' => $product,
        ]); 
     }
    
    public function getProducts()
    {
        $header = Header::all();
        $medsos = Medsos::all();
        $product = Product::all();
        return view('product', [
            'header' => $header,
            'medsos' => $medsos,
            'product' => $product
        ]);
    }

    public function getProductById($id){
        $products = Product::findOrFail($id);
        $header = Header::all();

        return view('detail', [
            'product'=>$products,
            'header' => $header,

        ]);
    }

    public function contact(Request $request){
        $email = Medsos::all();
        $data = [
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'message' => $request->input('message')
        ];

        foreach($email as $mail){
            Mail::to($mail->email)->send(new ContactUsEmail($data));
        }

        return redirect()->route('/')->with('success', 'Thank you for your message. We will get back to you soon!');
        // return redirect()->back()->with('success', 'Thank you for your message. We will get back to you soon!');
    }
}

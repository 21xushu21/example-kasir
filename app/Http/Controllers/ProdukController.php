<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    //  view produk
    public function produk(){
        $produk =produk::all();
        // dd($produk);
        return view('produk.data_produk',compact('produk'));
    }

        //  view create produk
        public function CreateProduk(){
            return view('produk.create_produk');
        }
}

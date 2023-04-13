<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class CustomersController extends Controller
{
    //  view datacustomer
    public function Customer(){
            $customer =Customer::all();
            // dd($customer);
            return view('kontak.data_customer',compact('customer'));
    }

    //  view create customer
    public function CreateCustomer(){
        return view('kontak.create_customer');
    }

    // | cara save1
    public function StoreCustomer(Request $request){
        // dd($request->except('_token','submit'));
        // dd($request->except($request->all()));
        // | caras simpel
        Customer::create($request->except('_token','submit'));
        return redirect('/customer');
        // | caras simpel
    }
    // | cara save2 pakai validasi
    // public function StoreCustomer(Request $request){
    //     $validation = Validator::make(
    //         $request->all(),
    //             [
    //                 'nama' => 'required|string|max:30|min:4',
    //                 'kode' => 'required|string|max:3',
    //                 'phone' => 'required|numeric|max:15|min:7',
    //                 'email' => 'required|string|max:40|min:4',
    //                 'address' => 'required|string|max:200|min:5',
    //             ],
    //             [
    //                 'nama.required' => 'Inputan nama Harus Diisi',
    //                 'nama.max' => 'Inputan nama Kebanyakan',
    //                 'nama.min' => 'Inputan nama Harus lebih dari 3',

    //                 'kode.required' => 'Inputan kode Harus Diisi',
    //                 'kode.max' => 'Inputan kode Kebanyakan',

    //                 'phone.required' => 'Inputan phone Harus Diisi',
    //                 'phone.max' => 'Inputan phone Kebanyakan',
    //                 'phone.min' => 'Inputan phone Harus lebih dari 6',

    //                 'email.required' => 'Inputan email Harus Diisi',
    //                 'email.max' => 'Inputan email Kebanyakan',
    //                 'email.min' => 'Inputan email Harus lebih dari 3',

    //                 'address.required' => 'Inputan address Harus Diisi',
    //                 'address.max' => 'Inputan address Kebanyakan',
    //                 'address.min' => 'Inputan address Harus lebih dari 5',
    //             ]
    //         );
    //         if ($validation->fails()) {
    //             return redirect()->back()->withErrors($validation->errors())->withInput();
    //         }
    //         $cs =new Customer();
    //         $cs->nama = $request->nama;
    //         $cs->kode = $request->kode;
    //         $cs->phone = $request->phone;
    //         $cs->email = $request->email;
    //         $cs->addres = $request->addres;

    //         if ($cs->save()){
    //             dd($request->except($request->all()));
    //             return redirect('/customer');
    //         }
    // }
    // | and view datacustomer

    public function edit($id){
        // dd($id);
        $customer =Customer::find($id);
        // dd($customer);
        return view('kontak.edit_customer',compact(['customer']));

    }
    public function update($id, Request $request){
        $customer = Customer::find($id);
        $customer->update($request->except(['_token','submit']));
        return redirect('/customer');
    }

    // | delete datacustomer
    public function destroy($id){
        $customer = Customer::find($id);
        $customer->delete();
        return redirect('/customer');
    }
    // | and delete datacustomer
}

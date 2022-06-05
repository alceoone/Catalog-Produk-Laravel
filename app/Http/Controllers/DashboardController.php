<?php

namespace App\Http\Controllers;

use App\product;
use App\setting;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function dashboard() {
        $settings = setting::find(1);
        return view('page/dashboard', compact('settings'));
    }
    public function product() {
        $products = product::orderBy('products.created_at', 'DESC')->get();
        return view('page/dashboardProduct', compact('products'));
    }
    public function productAdd(Request $request){

        $request->validate([
            'namaItem'=>'required',
            'linkGambar'=>'required',
            'deskripsiSingkat'=>'required',
            'linkShoppe'=>'required',
            'noWa'=>'required',
        ]);
        $product = new product([
            
            'nama_item' => $request->get('namaItem'),
            'url_gambar' => $request->get('linkGambar'),
            'deskripsi_singkat' => $request->get('deskripsiSingkat'),
            'deskripsi_panjang' => $request->get('deskripsi'),
            'link_shoppe' => $request->get('linkShoppe'),
            'wa' => $request->get('noWa'),
        ]);
        $product->save();
        return redirect('/dashboard-product')->with('success', 'Product saved!');
    }

    public function deleteProduct($id) {
        $product = product::find($id);
        $product->delete();
        return redirect('/dashboard-product')->with('success', 'product deleted!');
    }
    public function editProductShow($id) {
        $products = product::find($id);
        return view('page/editProduct', compact('products'));
        // return redirect('/dashboard-product-edit', compact('product'));
    }
    public function editProduct(Request $request) {
        $request->validate([
            'id' =>'required',
            'namaItem'=>'required',
            'linkGambar'=>'required',
            'deskripsiSingkat'=>'required',
            'linkShoppe'=>'required',
            'noWa'=>'required',
        ]);

        $product = product::find($request->get('id'));
        $product->nama_item = $request->get('namaItem');
        $product->url_gambar = $request->get('linkGambar');
        $product->deskripsi_singkat = $request->get('deskripsiSingkat');
        $product->deskripsi_panjang = $request->get('deskripsi');
        $product->link_shoppe = $request->get('linkShoppe');
        $product->wa = $request->get('noWa');
        $product->save();
        return redirect('/dashboard-product')->with('success', 'Product updated!');
    }

    public function addProduct() {
        return view('page/addProduct');
    }
    public function settingProduct() {
        $settings = setting::find(1);
        return view('page/dashboardSetting', compact('settings'));
    }
    public function editSetting(Request $request) {
        $request->validate([
            'brand' =>'required',
            'deskripsi_singkat'=>'required',
            'deskripsi'=>'required',
            'linkShoppe'=>'required',
            'linkInstagram'=>'required',
            'whatsApp'=>'required',
        ]);

        $setting = setting::find(1);
        $setting->brand = $request->get('brand');
        $setting->deskripsi_singkat = $request->get('deskripsi_singkat');
        $setting->deskripsi = $request->get('deskripsi');
        $setting->link_shoppe = $request->get('linkShoppe');
        $setting->link_instagram = $request->get('linkInstagram');
        $setting->wa = $request->get('whatsApp');
        $setting->save();

        return redirect('/dashboard-setting')->with('success', 'Setting updated!');
    }

    
}

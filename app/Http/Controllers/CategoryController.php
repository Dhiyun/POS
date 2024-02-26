<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function food_beverage()
    {
        $listfoodbeverage = 
        [
            ['name' => 'Ayam Crispy', 'description' => 'Ayam Goreng yang lapisi tepung.'],
            ['name' => 'Burger', 'description' => 'Makanan cepat saji berbahan daging, sayuran, dan roti yang dijadikan satu.']
        ];

        return view('category.products')
        ->with('judul', 'Daftar Food Beverages')
        ->with('products', $listfoodbeverage);
    }

    public function beauty_health()
    {
        $listbeautyhealth = 
        [
            ['name' => 'Skincare', 'description' => 'Alat yang digunakan untuk merawat kulit.'],
            ['name' => 'Face Mask', 'description' => 'Makanan cepat saji berbahan daging, sayuran, dan roti yang dijadikan satu.']
        ];

        return view('category.products')
        ->with('judul', 'Daftar Beauty Health')
        ->with('products', $listbeautyhealth);
    }

    public function home_care()
    {
        $listhomecare = 
        [
            ['name' => 'Sapu', 'description' => 'Alat yang digunakan untuk membersihkan lantai.'],
            ['name' => 'Pel', 'description' => 'Makanan cepat saji berbahan daging, sayuran, dan roti yang dijadikan satu.']
        ];

        return view('category.products')
        ->with('judul', 'Daftar Home Care')
        ->with('products', $listhomecare);
    }

    public function baby_kid()
    {
        $listbabykid = 
        [
            ['name' => 'Bedak Bayi', 'description' => 'Untuk merawat kulit bayi.'],
            ['name' => 'Pel', 'description' => 'Makanan cepat saji berbahan daging, sayuran, dan roti yang dijadikan satu.']
        ];

        return view('category.products')
        ->with('judul', 'Daftar Baby Kid')
        ->with('products', $listbabykid);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}

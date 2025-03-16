<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListItemController extends Controller
{
    public function index()
    {
        $items = [
            ['id' => 3312, 'nama' => 'Kursi Lipat'],
            ['id' => 4010, 'nama' => 'Kamera'],
            ['id' => 36, 'nama' => 'Tripod'],
        ];
        
        return view('list_item', compact('items'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saint;
class MainController extends Controller
{
    public function welcome() {
        $saints = Saint::all();
        $data = [
            'saints' => $saints
        ];
        return view('pages.welcome', $data );

    }
    public function saintShow($id)
    {
        $saint = Saint::find($id);

        $data = [
            'saint' => $saint
        ];

        return view('pages.saintShow', $data);
        
    }
    public function saintDestroy($id)
    {
        
    }
}
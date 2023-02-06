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
        $saint = Saint::find($id);
        $saint->delete();

        return redirect()->route('welcome');
        
    }
    public function saintCreate()
    {
        return view('pages.saintCreate');

    }
    public function saintStore(Request $request)
    {

        $data = $request->all();

        $saint = new Saint();

        $saint->name = $data['name'];
        $saint->birthplace = $data['birthplace'];
        $saint->canonization = $data['canonization'];
        $saint->miracles = $data['miracles'];

        $saint->save();

        return redirect()->route('welcome');
    }
}

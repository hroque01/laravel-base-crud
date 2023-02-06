<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Saint;

class MainController extends Controller
{
    public function home()
    {
        $saints = Saint::all();

        $data = [
            'saints' => $saints
        ];
        return view('pages.home', $data);
    }

    public function show($id)
    {
        $saint = Saint::find($id);

        $data = [
            'saint' => $saint
        ];

        return view('pages.saint', $data);
    }

    public function saintDestroy($id)
    {
        $saint = Saint::find($id);
        $saint->delete();

        return redirect()->route('home');
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
        $saint->lastname = $data['lastname'];
        $saint->place_of_birth = $data['place_of_birth'];
        $saint->benedition = $data['benedition'];
        $saint->miracles = $data['miracles '];

        $saint->save();

        return redirect()->route('home');
    }

}
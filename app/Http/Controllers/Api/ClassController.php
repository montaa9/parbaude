<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kurss;


class ClassController extends Controller
{
    // public function test() {
    //     return response() -> json([
    //        'message' => 'Sveika, pasaule!',
    //   ]);
    //   }

    public function store(Request $request) {
        $validated = $request->validate([
       'title' => 'required|max:255',
       'text' => 'required',
       'banner' => 'required|max:255',
       'count' => 'required|integer',
    ]);
    // dd('Dati tika validēti');

     $kurss = Kurss::create($validated);
     return response()->json($kurss);

    }

    public function index() {
        return response()->json(Kurss::all());
        }
        

}

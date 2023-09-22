<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class AppController extends Controller
{
    function index()
    {
        return response()->json(Pengguna::latest()->limit(50)->get());
    }

    function store(Request $request)
    {
        $pengguna = Pengguna::where('name', 'LIKE', $request->name)->first();
        if (!$pengguna) {
            $pengguna = Pengguna::create([
                'name' => $request->name,
                'mean' => Pengguna::getMean(),
                'work' => Pengguna::getWork()
            ]);
        }else{
            $pengguna = Pengguna::create([
                'name' => $pengguna->name,
                'mean' => $pengguna->mean,
                'work' => $pengguna->work
            ]);
        }

        if ($request->has('horoscope')) {
            $pengguna->horoscope = $pengguna->getHoroscope($pengguna->name);
            $pengguna->save();
        }

        return response()->json($pengguna);
    }
}

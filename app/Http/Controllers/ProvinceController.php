<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use App\Models\Province;

class ProvinceController extends Controller
{


    public function index()
    {
        return Province::all();
    }

    public function create(Request $request)
    {
        // return $request->file('file')->extension();
        $new = new Province;
        $new->key = $request->key;
        $new->value = $request->value;
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $filename = time().'.'.$request->file('file')->extension();
        $filepath = $request->file('file')->storeAs('files', $filename);
        $new->file = $filename;
        $new->save();
        return Province::all();
    }

    public function update(Request $request)
    {
        $province = Province::find($request->id);
        $province->key = $request->key;
        $province->value = $request->value;
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $filename = time().'.'.$request->file('file')->extension();
        $filepath = $request->file('file')->storeAs('files', $filename);
        $province->file = $filename;
        $province->save();
        return $province;
    }

    public function delete(Request $request)
    {
        $province = Province::find($request->id);
        $province->delete();

        return 204;
    }

    // public function indexa()
    // {
    //     $response = Http::post("https://kipi.covid19.go.id/api/get-province");
    //     return $response->body();
    // }


}

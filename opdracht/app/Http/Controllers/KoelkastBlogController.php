<?php

namespace App\Http\Controllers;

use App\Models\KoelkastBlog;
use App\Models\Reparatie;
use App\Models\Verzekering;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class KoelkastBlogController extends Controller
{
    public function index()
    {
        $koelkasten = DB::table('koelkast_blog')
        ->join('verzekering', 'verzekering.koelkast_id', '=', 'koelkast_blog.id')
        ->get();
        $reparaties = DB::table('reparatie')->get();
            return view('index', [
            'reparaties' => $reparaties, 
            'koelkasten' => $koelkasten
        ]);
    }

    public function create()
    {
        return view('koelkast.create');
    }

    public function create2()
    {
        return view('reparatie.create');
    }

   
    public function store(Request $request)
    {
        $koelkast_id = DB::table('koelkast_blog')->insertGetId([
            'merk' => $request->merk,
            'beschrijving' => $request->beschrijving,
            'artikelnummer' => $request->artikelnummer,
            'prijs' => $request->prijs,
            'afmetingen' => $request->afmetingen,
            'aantal' => $request->aantal,
            'inhoud' => $request->inhoud
        ]);

        DB::table('verzekering')->insert([
            'koelkast_id' => $koelkast_id,
            'waterschade' => $request->waterschade,
            'diefstal' => $request->diefstal
        ]);

        return redirect('/');
    }

    public function store2(Request $request)
    {
        DB::table('reparatie')->insert([
            'naam' => $request->naam,
            'adres' => $request->adres,
            'email' => $request->email,
            'telefoonnummer' => $request->telefoonnummer
        ]);

        return redirect('/');

    }

    public function show($id)
    {
        return $id;
    }

    
    public function edit($id)
    {
        $koelkast = KoelkastBlog::findOrFail($id);
        return view('koelkast.edit', [
          'koelkast' => $koelkast
        ]);
    }

    public function edit2($id)
    {
        $reparatie = Reparatie::findOrFail($id);
        return view('reparatie.edit', [
          'reparatie' => $reparatie
        ]);
    }
    
    public function update(Request $request, KoelkastBlog $koelkast)
    {
        DB::table("koelkast_blog")->where("id", '=', $request->id)->update([
            'merk' => $request->merk,
            'beschrijving' => $request->beschrijving,
            'artikelnummer' => $request->artikelnummer,
            'prijs' => $request->prijs,
            'afmetingen' => $request->afmetingen,
            'aantal' => $request->aantal,
            'inhoud' => $request->inhoud,
        ]);

        return redirect('/');
    }

    public function update2(Request $request, Reparatie $reparatie)
    {
        DB::table("reparatie")->where("id", '=', $request->id)->update([
            'naam' => $request->naam,
            'adres' => $request->adres,
            'email' => $request->email,
            'telefoonnummer' => $request->telefoonnummer
        ]);
        return redirect('/');

    }
    public function destroy($id)
    {
        $koelkast = KoelkastBlog::findOrFail($id);
        $koelkast->delete();
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Warung;
use Illuminate\Http\Request;

class WarungController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $warung;
    function __construct() {
        $this->warung = new Warung();
    }
    
    public function index()
    {
        $warung = Warung::all();
        return view('warung.index', compact('warung'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('warung.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $rules = [
            'nama' => 'max:10|min:3',
            'berat' => 'max:10|min:3',
        ];
        $validate =[
            'max' => ' maximal 10 kata',
            'min' => ' minimal 3 kata',
        ];
        $request->validate($rules,$validate);
        $this->warung->nama = $request->nama;
        $this->warung->berat = $request->berat;
        $this->warung->save();
        return redirect()->route('warung.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Warung $warung)
    {
        return view('warung.show', compact('warung'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Warung $warung)
    {
        return view('warung.edit', compact('warung'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $update = Warung::findOrFail($id);
        
        $rules = [
            'nama' => 'required|max:10|min:3',
            'berat' => 'required|max:10|min:3',
        ];
    
        $messages = [
            'nama.max' => 'Nama barang maksimal 10 karakter',
            'nama.min' => 'Nama barang minimal 3 karakter',
            'berat.max' => 'Berat barang maksimal 10 karakter',
            'berat.min' => 'Berat barang minimal 3 karakter',
        ];
    
        $request->validate($rules, $messages);
    
        $update->nama = $request->nama;
        $update->berat = $request->berat;
    
        if ($update->isDirty()) {
            $update->save();
        }
    
        return redirect()->route('warung.index');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $warung = Warung::findOrFail($id);
        $warung->delete();
        return redirect()->route('warung.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\secretaria;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\RedirectResponse as HttpFoundationRedirectResponse;

class SecretariaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $secretarias = secretaria::latest()->paginate(4);
        return view('index', ['secretarias'=> $secretarias ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        secretaria::create($request->all());
        return redirect()->route('secretaria.index')->with('success', 'Nuevo archivo creado exitosamente'); 
         
    }

    /**
     * Display the specified resource.
     */
    public function show(secretaria $secretaria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(secretaria $secretarium): View
    {
        
        return view('edit', ['secretaria' => $secretarium]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, secretaria $secretaria):RedirectResponse
    
    {
        $secretaria->update([
            'name' => $request->input('name'),
            'archive' => $request->input('archive'),
            'description' => $request->input('description'),
            // Agrega aquí otros campos si es necesario
        ]);
    
        return redirect()->route('secretaria.index')->with('success', 'Archivo actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(secretaria $secretarium): RedirectResponse
    {
       $secretarium->delete();
       return redirect()->route('secretaria.index')->with('success', 'Nuevo archivo eliminada exitosamente'); 
    }
}

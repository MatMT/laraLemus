<?php

namespace App\Http\Controllers;

use App\Models\Furgon\Furgon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $furgon = new Furgon();

        $furgon->id_placa = 'ABC123';
        $furgon->vin = '12345678901234567890';
        $furgon->id_marca_furg = 1;
        $furgon->id_color_furg = 1;
        $furgon->suspensiones = 'Suspensiones';
        $furgon->puertas_cortinas = 'Puertas y Cortinas';
        $furgon->propiedas = 'Propiedades';
        $furgon->refendada = 'Refendada';
        $furgon->permiso_salud = 'Permiso de Salud';
        $furgon->dimensiones = 'Dim';
        $furgon->altura_maxima = 10.5;
        $furgon->tipo_techo = 'Techo';
        $furgon->tipo_rieles = 'Rieles';
        $furgon->tipo_tadem = 'Tadem';
        $furgon->tipo_rin = 'Rin';
        $furgon->tipo_piso = 'Piso';
        $furgon->durmientes = 'Durmientes';
        $furgon->perfil_llantas = 'Perfil de Llantas';
        $furgon->cinta_reflectiva = 'Cinta Reflectiva';
        $furgon->predes_internas = 'Predes Internas';
        $furgon->granada = 'Granada';
        $furgon->plancha = 'Plancha';
        $furgon->rotulado = true;

        // Test de Modelos
        dd($furgon);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();

        return view('index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'marca' => 'required|min:3',
                'modello' => 'required|min:2',
                'targa' => 'required|size:7',
                'nome_proprietario' => 'nullable|min:3',
                'cognome_proprietario' => 'nullable|min:3',
            ]
        );

        $data = $request->all();

        $newCar = new Car();
        $newCar->marca = $data['marca'];
        $newCar->modello = $data['modello'];
        $newCar->targa = $data['targa'];
        $newCar->nome_proprietario = $data['nome_proprietario'];
        $newCar->cognome_proprietario = $data['cognome_proprietario'];
        $newCar->save();

        return redirect()->route('cars.index')->with('Veicolo aggiunto');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
    
        return view('show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return view('edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $request->validate(
            [
                'marca' => 'required|min:3',
                'modello' => 'required|min:2',
                'targa' => 'required|size:7',
                'nome_proprietario' => 'nullable|min:3',
                'cognome_proprietario' => 'nullable|min:3',
            ]
        );

        $data = $request->all();

        $car->update($data);
        $car->save();

        return redirect()->route('cars.index')->with('Modifica Salvata con successo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();

        return redirect()->route('cars.index')->with('Articolo eliminato con successo');
    }
}

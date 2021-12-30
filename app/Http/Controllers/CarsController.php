<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarsRequest;
use App\Models\Cars;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Response;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Cars[]|Collection
     */
    public function index()
    {
        return Cars::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CarsRequest $request
     * @return Response|void
     */
    public function store(CarsRequest $request)
    {
        return Cars::create($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param integer $id
     * @return Response
     */
    public function show(int $id): Response
    {
        return Cars::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CarsRequest $request
     * @param Cars $car
     * @return bool
     */
    public function update(CarsRequest $request, Cars $car): bool
    {
        $car->fill($request->validated());
        return $car->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Cars $car
     * @return Response
     */
    public function destroy(Cars $car): ?Response
    {
        if ($car->delete()) {
            return response(null, 404);
        }

        return null;
    }
}

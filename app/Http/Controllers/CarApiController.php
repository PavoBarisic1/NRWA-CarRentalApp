<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

/**
 * @OA\PathItem(
 *     path="/api/cars"
 * )
 */
class CarApiController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/cars",
     *     summary="Get a list of cars",
     *     tags={"Cars"},
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation"
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Bad request"
     *     )
     * )
     */
    public function index()
    {
        return response()->json(Car::all());
    }

    /**
     * @OA\Post(
     *     path="/api/cars",
     *     summary="Create a new car",
     *     tags={"Cars"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"CAR_NAME", "FUEL_TYPE", "CAPACITY", "PRICE", "CAR_IMG", "AVAILABLE"},
     *             @OA\Property(property="CAR_NAME", type="string"),
     *             @OA\Property(property="FUEL_TYPE", type="string"),
     *             @OA\Property(property="CAPACITY", type="integer"),
     *             @OA\Property(property="PRICE", type="number"),
     *             @OA\Property(property="CAR_IMG", type="string"),
     *             @OA\Property(property="AVAILABLE", type="boolean")
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Car created successfully"
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Bad request"
     *     )
     * )
     */
    public function store(Request $request)
    {
        $request->validate([
            'CAR_NAME' => 'required',
            'FUEL_TYPE' => 'required',
            'CAPACITY' => 'required|numeric',
            'PRICE' => 'required|numeric',
            'CAR_IMG' => 'required|string',
            'AVAILABLE' => 'required|boolean'
        ]);

        $car = Car::create($request->all());
        return response()->json($car, 201);
    }

    /**
     * @OA\Get(
     *     path="/api/cars/{id}",
     *     summary="Get a car by ID",
     *     tags={"Cars"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Car not found"
     *     )
     * )
     */
    public function show($id)
    {
        return response()->json(Car::findOrFail($id));
    }

    /**
     * @OA\Put(
     *     path="/api/cars/{id}",
     *     summary="Update a car",
     *     tags={"Cars"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"CAR_NAME", "FUEL_TYPE", "CAPACITY", "PRICE", "CAR_IMG", "AVAILABLE"},
     *             @OA\Property(property="CAR_NAME", type="string"),
     *             @OA\Property(property="FUEL_TYPE", type="string"),
     *             @OA\Property(property="CAPACITY", type="integer"),
     *             @OA\Property(property="PRICE", type="number"),
     *             @OA\Property(property="CAR_IMG", type="string"),
     *             @OA\Property(property="AVAILABLE", type="boolean")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Car updated successfully"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Car not found"
     *     )
     * )
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'CAR_NAME' => 'required',
            'FUEL_TYPE' => 'required',
            'CAPACITY' => 'required|numeric',
            'PRICE' => 'required|numeric',
            'CAR_IMG' => 'required|string',
            'AVAILABLE' => 'required|boolean'
        ]);

        $car = Car::findOrFail($id);
        $car->update($request->all());

        return response()->json($car, 200);
    }

    /**
     * @OA\Delete(
     *     path="/api/cars/{id}",
     *     summary="Delete a car",
     *     tags={"Cars"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="Car deleted successfully"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Car not found"
     *     )
     * )
     */
    public function destroy($id)
    {
        Car::destroy($id);
        return response()->json(null, 204);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

/**
 * @OA\PathItem(
 *     path="/api/users"
 * )
 */
class UserApiController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/users",
     *     summary="Get list of users",
     *     tags={"Users"},
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
        $users = User::all();
        return response()->json($users);
    }

    /**
     * @OA\Post(
     *     path="/api/users",
     *     summary="Create a new user",
     *     tags={"Users"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"FNAME", "LNAME", "LIC_NUM", "EMAIL", "PHONE_NUMBER", "PASSWORD", "GENDER"},
     *             @OA\Property(property="FNAME", type="string"),
     *             @OA\Property(property="LNAME", type="string"),
     *             @OA\Property(property="LIC_NUM", type="string"),
     *             @OA\Property(property="EMAIL", type="string", format="email"),
     *             @OA\Property(property="PHONE_NUMBER", type="string"),
     *             @OA\Property(property="PASSWORD", type="string", format="password"),
     *             @OA\Property(property="GENDER", type="string")
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="User created successfully"
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Bad request"
     *     )
     * )
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'FNAME' => 'required|string|max:255',
            'LNAME' => 'required|string|max:255',
            'LIC_NUM' => 'required|string|max:255',
            'EMAIL' => 'required|string|email|max:255|unique:users',
            'PHONE_NUMBER' => 'required|string|max:20',
            'PASSWORD' => 'required|string|min:8',
            'GENDER' => 'required|string|max:10',
        ]);

        $user = User::create($validated);
        return response()->json($user, 201);
    }

    /**
     * @OA\Get(
     *     path="/api/users/{id}",
     *     summary="Get a user by ID",
     *     tags={"Users"},
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
     *         description="User not found"
     *     )
     * )
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    /**
     * @OA\Put(
     *     path="/api/users/{id}",
     *     summary="Update a user",
     *     tags={"Users"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"FNAME", "LNAME", "LIC_NUM", "EMAIL", "PHONE_NUMBER", "PASSWORD", "GENDER"},
     *             @OA\Property(property="FNAME", type="string"),
     *             @OA\Property(property="LNAME", type="string"),
     *             @OA\Property(property="LIC_NUM", type="string"),
     *             @OA\Property(property="EMAIL", type="string", format="email"),
     *             @OA\Property(property="PHONE_NUMBER", type="string"),
     *             @OA\Property(property="PASSWORD", type="string", format="password"),
     *             @OA\Property(property="GENDER", type="string")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="User updated successfully"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="User not found"
     *     )
     * )
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'FNAME' => 'required|string|max:255',
            'LNAME' => 'required|string|max:255',
            'LIC_NUM' => 'required|string|max:255',
            'EMAIL' => 'required|string|email|max:255|unique:users,EMAIL,' . $id,
            'PHONE_NUMBER' => 'required|string|max:20',
            'PASSWORD' => 'nullable|string|min:8',
            'GENDER' => 'required|string|max:10',
        ]);

        $user = User::findOrFail($id);
        $user->update($validated);

        return response()->json($user);
    }

    /**
     * @OA\Delete(
     *     path="/api/users/{id}",
     *     summary="Delete a user",
     *     tags={"Users"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="User deleted successfully"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="User not found"
     *     )
     * )
     */
    public function destroy($id)
    {
        User::destroy($id);
        return response()->json(null, 204);
    }
}

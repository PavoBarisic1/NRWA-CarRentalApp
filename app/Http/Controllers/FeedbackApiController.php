<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

/**
 * @OA\PathItem(
 *     path="/api/feedbacks"
 * )
 */
class FeedbackApiController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/feedbacks",
     *     summary="Get list of feedbacks",
     *     tags={"Feedbacks"},
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
        $feedbacks = Feedback::all();
        return response()->json($feedbacks);
    }

    /**
     * @OA\Post(
     *     path="/api/feedbacks",
     *     summary="Create a new feedback",
     *     tags={"Feedbacks"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"content", "rating", "user_id"},
     *             @OA\Property(property="content", type="string"),
     *             @OA\Property(property="rating", type="integer"),
     *             @OA\Property(property="user_id", type="integer")
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Feedback created successfully"
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
            'content' => 'required|string',
            'rating' => 'required|integer',
            'user_id' => 'required|integer|exists:users,id'
        ]);

        $feedback = Feedback::create($validated);
        return response()->json($feedback, 201);
    }

    /**
     * @OA\Get(
     *     path="/api/feedbacks/{id}",
     *     summary="Get a feedback by ID",
     *     tags={"Feedbacks"},
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
     *         description="Feedback not found"
     *     )
     * )
     */
    public function show($id)
    {
        $feedback = Feedback::findOrFail($id);
        return response()->json($feedback);
    }

    /**
     * @OA\Put(
     *     path="/api/feedbacks/{id}",
     *     summary="Update a feedback",
     *     tags={"Feedbacks"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"content", "rating"},
     *             @OA\Property(property="content", type="string"),
     *             @OA\Property(property="rating", type="integer")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Feedback updated successfully"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Feedback not found"
     *     )
     * )
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'content' => 'required|string',
            'rating' => 'required|integer'
        ]);

        $feedback = Feedback::findOrFail($id);
        $feedback->update($validated);

        return response()->json($feedback);
    }

    /**
     * @OA\Delete(
     *     path="/api/feedbacks/{id}",
     *     summary="Delete a feedback",
     *     tags={"Feedbacks"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="Feedback deleted successfully"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Feedback not found"
     *     )
     * )
     */
    public function destroy($id)
    {
        Feedback::destroy($id);
        return response()->json(null, 204);
    }
}

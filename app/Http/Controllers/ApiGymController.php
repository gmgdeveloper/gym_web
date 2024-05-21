<?php

namespace App\Http\Controllers;

use App\Models\Gym;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

class ApiGymController extends Controller
{
    public function index(): JsonResponse
    {
        $members = Gym::all();
        return response()->json($members);
    }

    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'description' => 'required|string|max:255', // Corrected validation rule
            'contact' => 'required',
            'location' => 'required',
            'fees' => 'required',
            'timing_from' => 'required',
            'timing_to' => 'required',
            // Add other validation rules as needed
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $gym = Gym::create($request->all());
        return response()->json($gym, 201);
    }

    public function show(Gym $Gym): JsonResponse
    {
        return response()->json($Gym);
    }

    public function update(Request $request, Gym $gym): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'string',
            'description' => 'string|max:255',
            'contact' => 'string',
            'location' => 'string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Get the fields to update from the request
        $fieldsToUpdate = $request->only('name', 'description', 'contact', 'location');


        // Update the gym with the provided fields
        $gym->update($fieldsToUpdate);

        // Return the updated gym instance
        return response()->json($gym, 200);
    }
    public function destroy($id): JsonResponse
    {
        $gym = Gym::find($id);

        if (!$gym) {
            return response()->json(['status' => 404, 'message' => 'Data Not Found'], 404);
        }

        $gym->delete();
        return response()->json(['status' => 200, 'message' => 'Data Deleted Successfully'], 200);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{
    public function index()
    {
        // Load reviews with associated user and gym information
        $reviews = Review::with('user', 'gym')->orderByDesc('created_at')->get();
        return view('review.index', compact('reviews'));
    }

    public function create()
    {
        return view('review.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'feedback' => 'required|string',
            'rating' => 'required|numeric',
            'user_id' => 'required|exists:users,id',
            'gym_id' => 'required|exists:gyms,id',
        ]);

        // Create review record
        $review = Review::create($validatedData);

        return redirect()->route('review.index')->with('success', 'Review created successfully!');
    }

    public function edit(Review $review)
    {
        return view('review.edit', compact('review'));
    }

    public function update(Request $request, Review $review)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'status' => 'numeric',
        ]);

        // Update review record
        $review->update($validatedData);

        return redirect()->route('review.index')->with('success', 'Review updated successfully!');
    }

    public function destroy(Review $review)
    {
        $review->delete();
        return redirect()->route('review.index')->with('success', 'Review deleted successfully!');
    }
}

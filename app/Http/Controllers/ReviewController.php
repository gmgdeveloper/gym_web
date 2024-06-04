<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::with('user', 'gym')->orderByDesc('created_at')->get();
        return view('review.index', compact('reviews'));
    }

    public function create()
    {
        return view('review.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'feedback' => 'required|string',
            'facilities_rating' => 'required|numeric|min:1|max:5',
            'coaching_rating' => 'required|numeric|min:1|max:5',
            'atmosphere_rating' => 'required|numeric|min:1|max:5',
            'overall_rating' => 'required|numeric|min:1|max:5',
            'user_id' => 'required|exists:users,id',
            'gym_id' => 'required|exists:gyms,id',
        ]);

        $review = Review::create($validatedData);

        return redirect()->route('review.index')->with('success', 'Review created successfully!');
    }

    public function edit(Review $review)
    {
        return view('review.edit', compact('review'));
    }

    public function update(Request $request, Review $review)
    {
        // Update only the provided fields
        $review->fill($request->only([
            'feedback',
            'facilities_rating',
            'coaching_rating',
            'atmosphere_rating',
            'overall_rating',
            'status',
        ]))->save();

        return redirect()->route('review.index')->with('success', 'Review updated successfully!');
    }

    public function updateStatus(Request $request, $id)
    {
        // Find the review by its ID
        $review = Review::findOrFail($id);

        // Update the status based on the request value
        $review->status = $request->input('status');
        $review->save();

        return redirect()->route('review.index')->with('success', 'Review status updated successfully!');
    }

    public function destroy(Review $review)
    {
        $review->delete();
        return redirect()->route('review.index')->with('success', 'Review deleted successfully!');
    }
}

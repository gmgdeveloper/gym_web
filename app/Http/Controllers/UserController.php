<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $users = user::all();
        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }


    public function store(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email',
            'contact' => 'required',
            'location' => 'required',
            'profile' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max size 2MB
            'password' => 'required|confirmed', // Max size 2MB
        ]);

        // If validation fails, redirect back with errors and old input
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Handle image upload
        if ($request->hasFile('profile')) {
            // Get the file name with extension
            $fileNameWithExt = $request->file('profile')->getClientOriginalName();
            // Get just the file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get just the extension
            $extension = $request->file('profile')->getClientOriginalExtension();
            // File name to store
            $fileNameToMove = $fileName . '_' . time() . '.' . $extension;
            // Upload image
            $path = $request->file('profile')->move(public_path('profiles'), $fileNameToMove);

            $fileNameToStore = "profiles/" . $fileNameToMove;
        } else {
            $fileNameToStore = '../../assets/img/image_placeholder.jpg'; // Default image if no image is uploaded
        }

        // Create user record
        $user = new user;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->contact = $request->input('contact');
        $user->location = $request->input('location');
        $user->password = $request->input('password');
        $user->profile = $fileNameToStore; // Save the file path to the database
        $user->save();

        return redirect()->route('user.index')->with('success', 'user created successfully!');
    }

    public function show(user $user)
    {
        return view('user.show', compact('user'));
    }

    public function edit(user $user)
    {
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email',
            'contact' => 'required',
            'location' => 'required',
            'profile' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max size 2MB
        ]);

        // If validation fails, redirect back with errors and old input
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Find the user by ID
        $user = user::find($id);

        // Handle image upload
        if ($request->hasFile('profile')) {
            // Delete the old image if it exists
            if ($user->profile && file_exists(public_path($user->profile))) {
                unlink(public_path($user->profile));
            }

            // Get the file name with extension
            $fileNameWithExt = $request->file('profile')->getClientOriginalName();
            // Get just the file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get just the extension
            $extension = $request->file('profile')->getClientOriginalExtension();
            // File name to store
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            // Move the file to public/profiles
            $path = $request->file('profile')->move(public_path('profiles'), $fileNameToStore);
            // Save the path in the database
            $user->profile = 'profiles/' . $fileNameToStore;
        }

        // Update user record
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->contact = $request->input('contact');
        $user->location = $request->input('location');
        $user->save();

        return redirect()->route('user.index')->with('success', 'user updated successfully!');
    }


    public function destroy($id)
    {
        $user = user::find($id);

        if (!$user) {
            return redirect()->route('user.index')->with('error', 'user not found!');
        }

        $user->delete();
        return redirect()->route('user.index')->with('success', 'user deleted successfully!');
    }
}

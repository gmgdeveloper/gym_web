<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->get();
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
            'email' => 'required|email|unique:users,email',
            'contact' => 'required',
            'location' => 'required',
            'profile' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max size 2MB
            'password' => 'required|confirmed',
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
            $fileNameToStore = 'assets/img/image_placeholder.jpg'; // Default image if no image is uploaded
        }

        // Create user record
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->contact = $request->input('contact');
        $user->location = $request->input('location');
        $user->password = Hash::make($request->input('password'));
        $user->profile = $fileNameToStore; // Save the file path to the database
        $user->save();

        return redirect()->route('user.index')->with('success', 'User created successfully!');
    }

    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    public function profile(User $user)
    {
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'nullable|string',
            'email' => 'nullable|email|unique:users,email,' . $id,
            'contact' => 'nullable',
            'location' => 'nullable',
            'profile' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max size 2MB
            'password' => 'nullable|confirmed',
        ]);

        // If validation fails, redirect back with errors and old input
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Find the user by ID
        $user = User::findOrFail($id);

        // Handle image upload
        if ($request->hasFile('profile')) {
            // Delete the old image if it exists
            if ($user->profile && file_exists(public_path($user->profile)) && $user->profile !== 'assets/img/image_placeholder.jpg') {
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
        if ($request->filled('name')) {
            $user->name = $request->input('name');
        }
        if ($request->filled('email')) {
            $user->email = $request->input('email');
        }
        if ($request->filled('contact')) {
            $user->contact = $request->input('contact');
        }
        if ($request->filled('location')) {
            $user->location = $request->input('location');
        }
        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        $user->save();

        return redirect()->route('user.index')->with('success', 'User updated successfully!');
    }

    public function updateProfile(Request $request, $id)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'nullable|string',
            'email' => 'nullable|email|unique:users,email,' . $id,
            'contact' => 'nullable',
            'location' => 'nullable',
            'profile' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max size 2MB
            'password' => 'nullable|confirmed',
        ]);

        // If validation fails, redirect back with errors and old input
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Find the user by ID
        $user = User::findOrFail($id);

        // Handle image upload
        if ($request->hasFile('profile')) {
            // Delete the old image if it exists
            if ($user->profile && file_exists(public_path($user->profile)) && $user->profile !== 'assets/img/image_placeholder.jpg') {
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
        if ($request->filled('name')) {
            $user->name = $request->input('name');
        }
        if ($request->filled('email')) {
            $user->email = $request->input('email');
        }
        if ($request->filled('contact')) {
            $user->contact = $request->input('contact');
        }
        if ($request->filled('location')) {
            $user->location = $request->input('location');
        }
        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        $user->save();

        return redirect()->route('user.show', $id)->with('success', 'User updated successfully!');
    }


    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if ($user->profile && file_exists(public_path($user->profile)) && $user->profile !== 'assets/img/image_placeholder.jpg') {
            unlink(public_path($user->profile));
        }

        $user->delete();

        return redirect()->route('user.index')->with('success', 'User deleted successfully!');
    }
}

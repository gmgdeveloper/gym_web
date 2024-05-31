<?php

namespace App\Http\Controllers;

use App\Models\MainPage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CustomizeFrontendController extends Controller
{
    public function editMainPage()
    {
        $mainPage = MainPage::firstOrFail(); // Assuming there's only one main page record
        return view('customize.mainPage', compact('mainPage'));
    }

    public function updateMainPage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'S1_bg_img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'S1_heading_1' => 'nullable|string|max:255',
            'S1_heading_2' => 'nullable|string|max:255',
            'S1_link_text_1' => 'nullable|string|max:255',
            'S2_heading_1' => 'nullable|string|max:255',
            'S2_heading_2' => 'nullable|string|max:255',
            'placeholder_image_1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'placeholder_text_1' => 'nullable|string|max:255',
            'placeholder_image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'placeholder_text_2' => 'nullable|string|max:255',
            'placeholder_image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'placeholder_text_3' => 'nullable|string|max:255',
            'S2_link_text_1' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $mainPage = MainPage::firstOrFail();

        if ($request->hasFile('S1_bg_img')) {
            $imageName = Str::random(20) . '.' . $request->file('S1_bg_img')->getClientOriginalExtension();
            $request->file('S1_bg_img')->move(public_path('images'), $imageName);
            $mainPage->S1_bg_img = 'images/' . $imageName;
        }

        if ($request->hasFile('placeholder_image_1')) {
            $imageName = Str::random(20) . '.' . $request->file('placeholder_image_1')->getClientOriginalExtension();
            $request->file('placeholder_image_1')->move(public_path('images'), $imageName);
            $mainPage->placeholder_image_1 = 'images/' . $imageName;
        }

        if ($request->hasFile('placeholder_image_2')) {
            $imageName = Str::random(20) . '.' . $request->file('placeholder_image_2')->getClientOriginalExtension();
            $request->file('placeholder_image_2')->move(public_path('images'), $imageName);
            $mainPage->placeholder_image_2 = 'images/' . $imageName;
        }

        if ($request->hasFile('placeholder_image_3')) {
            $imageName = Str::random(20) . '.' . $request->file('placeholder_image_3')->getClientOriginalExtension();
            $request->file('placeholder_image_3')->move(public_path('images'), $imageName);
            $mainPage->placeholder_image_3 = 'images/' . $imageName;
        }

        $mainPage->S1_heading_1 = $request->input('S1_heading_1');
        $mainPage->S1_heading_2 = $request->input('S1_heading_2');
        $mainPage->S1_link_text_1 = $request->input('S1_link_text_1');
        $mainPage->S2_heading_1 = $request->input('S2_heading_1');
        $mainPage->S2_heading_2 = $request->input('S2_heading_2');
        $mainPage->placeholder_text_1 = $request->input('placeholder_text_1');
        $mainPage->placeholder_text_2 = $request->input('placeholder_text_2');
        $mainPage->placeholder_text_3 = $request->input('placeholder_text_3');
        $mainPage->S2_link_text_1 = $request->input('S2_link_text_1');

        $mainPage->save();

        return redirect()->route('mainpage.edit')->with('success', 'Main page updated successfully');
    }

    // Add methods for other pages if necessary
}

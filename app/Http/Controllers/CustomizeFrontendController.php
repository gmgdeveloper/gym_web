<?php

namespace App\Http\Controllers;

use App\Models\MainPage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CustomizeFrontendController extends Controller
{

    public function createMainPage()
    {
        return view('customize.createMainPage');
    }

    public function storeMainPage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            's1_bg_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            's1_heading_1' => 'nullable|string|max:255',
            's1_heading_2' => 'nullable|string|max:255',
            's1_link_text_1' => 'nullable|string|max:255',
            's2_heading_1' => 'nullable|string|max:255',
            's2_heading_2' => 'nullable|string|max:255',
            'placeholder_image_1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'placeholder_text_1' => 'nullable|string|max:255',
            'placeholder_image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'placeholder_text_2' => 'nullable|string|max:255',
            'placeholder_image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'placeholder_text_3' => 'nullable|string|max:255',
            's2_link_text_1' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $mainPage = new MainPage();

        $fields = [
            's1_heading_1',
            's1_heading_2',
            's1_link_text_1',
            's2_heading_1',
            's2_heading_2',
            'placeholder_text_1',
            'placeholder_text_2',
            'placeholder_text_3',
            's2_link_text_1'
        ];

        foreach ($fields as $field) {
            if ($request->filled($field)) {
                $mainPage->$field = $request->input($field);
            }
        }

        $imageFields = [
            's1_bg_img' => 'S1_bg_img',
            'placeholder_image_1' => 'placeholder_image_1',
            'placeholder_image_2' => 'placeholder_image_2',
            'placeholder_image_3' => 'placeholder_image_3'
        ];

        foreach ($imageFields as $requestField => $modelField) {
            if ($request->hasFile($requestField)) {
                $imageName = Str::random(20) . '.' . $request->file($requestField)->getClientOriginalExtension();
                $request->file($requestField)->move(public_path('images'), $imageName);
                $mainPage->$modelField = 'images/' . $imageName;
            }
        }

        $mainPage->save();

        return redirect()->route('mainpage.edit')->with('success', 'Main page created successfully');
    }

    public function editMainPage()
    {
        try {
            $mainPage = MainPage::firstOrFail(); // Assuming there's only one main page record
            return view('customize.mainPage', compact('mainPage'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()->route('mainpage.create');
        }
    }


    public function updateMainPage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            's1_bg_img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            's1_heading_1' => 'nullable|string|max:255',
            's1_heading_2' => 'nullable|string|max:255',
            's1_link_text_1' => 'nullable|string|max:255',
            's2_heading_1' => 'nullable|string|max:255',
            's2_heading_2' => 'nullable|string|max:255',
            'placeholder_image_1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'placeholder_text_1' => 'nullable|string|max:255',
            'placeholder_image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'placeholder_text_2' => 'nullable|string|max:255',
            'placeholder_image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'placeholder_text_3' => 'nullable|string|max:255',
            's2_link_text_1' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $mainPage = MainPage::firstOrFail();

        if ($request->hasFile('s1_bg_img')) {
            $imageName = Str::random(20) . '.' . $request->file('S1_bg_img')->getClientOriginalExtension();
            $request->file('S1_bg_img')->move(public_path('images'), $imageName);
            $mainPage->S1_bg_img = 'images/' . $imageName;
        }

        if ($request->hasFile('placeholder_img_1')) {
            $imageName = Str::random(20) . '.' . $request->file('placeholder_img_1')->getClientOriginalExtension();
            $request->file('placeholder_img_1')->move(public_path('mainpage_imgs'), $imageName);
            $mainPage->placeholder_img_1 = 'mainpage_imgs/' . $imageName;
        }

        if ($request->hasFile('placeholder_img_2')) {
            $imageName = Str::random(20) . '.' . $request->file('placeholder_img_2')->getClientOriginalExtension();
            $request->file('placeholder_img_2')->move(public_path('mainpage_imgs'), $imageName);
            $mainPage->placeholder_image_2 = 'mainpage_imgs/' . $imageName;
        }

        if ($request->hasFile('placeholder_img_3')) {
            $imageName = Str::random(20) . '.' . $request->file('placeholder_img_3')->getClientOriginalExtension();
            $request->file('placeholder_img_3')->move(public_path('mainpage_imgs'), $imageName);
            $mainPage->placeholder_image_3 = 'mainpage_imgs/' . $imageName;
        }

        $mainPage->S1_heading_1 = $request->input('s1_heading_1');
        $mainPage->S1_heading_2 = $request->input('s1_heading_2');
        $mainPage->S1_link_text_1 = $request->input('s1_link_text_1');
        $mainPage->S2_heading_1 = $request->input('s2_heading_1');
        $mainPage->S2_heading_2 = $request->input('s2_heading_2');
        $mainPage->placeholder_text_1 = $request->input('placeholder_text_1');
        $mainPage->placeholder_text_2 = $request->input('placeholder_text_2');
        $mainPage->placeholder_text_3 = $request->input('placeholder_text_3');
        $mainPage->S2_link_text_1 = $request->input('s2_link_text_1');

        $mainPage->save();

        return redirect()->route('mainpage.edit')->with('success', 'Main page updated successfully');
    }

    // Add methods for other pages if necessary
}

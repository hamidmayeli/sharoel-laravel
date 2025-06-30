<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadGalleryImageRequest;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Support\Str;

class GalleryManagementController extends Controller
{
    public function index()
    {
        return view('admin.gallery.index');
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin.gallery.upload', compact('categories'));
    }

    public function store(UploadGalleryImageRequest $request)
    {
        $file = $request->file('image');
        $image = new Image;
        $image->category()->associate(Category::where('slug', $request->string('category')->trim())->first());
        $image->save();
        $image->addMedia($file)
            ->usingFileName(Str::random(40) . '.' . $file->getClientOriginalExtension())
            ->toMediaCollection('images');

        return redirect()->route('admin.gallery.index');
    }
}

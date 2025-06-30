<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Image;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class Gallery extends Component
{
    use WithPagination;

    public $cat = '';

    public function updatedCat()
    {
        $this->resetPage();
    }

    public function render()
    {
        $categories = Category::all();
        $images = Image::when($this->cat, function (Builder $query) {
            $query->whereBelongsTo(Category::where('slug', $this->cat)->first());
        })->latest()->paginate();

        return view('livewire.gallery', compact('images', 'categories'));
    }

    public function delete(Image $image)
    {
        $image->delete();
    }

    public function make_it_main_image(Image $image)
    {
        $category = $image->category()->first();
        $category->mainImage()->associate($image);
        $category->save();
    }
}

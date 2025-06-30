<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Image;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

class InfiniteImageList extends Component
{
    use WithoutUrlPagination,WithPagination;

    public array $images;

    private $currentPage;

    public string $category = '';

    public function updatedPage($page)
    {
        $this->currentPage = Image::when($this->category, function (Builder $query) {
            $query->whereBelongsTo(Category::where('slug', $this->category)->first());
        })->latest()->paginate(10, ['*'], 'page', $page);
        $this->images = array_merge($this->images, $this->currentPage->items());
    }

    public function mount()
    {
        $this->currentPage = Image::when($this->category, function (Builder $query) {
            $query->whereBelongsTo(Category::where('slug', $this->category)->first());
        })->latest()->paginate(10, ['*'], 'page', $this->getPage());
        $this->images = $this->currentPage->items();
    }

    public function loadMore()
    {
        $this->nextPage();
    }

    public function render()
    {
        return view('livewire.infinite-image-list', ['images' => $this->images, 'currentPage' => $this->currentPage]);
    }
}

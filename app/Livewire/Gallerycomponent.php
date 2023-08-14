<?php

namespace App\Livewire;
use Livewire\Attributes\Url;
use App\Models\GalleryModel;
use Livewire\Component;
use Livewire\WithPagination;

class Gallerycomponent extends Component
{
   

    public $search;
 
    protected $queryString = ['search'];


  


    use WithPagination;
    public function render()
    {
        return view('livewire.gallerycomponent', [
            'gallery' => GalleryModel::where('title', 'like', '%'.$this->search.'%')->paginate(12),
        ]);
    }
}
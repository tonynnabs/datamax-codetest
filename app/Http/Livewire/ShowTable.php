<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ShowTable extends Component
{
    public $books;
    public $records;
    public $pageSize;
    public $search;

    public function mount()
    {
        $this->records = $this->books;
    }

    public function render()
    {
        if($this->search && $this->search != ''){
            $this->books = $this->records->filter(function ($book) {
                return false !== stristr($book['name'], $this->search);
            })->take($this->pageSize);
        }else{
            $this->books = $this->records->take($this->pageSize);
        }
        return view('livewire.show-table');
    }
}

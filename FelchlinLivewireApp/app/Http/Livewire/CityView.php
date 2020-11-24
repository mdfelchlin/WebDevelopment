<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Domain\CityAnalyzer;
use App\City;

class CityView extends Component
{
    public $sortBy = 'name';
    public $direction = 'asc';
    public $search = '';
    protected $updatesQueryString = ['search' => ['except' => '']];

    public function mount() {
        $this->search = request()->query('search', $this->search);
    }

    public function doSort($field, $direction) {
        $this->sortBy = $field;
        $this->direction = $direction;
    }

    public function render()
    {
        $cities = City::where('name', 'like', "%$this->search%")
                        ->orwhere('state', 'like', "%$this->search%")
                        ->orderby($this->sortBy, $this->direction);

        return view('livewire.city-view', ['cities' => $cities->get()]);
    }
}

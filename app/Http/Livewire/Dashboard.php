<?php

namespace App\Http\Livewire;

use App\Models\Commune;
use App\Models\Customer;
use App\Models\District;
use App\Models\Option;
use App\Models\Province;
use App\Models\Sector;
use App\Models\Service;
use App\Models\ServiceType;
use App\Models\Village;
use Livewire\Component;

class Dashboard extends Component
{

    public $dateKh, $dateGen;


    protected $rules = [

        'dateGen' => 'required',
        'dateKh' => 'required',

    ];


    public function updated($propertyName)
    {

        $this->validateOnly($propertyName);

    }

    public function mount(){

        $this->dateKh = Option::where('key','date_kh')->first()['name'];
        $this->dateGen = Option::where('key','date_gen')->first()['name'];

    }

    public function save()
    {

        $this->validate();

        $option = Option::where('key','date_kh')->first();
        $option->name = $this->dateKh;
        $option->save();

        $option = Option::where('key','date_gen')->first();
        $option->name = $this->dateGen;
        $option->save();

        $this->msgSuccess();

    }

    public function render()
    {

        return view('dashboard');

    }

    public function msgSuccess(){
        $this->alert('success', 'Save success!', [
              'position' =>  'center-end',
              'timer' =>  '2000',
              'toast' =>  true,
              'text' =>  '',
              'confirmButtonText' =>  'Ok',
              'cancelButtonText' =>  'Cancel',
              'showCancelButton' =>  false,
              'showConfirmButton' =>  false,
        ]);

    }

}

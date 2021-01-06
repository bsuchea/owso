<?php

namespace App\Http\Livewire;

use App\Models\Commune;
use App\Models\Customer;
use App\Models\District;
use App\Models\Province;
use App\Models\Service;
use App\Models\ServiceType;
use App\Models\Village;
use Livewire\Component;

class CreateService extends Component
{

    public $customer_namekh, $customer_nameen,
        $customer_province,
        $customer_district,
        $customer_commune,
        $customer_village,
        $customer_street,
        $customer_group,
        $customer_home,
        $customer_phone,
        $customer_email,
        $gender, $dob, $national_id, $national = 'ខ្មែរ';

    public $service_type,
        $business_type,
        $brand_name_kh,
        $brand_name_en,
        $commune,
        $village,
        $street,
        $group,
        $home,
        $phone,
        $email;

    protected $rules = [

        'customer_namekh' => 'required',
        'customer_nameen' => 'required',
        'customer_village' => 'required',
        'gender' => 'required',
        'dob' => 'required',
        'national_id' => 'required',
        'national' => 'required',
        'customer_phone' => 'required',
        'service_type' => 'required',
        'business_type' => 'required',
        'brand_name_kh' => 'required',
        'village' => 'required',
        'phone' => 'required',

    ];

    public function updated($propertyName)
    {

        $this->validateOnly($propertyName);

    }

    public function saveService()
    {

        $this->validate();

        $service = new Service();
        $service->service_type_id = $this->service_type;
        $service->sector_id = 1;
        $service->brand_namekh = $this->brand_name_kh;
        $service->brand_nameen = $this->brand_name_en;
        $service->business_type = $this->business_type;
        $service->phone = $this->phone;
        $service->home = $this->home;
        $service->group = $this->group;
        $service->street = $this->street;
        $service->village_id = $this->village;
        $service->commune_id = $this->commune;
        $service->save();

        $customer = new Customer();
        $customer->namekh = $this->customer_namekh;
        $customer->nameen = $this->customer_nameen;
        $customer->gender = $this->gender;
        $customer->dob = $this->dob;
        $customer->phone = $this->customer_phone;
        $customer->email = $this->customer_email;
        $customer->home = $this->customer_home;
        $customer->group = $this->customer_group;
        $customer->village_id = $this->customer_village;
        $customer->commune_id = $this->customer_commune;
        $customer->district_id = $this->customer_district;
        $customer->province_id = $this->customer_province;
        $customer->save();

        $this->clearForm();

        $this->successMsg = 'ព័ត៌មានរបស់លោកអ្នកត្រូវបានរក្សាទុកដោយជោគជ័យ!';


    }

    public function render()
    {
        $ser_type = ServiceType::where('sector_id', '=', 1)->get();
        $pro = Province::all();
        $dis = District::where('province_id', '=', $this->customer_province)->get();
        $com = Commune::where('district_id', '=', $this->customer_district)->get();
        $vil = Village::where('commune_id', '=', $this->customer_commune)->get();


        $com2 = Commune::where('district_id', '=', 203)->get();
        $vil2 = Village::where('commune_id', '=', $this->commune)->get();

//        dd($ser_type);

        return view('livewire.create-service')->with([
            'ser_type' => $ser_type,
            'pro' => $pro,
            'dis' => $dis,
            'com' => $com,
            'vil' => $vil,
            'com2' => $com2,
            'vil2' => $vil2,
        ]);

    }

//    public function del( $id ){
//
//        Service::destroy($id);
//        Customer::destroy($id);
//
//    }

    public function clearForm(){

        $this->reset();

    }


}

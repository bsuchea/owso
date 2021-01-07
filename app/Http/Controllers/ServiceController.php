<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function printLic($id){

        $cus = Customer::find($id);

        $ser = Service::find($id);
        $ser_type = $ser->serviceType()->first();
        $com2 = $ser->commune()->first();
        $vil2 = $ser->village()->first();

        return view("livewire.service.l$ser->sector_id")->with([
            'cus' => $cus,
            'ser' => $ser,
            'ser_type' => $ser_type,
            'com2' => $com2,
            'vil2' => $vil2,
        ]);

    }

    public function printDis($id){

        $cus = Customer::find($id);

        $pro = $cus->province()->first();
        $dis = $cus->district()->first();
        $com = $cus->commune()->first();
        $vil = $cus->village()->first();

        $ser = Service::find($id);
        $ser_type = $ser->serviceType()->first();
        $com2 = $ser->commune()->first();
        $vil2 = $ser->village()->first();

        return view("livewire.service.d$ser->sector_id")->with([
            'cus' => $cus,
            'pro' => $pro,
            'dis' => $dis,
            'com' => $com,
            'vil' => $vil,
            'ser' => $ser,
            'ser_type' => $ser_type,
            'com2' => $com2,
            'vil2' => $vil2,
        ]);

    }

}

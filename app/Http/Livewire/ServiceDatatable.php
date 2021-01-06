<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class ServiceDatatable extends LivewireDatatable
{
    public function builder()
    {

        return Service::query()
            ->join('customers','customers.id', 'services.id')
            ->join('service_type','service_type.id', 'services.service_type_id');

    }

    public function columns()
    {
        return [
            Column::name('id')
                ->defaultSort('desc')
                ->hide(),
            Column::raw('CONCAT(customers.namekh , " (", customers.nameen , ")") AS planetName')->label('ឈ្មោះអាជីវករ')
                ->searchable(),
            Column::name('brand_namekh')->label('នាមករណ៍')
                ->searchable(),
            Column::name('service_type.namekh')->label('សេវាកម្ម')
                ->searchable(),
            Column::name('business_type')->label('ប្រភេទអាជីវកម្ម')
                ->searchable(),
            Column::name('phone')->label('លេខទូរស័ព្ទ')
                ->searchable(),
            Column::callback(['id'], function ($id) {
                return view('culture.table-actions', ['id' => $id]);
            })->label('សកម្មភាព'),
            Column::delete()
        ];
    }

    public function delete($id)
    {
        Service::destroy($id);
        Customer::destroy($id);
    }

}
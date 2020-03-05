<?php

namespace App\Exports;

use App\UnidadModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;

class UnidadExport implements FromCollection
{

    use Exportable;

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return UnidadModel::all();
    }
}

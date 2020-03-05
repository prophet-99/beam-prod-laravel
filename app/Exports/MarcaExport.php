<?php

namespace App\Exports;

use App\MarcaModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;

class MarcaExport implements FromCollection{

    use Exportable;

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return MarcaModel::all();
    }
}

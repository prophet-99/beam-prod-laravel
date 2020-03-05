<?php

namespace App\Exports;

use App\CategoriaModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;

class CategoriaExport implements FromCollection
{

    use Exportable;
    
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return CategoriaModel::all();
    }
}

<?php

namespace App\Exports;

use App\Enrollment;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class EnrollmentExport implements FromQuery
{
    use Exportable;
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    
    public function query()
    {
        return Enrollment::query()->where('id', $this->id);
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Enrollment::all();
    }
}

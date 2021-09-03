<?php

namespace App\Exports;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class SearchPlayerExport implements  FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return  Session::get('exportPlayer');
    }
    public function map($registration) : array {
        // dd($registration->personalInfo->player_state);
        return [
            $registration->id,
            $registration->basicInfo->high_school ?? "-",
            $registration->basicInfo->height ?? "-",
            $registration->basicInfo->weight ?? "-",
            $registration->basicInfo->special_team_position ?? "-",
            $registration->personalInfo->player_city??'-',
            $registration->personalInfo->player_country ?? "-",
            $registration->personalInfo->player_state ?? "-"
        ] ;


    }

    public function headings() : array {
        return [
            'id',
            'high school',
            'Hieght',
            'Width',
            'Position',
            'City',
            'County',
            'Commit Status',
        ] ;
    }
}

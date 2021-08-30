<?php

namespace App\Exports;

use App\Models\User;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class UsersExport implements  FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::with('basicInfo',
        'scholarshipOffer',
        'personalInfo',
        'combineResult',
        'academicInfo',
        'userLink',
        'honorAward',
        'playerEvaluation'
    )->get();
    }
    public function map($registration) : array {
        return [
            $registration->name,
            $registration->email,
            $registration->type,
            $registration->user_status,

        ] ;


    }

    public function headings() : array {
        return [
           'Name',
           'Email',
           'Type',
           'user status',
        ] ;
    }
}

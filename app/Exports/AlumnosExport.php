<?php

namespace App\Exports;

use App\Models\Alumnos;
//se Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class AlumnosExport implements FromView, ShouldAutoSize
{
   use Exportable;


   public function view(): View
   {
       return view('export', ['alumnos'=> Alumnos::all()]);
   }
}

<?php

namespace App\Http\Controllers;

use App\Models\Contratistas;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;


class ContController extends Controller
{
    public function exportPdf()
    {
        $index = Contratistas::get();
        $pdf = PDF::loadView('contratistas.index', compact('index'));

        return $pdf->download('contratista-list-pdf');
    }
}

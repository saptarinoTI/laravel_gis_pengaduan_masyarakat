<?php

namespace App\Http\Controllers;

use App\Models\Tanggapan;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class GenerateReportController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $tgl = $request->tanggal;
        $reports = Tanggapan::whereDate('tgl_tanggapan', '>=', $tgl)->get();
        $pdf = Pdf::loadView('report.index', compact('reports'));
        return $pdf->download('report_' . $tgl . '_to_' . now());
    }
}

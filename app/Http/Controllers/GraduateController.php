<?php

namespace App\Http\Controllers;

use App\Models\Graduate;
use Illuminate\Http\Request;
use Inertia\Inertia;

class GraduateController extends Controller
{
    public function index(Request $request)
    {
        $years = Graduate::select('year')->orderBy('year')->groupBy('year')->pluck('year');

        $graduates = Graduate::when($request->year, function($query, $year) {
                return $query->where('year', $year);
            })
            ->when($request->search, function($query, $search) {
                return $query->where('name', 'LIKE', '%'.$search.'%');
            })
            ->orderBy('year')
            ->orderBy('name')
            ->paginate(25);

        
        return Inertia::render('Profile/Graduate', [
            'graduates' => $graduates,
            'years' => $years,
        ]);
    }
}

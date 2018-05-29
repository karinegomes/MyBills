<?php

namespace App\Http\Controllers;

use App\Http\Requests\PeriodRequest;
use App\Models\Period;
use Illuminate\Http\Request;

class PeriodController extends Controller
{
    public function index()
    {
        return view('periods.index');
    }

    public function store(PeriodRequest $request)
    {
        Period::create($request->all());

        $periods = Period::ordered()->get();

        return compact('periods');
    }

    public function update(Period $period, PeriodRequest $request)
    {
        $period->update($request->all());

        $periods = Period::ordered()->get();

        return compact('periods');
    }

    public function ajaxGetAll()
    {
        return Period::ordered()->get();
    }
}

<?php

namespace App\Http\Controllers;

use App\Location\City;
use App\Location\District;
use App\Location\Province;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function province():JsonResponse
    {
        return response()->json(Province::orderBy('name', 'ASC')->get());
    }
    
    /**
     * Get cities based on selected province
     *
     * @return string JSON
     */
    public function city(): JsonResponse
    {
        $cities = City::whereProvinceId(request('province'))
            ->orderBy('name', 'ASC')
            ->get();

        return response()->json($cities);
    }

    public function district(): JsonResponse
    {
        $districts = District::whereCityId(request('city'))
            ->orderBy('name', 'ASC')
            ->get();

        return response()->json($districts);
    }

    public function form(): View
    {
        return view('location.form')
            ->withTitle('Lokasi');
    }

    public function submit(Request $request)
    {
        $this->validate($request, [
            'province' => 'required|integer|exists:provinces,id',
            'city' => 'required|integer|exists:cities,id',
            'district' => 'required|integer|exists:districts,id',
        ]);

        // do something here

        return response()->json([
            'status' => true,
            'message' => 'Semua data valid.',
        ]);
    }
}

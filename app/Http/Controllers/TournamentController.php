<?php

namespace App\Http\Controllers;

use App\Age;
use App\City;
use App\District;
use App\Promotor;
use App\Province;
use App\Team;
use App\Tournament;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tournaments = Tournament::all();

        return view('tournament.index',compact('tournaments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ages = Age::all();
        $promotor = Promotor::where('user_id',auth()->id())->get();
        // $provinces = Province::all();
        // $cities = City::all();
        // $districts = District::all();

        return view('tournament.create',compact('promotor','ages'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $tournaments = Tournament::create([
                'title' => $request['title'],
                'description' => $request['description'],
                'minPrice' => $request['minPrice'],
                'maxPrice' => $request['maxPrice'],
                'minAge' => $request['minAge'],
                'maxAge' => $request['maxAge'],
                'dateRegisLimit' => $request['dateRegisLimit'],
                'dateInitial' => $request['dateInitial'],
                'dateFinal' => $request['dateFinal'],
                'district_id' => '1',
                'user_id' => auth()->id(),
            ]);
            return redirect('tournament');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        if (Gate::allows('isPromotor')) {
            $tournaments = Tournament::with(['district.city.province','user.promotor'])->where('user_id',auth()->id())->get();
        }elseif (Gate::allows('isAdmin')) {
            $tournaments = Tournament::all();
        } elseif(Gate::allows('isMember')) {
            $teams = Team::with(['tournament.district.city.province'])->where('user_id',auth()->id())->get();
            return view('tournament.list', compact('teams'));
        }
        return view('tournament.list', compact('tournaments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    /**
     * Show deatil the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail( $id ,$title)
    {
        $tournaments = Tournament::where('id',$id)->get();

        return view('tournament.detail', compact('tournaments'));
    }
    
}

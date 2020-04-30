<?php

namespace App\Http\Controllers;

use App\Team;
use App\Tournament;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function formUpgrade()
    {
        return view('promotor.register');
    }

    /**
     * Show deatil the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function prosesUpgrade(Request $request)
    {
        return view('tournament.register');
    }

    /**
     * Show deatil the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function formRegisterTournament($title)
    {
        $tournaments = Tournament::where('title',$title)->get();
        return view('tournament.register', compact('tournaments'));
    }
    
    /**
     * Store register tournament
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function prosesRegisterTournament(Request $request,$id)
    {
        $team = Team::create([
            'team_name' => $request['team_name'],
            'tournament_id' => $id,
            'user_id' => auth()->id(),
        ]);

        return redirect('tournament');
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\ViewModels\PeoplesViewModel;
use App\ViewModels\PersonViewModel;

class PeoplesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($page=1)
    {
        abort_if($page>500 , 204);

        $suffix = config('services.MovieDB.token');
        $httpRequest = 'https://api.themoviedb.org/3/person/popular?api_key='.$suffix."&page=".$page ;
        $people = Http::get($httpRequest)->json()['results'];
        // dump($httpRequest);
        $viewModel = new PeoplesViewModel(
            $people,
            $page
        );
        return view('people.index', $viewModel);
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
        $suffix = config('services.MovieDB.token');
        $httpRequest = 'https://api.themoviedb.org/3/person/'.$id.'?api_key='.$suffix ;
        $actor = Http::get($httpRequest)->json();

        $httpRequest = 'https://api.themoviedb.org/3/person/'.$id.'/external_ids'.'?api_key='.$suffix ;
        $social = Http::get($httpRequest)->json();

        $httpRequest = 'https://api.themoviedb.org/3/person/'.$id.'/combined_credits'.'?api_key='.$suffix ;
        $credits = Http::get($httpRequest)->json();

        $viewModel = new PersonViewModel(
            $actor, $social, $credits
        );
        return view('people.show', $viewModel);
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
}

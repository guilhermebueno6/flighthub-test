<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Facades\Http;

class DashController extends Controller
{
     /**
     * Show the profile for a given user.
     */
    public function show(): View
    {
        $planetsData = Http::get('swapi.dev/api/planets/');
        $starshipsData = Http::get('swapi.dev/api/starships/');
        $planets = $planetsData['results'];
        $starships = $starshipsData['results'];

        return view('dashboard', [
            'planets' => $planets,
            'starships' => $starships
            ]);
    }

    public function search($string)
    {
        $url = Http::get('swapi.dev/api/people/?search=' . $string);
        $searchData = $url['results'];

        return json_encode($searchData);
        
    }

    public function getAll()
    {
        $peopleData = Http::get('swapi.dev/api/people/');
        $people = $peopleData['results'];
        return json_encode($people);
    }
}

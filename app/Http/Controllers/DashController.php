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
        return view('dashboard');
    }

    public function search($string)
    {
        $url = Http::get('swapi.dev/api/people/?search=' . $string);
        $searchData = $url['results'];

        return json_encode($searchData);
        
    }

    public function people($page = '')
    {

        $peopleData = Http::get('https://swapi.dev/api/people/?page=' . $page);
        $people = $peopleData['results'];
        $next = $peopleData['next'];
        $prev = $peopleData['previous'];

        return json_encode(['people' => $people, 'next' => $next, 'previous' => $prev]);
    }

    public function planets($page = '')
    {

        $planetsData = Http::get('https://swapi.dev/api/planets/?page=' . $page);
        $planets = $planetsData['results'];
        $next = $planetsData['next'];
        $prev = $planetsData['previous'];

        return json_encode(['planets' => $planets, 'next' => $next, 'previous' => $prev]);
    }

    public function starships($page = '')
    {

        $starshipsData = Http::get('https://swapi.dev/api/starships/?page=' . $page);
        $starships = $starshipsData['results'];
        $next = $starshipsData['next'];
        $prev = $starshipsData['previous'];

        return json_encode(['starships' => $starships, 'next' => $next, 'previous' => $prev]);
    }
}

<?php

namespace App\Http\Controllers\ClientSide;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function resident_home(){

        if (!session()->has("resident")) {
            return redirect("/barangay/login");
        }

        return view('pages.ClientSide.userdashboard.homepage');
    }

    public function home(){
        // return view ('user.home');
        $residents = DB::table('admin_residents')->count();
        $voter = DB::table('admin_residents')
          ->where('voter_status', '=', 'Voter')->count();
        $nonvoter = DB::table('admin_residents')
          ->where('voter_status', '=', 'Non Voter')->count();
        $senior = DB::table('admin_residents')
          ->where('age', '>', '59')->count();
        return view('user.home', ['residents' => $residents, 'senior' => $senior, 'voter' => $voter, 'nonvoter' => $nonvoter]);

    }

    public function resident_news(){

        if (!session()->has("resident")) {
            return redirect("/barangay/login");
        }

        return view('pages.ClientSide.userdashboard.news');
    }

    public function resident_info(){

        if (!session()->has("resident")) {
            return redirect("/barangay/login");
        }

        return view('pages.ClientSide.userdashboard.info');
    }
}

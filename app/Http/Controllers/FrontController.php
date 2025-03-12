<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Service;
use App\Models\Subservice;
class FrontController extends Controller
{
    public function thankYou()
    {
        return view('front.thank-you');
    }
    public function index()
    {
        $subservices = Subservice::where('is_active', true)->get();

        return view('front.index', [
            'teams' => Team::all(),
            'services' => Service::all(),
            'subservices' => $subservices
        ]);
    }
    public function subservices(Service $service)
    {
        $subservices = $service->subservices()->where('is_active', true)->get();
        return view('front.subservices', compact('service', 'subservices'));
    }
    public function service()
    {
        $subservices = Subservice::where('is_active', true)->get();
        $services = Service::where('is_active', true)->get();
        return view('front.service', compact('services', 'subservices'));
    }
}




<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServicesDetails;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $service = Service::get();
        $servicesdetails = ServicesDetails::get();
        return view(
            'index',
            [
                'services' => $service,
                'servicesdetails' => $servicesdetails,
            ]
        );
    }
}

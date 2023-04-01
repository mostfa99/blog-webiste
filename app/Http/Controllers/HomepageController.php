<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $service = Service::get();
        return view(
            'index',
            [
                'services' => $service,
            ]
        );
    }
}
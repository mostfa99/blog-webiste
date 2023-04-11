<?php

namespace App\Http\Controllers;

use App\Models\ContactDetails;
use App\Models\Post;
use App\Models\PostsDetails;
use App\Models\Service;
use App\Models\ServicesDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomepageController extends Controller
{
    public function index()
    {
        $service = Service::get();
        $servicesdetails = ServicesDetails::get();
        $postsdetails = PostsDetails::get();
        $contactDetails = ContactDetails::get();
        $posts = Post::get();
        $user = Auth::user();
        return view(
            'index',
            [
                'services' => $service,
                'servicesdetails' => $servicesdetails,
                'postsdetails' => $postsdetails,
                'contactDetails' => $contactDetails,
                'posts' => $posts,
                'user' =>  $user,
            ]
        );
    }
}

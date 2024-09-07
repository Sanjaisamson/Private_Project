<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TemplateController extends Controller
{

/* Home Page */
public function index(){
    return view('home');
}

    /* Foodtrade & Services */
 public function foodtrade(){
    return view('foodtrade');
 }


 /* Education Services */
public function education(){
    return view('education');
}

 /* RealEstate Services */
 public function realestate(){
    return view('realestate');
}

 /* Tourism Services */
 public function tourism(){
    return view('tourism');
}

 /* Construction Services */
 public function construction(){
    return view('construction');
}

 /* IT Support Services */
 public function itsupport(){
    return view('itsupport');
}

 /* Career Page */
 public function career(){
    return view('career');
}

}

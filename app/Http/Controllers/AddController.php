<?php

namespace App\Http\Controllers;

use App\Ministries;
use Illuminate\Http\Request;

class AddController extends Controller
{
    public function add()
    {
        $ministries = Ministries::insert([
            
            ['category_name' => $_POST['category_name']],
            ['category_name' => $_POST['category_name']],
            ['categorry_name' => $_POST['category_name']]
        
        ]);
        return view('add', ['ministries' => $ministries]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Ministries;
use Illuminate\Http\Request;


class MinistriesController extends Controller
{
    public function index(Request $request)
    {
        $ministries = Ministries::get()->toTree();
        return view('ministries', compact('ministries'));
    }

    public function search(Request $request, Ministries $ministries)
    {
        if($_GET) {
            $query = mb_strtolower($request->search, 'UTF-8');
            $arr = explode(" ", $query);
            
            $query = [];
            foreach ($arr as $w)
            {
                $len = mb_strlen($w, 'UTF-8');
                switch (true)
                {
                    case ($len <= 3):
                    {
                        $query[] = $w . "*";
                        break;
                    }
                    case ($len > 3 && $len <= 6):
                    {
                        $query[] = mb_substr($w, 0, -1, 'UTF-8') . "*";
                        break;
                    }
                    case ($len > 6 && $len <= 9):
                    {
                        $query[] = mb_substr($w, 0, -2, 'UTF-8') . "*";
                        break;
                    }
                    case ($len > 9):
                    {
                        $query[] = mb_substr($w, 0, -3, 'UTF-8') . "*";
                        break;
                    }
                    default:
                    {
                        break;
                    }
                }
            }
            $query = array_unique($query, SORT_STRING);
            $qQeury = implode(" ", $query); //объединяет массив в строку
        // Таблица для поиска
        
        $results = Ministries::whereRaw(
            "MATCH(category_name) AGAINST(? IN BOOLEAN MODE)", $qQeury)->get();
            $results->toArray();
            return view('search',compact('results'));
        }
        
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function profile()
    {
        {
            $students = Student::all();
            return view('profile', ['students' => $students]);
        }
        // $students = [
        //     ['name' => '田口先生', 'major' => 'ものづくり、SDGs', 'interests' => '日本酒','hobby' => '', 'zipcode' => '大阪'],
        //     ['name' => 'takutosan', 'major' => 'IT', 'interests' => '海外サッカー', 'zipcode' => '福岡'],
        //     ['name' => 'ふうか', 'major' => 'マーケティング', 'interests' => '','hobby' => '', 'zipcode' => ''],
        //     ['name' => 'ありさ', 'major' => 'マーケティング', 'interests' => '','hobby' => '', 'zipcode' => ''],
        //     ['name' => 'ゆきと', 'major' => 'フランチャイズ', 'interests' => '','hobby' => '', 'zipcode' => ''],
        //     ['name' => 'おおしま', 'major' => '', 'interests' => '','hobby' => '', 'zipcode' => ''],
        //     ['name' => 'しんご', 'major' => '', 'interests' => '','hobby' => '', 'zipcode' => ''],
        //     ['name' => 'あおと', 'major' => '', 'interests' => '','hobby' => '', 'zipcode' => ''],
        //     ['name' => 'いつき', 'major' => '', 'interests' => '','hobby' => '', 'zipcode' => ''],
        //     ['name' => 'しょうま', 'major' => '', 'interests' => '','hobby' => '', 'zipcode' => ''],
        //     ['name' => 'せいご', 'major' => '', 'interests' => '','hobby' => '', 'zipcode' => ''],
        //     ['name' => 'はるか', 'major' => '', 'interests' => '','hobby' => '', 'zipcode' => ''],
        //     ['name' => 'まう', 'major' => '', 'interests' => '','hobby' => '', 'zipcode' => ''],
        //     ['name' => 'まゆ', 'major' => '', 'interests' => '','hobby' => '', 'zipcode' => ''],
        //     ['name' => 'みずき', 'major' => '', 'interests' => '','hobby' => '', 'zipcode' => ''],
        //     ['name' => 'かな', 'major' => '', 'interests' => '','hobby' => '', 'zipcode' => ''],
        // ];

    }

    public function activities()
    {
        return view('activities');
    }
}

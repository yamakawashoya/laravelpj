<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests\ClientRequest;

class TestController extends Controller
{
    public function index()
    {
        return view('index',['txt' => 'フォームを入力']);
    }

    public function post(ClientRequest $request)
    {
    return view('index', ['txt' => '正しい入力です']);
    }
}
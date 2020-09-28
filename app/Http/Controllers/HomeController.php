<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

use Illuminate\Routing\Controller as BaseController;


class HomeController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $elements = [ 'Test1', 'Test2', 'Test3' ];

        return view('home.index', ['title' => 'Home title', 'elements' => $elements]);
    }

    public function check(Request $request)
    {
        $url = $request->input('url');
        $response = Http::get($url);

        $params = [
            'body' => $response->body(),
            'url' => $url
        ];

        return view('home.check', $params);
    }
}

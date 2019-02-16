<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Sodium\compare;

class TranslationController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function translate(Request $request)
    {
        $params = $request->all();
        $result = $params['translation'];

        return redirect(route('result', compact('result')));
    }

    public function result(Request $request)
    {
        $result = $request->get('result');
        return view('result', compact('result'));
    }
}

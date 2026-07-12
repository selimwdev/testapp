<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerateController extends Controller
{
    public function show()
    {
        return view('generate');
    }

    public function generate(Request $request)
    {
        // استخدام rand()
        $code = rand(100000, 999999);

        return view('generate', compact('code'));
    }

    public function generateMany(Request $request)
{
    $codes = [];
    for ($i = 0; $i < 624; $i++) {
        // احذف الـ min والـ max واجعلها تأخذ الرقم الخام من المولد
        $codes[] = rand(100000, 999999);
    }
    return view('generate', compact('codes'));
}
}

##secret123
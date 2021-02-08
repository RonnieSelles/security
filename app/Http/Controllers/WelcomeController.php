<?php

namespace App\Http\Controllers;

use App\Models\Faq;

class WelcomeController extends Controller


{
    public function welcome()
    {

        return view('welcome');

    }
    public function profile()
    {

        return view('profile');

    }
    public function dashboard()
    {

        return view('dashboard');

    }
    public function faq()
    {
        $faq = Faq::all();
        return view('faq',
            ['faq' => $faq
            ]);


    }
    public function motivation()
    {

        return view('motivation');

    }

    public function show($post)
    {
        $posts=[
            'my-first-post'  => 'hello',
            'my-second-post'  =>  'bye'

            ];

        if (!array_key_exists($post, $posts)) {
         abort(404, 'Sorry, that post was not found.');
     }


        return view('post',[

            'post' => $posts[$post]

            ]);


    }



}




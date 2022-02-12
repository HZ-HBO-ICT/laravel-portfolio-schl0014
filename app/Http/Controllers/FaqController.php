<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Support\Facades\DB;

class FaqController extends Controller
{
    /*
     * return the view faq
     */
    public function show()
    {
        return view( 'faq',[
          'faqs'=>  Faq::all()
        ]);
    }
}

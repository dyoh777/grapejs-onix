<?php

namespace Mariojgt\Onix\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageBuilderController extends Controller
{
   public function index()
   {
       return view('onix::builder.jsGrape');
   }

   public function ckEditor()
   {
       return view('onix::builder.ckEditor');
   }
}
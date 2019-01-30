<?php

namespace App\Http\Controllers;
use App\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LinksController extends Controller
{
  public function index(){
      $links = DB::table('links')->get();

      return view('links', ['links' => $links]);
  }
}

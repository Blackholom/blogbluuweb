<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  /**
   * Controller for Index page
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function index()
  {
    return view('welcome');
  }

  /**
   * Controller for Gallery page
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function gallery()
  {
    return view('gallery');
  }

  /**
   * Controller for Blog page
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function blog()
  {
    return view('blog');
  }

  /**
   * Controller for Index page
   */
  public function aboutus($name = null){
    $team = ['Kevin', 'Wilman', 'Mario'];
//  return view('aboutus', ['team' => $team]);
    return view('aboutus', compact('team', 'name'));
  }
}

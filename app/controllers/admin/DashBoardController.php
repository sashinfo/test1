<?php

class DashBoardController extends BaseController
{
    public function __construct()
    {
        if (!Auth::check()) {
            Redirect::to('admin')->send();
        }
    }

    public function index()
    {
        return View::make('admin.dashboard');
    }
}

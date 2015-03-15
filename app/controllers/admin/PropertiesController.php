<?php

class PropertiesController extends BaseController
{
    public function __construct()
    {
        if (!Auth::check()) {
            Redirect::to('admin')->send();
        }
    }

    public function index()
    {
        return View::make('admin.properties_list');
    }

    public function insert()
    {

        return View::make('admin.add_property');
    }

    public function update()
    {

    }

    public function delete()
    {

    }

}
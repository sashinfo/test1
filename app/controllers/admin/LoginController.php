<?php

class LoginController extends BaseController
{

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */
    public function index()
    {
        if (Auth::check()) {
            return Redirect::to('admin/dashboard');
        } else {
            return View::make('admin.index');
        }
    }

    public function login()
    {
        $rules = array(
            'userName' => 'required',
            'userPassword' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            $messages = $validator->messages();
            return Redirect::to('admin')->withErrors($validator);
        } else {
            $userdata = array(
                'username' => Input::get('userName'),
                'password' => Input::get('userPassword')
            );
            if (Auth::attempt($userdata)) {
                return Redirect::to('admin/dashboard');
            } else {
                return Redirect::to('admin');
            }
        }

    }

    function logout()
    {
        Auth::logout();
        return Redirect::to('admin');
    }

    function  changePassword()
    {
        if (Auth::check()) {
            return View::make('admin.admin_settings');
        } else {
            return Redirect::to('admin');
        }
    }

    function updateUserPassword()
    {
        $rules = array(
            'userName' => 'required',
            'userOldPassword' => 'required',
            'userNewPassword' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            $messages = $validator->messages();
            return Redirect::to('admin/admin_settings')->withErrors($validator);
        } else {
            $credentials = array(
                'username' => Input::get('userName'),
                'password' => Input::get('userOldPassword')
            );
            if (Auth::validate($credentials)) {
                $password = Input::get('userNewPassword');
                if (strlen($password) > 0) {
                    $user = Auth::user();
                    $user->password = \Hash::make($password);
                    $user->save();
                    return Redirect::to('admin');
                }
            }
        }
    }
}
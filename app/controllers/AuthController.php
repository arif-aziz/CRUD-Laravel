<?php

class AuthController extends BaseController {

	public function getIndex()
	{
		return View::make('auth.login');
	}

	public function getLogout()
    {
        Auth::logout();
        return Redirect::to('/');
    }

    public function postLogin()
    {
        $username =  strtolower(Input::get('txt-username'));
        $password =  Input::get('txt-password');
        
        /* Select database user */
        $dataUser = User::where('username', $username)
                        ->first();

        if (!is_null($dataUser)) {
            if(Hash::check($password, $dataUser->password)) {
                Auth::login($dataUser);
                return Redirect::to('/');
            }
        }

        return Redirect::to('/')->with('flash_error', ' Username / Password Anda salah');
    }

}
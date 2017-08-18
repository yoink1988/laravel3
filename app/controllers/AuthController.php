<?php
class AuthController extends BaseController
{
    public function getLogin()
    {
        return View::make('auth.login');
    }

    public function postLogin()
    {
        $data = array(
            'email' => Input::get('email'),
            'password' => Input::get('password')
        );

        if(Auth::attempt($data))
        {
            return Redirect::intended('/');
        }
        return Redirect::to('auth/login');
    }

    public function getLogout()
    {
        Auth::logout();
        return Redirect::to('/');
    }

    public function getRegister()
    {
       return ('regPage');
      //  return View::make('auth.register');
    }

    public function postRegister()
    {
        
    }
    
}   

?>

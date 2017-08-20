<?php
use TinyURL\Repository\User\UserRepositoryInterface;
class AuthController extends BaseController
{
	protected $_userRepo;
	public function __construct(UserRepositoryInterface $userRepo)
	{
		$this->_userRepo = $userRepo;
	}

    public function getLogin()
    {
		if(Session::get('mess'))
		{
			return View::make('auth.login', array('mess' => Session::get('mess')));
		}
        return View::make('auth.login',array('mess' => ''));
    }

    public function postLogin()
    {
        $data = array(
            'email' => Input::get('email'),
            'password' => Input::get('password')
        );

		$validator = Validator::make($data, array('email' => 'required|email',
												'password' => 'required|min:6'));
		if($validator->fails())
		{
			return Redirect::to('auth/login')->withErrors($validator);
		}

		
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

        return View::make('auth.register');
    }

    public function postRegister()
    {
		$arr = Input::all();
        $validator = Validator::make($arr, array(
			'name' => 'required|min:3',
			'email' => 'required|email|unique:users',
			'password' => 'required|min:6',
			'confpassword' => 'required|same:password'));

		if($validator->fails())
		{
			return Redirect::to('auth/register')->withErrors($validator);
		}

		$this->_userRepo->addUser($arr);
		return Redirect::to('auth/login')->with('mess', 'Thank you for registation');


    }
    
}   

?>

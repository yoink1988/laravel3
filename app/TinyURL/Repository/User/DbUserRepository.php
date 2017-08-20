<?php
namespace TinyURL\Repository\User;

class DbUserRepository implements UserRepositoryInterface
{

	protected $_model;
	public function __construct($model)
	{
		$this->_model = $model;
	}
	public function addUser(array $data)
	{

		$this->_model->name = $data['name'];
		$this->_model->email = $data['email'];
		$this->_model->password = \Hash::make($data['password']);
		$this->_model->save();
		
	}
	public function checkUser()
	{
		
	}
}

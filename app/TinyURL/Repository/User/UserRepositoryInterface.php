<?php
namespace TinyURL\Repository\User;

interface UserRepositoryInterface
{
	public function addUser(array $arr);
	public function checkUser();

}
?>
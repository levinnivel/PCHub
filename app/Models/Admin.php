<?php
require_once ('User.php');

class Admin extends User
{

	private $admin_code;

	public function __construct()
	{
		$this->admin_code = $admin_code;
	}


	public function getAdminCode()
	{
		return $this->admin_code;
	}

	/**
	 * Set the value of admin_code
	 */
	public function setAdminCode($admin_code): self
	{
		$this->admin_code = $admin_code;

		return $this;
	}
}
?>
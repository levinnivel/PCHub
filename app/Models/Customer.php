<?php
require_once ('User.php');


class Customer extends User
{

	private $phone;

	public function __construct($phone)
	{
		$this->phone = $phone;
	}


	/**
	 * Get the value of phone
	 */
	public function getPhone()
	{
		return $this->phone;
	}

	/**
	 * Set the value of phone
	 */
	public function setPhone($phone): self
	{
		$this->phone = $phone;

		return $this;
	}
}
?>
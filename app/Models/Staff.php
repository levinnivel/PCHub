<?php
require_once ('User.php');


class Staff extends User
{

	private $salary;

	public function __construct($salary)
	{
		$this->salary = $salary;
	}

	
	/**
	 * Get the value of salary
	 */
	public function getSalary()
	{
		return $this->salary;
	}

	/**
	 * Set the value of salary
	 */
	public function setSalary($salary): self
	{
		$this->salary = $salary;

		return $this;
	}
}
?>
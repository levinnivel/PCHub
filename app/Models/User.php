<?php
require_once ('Order.php');

class User
{

	private $email;
	private $name;
	private $password;
	private $m_Order;

	public function _construct($email, $name, $password, $m_Order){
		$this->email = $email;
		$this->name = $name;
		$this->password = $password;
		$this->m_Order = $m_Order;
	}

	/**
	 * Get the value of email
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * Set the value of email
	 */
	public function setEmail($email): self
	{
		$this->email = $email;

		return $this;
	}

	/**
	 * Get the value of name
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Set the value of name
	 */
	public function setName($name): self
	{
		$this->name = $name;

		return $this;
	}

	/**
	 * Get the value of m_Order
	 */
	public function getMOrder()
	{
		return $this->m_Order;
	}

	/**
	 * Set the value of m_Order
	 */
	public function setMOrder($m_Order): self
	{
		$this->m_Order = $m_Order;

		return $this;
	}
}
?>
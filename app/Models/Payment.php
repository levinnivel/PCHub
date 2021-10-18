<?php


class Payment
{

	private $amount;
	private $id;
	private $method;

	public function __construct($amount, $id, $method)
	{
		$this->amount = $amount;
		$this->id = $id;
		$this->method = $method;
	}

	





	/**
	 * Get the value of amount
	 */
	public function getAmount()
	{
		return $this->amount;
	}

	/**
	 * Set the value of amount
	 */
	public function setAmount($amount): self
	{
		$this->amount = $amount;

		return $this;
	}

	/**
	 * Get the value of id
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Set the value of id
	 */
	public function setId($id): self
	{
		$this->id = $id;

		return $this;
	}

	/**
	 * Get the value of method
	 */
	public function getMethod()
	{
		return $this->method;
	}

	/**
	 * Set the value of method
	 */
	public function setMethod($method): self
	{
		$this->method = $method;

		return $this;
	}
}
?>
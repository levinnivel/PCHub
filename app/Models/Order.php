<?php


class Order
{

	private $date;
	private $id;

	public function __construct($date, $id)
	{
		$this->date = $date;
		$this->id = $id;
	}

	




	/**
	 * Get the value of date
	 */
	public function getDate()
	{
		return $this->date;
	}

	/**
	 * Set the value of date
	 */
	public function setDate($date): self
	{
		$this->date = $date;

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
}
?>
<?php
require_once ('DetailOrder.php');

class Shipment
{

	private $address;
	private $arrival_date;
	private $id;
	private $ship_date;
	private $type;
	private $m_DetailOrder;

	public function __construct($address, $arrival_date, $id, $ship_date, $type, $m_DetailOrder)
	{
		$this->address = $address;
		$this->arrival_date = $arrival_date;
		$this->id = $id;
		$this->ship_date = $ship_date;
		$this->type = $type;
		$this->m_DetailOrder = $m_DetailOrder;
	}

	

	





	/**
	 * Get the value of address
	 */
	public function getAddress()
	{
		return $this->address;
	}

	/**
	 * Set the value of address
	 */
	public function setAddress($address): self
	{
		$this->address = $address;

		return $this;
	}

	/**
	 * Get the value of arrival_date
	 */
	public function getArrivalDate()
	{
		return $this->arrival_date;
	}

	/**
	 * Set the value of arrival_date
	 */
	public function setArrivalDate($arrival_date): self
	{
		$this->arrival_date = $arrival_date;

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
	 * Get the value of ship_date
	 */
	public function getShipDate()
	{
		return $this->ship_date;
	}

	/**
	 * Set the value of ship_date
	 */
	public function setShipDate($ship_date): self
	{
		$this->ship_date = $ship_date;

		return $this;
	}


	/**
	 * Set the value of type
	 */
	public function setType($type): self
	{
		$this->type = $type;

		return $this;
	}

	/**
	 * Get the value of m_DetailOrder
	 */
	public function getMDetailOrder()
	{
		return $this->m_DetailOrder;
	}

	/**
	 * Set the value of m_DetailOrder
	 */
	public function setMDetailOrder($m_DetailOrder): self
	{
		$this->m_DetailOrder = $m_DetailOrder;

		return $this;
	}
}
?>
<?php
require_once ('DetailOrder.php');

class Product
{

	private $compatibility;
	private $id;
	private $name;
	private $price;
	private $vendor;
	private $m_DetailOrder;

	public function __construct($compatibility, $id, $name, $price, $vendor, $m_DetailOrder)
	{
		$this->compatibility = $compatibility;
		$this->id = $id;
		$this->name = $name;
		$this->price = $price;
		$this->m_DetailOrder = $m_DetailOrder;
		$this->vendor = $vendor;
	}

	

	




	/**
	 * Get the value of compatibility
	 */
	public function getCompatibility()
	{
		return $this->compatibility;
	}

	/**
	 * Set the value of compatibility
	 */
	public function setCompatibility($compatibility): self
	{
		$this->compatibility = $compatibility;

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
	 * Get the value of price
	 */
	public function getPrice()
	{
		return $this->price;
	}

	/**
	 * Set the value of price
	 */
	public function setPrice($price): self
	{
		$this->price = $price;

		return $this;
	}

	/**
	 * Get the value of vendor
	 */
	public function getVendor()
	{
		return $this->vendor;
	}

	/**
	 * Set the value of vendor
	 */
	public function setVendor($vendor): self
	{
		$this->vendor = $vendor;

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
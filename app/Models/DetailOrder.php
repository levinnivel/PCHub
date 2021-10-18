<?php
require_once ('Payment.php');
require_once ('Order.php');

class DetailOrder
{

	private $order_id;
	private $payment_id;
	private $product_id;
	private $shipment_id;
	private $m_Payment;
	private $m_Order;

	public function __construct($order_id, $payment_id, $product_id, $shipment_id, $m_Payment, $m_Order)
	{
		$this->order_id = $order_id;
		$this->payment_id = $payment_id;
		$this->product_id = $product_id;
		$this->shipment_id = $shipment_id;
		$this->m_Payment = $m_Payment;
		$this->m_Order = $m_Order;
	}





	/**
	 * Get the value of order_id
	 */
	public function getOrderId()
	{
		return $this->order_id;
	}

	/**
	 * Set the value of order_id
	 */
	public function setOrderId($order_id): self
	{
		$this->order_id = $order_id;

		return $this;
	}

	/**
	 * Get the value of payment_id
	 */
	public function getPaymentId()
	{
		return $this->payment_id;
	}

	/**
	 * Set the value of payment_id
	 */
	public function setPaymentId($payment_id): self
	{
		$this->payment_id = $payment_id;

		return $this;
	}

	/**
	 * Get the value of shipment_id
	 */
	public function getShipmentId()
	{
		return $this->shipment_id;
	}

	/**
	 * Set the value of shipment_id
	 */
	public function setShipmentId($shipment_id): self
	{
		$this->shipment_id = $shipment_id;

		return $this;
	}

	/**
	 * Get the value of product_id
	 */
	public function getProductId()
	{
		return $this->product_id;
	}

	/**
	 * Set the value of product_id
	 */
	public function setProductId($product_id): self
	{
		$this->product_id = $product_id;

		return $this;
	}

	/**
	 * Get the value of m_Payment
	 */
	public function getMPayment()
	{
		return $this->m_Payment;
	}

	/**
	 * Set the value of m_Payment
	 */
	public function setMPayment($m_Payment): self
	{
		$this->m_Payment = $m_Payment;

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
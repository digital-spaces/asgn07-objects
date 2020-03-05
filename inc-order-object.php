<?php
class Order
{
	private $itemCost;
	private $numItems;

	public function getItemCost()
	{
		return $this->itemCost;
	}
	
	public function setItemCost($cost)	
	{
		$this->itemCost = $cost;
	}
	
	public function getNumItems()
	{
		return $this->numItems;
	}
	
	public function setNumItems($items)
	{
		$this->numItems = $items;
	}
	
	public function getSubTotal()
	{	
		return $this->itemCost * $this->numItems;
	}

	public function getSalesTax()
	{	
		return $this->getSubTotal() * 0.07;
	}

	public function getShippingHandling()
	{	
		return $this->numItems * 1.75;
	}

	public function getTotal()
	{	
		return $this->getSubTotal() + $this->getSalesTax() + $this->getShippingHandling();
	}
} // end of class definition
?>
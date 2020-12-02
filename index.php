<?php

class Offer
{
	private $title;
	private $price;

	public function __construct($title, $price)
	{
		$this->setTitle($title);
		$this->setPrice($price);
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function setTitle($title)
	{
		$this->title = $title;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function setPrice($price)
	{
		$this->price = $price;
	}
}

class OfferDiscount extends Offer
{
	protected $discount;

	public function __construct($title, $price, $discount)
	{
		parent::__construct($title, $price);

		$this->discount = $discount;
	}

	public function getDiscount()
	{
		return $this->discount;
	}

	public function setDiscount($discount)
	{
		$this->discount = $discount;
	}
}
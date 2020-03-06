<?php

namespace src\model;

class Shop
{
	/** @var string $id */
	protected $id;
	/** @var string $name */
	protected $name;

	public function __construct(string $id, string $name)
	{
		$this->id = $id;
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getId(): string
	{
		return $this->id;
	}

	/**
	 * @return string
	 */
	public function getName(): string
	{
		return $this->name;
	}
}
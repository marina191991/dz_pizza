<?php
include_once 'iCostable.php';
class Souse implements iCostable
{
private float $price;
private string $type;
private int $count;


public function __construct(string $type,float $price,int $count = 1) {
    $this->type = $type;
    $this->price = $price;
    $this->count = $count;
}

    public function getCost(): float
    {

        return round($this->price*$this->count,2);
        // TODO: Implement getCost() method.
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param int $count
     */
    public function setCount(int $count): void
    {
        $this->count = $count;
    }


}
<?php
namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class PropertySearch{

    /**
    *@var int|null
    */
    private $maxPrice;

    /**
    *@var int|null
    *@Assert\Range(min=10, max=400)
    */
    private $minSurface;


    /**
     * Get the value of Max Price
     *
     * @return int|null
     */
    public function getMaxPrice()
    {
        return $this->maxPrice;
    }

    /**
     * Set the value of Max Price
     *
     * @param int|null maxPrice
     *
     * @return self
     */
    public function setMaxPrice(int $maxPrice)
    {
        $this->maxPrice = $maxPrice;
        return $this;
    }

    /**
     * Get the value of Min Surface
     *
     * @return int|null
     */
    public function getMinSurface()
    {
        return $this->minSurface;
    }

    /**
     * Set the value of Min Surface
     *
     * @param int|null minSurface
     *
     * @return self
     */
    public function setMinSurface(int $minSurface)
    {
        $this->minSurface = $minSurface;
        return $this;
    }

}
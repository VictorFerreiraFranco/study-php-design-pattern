<?php

namespace Study\Design\SCAJ\Entity;

use DateTime;
use Study\Design\SCAJ\VD\Type\Type;

class VD
{
    private Type $type;
    
    private DateTime $date;
    
    private null|float $price = 0;
    
    private bool $isRecalculate = false;
    
    public function __construct(Type $type, DateTime $date) {
        $this->setType($type);
        $this->setDate($date);
    }
    
    public function getType(): Type
    {
        return $this->type;
    }
    
    public function setType(Type $type): void
    {
        $this->type = $type;
    }
    
    public function getDate(): DateTime
    {
        return $this->date;
    }
    
    public function setDate(DateTime $date): void
    {
        $this->date = $date;
    }
    
    public function getPrice(): null|float
    {
        return $this->price;
    }
    
    public function setPrice(null|float $price): void
    {
        $this->price = $price;
    }
    
    public function isRecalculate(): bool
    {
        return $this->isRecalculate;
    }
    
    public function setIsRecalculate(bool $isRecalculate): void
    {
        $this->isRecalculate = $isRecalculate;
    }
    
    public function getYearMonth(): string
    {
        return $this->date->format('Y-m');
    }

}
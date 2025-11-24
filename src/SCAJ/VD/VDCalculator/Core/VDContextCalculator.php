<?php

namespace Study\Design\SCAJ\VD\VDCalculator\Core;

use DateInterval;
use DatePeriod;
use DateTime;
use Study\Design\SCAJ\Entity\VD;
use Study\Design\SCAJ\VD\Type\Type;
use Study\Design\SCAJ\VD\VDCalculator\Strategy\CalculatorStrategy;

class VDContextCalculator
{
    private Type $type;
    
    private bool $isRecalculate;
    
    private CalculatorStrategy $strategy;
    
    private DateTime $intialDate;
    
    private DateTime $finalDate;
    
    /**
     * @var array<VD>
     */
    private array $values = [];
    
    /**
     * @throws \Exception
     */
    public function __construct(
        Type               $type,
        CalculatorStrategy $strategy,
        DateTime           $intialDate,
        DateTime           $finalDate,
        bool               $isRecalculate = false,
    ) {
        $this->setType($type);
        $this->setStrategy($strategy);
        $this->setIntialDate($intialDate);
        $this->setFinalDate($finalDate);
        $this->setIsRecalculate($isRecalculate);
    }
    
    public function getType(): Type
    {
        return $this->type;
    }
    
    public function setType(Type $type): void
    {
        $this->type = $type;
    }
    
    public function isRecalculate(): bool
    {
        return $this->isRecalculate;
    }
    
    public function setIsRecalculate(bool $isRecalculate): void
    {
        $this->isRecalculate = $isRecalculate;
    }
    
    public function getStrategy(): CalculatorStrategy
    {
        return $this->strategy;
    }
    
    public function setStrategy(CalculatorStrategy $strategy): void
    {
        $this->strategy = $strategy;
    }
    
    public function getIntialDate(): DateTime
    {
        return $this->intialDate;
    }
    
    /**
     * @throws \Exception
     */
    public function setIntialDate(DateTime $intialDate): void
    {
        $this->intialDate = new DateTime($intialDate->format('Y-m-01'));
    }
    
    public function getFinalDate(): DateTime
    {
        return $this->finalDate;
    }
    
    /**
     * @throws \Exception
     */
    public function setFinalDate(DateTime $finalDate): void
    {
        $this->finalDate = new DateTime($finalDate->format('Y-m-t'));
    }
    
    /**
     * @return VD[]
     */
    public function getValues(): array
    {
        return $this->values;
    }
    
    /**
     * @throws \Exception
     */
    public function addValues(VD $VD): void
    {
        if ($VD->getType() != $this->getType())
            throw new \Exception("Tipo de VD invalidos");
        
        $this->values[] = $VD;
    }
    
    /**
     * @throws \DateMalformedPeriodStringException
     * @throws \Exception
     */
    public function calculate(CoautorCalculator $coautorCalculator): void
    {
        $period = new DatePeriod($this->getIntialDate(), new DateInterval('P1M'), $this->getFinalDate());
        
        foreach ($period as $date) {
            $vd = new VD($this->getType(), $date);
            $vd->setIsRecalculate($this->isRecalculate);
            $vd->setPrice($this->strategy->calculate($coautorCalculator, $vd));
            
            $this->addValues($vd);
        }
    }
}
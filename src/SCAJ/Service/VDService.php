<?php

namespace Study\Design\SCAJ\Service;

use Study\Design\SCAJ\Entity\Coautor;
use Study\Design\SCAJ\VD\Type\Type;
use Study\Design\SCAJ\VD\VDCalculator\Core\CoautorCalculator;
use Study\Design\SCAJ\VD\VDCalculator\Core\VDContextCalculator;
use Study\Design\SCAJ\VD\VDCalculator\Strategy\StrategyMapping;
use Study\Design\SCAJ\VD\VDCalculator\VDCalculator;
class VDService
{
    /**
     * @throws \DateMalformedPeriodStringException
     * @throws \Exception
     */
    public function calculate(): void
    {
        $coautor = new Coautor();
        $coautor->setName("Victor");
        
        $coautorCalculator = new CoautorCalculator($coautor);
        
        $coautorCalculator->addVdContext(new VdContextCalculator(
            Type::VD69001,
            StrategyMapping::map(Type::VD69001),
            new \DateTime('2020-01-01'),
            new \DateTime()
        ));
        $coautorCalculator->addVdContext(new VdContextCalculator(
            Type::VD69001,
            StrategyMapping::map(Type::VD69001),
            new \DateTime('2020-05-01'),
            new \DateTime(),
            true
        ));
        $coautorCalculator->addVdContext(new VdContextCalculator(
            Type::VD69002,
            StrategyMapping::map(Type::VD69002),
            new \DateTime('2020-12-01'),
            new \DateTime(),
        ));
        $coautorCalculator->addVdContext(new VdContextCalculator(
            Type::VD69002,
            StrategyMapping::map(Type::VD69002),
            new \DateTime('2020-12-01'),
            new \DateTime('2023-05-20'),
            true
        ));
        $coautorCalculator->addVdContext(new VdContextCalculator(
            Type::VD69003,
            StrategyMapping::map(Type::VD69003),
            new \DateTime('2021-01-01'),
            new \DateTime('2023-07-20'),
        ));
        
        $vdCalculator = new VDCalculator($coautorCalculator);
        $vdCalculator->calculate();
        
        foreach ($vdCalculator->getVDscalculated() as $vd)
            echo "<br> {$vd->getType()->name} {$vd->getDate()->format('d/m/Y')} {$vd->getPrice()} " . ($vd->isRecalculate() ? "Recalculo" : '');
    }
}
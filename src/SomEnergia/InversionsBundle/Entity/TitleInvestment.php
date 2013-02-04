<?php
namespace SomEnergia\InversionsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="somenergia_title_investment")
 * @ORM\HasLifecycleCallbacks
 */
class TitleInvestment
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $year;

    /**
     * @ORM\Column(type="smallint")
     */
    protected $week;

    /**
     * @ORM\Column(type="date")
     */
    protected $investDate;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $type;

    /**
     * @ORM\Column(type="integer")
     */
    protected $amount;

    /**
     * @ORM\Column(type="float")
     */
    protected $total;

    public function getId()
    {
        return $this->id;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setInvestDate($investDate)
    {
        $this->investDate = $investDate;
    }

    public function getInvestDate()
    {
        return $this->investDate;
    }

    public function setTotal($total)
    {
        $this->total = $total;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setWeek($week)
    {
        $this->week = $week;
    }

    public function getWeek()
    {
        return $this->week;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getYear()
    {
        return $this->year;
    }


}
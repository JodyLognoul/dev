<?php

namespace gg\DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * gg\DefaultBundle\Entity\Party
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="gg\DefaultBundle\Entity\PartyRepository")
 */
class Party
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $Name
     *
     * @ORM\Column(name="Name", type="string", length=255)
     */
    private $Name;

    /**
     * @var \DateTime $Start
     *
     * @ORM\Column(name="Start", type="datetime")
     */
    private $Start;

    /**
     * @var \DateTime $End
     *
     * @ORM\Column(name="End", type="datetime")
     */
    private $End;

    /**
     * @var string $Place
     *
     * @ORM\Column(name="Place", type="string", length=255)
     */
    private $Place;

    /**
     * @var string $Host
     *
     * @ORM\Column(name="Host", type="string", length=255)
     */
    private $Host;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Name
     *
     * @param string $name
     * @return Party
     */
    public function setName($name)
    {
        $this->Name = $name;
    
        return $this;
    }

    /**
     * Get Name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Set Start
     *
     * @param \DateTime $start
     * @return Party
     */
    public function setStart($start)
    {
        $this->Start = $start;
    
        return $this;
    }

    /**
     * Get Start
     *
     * @return \DateTime 
     */
    public function getStart()
    {
        return $this->Start;
    }

    /**
     * Set End
     *
     * @param \DateTime $end
     * @return Party
     */
    public function setEnd($end)
    {
        $this->End = $end;
    
        return $this;
    }

    /**
     * Get End
     *
     * @return \DateTime 
     */
    public function getEnd()
    {
        return $this->End;
    }

    /**
     * Set Place
     *
     * @param string $place
     * @return Party
     */
    public function setPlace($place)
    {
        $this->Place = $place;
    
        return $this;
    }

    /**
     * Get Place
     *
     * @return string 
     */
    public function getPlace()
    {
        return $this->Place;
    }

    /**
     * Set Host
     *
     * @param string $host
     * @return Party
     */
    public function setHost($host)
    {
        $this->Host = $host;
    
        return $this;
    }

    /**
     * Get Host
     *
     * @return string 
     */
    public function getHost()
    {
        return $this->Host;
    }
}

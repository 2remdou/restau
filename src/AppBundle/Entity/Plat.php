<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plat
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\PlatRepository")
 */
class Plat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPlat", type="string", length=255)
     */
    private $nomPlat;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\RestaurantPlat",mappedBy="plats")
     */

    private $restaurantPlat;

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
     * Set nomPlat
     *
     * @param string $nomPlat
     * @return Plat
     */
    public function setNomPlat($nomPlat)
    {
        $this->nomPlat = $nomPlat;

        return $this;
    }

    /**
     * Get nomPlat
     *
     * @return string 
     */
    public function getNomPlat()
    {
        return $this->nomPlat;
    }
}

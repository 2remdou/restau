<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RestaurantPlat
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\RestaurantPlatRepository")
 */
class RestaurantPlat
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
     * @var integer
     *
     * @ORM\Column(name="prix", type="bigint")
     */
    private $prix;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Restaurant",inversedBy="restaurantPlat")
     */
    private $restaurants;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Plat",inversedBy="restaurantPlat")
     */
    private $plats;


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
     * Set prix
     *
     * @param integer $prix
     * @return RestaurantPlat
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer 
     */
    public function getPrix()
    {
        return $this->prix;
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: elodi
 * Date: 08/03/2019
 * Time: 12:26
 */

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;



class Category
{


    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string")
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="BlogPost", mappedBy="category")
     */
    private $blogPosts;

    public function __construct()
    {
        $this->blogPosts = new ArrayCollection();
    }

    public function getBlogPosts()
    {
        return $this->blogPosts;
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: elodi
 * Date: 08/03/2019
 * Time: 12:24
 */

class ArticlePost
{


    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string")
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text")
     */
    private $body;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="draft", type="DateTime")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="blogPosts")
     */
    private $category;


    public function getTitle(): ?string
    {
        return $this->title;
    }

}
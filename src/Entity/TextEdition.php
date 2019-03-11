<?php
/**
 * Created by PhpStorm.
 * User: elodi
 * Date: 11/03/2019
 * Time: 15:05
 */

namespace App\Entity;


use Doctrine\DBAL\Types\TextType;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TextEditionRepository")
 */
class TextEdition
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $text_title;

    /**
     * @ORM\Column(type="text", length=255)
     */
    private $text_content;

    /**
     * @ORM\Column(type="datetime", length=255)
     */
    private $editedAt;





    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getTextTitle(): ?string
    {
        return $this->text_title;
    }

    /**
     * @param string $title
     * @return TextEdition
     */
    public function setTextTitle(string $title): self
    {
        $this->text_title = $title;

        return $this;
    }



    /**
     * @return TextType |null
     */
    public function getContent(): ?TextType
    {
        return $this->text_content;
    }

    /**
     * @param TextType $content
     * @return TextEdition
     */
    public function setContent(TextType $content): self
    {
        $this->text_content = $content;

        return $this;
    }




    /**
     * @return \DateTime|null
     */
    public function getEditedAt(): ?\DateTime
    {
        return $this->editedAt;
    }

    /**
     * @param \DateTime $editedAt
     * @return TextEdition
     */
    public function setEditedAt(\DateTime $editedAt): self
    {
        $this->editedAt = $editedAt;

        return $this;
    }
}
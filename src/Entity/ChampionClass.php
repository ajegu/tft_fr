<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ChampionClassRepository")
 */
class ChampionClass
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
    private $name;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\ClassSynergy", inversedBy="championClass", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $synergy;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $icon;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSynergy(): ?ClassSynergy
    {
        return $this->synergy;
    }

    public function setSynergy(ClassSynergy $synergy): self
    {
        $this->synergy = $synergy;

        return $this;
    }

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function setIcon(string $icon): self
    {
        $this->icon = $icon;

        return $this;
    }
}

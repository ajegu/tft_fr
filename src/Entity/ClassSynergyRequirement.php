<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClassSynergyRequirementRepository")
 */
class ClassSynergyRequirement
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $count;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="ClassSynergy", inversedBy="requirements")
     * @ORM\JoinColumn(nullable=false)
     */
    private $synergy;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCount(): ?int
    {
        return $this->count;
    }

    public function setCount(int $count): self
    {
        $this->count = $count;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getSynergy(): ?ClassSynergy
    {
        return $this->synergy;
    }

    public function setSynergy(?ClassSynergy $synergy): self
    {
        $this->synergy = $synergy;

        return $this;
    }
}

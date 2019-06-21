<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClassSynergyRepository")
 */
class ClassSynergy
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
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="ClassSynergyRequirement", mappedBy="synergy", orphanRemoval=true)
     */
    private $requirements;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\ChampionClass", mappedBy="synergy", cascade={"persist", "remove"})
     */
    private $championClass;

    public function __construct()
    {
        $this->requirements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return Collection|ClassSynergyRequirement[]
     */
    public function getRequirements(): Collection
    {
        return $this->requirements;
    }

    public function addRequirement(ClassSynergyRequirement $requirement): self
    {
        if (!$this->requirements->contains($requirement)) {
            $this->requirements[] = $requirement;
            $requirement->setSynergy($this);
        }

        return $this;
    }

    public function removeRequirement(ClassSynergyRequirement $requirement): self
    {
        if ($this->requirements->contains($requirement)) {
            $this->requirements->removeElement($requirement);
            // set the owning side to null (unless already changed)
            if ($requirement->getSynergy() === $this) {
                $requirement->setSynergy(null);
            }
        }

        return $this;
    }

    public function getChampionClass(): ?ChampionClass
    {
        return $this->championClass;
    }

    public function setChampionClass(ChampionClass $championClass): self
    {
        $this->championClass = $championClass;

        // set the owning side of the relation if necessary
        if ($this !== $championClass->getSynergy()) {
            $championClass->setSynergy($this);
        }

        return $this;
    }
}

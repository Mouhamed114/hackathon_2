<?php

namespace App\Entity;

use App\Repository\MarkRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MarkRepository::class)]
class Mark
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $url = null;

    #[ORM\OneToMany(mappedBy: 'mark', targetEntity: Smartphone::class)]
    private Collection $smartphone;

    public function __construct()
    {
        $this->smartphone = new ArrayCollection();
    }

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

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return Collection<int, Smartphone>
     */
    public function getSmartphone(): Collection
    {
        return $this->smartphone;
    }

    public function addSmartphone(Smartphone $smartphone): self
    {
        if (!$this->smartphone->contains($smartphone)) {
            $this->smartphone->add($smartphone);
            $smartphone->setMark($this);
        }

        return $this;
    }

    public function removeSmartphone(Smartphone $smartphone): self
    {
        if ($this->smartphone->removeElement($smartphone)) {
            // set the owning side to null (unless already changed)
            if ($smartphone->getMark() === $this) {
                $smartphone->setMark(null);
            }
        }

        return $this;
    }
}

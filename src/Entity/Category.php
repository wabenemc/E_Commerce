<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    /**
     * @var Collection<int, products>
     */
    #[ORM\OneToMany(targetEntity: products::class, mappedBy: 'category')]
    private Collection $relation1;

    #[ORM\Column(length: 255)]
    private ?string $slug = null;

    #[ORM\Column(length: 100)]
    private ?string $name = null;

    public function __construct()
    {
        $this->relation1 = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->name;
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return Collection<int, products>
     */
    public function getRelation1(): Collection
    {
        return $this->relation1;
    }

    public function addRelation1(products $relation1): static
    {
        if (!$this->relation1->contains($relation1)) {
            $this->relation1->add($relation1);
            $relation1->setCategory($this);
        }

        return $this;
    }

    public function removeRelation1(products $relation1): static
    {
        if ($this->relation1->removeElement($relation1)) {
            // set the owning side to null (unless already changed)
            if ($relation1->getCategory() === $this) {
                $relation1->setCategory(null);
            }
        }

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): static
    {
        $this->slug = $slug;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

  


}

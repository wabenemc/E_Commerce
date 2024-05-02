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
     * @var Collection<int, Products>
     */
    #[ORM\OneToMany(targetEntity: Products::class, mappedBy: 'category')]
    private Collection $products;

    #[ORM\Column(length: 255)]
    private ?string $slug = null;

    #[ORM\Column(length: 100)]
    private ?string $name = null;

    public function __construct()
    {
        $this->products = new ArrayCollection();
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
     * @return Collection<int, Products>
     */
    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function addProducts(Products $products): static
    {
        if (!$this->products->contains($products)) {
            $this->products->add($products);
            $products->setCategory($this);
        }

        return $this;
    }

    public function removeProducts(Products $products): static
    {
        if ($this->products->removeElement($products)) {
            // set the owning side to null (unless already changed)
            if ($products->getCategory() === $this) {
                $products->setCategory(null);
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

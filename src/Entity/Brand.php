<?php

namespace App\Entity;

use App\Repository\BrandRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BrandRepository::class)]
class Brand
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $picUrl = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $sortOrder = null;

    #[ORM\Column]
    private ?float $floorPrice = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\Column]
    private ?bool $deleted = null;

    #[ORM\OneToMany(targetEntity: Goods::class, mappedBy: 'brand')]
    private Collection $goods;

    public function __construct()
    {
        $this->goods = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPicUrl(): ?string
    {
        return $this->picUrl;
    }

    public function setPicUrl(?string $picUrl): static
    {
        $this->picUrl = $picUrl;

        return $this;
    }

    public function getSortOrder(): ?int
    {
        return $this->sortOrder;
    }

    public function setSortOrder(int $sortOrder): static
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    public function getFloorPrice(): ?float
    {
        return $this->floorPrice;
    }

    public function setFloorPrice(float $floorPrice): static
    {
        $this->floorPrice = $floorPrice;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function isDeleted(): ?bool
    {
        return $this->deleted;
    }

    public function setDeleted(bool $deleted): static
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * @return Collection<int, Goods>
     */
    public function getGoods(): Collection
    {
        return $this->goods;
    }

    public function addGood(Goods $good): static
    {
        if (!$this->goods->contains($good)) {
            $this->goods->add($good);
            $good->setBrand($this);
        }

        return $this;
    }

    public function removeGood(Goods $good): static
    {
        if ($this->goods->removeElement($good)) {
            // set the owning side to null (unless already changed)
            if ($good->getBrand() === $this) {
                $good->setBrand(null);
            }
        }

        return $this;
    }
}

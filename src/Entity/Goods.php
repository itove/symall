<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\GoodsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GoodsRepository::class)]
#[ApiResource]
class Goods
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $sn = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: Types::SIMPLE_ARRAY, nullable: true)]
    private ?array $gallery = null;

    #[ORM\Column(type: Types::SIMPLE_ARRAY, nullable: true)]
    private ?array $keywords = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $brief = null;

    #[ORM\Column]
    private ?bool $onSale = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $sortOrder = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $picUrl = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $shareUrl = null;

    #[ORM\Column]
    private ?bool $isNew = null;

    #[ORM\Column]
    private ?bool $isHot = null;

    #[ORM\Column(length: 31)]
    private ?string $unit = null;

    #[ORM\Column]
    private ?float $counterPrice = null;

    #[ORM\Column]
    private ?float $retailPrice = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $detail = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\Column]
    private ?bool $deleted = null;

    #[ORM\OneToMany(targetEntity: Spec::class, mappedBy: 'goods', orphanRemoval: true)]
    private Collection $specs;

    #[ORM\OneToMany(targetEntity: Attrib::class, mappedBy: 'goods', orphanRemoval: true)]
    private Collection $attribs;

    #[ORM\OneToMany(targetEntity: Product::class, mappedBy: 'goods', orphanRemoval: true)]
    private Collection $products;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
        $this->updatedAt = new \DateTimeImmutable();
        $this->specs = new ArrayCollection();
        $this->attribs = new ArrayCollection();
        $this->products = new ArrayCollection();
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSn(): ?string
    {
        return $this->sn;
    }

    public function setSn(string $sn): static
    {
        $this->sn = $sn;

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

    public function getGallery(): ?array
    {
        return $this->gallery;
    }

    public function setGallery(?array $gallery): static
    {
        $this->gallery = $gallery;

        return $this;
    }

    public function getKeywords(): ?array
    {
        return $this->keywords;
    }

    public function setKeywords(?array $keywords): static
    {
        $this->keywords = $keywords;

        return $this;
    }

    public function getBrief(): ?string
    {
        return $this->brief;
    }

    public function setBrief(?string $brief): static
    {
        $this->brief = $brief;

        return $this;
    }

    public function isOnSale(): ?bool
    {
        return $this->onSale;
    }

    public function setOnSale(bool $onSale): static
    {
        $this->onSale = $onSale;

        return $this;
    }

    public function getSortOrder(): ?int
    {
        return $this->sortOrder;
    }

    public function setSortOrder(?int $sortOrder): static
    {
        $this->sortOrder = $sortOrder;

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

    public function getShareUrl(): ?string
    {
        return $this->shareUrl;
    }

    public function setShareUrl(?string $shareUrl): static
    {
        $this->shareUrl = $shareUrl;

        return $this;
    }

    public function isNew(): ?bool
    {
        return $this->isNew;
    }

    public function setIsNew(bool $isNew): static
    {
        $this->isNew = $isNew;

        return $this;
    }

    public function isHot(): ?bool
    {
        return $this->isHot;
    }

    public function setIsHot(bool $isHot): static
    {
        $this->isHot = $isHot;

        return $this;
    }

    public function getUnit(): ?string
    {
        return $this->unit;
    }

    public function setUnit(string $unit): static
    {
        $this->unit = $unit;

        return $this;
    }

    public function getCounterPrice(): ?float
    {
        return $this->counterPrice;
    }

    public function setCounterPrice(float $counterPrice): static
    {
        $this->counterPrice = $counterPrice;

        return $this;
    }

    public function getRetailPrice(): ?float
    {
        return $this->retailPrice;
    }

    public function setRetailPrice(float $retailPrice): static
    {
        $this->retailPrice = $retailPrice;

        return $this;
    }

    public function getDetail(): ?string
    {
        return $this->detail;
    }

    public function setDetail(?string $detail): static
    {
        $this->detail = $detail;

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
     * @return Collection<int, Spec>
     */
    public function getSpecs(): Collection
    {
        return $this->specs;
    }

    public function addSpec(Spec $spec): static
    {
        if (!$this->specs->contains($spec)) {
            $this->specs->add($spec);
            $spec->setGoods($this);
        }

        return $this;
    }

    public function removeSpec(Spec $spec): static
    {
        if ($this->specs->removeElement($spec)) {
            // set the owning side to null (unless already changed)
            if ($spec->getGoods() === $this) {
                $spec->setGoods(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Attrib>
     */
    public function getAttribs(): Collection
    {
        return $this->attribs;
    }

    public function addAttrib(Attrib $attrib): static
    {
        if (!$this->attribs->contains($attrib)) {
            $this->attribs->add($attrib);
            $attrib->setGoods($this);
        }

        return $this;
    }

    public function removeAttrib(Attrib $attrib): static
    {
        if ($this->attribs->removeElement($attrib)) {
            // set the owning side to null (unless already changed)
            if ($attrib->getGoods() === $this) {
                $attrib->setGoods(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Product>
     */
    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function addProduct(Product $product): static
    {
        if (!$this->products->contains($product)) {
            $this->products->add($product);
            $product->setGoods($this);
        }

        return $this;
    }

    public function removeProduct(Product $product): static
    {
        if ($this->products->removeElement($product)) {
            // set the owning side to null (unless already changed)
            if ($product->getGoods() === $this) {
                $product->setGoods(null);
            }
        }

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrderRepository::class)]
#[ORM\Table(name: '`order`')]
class Order
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $sn = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $status = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $aftersaleStatus = null;

    #[ORM\Column(length: 255)]
    private ?string $consignee = null;

    #[ORM\Column(length: 255)]
    private ?string $mobile = null;

    #[ORM\Column(length: 255)]
    private ?string $address = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $message = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $goodsPrice = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $freightPrice = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $couponPrice = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $integralPrice = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $grouponPrice = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $orderPrice = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $actualPrice = null;

    #[ORM\Column(nullable: true)]
    private ?int $payId = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $payTime = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $shipSn = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $shipChannel = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $shipTime = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $refundAmount = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $refundType = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $refundContent = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $refundTime = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $confirmTime = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $comments = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $endTime = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\Column]
    private ?bool $deleted = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $paidAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $shippedAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $refundedAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $confirmedAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $endedAt = null;

    #[ORM\OneToMany(targetEntity: Aftersales::class, mappedBy: 'ord', orphanRemoval: true)]
    private Collection $aftersales;

    #[ORM\OneToMany(targetEntity: OrderItem::class, mappedBy: 'ord', orphanRemoval: true)]
    private Collection $orderItems;

    public function __construct()
    {
        $this->aftersales = new ArrayCollection();
        $this->orderItems = new ArrayCollection();
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

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getAftersaleStatus(): ?int
    {
        return $this->aftersaleStatus;
    }

    public function setAftersaleStatus(int $aftersaleStatus): static
    {
        $this->aftersaleStatus = $aftersaleStatus;

        return $this;
    }

    public function getConsignee(): ?string
    {
        return $this->consignee;
    }

    public function setConsignee(string $consignee): static
    {
        $this->consignee = $consignee;

        return $this;
    }

    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    public function setMobile(string $mobile): static
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): static
    {
        $this->message = $message;

        return $this;
    }

    public function getGoodsPrice(): ?string
    {
        return $this->goodsPrice;
    }

    public function setGoodsPrice(string $goodsPrice): static
    {
        $this->goodsPrice = $goodsPrice;

        return $this;
    }

    public function getFreightPrice(): ?string
    {
        return $this->freightPrice;
    }

    public function setFreightPrice(string $freightPrice): static
    {
        $this->freightPrice = $freightPrice;

        return $this;
    }

    public function getCouponPrice(): ?string
    {
        return $this->couponPrice;
    }

    public function setCouponPrice(string $couponPrice): static
    {
        $this->couponPrice = $couponPrice;

        return $this;
    }

    public function getIntegralPrice(): ?string
    {
        return $this->integralPrice;
    }

    public function setIntegralPrice(string $integralPrice): static
    {
        $this->integralPrice = $integralPrice;

        return $this;
    }

    public function getGrouponPrice(): ?string
    {
        return $this->grouponPrice;
    }

    public function setGrouponPrice(string $grouponPrice): static
    {
        $this->grouponPrice = $grouponPrice;

        return $this;
    }

    public function getOrderPrice(): ?string
    {
        return $this->orderPrice;
    }

    public function setOrderPrice(string $orderPrice): static
    {
        $this->orderPrice = $orderPrice;

        return $this;
    }

    public function getActualPrice(): ?string
    {
        return $this->actualPrice;
    }

    public function setActualPrice(string $actualPrice): static
    {
        $this->actualPrice = $actualPrice;

        return $this;
    }

    public function getPayId(): ?int
    {
        return $this->payId;
    }

    public function setPayId(?int $payId): static
    {
        $this->payId = $payId;

        return $this;
    }

    public function getPayTime(): ?string
    {
        return $this->payTime;
    }

    public function setPayTime(?string $payTime): static
    {
        $this->payTime = $payTime;

        return $this;
    }

    public function getShipSn(): ?string
    {
        return $this->shipSn;
    }

    public function setShipSn(?string $shipSn): static
    {
        $this->shipSn = $shipSn;

        return $this;
    }

    public function getShipChannel(): ?string
    {
        return $this->shipChannel;
    }

    public function setShipChannel(?string $shipChannel): static
    {
        $this->shipChannel = $shipChannel;

        return $this;
    }

    public function getShipTime(): ?\DateTimeImmutable
    {
        return $this->shipTime;
    }

    public function setShipTime(?\DateTimeImmutable $shipTime): static
    {
        $this->shipTime = $shipTime;

        return $this;
    }

    public function getRefundAmount(): ?string
    {
        return $this->refundAmount;
    }

    public function setRefundAmount(?string $refundAmount): static
    {
        $this->refundAmount = $refundAmount;

        return $this;
    }

    public function getRefundType(): ?string
    {
        return $this->refundType;
    }

    public function setRefundType(?string $refundType): static
    {
        $this->refundType = $refundType;

        return $this;
    }

    public function getRefundContent(): ?string
    {
        return $this->refundContent;
    }

    public function setRefundContent(?string $refundContent): static
    {
        $this->refundContent = $refundContent;

        return $this;
    }

    public function getRefundTime(): ?\DateTimeImmutable
    {
        return $this->refundTime;
    }

    public function setRefundTime(?\DateTimeImmutable $refundTime): static
    {
        $this->refundTime = $refundTime;

        return $this;
    }

    public function getConfirmTime(): ?\DateTimeImmutable
    {
        return $this->confirmTime;
    }

    public function setConfirmTime(?\DateTimeImmutable $confirmTime): static
    {
        $this->confirmTime = $confirmTime;

        return $this;
    }

    public function getComments(): ?int
    {
        return $this->comments;
    }

    public function setComments(int $comments): static
    {
        $this->comments = $comments;

        return $this;
    }

    public function getEndTime(): ?\DateTimeImmutable
    {
        return $this->endTime;
    }

    public function setEndTime(?\DateTimeImmutable $endTime): static
    {
        $this->endTime = $endTime;

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

    public function getPaidAt(): ?\DateTimeImmutable
    {
        return $this->paidAt;
    }

    public function setPaidAt(?\DateTimeImmutable $paidAt): static
    {
        $this->paidAt = $paidAt;

        return $this;
    }

    public function getShippedAt(): ?\DateTimeImmutable
    {
        return $this->shippedAt;
    }

    public function setShippedAt(?\DateTimeImmutable $shippedAt): static
    {
        $this->shippedAt = $shippedAt;

        return $this;
    }

    public function getRefundedAt(): ?\DateTimeImmutable
    {
        return $this->refundedAt;
    }

    public function setRefundedAt(?\DateTimeImmutable $refundedAt): static
    {
        $this->refundedAt = $refundedAt;

        return $this;
    }

    public function getConfirmedAt(): ?\DateTimeImmutable
    {
        return $this->confirmedAt;
    }

    public function setConfirmedAt(?\DateTimeImmutable $confirmedAt): static
    {
        $this->confirmedAt = $confirmedAt;

        return $this;
    }

    public function getEndedAt(): ?\DateTimeImmutable
    {
        return $this->endedAt;
    }

    public function setEndedAt(?\DateTimeImmutable $endedAt): static
    {
        $this->endedAt = $endedAt;

        return $this;
    }

    /**
     * @return Collection<int, Aftersales>
     */
    public function getAftersales(): Collection
    {
        return $this->aftersales;
    }

    public function addAftersale(Aftersales $aftersale): static
    {
        if (!$this->aftersales->contains($aftersale)) {
            $this->aftersales->add($aftersale);
            $aftersale->setOrd($this);
        }

        return $this;
    }

    public function removeAftersale(Aftersales $aftersale): static
    {
        if ($this->aftersales->removeElement($aftersale)) {
            // set the owning side to null (unless already changed)
            if ($aftersale->getOrd() === $this) {
                $aftersale->setOrd(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, OrderItem>
     */
    public function getOrderItems(): Collection
    {
        return $this->orderItems;
    }

    public function addOrderItem(OrderItem $orderItem): static
    {
        if (!$this->orderItems->contains($orderItem)) {
            $this->orderItems->add($orderItem);
            $orderItem->setOrd($this);
        }

        return $this;
    }

    public function removeOrderItem(OrderItem $orderItem): static
    {
        if ($this->orderItems->removeElement($orderItem)) {
            // set the owning side to null (unless already changed)
            if ($orderItem->getOrd() === $this) {
                $orderItem->setOrd(null);
            }
        }

        return $this;
    }
}

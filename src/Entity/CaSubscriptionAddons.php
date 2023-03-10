<?php

namespace App\Entity;

use App\Repository\CaSubscriptionAddonsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CaSubscriptionAddonsRepository::class)]
class CaSubscriptionAddons
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'caSubscriptionAddons')]
    private ?User $userId = null;

    #[ORM\ManyToOne(inversedBy: 'caSubscriptionAddons')]
    private ?CaSubscription $caSubscriptionId = null;

    #[ORM\ManyToOne(inversedBy: 'caSubscriptionAddons')]
    private ?Addons $addonsId = null;

    #[ORM\Column(nullable: true)]
    private ?int $addonType = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $addonTitle = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $addonTypeJson = null;

    #[ORM\Column(nullable: true)]
    private ?int $time = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $monthDay = null;

    #[ORM\Column(nullable: true)]
    private ?float $price = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $startDate = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $endDate = null;

    #[ORM\Column(nullable: true)]
    private ?int $qty = null;

    #[ORM\Column(nullable: true)]
    private ?int $totalPrice = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $status = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $updatedAt = null;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();                
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?User
    {
        return $this->userId;
    }

    public function setUserId(?User $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getCaSubscriptionId(): ?CaSubscription
    {
        return $this->caSubscriptionId;
    }

    public function setCaSubscriptionId(?CaSubscription $caSubscriptionId): self
    {
        $this->caSubscriptionId = $caSubscriptionId;

        return $this;
    }

    public function getAddonsId(): ?Addons
    {
        return $this->addonsId;
    }

    public function setAddonsId(?Addons $addonsId): self
    {
        $this->addonsId = $addonsId;

        return $this;
    }

    public function getAddonType(): ?int
    {
        return $this->addonType;
    }

    public function setAddonType(?int $addonType): self
    {
        $this->addonType = $addonType;

        return $this;
    }

    public function getAddonTitle(): ?string
    {
        return $this->addonTitle;
    }

    public function setAddonTitle(?string $addonTitle): self
    {
        $this->addonTitle = $addonTitle;

        return $this;
    }

    public function getAddonTypeJson(): ?string
    {
        return $this->addonTypeJson;
    }

    public function setAddonTypeJson(?string $addonTypeJson): self
    {
        $this->addonTypeJson = $addonTypeJson;

        return $this;
    }

    public function getTime(): ?int
    {
        return $this->time;
    }

    public function setTime(?int $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getMonthDay(): ?string
    {
        return $this->monthDay;
    }

    public function setMonthDay(?string $monthDay): self
    {
        $this->monthDay = $monthDay;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(?\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(?\DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getQty(): ?int
    {
        return $this->qty;
    }

    public function setQty(?int $qty): self
    {
        $this->qty = $qty;

        return $this;
    }

    public function getTotalPrice(): ?int
    {
        return $this->totalPrice;
    }

    public function setTotalPrice(?int $totalPrice): self
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}

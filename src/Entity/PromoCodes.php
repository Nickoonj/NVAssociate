<?php

namespace App\Entity;

use App\Repository\PromoCodesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PromoCodesRepository::class)]
class PromoCodes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $promoName = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $promoDescription = null;

    #[ORM\Column(length: 255)]
    private ?string $promoType = null;

    

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $startDate = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $endDate = null;

    #[ORM\Column(length: 255)]
    private ?string $userType = null;

    #[ORM\Column]
    private ?int $userCategory = null;

    #[ORM\Column]
    private ?int $lifeOfCode = null;

    #[ORM\Column]
    private ?int $usePerUser = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $termsCondition = null;
    
    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $status = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $updatedAt = null;

    #[ORM\Column]
    private ?bool $displayOnPortal = null;

    #[ORM\Column]
    private ?int $discountAmount = null;

    #[ORM\Column]
    private ?int $maximumDiscountAmount = null;

    #[ORM\Column]
    private ?int $maximumOrderValue = null;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPromoName(): ?string
    {
        return $this->promoName;
    }

    public function setPromoName(string $promoName): self
    {
        $this->promoName = $promoName;

        return $this;
    }

    public function getPromoDescription(): ?string
    {
        return $this->promoDescription;
    }

    public function setPromoDescription(?string $promoDescription): self
    {
        $this->promoDescription = $promoDescription;

        return $this;
    }

    public function getPromoType(): ?string
    {
        return $this->promoType;
    }

    public function setPromoType(string $promoType): self
    {
        $this->promoType = $promoType;

        return $this;
    }
    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(\DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getUserType(): ?string
    {
        return $this->userType;
    }

    public function setUserType(string $userType): self
    {
        $this->userType = $userType;

        return $this;
    }

    public function getUserCategory(): ?int
    {
        return $this->userCategory;
    }

    public function setUserCategory(int $userCategory): self
    {
        $this->userCategory = $userCategory;

        return $this;
    }

    public function getLifeOfCode(): ?int
    {
        return $this->lifeOfCode;
    }

    public function setLifeOfCode(int $lifeOfCode): self
    {
        $this->lifeOfCode = $lifeOfCode;

        return $this;
    }

    public function getUsePerUser(): ?int
    {
        return $this->usePerUser;
    }

    public function setUsePerUser(int $usePerUser): self
    {
        $this->usePerUser = $usePerUser;

        return $this;
    }

    public function getTermsCondition(): ?string
    {
        return $this->termsCondition;
    }

    public function setTermsCondition(?string $termsCondition): self
    {
        $this->termsCondition = $termsCondition;

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
    public function getDisplayOnPortal(): ?bool
    {
        return $this->displayOnPortal;
    }
    public function isDisplayOnPortal(): ?bool
    {
        return $this->displayOnPortal;
    }

    public function setDisplayOnPortal(bool $displayOnPortal): self
    {
        $this->displayOnPortal = $displayOnPortal;

        return $this;
    }

    public function getDiscountAmount(): ?int
    {
        return $this->discountAmount;
    }

    public function setDiscountAmount(int $discountAmount): self
    {
        $this->discountAmount = $discountAmount;

        return $this;
    }

    public function getMaximumDiscountAmount(): ?int
    {
        return $this->maximumDiscountAmount;
    }

    public function setMaximumDiscountAmount(int $maximumDiscountAmount): self
    {
        $this->maximumDiscountAmount = $maximumDiscountAmount;

        return $this;
    }

    public function getMaximumOrderValue(): ?int
    {
        return $this->maximumOrderValue;
    }

    public function setMaximumOrderValue(int $maximumOrderValue): self
    {
        $this->maximumOrderValue = $maximumOrderValue;

        return $this;
    }
}

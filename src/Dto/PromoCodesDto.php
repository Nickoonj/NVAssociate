<?php
namespace App\Dto;

Class PromoCodesDto
{

    private ?string $promoName = null;
    private ?string $promoDescription = null;
    private ?string $promoType = null;
    private ?int $discountAmount = null;
    private ?int $maximumDiscountAmount = null;
    private ?int $maximumOrderValue = null;
    private ?string $startDate = null;
    private ?string $endDate = null;
    private ?string $startTime = null;
    private ?string $endTime = null;
    private ?string $userType = null;
    private ?int $userCategory = null;
    private ?int $lifeOfCode = null;
    private ?int $usePerUser = null;
    private ?string $termsCondition = null;
    private ?string $displayOnPortal = null;
    private ?int $status = null;
    

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

    public function getStartDate(): ?string
    {
        return $this->startDate;
    }

    public function setStartDate(string $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    public function setStartTime(string $startTime): self
    {
        $this->startTime = $startTime;

        return $this;
    }

    public function getEndDate(): ?string
    {
        return $this->endDate;
    }

    public function setEndDate(string $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    public function setEndTime(string $endTime): self
    {
        $this->endTime = $endTime;

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

    public function getDisplayOnPortal(): ?bool
    {
        return $this->displayOnPortal;
    }

    public function setDisplayOnPortal(bool $displayOnPortal): self
    {
        $this->displayOnPortal = $displayOnPortal;

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

    
}

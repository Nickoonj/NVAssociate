<?php

namespace App\Entity;

use App\Repository\CaSubscriptionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CaSubscriptionRepository::class)]
class CaSubscription
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'caSubscriptions')]
    private ?User $userId = null;

    #[ORM\ManyToOne(inversedBy: 'caSubscriptions')]
    private ?Subscriptions $subscriptionId = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $subscriptionTitle = null;

    #[ORM\Column(nullable: true)]
    private ?int $time = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $monthDay = null;

    #[ORM\Column(nullable: true)]
    private ?int $noOfClients = null;

    #[ORM\Column(nullable: true)]
    private ?int $noOfClientLogin = null;

    #[ORM\Column(nullable: true)]
    private ?int $noOfEmployee = null;

    #[ORM\Column(nullable: true)]
    private ?int $noOfTransaction = null;

    #[ORM\Column(nullable: true)]
    private ?int $storageSize = null;

    #[ORM\Column(nullable: true)]
    private ?float $price = null;

    #[ORM\Column(nullable: true)]
    private ?bool $taskManager = null;

    #[ORM\Column(nullable: true)]
    private ?bool $fileManager = null;

    #[ORM\Column(nullable: true)]
    private ?bool $clientLoginApp = null;

    #[ORM\Column(nullable: true)]
    private ?bool $eCommerce = null;

    #[ORM\Column(nullable: true)]
    private ?bool $templateCustomization = null;

    #[ORM\Column(nullable: true)]
    private ?bool $liveReportClientMobileApp = null;

    #[ORM\Column(nullable: true)]
    private ?bool $isAddons = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $startDate = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $endDate = null;

    #[ORM\Column(nullable: true)]
    private ?bool $isPromoApply = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $promoCode = null;

    #[ORM\Column(nullable: true)]
    private ?float $promoDiscount = null;

    #[ORM\Column(nullable: true)]
    private ?float $adminDiscount = null;

    #[ORM\Column(nullable: true)]
    private ?float $taxAmount = null;

    #[ORM\Column(nullable: true)]
    private ?float $roundOffAmount = null;

    #[ORM\Column(nullable: true)]
    private ?float $invoiceAmount = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $paymentTerms = null;

    #[ORM\Column]
    private ?int $creditPeriod = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $creditPeriodDayMonth = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $paymentMode = null;

    #[ORM\Column(nullable: true)]
    private ?bool $subscriptionStatus = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $updatedAt = null;

    #[ORM\OneToMany(mappedBy: 'caSubscriptionId', targetEntity: CaSubscriptionAddons::class)]
    private Collection $caSubscriptionAddons;
    
    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();        
        $this->caSubscriptionAddons = new ArrayCollection();
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

    public function getSubscriptionId(): ?Subscriptions
    {
        return $this->subscriptionId;
    }

    public function setSubscriptionId(?Subscriptions $subscriptionId): self
    {
        $this->subscriptionId = $subscriptionId;

        return $this;
    }

    public function getSubscriptionTitle(): ?string
    {
        return $this->subscriptionTitle;
    }

    public function setSubscriptionTitle(?string $subscriptionTitle): self
    {
        $this->subscriptionTitle = $subscriptionTitle;

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

    public function getNoOfClients(): ?int
    {
        return $this->noOfClients;
    }

    public function setNoOfClients(?int $noOfClients): self
    {
        $this->noOfClients = $noOfClients;

        return $this;
    }

    public function getNoOfClientLogin(): ?int
    {
        return $this->noOfClientLogin;
    }

    public function setNoOfClientLogin(?int $noOfClientLogin): self
    {
        $this->noOfClientLogin = $noOfClientLogin;

        return $this;
    }

    public function getNoOfEmployee(): ?int
    {
        return $this->noOfEmployee;
    }

    public function setNoOfEmployee(?int $noOfEmployee): self
    {
        $this->noOfEmployee = $noOfEmployee;

        return $this;
    }

    public function getNoOfTransaction(): ?int
    {
        return $this->noOfTransaction;
    }

    public function setNoOfTransaction(?int $noOfTransaction): self
    {
        $this->noOfTransaction = $noOfTransaction;

        return $this;
    }

    public function getStorageSize(): ?int
    {
        return $this->storageSize;
    }

    public function setStorageSize(?int $storageSize): self
    {
        $this->storageSize = $storageSize;

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

    public function isTaskManager(): ?bool
    {
        return $this->taskManager;
    }

    public function setTaskManager(?bool $taskManager): self
    {
        $this->taskManager = $taskManager;

        return $this;
    }

    public function isFileManager(): ?bool
    {
        return $this->fileManager;
    }

    public function setFileManager(?bool $fileManager): self
    {
        $this->fileManager = $fileManager;

        return $this;
    }

    public function isClientLoginApp(): ?bool
    {
        return $this->clientLoginApp;
    }

    public function setClientLoginApp(?bool $clientLoginApp): self
    {
        $this->clientLoginApp = $clientLoginApp;

        return $this;
    }

    public function isECommerce(): ?bool
    {
        return $this->eCommerce;
    }

    public function setECommerce(?bool $eCommerce): self
    {
        $this->eCommerce = $eCommerce;

        return $this;
    }

    public function isTemplateCustomization(): ?bool
    {
        return $this->templateCustomization;
    }

    public function setTemplateCustomization(?bool $templateCustomization): self
    {
        $this->templateCustomization = $templateCustomization;

        return $this;
    }

    public function isLiveReportClientMobileApp(): ?bool
    {
        return $this->liveReportClientMobileApp;
    }

    public function setLiveReportClientMobileApp(?bool $liveReportClientMobileApp): self
    {
        $this->liveReportClientMobileApp = $liveReportClientMobileApp;

        return $this;
    }

    public function isIsAddons(): ?bool
    {
        return $this->isAddons;
    }

    public function setIsAddons(?bool $isAddons): self
    {
        $this->isAddons = $isAddons;

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

    public function isIsPromoApply(): ?bool
    {
        return $this->isPromoApply;
    }

    public function setIsPromoApply(?bool $isPromoApply): self
    {
        $this->isPromoApply = $isPromoApply;

        return $this;
    }

    public function getPromoCode(): ?string
    {
        return $this->promoCode;
    }

    public function setPromoCode(?string $promoCode): self
    {
        $this->promoCode = $promoCode;

        return $this;
    }

    public function getPromoDiscount(): ?float
    {
        return $this->promoDiscount;
    }

    public function setPromoDiscount(?float $promoDiscount): self
    {
        $this->promoDiscount = $promoDiscount;

        return $this;
    }

    public function getAdminDiscount(): ?float
    {
        return $this->adminDiscount;
    }

    public function setAdminDiscount(?float $adminDiscount): self
    {
        $this->adminDiscount = $adminDiscount;

        return $this;
    }

    public function getTaxAmount(): ?float
    {
        return $this->taxAmount;
    }

    public function setTaxAmount(?float $taxAmount): self
    {
        $this->taxAmount = $taxAmount;

        return $this;
    }

    public function getRoundOffAmount(): ?float
    {
        return $this->roundOffAmount;
    }

    public function setRoundOffAmount(?float $roundOffAmount): self
    {
        $this->roundOffAmount = $roundOffAmount;

        return $this;
    }

    public function getInvoiceAmount(): ?float
    {
        return $this->invoiceAmount;
    }

    public function setInvoiceAmount(?float $invoiceAmount): self
    {
        $this->invoiceAmount = $invoiceAmount;

        return $this;
    }

    public function getPaymentTerms(): ?string
    {
        return $this->paymentTerms;
    }

    public function setPaymentTerms(?string $paymentTerms): self
    {
        $this->paymentTerms = $paymentTerms;

        return $this;
    }

    public function getCreditPeriod(): ?int
    {
        return $this->creditPeriod;
    }

    public function setCreditPeriod(int $creditPeriod): self
    {
        $this->creditPeriod = $creditPeriod;

        return $this;
    }

    public function getCreditPeriodDayMonth(): ?string
    {
        return $this->creditPeriodDayMonth;
    }

    public function setCreditPeriodDayMonth(?string $creditPeriodDayMonth): self
    {
        $this->creditPeriodDayMonth = $creditPeriodDayMonth;

        return $this;
    }

    public function getPaymentMode(): ?string
    {
        return $this->paymentMode;
    }

    public function setPaymentMode(?string $paymentMode): self
    {
        $this->paymentMode = $paymentMode;

        return $this;
    }

    public function isSubscriptionStatus(): ?bool
    {
        return $this->subscriptionStatus;
    }

    public function setSubscriptionStatus(?bool $subscriptionStatus): self
    {
        $this->subscriptionStatus = $subscriptionStatus;

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

    /**
     * @return Collection<int, CaSubscriptionAddons>
     */
    public function getCaSubscriptionAddons(): Collection
    {
        return $this->caSubscriptionAddons;
    }

    public function addCaSubscriptionAddon(CaSubscriptionAddons $caSubscriptionAddon): self
    {
        if (!$this->caSubscriptionAddons->contains($caSubscriptionAddon)) {
            $this->caSubscriptionAddons->add($caSubscriptionAddon);
            $caSubscriptionAddon->setCaSubscriptionId($this);
        }

        return $this;
    }

    public function removeCaSubscriptionAddon(CaSubscriptionAddons $caSubscriptionAddon): self
    {
        if ($this->caSubscriptionAddons->removeElement($caSubscriptionAddon)) {
            // set the owning side to null (unless already changed)
            if ($caSubscriptionAddon->getCaSubscriptionId() === $this) {
                $caSubscriptionAddon->setCaSubscriptionId(null);
            }
        }

        return $this;
    }
}

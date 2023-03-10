<?php
namespace App\Dto;
use App\Entity\ClientType;
// use App\Entity\Countries;
// use App\Entity\States;
// use App\Entity\Cities;
// use App\Entity\Subscriptions;

Class ClientDto
{
    /* User Entity Fields */
    private ?string $firstName = null;
    private ?ClientType $clientType = null;
    // private ?string $email = null;
    // private ?string $mobile = null;
    // private ?Countries $countryId = null;
    // private ?States $stateId = null;
    // private ?Cities $cityId = null;
    // private ?string $address = null;
    // private ?string $pincode = null;
    // private ?string $profileImg = null;
    
    /* CA Firm Details Entity Fields */
    private ?string $firmType = null;
    // private ?string $firmPancard = null;
    // private ?string $firmGST = null;
    // private ?string $firmRegistrationNo = null;
    // private ?string $clientId = null;
    // private ?string $whichGroup = null;
    // private ?string $referredBy = null;
    
    /* CA Owner Details Entity Fields */
    // private ?string $caFirstName = null;
    // private ?string $caMiddleName = null;
    // private ?string $caLastName = null;
    // private ?string $caGender = null;
    // private ?\DateTimeInterface $caBirthDate = null;
    // private ?string $caMembershipNo = null;
    // private ?int $caEmailId = null;
    // private ?string $caMobile = null;
    // private ?string $caAltMobile = null;
    // private ?string $caUserImg = null;

    /* CA Subscription Entity Fields */
    // private ?Subscriptions $subscriptionId = null;        
    // private ?string $subscriptionTitle = null;
    // private ?int $time = null;
    // private ?string $monthDay = null;
    // private ?int $noOfClients = null;
    // private ?int $noOfClientLogin = null;
    // private ?int $noOfEmployee = null;
    // private ?int $noOfTransaction = null;
    // private ?int $storageSize = null;
    // private ?float $price = null;
    // private ?bool $taskManager = null;
    // private ?bool $fileManager = null;
    // private ?bool $clientLoginApp = null;
    // private ?bool $eCommerce = null;
    // private ?bool $templateCustomization = null;
    // private ?bool $liveReportClientMobileApp = null;
    // private ?bool $isAddons = null;
    // private ?\DateTimeInterface $startDate = null;
    // private ?\DateTimeInterface $endDate = null;
    // private ?bool $isPromoApply = null;
    // private ?string $promoCode = null;
    // private ?float $promoDiscount = null;
    // private ?float $adminDiscount = null;
    // private ?float $taxAmount = null;
    // private ?float $roundOffAmount = null;
    // private ?float $invoiceAmount = null;
    // private ?string $paymentTerms = null;
    // private ?int $creditPeriod = null;
    // private ?string $creditPeriodDayMonth = null;
    // private ?string $paymentMode = null;
    // $caSubscription->instrument_type = $request->instrument_type;
    // $caSubscription->instrument_date = $request->instrument_date;
    // $caSubscription->instrument_id = $request->instrument_id;
    // $caSubscription->instrument_amount = $request->instrument_amount;
    // private ?bool $subscriptionStatus = null;


    /* User Entity Getter and Setter */
    public function getClientType(): ?ClientType
    {
        return $this->clientType;
    }

    public function setClientType(?ClientType $clientType): self
    {
        $this->clientType = $clientType;

        return $this;
    }
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }
    // public function getEmail(): ?string
    // {
    //     return $this->email;
    // }

    // public function setEmail(string $email): self
    // {
    //     $this->email = $email;

    //     return $this;
    // }    
    // public function getMobile(): ?string
    // {
    //     return $this->mobile;
    // }

    // public function setMobile(?string $mobile): self
    // {
    //     $this->mobile = $mobile;

    //     return $this;
    // }

    // public function getAddress(): ?string
    // {
    //     return $this->address;
    // }

    // public function setAddress(?string $address): self
    // {
    //     $this->address = $address;

    //     return $this;
    // }

    // public function getPincode(): ?string
    // {
    //     return $this->pincode;
    // }

    // public function setPincode(?string $pincode): self
    // {
    //     $this->pincode = $pincode;

    //     return $this;
    // }

    // public function getProfileImg(): ?string
    // {
    //     return $this->profileImg;
    // }

    // public function setProfileImg(?string $profileImg): self
    // {
    //     $this->profileImg = $profileImg;

    //     return $this;
    // }
    // public function getCountryId(): ?Countries
    // {
    //     return $this->countryId;
    // }

    // public function setCountryId(?Countries $countryId): self
    // {
    //     $this->countryId = $countryId;

    //     return $this;
    // }

    // public function getStateId(): ?States
    // {
    //     return $this->stateId;
    // }

    // public function setStateId(?States $stateId): self
    // {
    //     $this->stateId = $stateId;

    //     return $this;
    // }

    // public function getCityId(): ?Cities
    // {
    //     return $this->cityId;
    // }

    // public function setCityId(?Cities $cityId): self
    // {
    //     $this->cityId = $cityId;

    //     return $this;
    // }  
    
    /* CA Firm Details Entity Getter and Setter */

    public function getFirmType(): ?string
    {
        return $this->firmType;
    }

    public function setFirmType(?string $firmType): self
    {
        $this->firmType = $firmType;

        return $this;
    }

    // public function getFirmPancard(): ?string
    // {
    //     return $this->firmPancard;
    // }

    // public function setFirmPancard(?string $firmPancard): self
    // {
    //     $this->firmPancard = $firmPancard;

    //     return $this;
    // }

    // public function getFirmGST(): ?string
    // {
    //     return $this->firmGST;
    // }

    // public function setFirmGST(?string $firmGST): self
    // {
    //     $this->firmGST = $firmGST;

    //     return $this;
    // }

    // public function getFirmRegistrationNo(): ?string
    // {
    //     return $this->firmRegistrationNo;
    // }

    // public function setFirmRegistrationNo(?string $firmRegistrationNo): self
    // {
    //     $this->firmRegistrationNo = $firmRegistrationNo;

    //     return $this;
    // }

    // public function getClientId(): ?string
    // {
    //     return $this->clientId;
    // }

    // public function setClientId(?string $clientId): self
    // {
    //     $this->clientId = $clientId;

    //     return $this;
    // }

    // public function getWhichGroup(): ?string
    // {
    //     return $this->whichGroup;
    // }

    // public function setWhichGroup(?string $whichGroup): self
    // {
    //     $this->whichGroup = $whichGroup;

    //     return $this;
    // }

    // public function getReferredBy(): ?string
    // {
    //     return $this->referredBy;
    // }

    // public function setReferredBy(?string $referredBy): self
    // {
    //     $this->referredBy = $referredBy;

    //     return $this;
    // }

    /* CA Owner Details Entity Getter and Setter */
    // public function getCaFirstName(): ?string
    // {
    //     return $this->caFirstName;
    // }

    // public function setCaFirstName(?string $caFirstName): self
    // {
    //     $this->caFirstName = $caFirstName;

    //     return $this;
    // }
    // public function getCaMiddleName(): ?string
    // {
    //     return $this->caMiddleName;
    // }

    // public function setCaMiddleName(?string $caMiddleName): self
    // {
    //     $this->caMiddleName = $caMiddleName;

    //     return $this;
    // }

    // public function getCaLastName(): ?string
    // {
    //     return $this->caLastName;
    // }

    // public function setCaLastName(?string $caLastName): self
    // {
    //     $this->caLastName = $caLastName;

    //     return $this;
    // }

    // public function getCaGender(): ?string
    // {
    //     return $this->caGender;
    // }

    // public function setCaGender(?string $caGender): self
    // {
    //     $this->caGender = $caGender;

    //     return $this;
    // }

    // public function getCaBirthDate(): ?\DateTimeInterface
    // {
    //     return $this->caBirthDate;
    // }

    // public function setCaBirthDate(?\DateTimeInterface $caBirthDate): self
    // {
    //     $this->caBirthDate = $caBirthDate;

    //     return $this;
    // }

    // public function getCaMembershipNo(): ?string
    // {
    //     return $this->caMembershipNo;
    // }

    // public function setCaMembershipNo(?string $caMembershipNo): self
    // {
    //     $this->caMembershipNo = $caMembershipNo;

    //     return $this;
    // }

    // public function getCaEmailId(): ?int
    // {
    //     return $this->caEmailId;
    // }

    // public function setCaEmailId(?int $caEmailId): self
    // {
    //     $this->caEmailId = $caEmailId;

    //     return $this;
    // }

    // public function getCaMobile(): ?string
    // {
    //     return $this->caMobile;
    // }

    // public function setCaMobile(?string $caMobile): self
    // {
    //     $this->caMobile = $caMobile;

    //     return $this;
    // }

    // public function getCaAltMobile(): ?string
    // {
    //     return $this->caAltMobile;
    // }

    // public function setCaAltMobile(?string $caAltMobile): self
    // {
    //     $this->caAltMobile = $caAltMobile;

    //     return $this;
    // }

    // public function getCaUserImg(): ?string
    // {
    //     return $this->caUserImg;
    // }

    // public function setCaUserImg(?string $caUserImg): self
    // {
    //     $this->caUserImg = $caUserImg;

    //     return $this;
    // }

    /* CA Subscription Entity Getter and Setter */
    // public function getSubscriptionId(): ?Subscriptions
    // {
    //     return $this->subscriptionId;
    // }

    // public function setSubscriptionId(?Subscriptions $subscriptionId): self
    // {
    //     $this->subscriptionId = $subscriptionId;

    //     return $this;
    // }

    // public function getSubscriptionTitle(): ?string
    // {
    //     return $this->subscriptionTitle;
    // }

    // public function setSubscriptionTitle(?string $subscriptionTitle): self
    // {
    //     $this->subscriptionTitle = $subscriptionTitle;

    //     return $this;
    // }

    // public function getTime(): ?int
    // {
    //     return $this->time;
    // }

    // public function setTime(?int $time): self
    // {
    //     $this->time = $time;

    //     return $this;
    // }

    // public function getMonthDay(): ?string
    // {
    //     return $this->monthDay;
    // }

    // public function setMonthDay(?string $monthDay): self
    // {
    //     $this->monthDay = $monthDay;

    //     return $this;
    // }

    // public function getNoOfClients(): ?int
    // {
    //     return $this->noOfClients;
    // }

    // public function setNoOfClients(?int $noOfClients): self
    // {
    //     $this->noOfClients = $noOfClients;

    //     return $this;
    // }

    // public function getNoOfClientLogin(): ?int
    // {
    //     return $this->noOfClientLogin;
    // }

    // public function setNoOfClientLogin(?int $noOfClientLogin): self
    // {
    //     $this->noOfClientLogin = $noOfClientLogin;

    //     return $this;
    // }

    // public function getNoOfEmployee(): ?int
    // {
    //     return $this->noOfEmployee;
    // }

    // public function setNoOfEmployee(?int $noOfEmployee): self
    // {
    //     $this->noOfEmployee = $noOfEmployee;

    //     return $this;
    // }

    // public function getNoOfTransaction(): ?int
    // {
    //     return $this->noOfTransaction;
    // }

    // public function setNoOfTransaction(?int $noOfTransaction): self
    // {
    //     $this->noOfTransaction = $noOfTransaction;

    //     return $this;
    // }

    // public function getStorageSize(): ?int
    // {
    //     return $this->storageSize;
    // }

    // public function setStorageSize(?int $storageSize): self
    // {
    //     $this->storageSize = $storageSize;

    //     return $this;
    // }

    // public function getPrice(): ?float
    // {
    //     return $this->price;
    // }

    // public function setPrice(?float $price): self
    // {
    //     $this->price = $price;

    //     return $this;
    // }

    // public function isTaskManager(): ?bool
    // {
    //     return $this->taskManager;
    // }

    // public function setTaskManager(?bool $taskManager): self
    // {
    //     $this->taskManager = $taskManager;

    //     return $this;
    // }

    // public function isFileManager(): ?bool
    // {
    //     return $this->fileManager;
    // }

    // public function setFileManager(?bool $fileManager): self
    // {
    //     $this->fileManager = $fileManager;

    //     return $this;
    // }

    // public function isClientLoginApp(): ?bool
    // {
    //     return $this->clientLoginApp;
    // }

    // public function setClientLoginApp(?bool $clientLoginApp): self
    // {
    //     $this->clientLoginApp = $clientLoginApp;

    //     return $this;
    // }

    // public function isECommerce(): ?bool
    // {
    //     return $this->eCommerce;
    // }

    // public function setECommerce(?bool $eCommerce): self
    // {
    //     $this->eCommerce = $eCommerce;

    //     return $this;
    // }

    // public function isTemplateCustomization(): ?bool
    // {
    //     return $this->templateCustomization;
    // }

    // public function setTemplateCustomization(?bool $templateCustomization): self
    // {
    //     $this->templateCustomization = $templateCustomization;

    //     return $this;
    // }

    // public function isLiveReportClientMobileApp(): ?bool
    // {
    //     return $this->liveReportClientMobileApp;
    // }

    // public function setLiveReportClientMobileApp(?bool $liveReportClientMobileApp): self
    // {
    //     $this->liveReportClientMobileApp = $liveReportClientMobileApp;

    //     return $this;
    // }

    // public function isIsAddons(): ?bool
    // {
    //     return $this->isAddons;
    // }

    // public function setIsAddons(?bool $isAddons): self
    // {
    //     $this->isAddons = $isAddons;

    //     return $this;
    // }

    // public function getStartDate(): ?\DateTimeInterface
    // {
    //     return $this->startDate;
    // }

    // public function setStartDate(?\DateTimeInterface $startDate): self
    // {
    //     $this->startDate = $startDate;

    //     return $this;
    // }

    // public function getEndDate(): ?\DateTimeInterface
    // {
    //     return $this->endDate;
    // }

    // public function setEndDate(?\DateTimeInterface $endDate): self
    // {
    //     $this->endDate = $endDate;

    //     return $this;
    // }

    // public function isIsPromoApply(): ?bool
    // {
    //     return $this->isPromoApply;
    // }

    // public function setIsPromoApply(?bool $isPromoApply): self
    // {
    //     $this->isPromoApply = $isPromoApply;

    //     return $this;
    // }

    // public function getPromoCode(): ?string
    // {
    //     return $this->promoCode;
    // }

    // public function setPromoCode(?string $promoCode): self
    // {
    //     $this->promoCode = $promoCode;

    //     return $this;
    // }

    // public function getPromoDiscount(): ?float
    // {
    //     return $this->promoDiscount;
    // }

    // public function setPromoDiscount(?float $promoDiscount): self
    // {
    //     $this->promoDiscount = $promoDiscount;

    //     return $this;
    // }

    // public function getAdminDiscount(): ?float
    // {
    //     return $this->adminDiscount;
    // }

    // public function setAdminDiscount(?float $adminDiscount): self
    // {
    //     $this->adminDiscount = $adminDiscount;

    //     return $this;
    // }

    // public function getTaxAmount(): ?float
    // {
    //     return $this->taxAmount;
    // }

    // public function setTaxAmount(?float $taxAmount): self
    // {
    //     $this->taxAmount = $taxAmount;

    //     return $this;
    // }

    // public function getRoundOffAmount(): ?float
    // {
    //     return $this->roundOffAmount;
    // }

    // public function setRoundOffAmount(?float $roundOffAmount): self
    // {
    //     $this->roundOffAmount = $roundOffAmount;

    //     return $this;
    // }

    // public function getInvoiceAmount(): ?float
    // {
    //     return $this->invoiceAmount;
    // }

    // public function setInvoiceAmount(?float $invoiceAmount): self
    // {
    //     $this->invoiceAmount = $invoiceAmount;

    //     return $this;
    // }

    // public function getPaymentTerms(): ?string
    // {
    //     return $this->paymentTerms;
    // }

    // public function setPaymentTerms(?string $paymentTerms): self
    // {
    //     $this->paymentTerms = $paymentTerms;

    //     return $this;
    // }

    // public function getCreditPeriod(): ?int
    // {
    //     return $this->creditPeriod;
    // }

    // public function setCreditPeriod(int $creditPeriod): self
    // {
    //     $this->creditPeriod = $creditPeriod;

    //     return $this;
    // }

    // public function getCreditPeriodDayMonth(): ?string
    // {
    //     return $this->creditPeriodDayMonth;
    // }

    // public function setCreditPeriodDayMonth(?string $creditPeriodDayMonth): self
    // {
    //     $this->creditPeriodDayMonth = $creditPeriodDayMonth;

    //     return $this;
    // }

    // public function getPaymentMode(): ?string
    // {
    //     return $this->paymentMode;
    // }

    // public function setPaymentMode(?string $paymentMode): self
    // {
    //     $this->paymentMode = $paymentMode;

    //     return $this;
    // }

    

    
}

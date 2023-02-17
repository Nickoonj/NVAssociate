<?php

namespace App\Entity;

use App\Repository\SubscriptionsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SubscriptionsRepository::class)]
class Subscriptions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $planTitle = null;

    #[ORM\Column]
    private ?int $time = null;

    #[ORM\Column(length: 255)]
    private ?string $monthDay = null;

    #[ORM\Column]
    private ?int $noOfClients = null;

    #[ORM\Column]
    private ?int $noOfClientsLogin = null;

    #[ORM\Column]
    private ?int $noOfEmployee = null;

    #[ORM\Column]
    private ?int $noOfTransaction = null;

    #[ORM\Column]
    private ?int $storageSize = null;

    #[ORM\Column]
    private ?int $price = null;

    #[ORM\Column(length: 255)]
    private ?string $displayOnPortal = null;

    #[ORM\Column(length: 255)]
    private ?string $taskManager = null;

    #[ORM\Column(length: 255)]
    private ?string $fileManager = null;

    #[ORM\Column(length: 255)]
    private ?string $clientLoginApp = null;

    #[ORM\Column(length: 255)]
    private ?string $eCommerce = null;

    #[ORM\Column(length: 255)]
    private ?string $templateCustomization = null;

    #[ORM\Column(length: 255)]
    private ?string $liveReportClientMobileApp = null;

    #[ORM\Column]
    private ?bool $status = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $deletedAt = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPlanTitle(): ?string
    {
        return $this->planTitle;
    }

    public function setPlanTitle(string $planTitle): self
    {
        $this->planTitle = $planTitle;

        return $this;
    }

    public function getTime(): ?int
    {
        return $this->time;
    }

    public function setTime(int $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getMonthDay(): ?string
    {
        return $this->monthDay;
    }

    public function setMonthDay(string $monthDay): self
    {
        $this->monthDay = $monthDay;

        return $this;
    }

    public function getNoOfClients(): ?int
    {
        return $this->noOfClients;
    }

    public function setNoOfClients(int $noOfClients): self
    {
        $this->noOfClients = $noOfClients;

        return $this;
    }

    public function getNoOfClientsLogin(): ?int
    {
        return $this->noOfClientsLogin;
    }

    public function setNoOfClientsLogin(int $noOfClientsLogin): self
    {
        $this->noOfClientsLogin = $noOfClientsLogin;

        return $this;
    }

    public function getNoOfEmployee(): ?int
    {
        return $this->noOfEmployee;
    }

    public function setNoOfEmployee(int $noOfEmployee): self
    {
        $this->noOfEmployee = $noOfEmployee;

        return $this;
    }

    public function getNoOfTransaction(): ?int
    {
        return $this->noOfTransaction;
    }

    public function setNoOfTransaction(int $noOfTransaction): self
    {
        $this->noOfTransaction = $noOfTransaction;

        return $this;
    }

    public function getStorageSize(): ?int
    {
        return $this->storageSize;
    }

    public function setStorageSize(int $storageSize): self
    {
        $this->storageSize = $storageSize;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getDisplayOnPortal(): ?string
    {
        return $this->displayOnPortal;
    }

    public function setDisplayOnPortal(string $displayOnPortal): self
    {
        $this->displayOnPortal = $displayOnPortal;

        return $this;
    }

    public function getTaskManager(): ?string
    {
        return $this->taskManager;
    }

    public function setTaskManager(string $taskManager): self
    {
        $this->taskManager = $taskManager;

        return $this;
    }

    public function getFileManager(): ?string
    {
        return $this->fileManager;
    }

    public function setFileManager(string $fileManager): self
    {
        $this->fileManager = $fileManager;

        return $this;
    }

    public function getClientLoginApp(): ?string
    {
        return $this->clientLoginApp;
    }

    public function setClientLoginApp(string $clientLoginApp): self
    {
        $this->clientLoginApp = $clientLoginApp;

        return $this;
    }

    public function getECommerce(): ?string
    {
        return $this->eCommerce;
    }

    public function setECommerce(string $eCommerce): self
    {
        $this->eCommerce = $eCommerce;

        return $this;
    }

    public function getTemplateCustomization(): ?string
    {
        return $this->templateCustomization;
    }

    public function setTemplateCustomization(string $templateCustomization): self
    {
        $this->templateCustomization = $templateCustomization;

        return $this;
    }

    public function getLiveReportClientMobileApp(): ?string
    {
        return $this->liveReportClientMobileApp;
    }

    public function setLiveReportClientMobileApp(string $liveReportClientMobileApp): self
    {
        $this->liveReportClientMobileApp = $liveReportClientMobileApp;

        return $this;
    }

    public function isStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getDeletedAt(): ?\DateTimeImmutable
    {
        return $this->deletedAt;
    }

    public function setDeletedAt(?\DateTimeImmutable $deletedAt): self
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\CaFirmDetailsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CaFirmDetailsRepository::class)]
class CaFirmDetails
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'caFirmDetails')]
    private ?User $userId = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $firmType = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $firmPancard = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $firmGST = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $firmRegistrationNo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $clientId = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $whichGroup = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $referredBy = null;

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

    public function getFirmType(): ?string
    {
        return $this->firmType;
    }

    public function setFirmType(?string $firmType): self
    {
        $this->firmType = $firmType;

        return $this;
    }

    public function getFirmPancard(): ?string
    {
        return $this->firmPancard;
    }

    public function setFirmPancard(?string $firmPancard): self
    {
        $this->firmPancard = $firmPancard;

        return $this;
    }

    public function getFirmGST(): ?string
    {
        return $this->firmGST;
    }

    public function setFirmGST(?string $firmGST): self
    {
        $this->firmGST = $firmGST;

        return $this;
    }

    public function getFirmRegistrationNo(): ?string
    {
        return $this->firmRegistrationNo;
    }

    public function setFirmRegistrationNo(?string $firmRegistrationNo): self
    {
        $this->firmRegistrationNo = $firmRegistrationNo;

        return $this;
    }

    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    public function setClientId(?string $clientId): self
    {
        $this->clientId = $clientId;

        return $this;
    }

    public function getWhichGroup(): ?string
    {
        return $this->whichGroup;
    }

    public function setWhichGroup(?string $whichGroup): self
    {
        $this->whichGroup = $whichGroup;

        return $this;
    }

    public function getReferredBy(): ?string
    {
        return $this->referredBy;
    }

    public function setReferredBy(?string $referredBy): self
    {
        $this->referredBy = $referredBy;

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

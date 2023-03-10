<?php

namespace App\Entity;

use App\Repository\CaOwnerDetailsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CaOwnerDetailsRepository::class)]
class CaOwnerDetails
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'caOwnerDetails')]
    private ?User $userId = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $caMiddleName = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $caLastName = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $caGender = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $caBirthDate = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $caMembershipNo = null;

    #[ORM\Column(nullable: true)]
    private ?int $caEmailId = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $caEmailid = null;

    #[ORM\Column(length: 15, nullable: true)]
    private ?string $caMobile = null;

    #[ORM\Column(length: 15, nullable: true)]
    private ?string $caAltMobile = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $caUserImg = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $status = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $updatedAt = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $caFirstName = null;

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

    public function getCaMiddleName(): ?string
    {
        return $this->caMiddleName;
    }

    public function setCaMiddleName(?string $caMiddleName): self
    {
        $this->caMiddleName = $caMiddleName;

        return $this;
    }

    public function getCaLastName(): ?string
    {
        return $this->caLastName;
    }

    public function setCaLastName(?string $caLastName): self
    {
        $this->caLastName = $caLastName;

        return $this;
    }

    public function getCaGender(): ?string
    {
        return $this->caGender;
    }

    public function setCaGender(?string $caGender): self
    {
        $this->caGender = $caGender;

        return $this;
    }

    public function getCaBirthDate(): ?\DateTimeInterface
    {
        return $this->caBirthDate;
    }

    public function setCaBirthDate(?\DateTimeInterface $caBirthDate): self
    {
        $this->caBirthDate = $caBirthDate;

        return $this;
    }

    public function getCaMembershipNo(): ?string
    {
        return $this->caMembershipNo;
    }

    public function setCaMembershipNo(?string $caMembershipNo): self
    {
        $this->caMembershipNo = $caMembershipNo;

        return $this;
    }

    public function getCaEmailId(): ?int
    {
        return $this->caEmailId;
    }

    public function setCaEmailId(?int $caEmailId): self
    {
        $this->caEmailId = $caEmailId;

        return $this;
    }

    public function getCaMobile(): ?string
    {
        return $this->caMobile;
    }

    public function setCaMobile(?string $caMobile): self
    {
        $this->caMobile = $caMobile;

        return $this;
    }

    public function getCaAltMobile(): ?string
    {
        return $this->caAltMobile;
    }

    public function setCaAltMobile(?string $caAltMobile): self
    {
        $this->caAltMobile = $caAltMobile;

        return $this;
    }

    public function getCaUserImg(): ?string
    {
        return $this->caUserImg;
    }

    public function setCaUserImg(?string $caUserImg): self
    {
        $this->caUserImg = $caUserImg;

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

    public function getCaFirstName(): ?string
    {
        return $this->caFirstName;
    }

    public function setCaFirstName(?string $caFirstName): self
    {
        $this->caFirstName = $caFirstName;

        return $this;
    }
                
}

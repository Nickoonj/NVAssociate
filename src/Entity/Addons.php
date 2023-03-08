<?php

namespace App\Entity;

use App\Entity\AddonsType;
use App\Repository\AddonsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AddonsRepository::class)]
class Addons
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'addons')]
    private ?AddonsType $addOnType = null;

    #[ORM\Column(length: 255)]
    private ?string $addOnTitle = null;

    #[ORM\Column(length: 2500, nullable: true)]
    private ?string $addOnTypeJson = null;

    #[ORM\Column(nullable: true)]
    private ?int $time = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $monthDay = null;

    #[ORM\Column]
    private ?int $Price = null;

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

    public function getAddOnType(): ?AddonsType
    {
        return $this->addOnType;
    }

    public function setAddOnType(?AddonsType $addOnType): self
    {
        $this->addOnType = $addOnType;

        return $this;
    }

    public function getAddOnTitle(): ?string
    {
        return $this->addOnTitle;
    }

    public function setAddOnTitle(string $addOnTitle): self
    {
        $this->addOnTitle = $addOnTitle;

        return $this;
    }

    public function getAddOnTypeJson(): ?string
    {
        return $this->addOnTypeJson;
    }

    public function setAddOnTypeJson(?string $addOnTypeJson): self
    {
        $this->addOnTypeJson = $addOnTypeJson;

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

    public function getPrice(): ?int
    {
        return $this->Price;
    }

    public function setPrice(int $Price): self
    {
        $this->Price = $Price;

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

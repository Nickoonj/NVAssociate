<?php

namespace App\Entity;

use App\Entity\AddonsType;
use App\Repository\AddonsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: AddonsRepository::class)]
class Addons
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'addons')]
    #[Assert\NotBlank]
    private ?AddonsType $addOnType = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    private ?string $addOnTitle = null;

    #[ORM\Column(length: 2500, nullable: true)]
    #[Assert\NotBlank]
    private ?string $addOnTypeJson = null;

    #[ORM\Column(nullable: true)]
    #[Assert\NotBlank]
    private ?int $time = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\NotBlank]
    private ?string $monthDay = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    private ?int $Price = null;

    #[ORM\Column(type: Types::SMALLINT)]
    #[Assert\NotBlank]
    private ?int $status = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $createdAt = null;    

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $updatedAt = null;

    #[ORM\OneToMany(mappedBy: 'addonsId', targetEntity: CaSubscriptionAddons::class)]
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
            $caSubscriptionAddon->setAddonsId($this);
        }

        return $this;
    }

    public function removeCaSubscriptionAddon(CaSubscriptionAddons $caSubscriptionAddon): self
    {
        if ($this->caSubscriptionAddons->removeElement($caSubscriptionAddon)) {
            // set the owning side to null (unless already changed)
            if ($caSubscriptionAddon->getAddonsId() === $this) {
                $caSubscriptionAddon->setAddonsId(null);
            }
        }

        return $this;
    }
}

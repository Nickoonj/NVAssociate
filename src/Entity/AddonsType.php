<?php

namespace App\Entity;

use App\Repository\AddonsTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AddonsTypeRepository::class)]
class AddonsType
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $AddonsTitle = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $updatedAt = null;

    #[ORM\OneToMany(mappedBy: 'addOnType', targetEntity: Addons::class)]
    private Collection $addons;

    public function __construct()
    {
        $this->addons = new ArrayCollection();
        $this->createdAt = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAddonsTitle(): ?string
    {
        return $this->AddonsTitle;
    }

    public function setAddonsTitle(string $AddonsTitle): self
    {
        $this->AddonsTitle = $AddonsTitle;

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
     * @return Collection<int, Addons>
     */
    public function getAddons(): Collection
    {
        return $this->addons;
    }

    public function addAddon(Addons $addon): self
    {
        if (!$this->addons->contains($addon)) {
            $this->addons->add($addon);
            $addon->setAddOnType($this);
        }

        return $this;
    }

    public function removeAddon(Addons $addon): self
    {
        if ($this->addons->removeElement($addon)) {
            // set the owning side to null (unless already changed)
            if ($addon->getAddOnType() === $this) {
                $addon->setAddOnType(null);
            }
        }

        return $this;
    }
}

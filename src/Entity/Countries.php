<?php

namespace App\Entity;

use App\Repository\CountriesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CountriesRepository::class)]
class Countries
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $code = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $phoneCode = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $status = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $updatedAt = null;

    #[ORM\OneToMany(mappedBy: 'countryId', targetEntity: States::class)]
    private Collection $states;

    #[ORM\OneToMany(mappedBy: 'countryId', targetEntity: User::class)]
    private Collection $users;
    
    public function __construct()
    {
        $this->states = new ArrayCollection();
        $this->users = new ArrayCollection();
        $this->createdAt = new \DateTimeImmutable();                
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPhoneCode(): ?int
    {
        return $this->phoneCode;
    }

    public function setPhoneCode(?int $phoneCode): self
    {
        $this->phoneCode = $phoneCode;

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
     * @return Collection<int, States>
     */
    public function getStates(): Collection
    {
        return $this->states;
    }

    public function addState(States $state): self
    {
        if (!$this->states->contains($state)) {
            $this->states->add($state);
            $state->setCountryId($this);
        }

        return $this;
    }

    public function removeState(States $state): self
    {
        if ($this->states->removeElement($state)) {
            // set the owning side to null (unless already changed)
            if ($state->getCountryId() === $this) {
                $state->setCountryId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
            $user->setCountryId($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getCountryId() === $this) {
                $user->setCountryId(null);
            }
        }

        return $this;
    }
}

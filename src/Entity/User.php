<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(type: 'boolean')]
    private $isVerified = false;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $username = null;

    #[ORM\Column(length: 255)]
    private ?string $firstName = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $middleName = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lastName = null;

    #[ORM\Column(length: 15, nullable: true)]
    private ?string $mobile = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $address = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $pincode = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $profileImg = null;

    

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $status = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $updatedAt = null;

    #[ORM\ManyToOne(inversedBy: 'users')]
    private ?Countries $countryId = null;

    #[ORM\ManyToOne(inversedBy: 'users')]
    private ?States $stateId = null;

    #[ORM\ManyToOne(inversedBy: 'users')]
    private ?Cities $cityId = null;

    #[ORM\ManyToOne(inversedBy: 'users')]
    private ?ClientType $clientType = null;

    #[ORM\OneToMany(mappedBy: 'userId', targetEntity: CaFirmDetails::class)]
    private Collection $caFirmDetails;

    #[ORM\OneToMany(mappedBy: 'userId', targetEntity: CaOwnerDetails::class)]
    private Collection $caOwnerDetails;

    #[ORM\OneToMany(mappedBy: 'userId', targetEntity: CaSubscription::class)]
    private Collection $caSubscriptions;

    #[ORM\OneToMany(mappedBy: 'userId', targetEntity: CaSubscriptionAddons::class)]
    private Collection $caSubscriptionAddons;

    public function __construct()
    {
        $this->caFirmDetails = new ArrayCollection();
        $this->caOwnerDetails = new ArrayCollection();
        $this->caSubscriptions = new ArrayCollection();
        $this->caSubscriptionAddons = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): self
    {
        $this->username = $username;

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

    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }

    public function setMiddleName(?string $middleName): self
    {
        $this->middleName = $middleName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    public function setMobile(?string $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getPincode(): ?string
    {
        return $this->pincode;
    }

    public function setPincode(?string $pincode): self
    {
        $this->pincode = $pincode;

        return $this;
    }

    public function getProfileImg(): ?string
    {
        return $this->profileImg;
    }

    public function setProfileImg(?string $profileImg): self
    {
        $this->profileImg = $profileImg;

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

    public function getCountryId(): ?Countries
    {
        return $this->countryId;
    }

    public function setCountryId(?Countries $countryId): self
    {
        $this->countryId = $countryId;

        return $this;
    }

    public function getStateId(): ?States
    {
        return $this->stateId;
    }

    public function setStateId(?States $stateId): self
    {
        $this->stateId = $stateId;

        return $this;
    }

    public function getCityId(): ?Cities
    {
        return $this->cityId;
    }

    public function setCityId(?Cities $cityId): self
    {
        $this->cityId = $cityId;

        return $this;
    }

    public function getClientType(): ?ClientType
    {
        return $this->clientType;
    }

    public function setClientType(?ClientType $clientType): self
    {
        $this->clientType = $clientType;

        return $this;
    }

    /**
     * @return Collection<int, CaFirmDetails>
     */
    public function getCaFirmDetails(): Collection
    {
        return $this->caFirmDetails;
    }

    public function addCaFirmDetail(CaFirmDetails $caFirmDetail): self
    {
        if (!$this->caFirmDetails->contains($caFirmDetail)) {
            $this->caFirmDetails->add($caFirmDetail);
            $caFirmDetail->setUserId($this);
        }

        return $this;
    }

    public function removeCaFirmDetail(CaFirmDetails $caFirmDetail): self
    {
        if ($this->caFirmDetails->removeElement($caFirmDetail)) {
            // set the owning side to null (unless already changed)
            if ($caFirmDetail->getUserId() === $this) {
                $caFirmDetail->setUserId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, CaOwnerDetails>
     */
    public function getCaOwnerDetails(): Collection
    {
        return $this->caOwnerDetails;
    }

    public function addCaOwnerDetail(CaOwnerDetails $caOwnerDetail): self
    {
        if (!$this->caOwnerDetails->contains($caOwnerDetail)) {
            $this->caOwnerDetails->add($caOwnerDetail);
            $caOwnerDetail->setUserId($this);
        }

        return $this;
    }

    public function removeCaOwnerDetail(CaOwnerDetails $caOwnerDetail): self
    {
        if ($this->caOwnerDetails->removeElement($caOwnerDetail)) {
            // set the owning side to null (unless already changed)
            if ($caOwnerDetail->getUserId() === $this) {
                $caOwnerDetail->setUserId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, CaSubscription>
     */
    public function getCaSubscriptions(): Collection
    {
        return $this->caSubscriptions;
    }

    public function addCaSubscription(CaSubscription $caSubscription): self
    {
        if (!$this->caSubscriptions->contains($caSubscription)) {
            $this->caSubscriptions->add($caSubscription);
            $caSubscription->setUserId($this);
        }

        return $this;
    }

    public function removeCaSubscription(CaSubscription $caSubscription): self
    {
        if ($this->caSubscriptions->removeElement($caSubscription)) {
            // set the owning side to null (unless already changed)
            if ($caSubscription->getUserId() === $this) {
                $caSubscription->setUserId(null);
            }
        }

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
            $caSubscriptionAddon->setUserId($this);
        }

        return $this;
    }

    public function removeCaSubscriptionAddon(CaSubscriptionAddons $caSubscriptionAddon): self
    {
        if ($this->caSubscriptionAddons->removeElement($caSubscriptionAddon)) {
            // set the owning side to null (unless already changed)
            if ($caSubscriptionAddon->getUserId() === $this) {
                $caSubscriptionAddon->setUserId(null);
            }
        }

        return $this;
    }
}

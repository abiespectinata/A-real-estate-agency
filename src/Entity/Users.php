<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsersRepository")
 * @UniqueEntity(fields={"email"}, message="There is already an account with this email")
 */
class Users implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $phone;

    /**
     * @ORM\Column(type="smallint")
     */
    private $active;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $token;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Homes", inversedBy="userslikes")
     */
    private $likes;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Profils", mappedBy="user", cascade={"persist", "remove"})
     */
    private $profil;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Requests", mappedBy="user", orphanRemoval=true)
     */
    private $requests;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Homes", mappedBy="currentuser")
     */
    private $currenthomes;

    /**
     * @ORM\Column(type="boolean")
     */
    private $agreeTerms;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdat;

    public function __construct()
    {
        $this->likes = new ArrayCollection();
        $this->requests = new ArrayCollection();
        $this->currenthomes = new ArrayCollection();
    }

    public function getHomeRequest($home)
    {
        
        foreach ($this->getRequests() as $request) {
            if($request->getHome() == $home) {
                return $request;
            }
        }
        
        return false;
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
    public function getUsername(): string
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

    public function hasRole($role) 
    {
        if(in_array($role, $this->getRoles())){
            return true;
        } else {
            return false;
        }
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getFirstName(): ?string
    {
        return $this->firstname;
    }

    public function setFirstName(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastname;
    }

    public function setLastName(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getActive(): ?int
    {
        return $this->active;
    }

    public function setActive(int $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    /**
     * @return Collection|Homes[]
     */
    public function getLikes(): Collection
    {
        return $this->likes;
    }

    public function addLike(Homes $like): self
    {
        if (!$this->likes->contains($like)) {
            $this->likes[] = $like;
        }

        return $this;
    }

    public function removeLike(Homes $like): self
    {
        if ($this->likes->contains($like)) {
            $this->likes->removeElement($like);
        }

        return $this;
    }

    public function getProfil(): ?Profils
    {
        return $this->profil;
    }

    public function setProfil(Profils $profil): self
    {
        $this->profil = $profil;

        // set the owning side of the relation if necessary
        if ($profil->getUser() !== $this) {
            $profil->setUser($this);
        }

        return $this;
    }

    /**
     * @return Collection|Requests[]
     */
    public function getRequests(): Collection
    {
        return $this->requests;
    }

    public function addRequest(Requests $request): self
    {
        if (!$this->requests->contains($request)) {
            $this->requests[] = $request;
            $request->setUser($this);
        }

        return $this;
    }

    public function removeRequest(Requests $request): self
    {
        if ($this->requests->contains($request)) {
            $this->requests->removeElement($request);
            // set the owning side to null (unless already changed)
            if ($request->getUser() === $this) {
                $request->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Homes[]
     */
    public function getCurrenthomes(): Collection
    {
        return $this->currenthomes;
    }

    public function addCurrenthome(Homes $currenthome): self
    {
        if (!$this->currenthomes->contains($currenthome)) {
            $this->currenthomes[] = $currenthome;
            $currenthome->setCurrentuser($this);
        }

        return $this;
    }

    public function removeCurrenthome(Homes $currenthome): self
    {
        if ($this->currenthomes->contains($currenthome)) {
            $this->currenthomes->removeElement($currenthome);
            // set the owning side to null (unless already changed)
            if ($currenthome->getCurrentuser() === $this) {
                $currenthome->setCurrentuser(null);
            }
        }

        return $this;
    }

    public function getAgreeTerms(): ?bool
    {
        return $this->agreeTerms;
    }

    public function setAgreeTerms(bool $agreeTerms): self
    {
        $this->agreeTerms = $agreeTerms;

        return $this;
    }

    public function getCreatedat(): ?\DateTimeInterface
    {
        return $this->createdat;
    }

    public function setCreatedat(\DateTimeInterface $createdat): self
    {
        $this->createdat = $createdat;

        return $this;
    }
}

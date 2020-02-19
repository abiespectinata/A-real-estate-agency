<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HomesRepository")
 */
class Homes
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $service;

    /**
     * @ORM\Column(type="integer")
     */
    private $rooms;

    /**
     * @ORM\Column(type="integer")
     */
    private $surface;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adress;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $title;

    /**
     * @ORM\Column(type="smallint")
     * 
     * 0 = non disponible, 
     * 1 = disponible, 
     * 2 = exclusivité,
     * 3 = loué ou acheter
     * 
     */
    private $active;

    /**
     * @ORM\Column(type="boolean")
     */
    private $furnished;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdat;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedat;


    
    /**
     * @ORM\Column(type="json", nullable=true)
     */
    private $pictures = [];

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Users", mappedBy="likes")
     */
    private $userslikes;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $bedrooms;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $bathrooms;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Requests", mappedBy="home", orphanRemoval=true)
     * @ORM\OrderBy({"requeststatus" = "ASC" , "createdat" = "ASC"})
     */
    private $requests;

    /**
     * @ORM\Column(type="integer")
     */
    private $viewcounter;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $googlemap;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Users", inversedBy="currenthomes")
     */
    private $currentuser;
    
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ViewStats", mappedBy="home", orphanRemoval=true)
     */
    private $viewStats;

    public function __construct()
    {
        $this->userslikes = new ArrayCollection();
        $this->requests = new ArrayCollection();
        $this->viewStats = new ArrayCollection();
    }

    
    public function getRequestUsers()
    {
        $users = [];

        foreach ($this->getRequests() as $request) {
            $users[] = $request->getUser();
        }
        
        return $users;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getService(): ?string
    {
        return $this->service;
    }

    public function setService(string $service): self
    {
        $this->service = $service;

        return $this;
    }

    public function getRooms(): ?int
    {
        return $this->rooms;
    }

    public function setRooms(int $rooms): self
    {
        $this->rooms = $rooms;

        return $this;
    }

    public function getSurface(): ?int
    {
        return $this->surface;
    }

    public function setSurface(int $surface): self
    {
        $this->surface = $surface;

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

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getPictures(): ?array
    {
        return $this->pictures;
    }

    public function setPictures(?array $pictures): self
    {
        $this->pictures = $pictures;

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

    public function getFurnished(): ?bool
    {
        return $this->furnished;
    }

    public function setFurnished(bool $furnished): self
    {
        $this->furnished = $furnished;

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

    public function getUpdatedat(): ?\DateTimeInterface
    {
        return $this->updatedat;
    }

    public function setUpdatedat(\DateTimeInterface $updatedat): self
    {
        $this->updatedat = $updatedat;

        return $this;
    }

    /**
     * @return Collection|Users[]
     */
    public function getUserslikes(): Collection
    {
        return $this->userslikes;
    }

    public function addUserslike(Users $userslike): self
    {
        if (!$this->userslikes->contains($userslike)) {
            $this->userslikes[] = $userslike;
            $userslike->addLike($this);
        }

        return $this;
    }

    public function removeUserslike(Users $userslike): self
    {
        if ($this->userslikes->contains($userslike)) {
            $this->userslikes->removeElement($userslike);
            $userslike->removeLike($this);
        }

        return $this;
    }

    public function getBedrooms(): ?int
    {
        return $this->bedrooms;
    }

    public function setBedrooms(?int $bedrooms): self
    {
        $this->bedrooms = $bedrooms;

        return $this;
    }

    public function getBathrooms(): ?int
    {
        return $this->bathrooms;
    }

    public function setBathrooms(?int $bathrooms): self
    {
        $this->bathrooms = $bathrooms;

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
            $request->setHome($this);
        }

        return $this;
    }

    public function removeRequest(Requests $request): self
    {
        if ($this->requests->contains($request)) {
            $this->requests->removeElement($request);
            // set the owning side to null (unless already changed)
            if ($request->getHome() === $this) {
                $request->setHome(null);
            }
        }

        return $this;
    }

    public function getViewcounter(): ?int
    {
        return $this->viewcounter;
    }

    public function setViewcounter(int $viewcounter): self
    {
        $this->viewcounter = $viewcounter;

        return $this;
    }

    public function getGooglemap(): ?string
    {
        return $this->googlemap;
    }

    public function setGooglemap(?string $googlemap): self
    {
        $this->googlemap = $googlemap;

        return $this;
    }

    public function getCurrentuser(): ?Users
    {
        return $this->currentuser;
    }


    public function setCurrentuser(?Users $currentuser)
    {
        $this->currentuser = $currentuser;
    }


    /**
     * @return Collection|ViewStats[]
     */
    public function getViewStats(): Collection
    {
        return $this->viewStats;
    }

    public function addViewStat(ViewStats $viewStat): self
    {
        if (!$this->viewStats->contains($viewStat)) {
            $this->viewStats[] = $viewStat;
            $viewStat->setHome($this);
        }

        return $this;
    }

    public function removeViewStat(ViewStats $viewStat): self
    {
        if ($this->viewStats->contains($viewStat)) {
            $this->viewStats->removeElement($viewStat);
            // set the owning side to null (unless already changed)
            if ($viewStat->getHome() === $this) {
                $viewStat->setHome(null);
            }
        }

        return $this;
    }
}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RequestsRepository")
 */
class Requests
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $job;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $contract;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $salary;

    /**
     * @ORM\Column(type="integer")
     */
    private $numberresidents;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $animals;

    /**
     * @ORM\Column(type="integer")
     */
    private $age;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $situation;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $guarantor;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Users", inversedBy="requests")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Homes", inversedBy="requests")
     * @ORM\JoinColumn(nullable=false)
     */
    private $home;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdat;

    /**
     * @ORM\Column(type="integer")
     */
    private $requeststatus;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $acceptedat;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $refusedat;


    public function getResponseRequest()
    {
        if($this->getAcceptedat()){
            return 'Votre candidature a été acceptée. Notre agence va bientôt vous recontacter.';
        }elseif( $this->getRefusedat() ){
            return 'Votre candidature a été refusée. Nous sommes persuadés que vous trouverez votre bonheur.';
        }else {
            return 'Votre candidature est en cours de traitement.';
        }
    }

    public function getStatusResponse()
    {
        if($this->getAcceptedat()){
            return 1;
        }elseif( $this->getRefusedat() ){
            return 0;
        }else {
            return 2;
        }
    }

    public function getStatusResponseColor()
    {
        $status = $this->getStatusResponse();

        if($status == 1){
            return "success";
        } elseif ($status == 0){
            return "danger";
        } else {
            return "info";
        }
    }




    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJob(): ?string
    {
        return $this->job;
    }

    public function setJob(?string $job): self
    {
        $this->job = $job;

        return $this;
    }

    public function getContract(): ?string
    {
        return $this->contract;
    }

    public function setContract(?string $contract): self
    {
        $this->contract = $contract;

        return $this;
    }

    public function getSalary(): ?int
    {
        return $this->salary;
    }

    public function setSalary(?int $salary): self
    {
        $this->salary = $salary;

        return $this;
    }

    public function getNumberresidents(): ?int
    {
        return $this->numberresidents;
    }

    public function setNumberresidents(int $numberresidents): self
    {
        $this->numberresidents = $numberresidents;

        return $this;
    }

    public function getAnimals(): ?bool
    {
        return $this->animals;
    }

    public function setAnimals(bool $animals): self
    {
        $this->animals = $animals;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getSituation(): ?string
    {
        return $this->situation;
    }

    public function setSituation(string $situation): self
    {
        $this->situation = $situation;

        return $this;
    }

    public function getGuarantor(): ?bool
    {
        return $this->guarantor;
    }

    public function setGuarantor(?bool $guarantor): self
    {
        $this->guarantor = $guarantor;

        return $this;
    }

    public function getUser(): ?Users
    {
        return $this->user;
    }

    public function setUser(?Users $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getHome(): ?Homes
    {
        return $this->home;
    }

    public function setHome(?Homes $home): self
    {
        $this->home = $home;

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

    public function getRequeststatus(): ?int
    {
        return $this->requeststatus;
    }

    public function setRequeststatus(int $requeststatus): self
    {
        $this->requeststatus = $requeststatus;

        return $this;
    }

    public function getAcceptedat(): ?\DateTimeInterface
    {
        return $this->acceptedat;
    }

    public function setAcceptedat(?\DateTimeInterface $acceptedat): self
    {
        $this->acceptedat = $acceptedat;

        return $this;
    }

    public function getRefusedat(): ?\DateTimeInterface
    {
        return $this->refusedat;
    }

    public function setRefusedat(?\DateTimeInterface $refusedat): self
    {
        $this->refusedat = $refusedat;

        return $this;
    }
}

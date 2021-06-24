<?php

namespace App\Entity;

use App\Repository\CircuitRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CircuitRepository::class)
 */
class Circuit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $N_Box;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_pres;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_releve;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $vals_prs;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $consommation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNBox(): ?string
    {
        return $this->N_Box;
    }

    public function setNBox(?string $N_Box): self
    {
        $this->N_Box = $N_Box;

        return $this;
    }

    public function getDatePres(): ?\DateTimeInterface
    {
        return $this->date_pres;
    }

    public function setDatePres(?\DateTimeInterface $date_pres): self
    {
        $this->date_pres = $date_pres;

        return $this;
    }

    public function getDateReleve(): ?\DateTimeInterface
    {
        return $this->date_releve;
    }

    public function setDateReleve(?\DateTimeInterface $date_releve): self
    {
        $this->date_releve = $date_releve;

        return $this;
    }

    public function getValsPrs(): ?int
    {
        return $this->vals_prs;
    }

    public function setValsPrs(?int $vals_prs): self
    {
        $this->vals_prs = $vals_prs;

        return $this;
    }

    public function getConsommation(): ?int
    {
        return $this->consommation;
    }

    public function setConsommation(?int $consommation): self
    {
        $this->consommation = $consommation;

        return $this;
    }
}

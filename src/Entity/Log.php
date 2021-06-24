<?php

namespace App\Entity;

use App\Repository\LogRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LogRepository::class)
 */
class Log
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $caution_box;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $date_entree;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $pers_pay;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $somme_pay;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $date_pay;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCautionBox(): ?float
    {
        return $this->caution_box;
    }

    public function setCautionBox(?float $caution_box): self
    {
        $this->caution_box = $caution_box;

        return $this;
    }

    public function getDateEntree(): ?string
    {
        return $this->date_entree;
    }

    public function setDateEntree(string $date_entree): self
    {
        $this->date_entree = $date_entree;

        return $this;
    }

    // public function getDateEntre(): ?\DateTimeInterface
    // {
    //     return $this->date_entre;
    // }

    // public function setDateEntre(?\DateTimeInterface $date_entre): self
    // {
    //     $this->date_entre = $date_entre;

    //     return $this;
    // }

    public function getPersPay(): ?string
    {
        return $this->pers_pay;
    }

    public function setPersPay(?string $pers_pay): self
    {
        $this->pers_pay = $pers_pay;

        return $this;
    }

    public function getSommePay(): ?string
    {
        return $this->somme_pay;
    }

    public function setSommePay(string $somme_pay): self
    {
        $this->somme_pay = $somme_pay;

        return $this;
    }

    public function getDatePay(): ?\DateTimeInterface
    {
        return $this->date_pay;
    }

    public function setDatePay(?\DateTimeInterface $date_pay): self
    {
        $this->date_pay = $date_pay;

        return $this;
    }
}

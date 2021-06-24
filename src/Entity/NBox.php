<?php

namespace App\Entity;

use App\Repository\NBoxRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NBoxRepository::class)
 */
class NBox
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $N_box;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $hofa;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $securite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $emplacement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNBox(): ?string
    {
        return $this->N_box;
    }

    public function setNBox(string $N_box): self
    {
        $this->N_box = $N_box;

        return $this;
    }

    public function getHofa(): ?string
    {
        return $this->hofa;
    }

    public function setHofa(string $hofa): self
    {
        $this->hofa = $hofa;

        return $this;
    }

    public function getSecurite(): ?string
    {
        return $this->securite;
    }

    public function setSecurite(string $securite): self
    {
        $this->securite = $securite;

        return $this;
    }

    public function getEmplacement(): ?string
    {
        return $this->emplacement;
    }

    public function setEmplacement(string $emplacement): self
    {
        $this->emplacement = $emplacement;

        return $this;
    }
}

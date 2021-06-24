<?php

namespace App\Entity;

use App\Repository\PieceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PieceRepository::class)
 */
class Piece
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    // private $id_box;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $log;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $securite;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $emplacement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdBox(): ?int
    {
        return $this->id_box;
    }

    public function setIdBox(?int $id_box): self
    {
        $this->id_box = $id_box;

        return $this;
    }

    public function getLog(): ?float
    {
        return $this->log;
    }

    public function setLog(?float $log): self
    {
        $this->log = $log;

        return $this;
    }

    public function getSecurite(): ?float
    {
        return $this->securite;
    }

    public function setSecurite(?float $securite): self
    {
        $this->securite = $securite;

        return $this;
    }

    public function getEmplacement(): ?string
    {
        return $this->emplacement;
    }

    public function setEmplacement(?string $emplacement): self
    {
        $this->emplacement = $emplacement;

        return $this;
    }
}

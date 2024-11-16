<?php

namespace App\Entity;

use App\Repository\CoursRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CoursRepository::class)]
class Cours
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idCours = null;

    #[ORM\Column(length: 255)]
    private string $titreCours;

    #[ORM\Column(length: 3000)]
    private string $descriptionCours;

    #[ORM\Column(type: 'datetime')]
    private \DateTime $dateDebut;

    #[ORM\Column(type: 'datetime')]
    private \DateTime $dateFin;

    public function getIdCours(): ?int
    {
        return $this->idCours;
    }
}

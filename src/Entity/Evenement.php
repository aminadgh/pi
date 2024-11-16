<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EvenementRepository::class)]
class Evenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idEvenement = null;

    #[ORM\Column(length: 255)]
    private string $nomEven;
    
    #[ORM\Column(length: 3000)]
    private string $descriptionEven;

    #[ORM\Column(type: 'datetime')]
    private DateTimeInterface $date;

    #[ORM\Column(length: 255)]
    private string $lieu;

    public function getIdEvenement(): ?int
    {
        return $this->idEvenement;
    }
}

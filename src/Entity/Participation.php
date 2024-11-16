<?php

namespace App\Entity;

use App\Repository\ParticipationRepository;
use Doctrine\ORM\Mapping as ORM;
use DateTimeInterface;


#[ORM\Entity(repositoryClass: ParticipationRepository::class)]
class Participation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idParticipation = null;

    #[ORM\Column(type: 'datetime')]
    private DateTimeInterface $dateInscription;

    public function getIdParticipation(): ?int
    {
        return $this->idParticipation;
    }
}

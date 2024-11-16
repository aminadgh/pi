<?php

namespace App\Entity;

use App\Repository\EvaluationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EvaluationRepository::class)]
class Evaluation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idEvaluation = null;

    #[ORM\Column(length: 255)]
    private string $type;

    #[ORM\Column(type: 'datetime')]
    private DateTimeInterface $date;

    #[ORM\Column(type: "float")]
    private float $noteMaximale;



    public function getIdEvaluation(): ?int
    {
        return $this->idEvaluation;
    }
}

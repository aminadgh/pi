<?php

namespace App\Entity;

use App\Repository\MessageRepository;
use Doctrine\ORM\Mapping as ORM;
use DateTimeInterface;


#[ORM\Entity(repositoryClass: MessageRepository::class)]
class Message
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idMessage = null;

    #[ORM\Column(length: 3000)]
    private string $contenuMess;

    #[ORM\Column(type: 'datetime')]
    private DateTimeInterface $dateEnvoi;

    public function getIdMessage(): ?int
    {
        return $this->idMessage;
    }
}

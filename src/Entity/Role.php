<?php

namespace App\Entity;

use App\Repository\RoleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RoleRepository::class)]
class Role
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idRole = null;
    #[ORM\Column(length: 255)]

    private string $nomRole;









    public function getIdRole(): ?int
    {
        return $this->idRole;
    }
}

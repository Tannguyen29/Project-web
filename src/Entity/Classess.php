<?php

namespace App\Entity;

use App\Repository\ClassessRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClassessRepository::class)]
class Classess
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Classname = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClassname(): ?string
    {
        return $this->Classname;
    }

    public function setClassname(string $Classname): self
    {
        $this->Classname = $Classname;

        return $this;
    }
}

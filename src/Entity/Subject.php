<?php

namespace App\Entity;

use App\Repository\SubjectRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SubjectRepository::class)]
class Subject
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Subjectname = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSubjectname(): ?string
    {
        return $this->Subjectname;
    }

    public function setSubjectname(string $Subjectname): self
    {
        $this->Subjectname = $Subjectname;

        return $this;
    }
}

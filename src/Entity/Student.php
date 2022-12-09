<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StudentRepository::class)]
class Student
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $Studentname = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $DOB = null;

    #[ORM\Column(length: 255)]
    private ?string $Address = null;

    #[ORM\Column(length: 30)]
    private ?string $Phonenumber = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStudentname(): ?string
    {
        return $this->Studentname;
    }

    public function setStudentname(string $Studentname): self
    {
        $this->Studentname = $Studentname;

        return $this;
    }

    public function getDOB(): ?\DateTimeInterface
    {
        return $this->DOB;
    }

    public function setDOB(\DateTimeInterface $DOB): self
    {
        $this->DOB = $DOB;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->Address;
    }

    public function setAddress(string $Address): self
    {
        $this->Address = $Address;

        return $this;
    }

    public function getPhonenumber(): ?string
    {
        return $this->Phonenumber;
    }

    public function setPhonenumber(string $Phonenumber): self
    {
        $this->Phonenumber = $Phonenumber;

        return $this;
    }
}

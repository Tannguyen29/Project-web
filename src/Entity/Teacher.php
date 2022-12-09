<?php

namespace App\Entity;

use App\Repository\TeacherRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TeacherRepository::class)]
class Teacher
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $Teachername = null;

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

    public function getTeachername(): ?string
    {
        return $this->Teachername;
    }

    public function setTeachername(string $Teachername): self
    {
        $this->Teachername = $Teachername;

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

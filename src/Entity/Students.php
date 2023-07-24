<?php

namespace App\Entity;

use App\Repository\StudentsRepository;
// use DateTimeImmutable;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: StudentsRepository::class)]
class Students
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\Length(min: 2, max:20)]
    #[Assert\NotBlank()]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\Length(min: 2, max:30)]
    private ?string $address = null;

    #[ORM\Column(length: 255)]
    #[Assert\Length(min: 2, max:20)]
    private ?string $phone = null; 

    // #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    // #[Assert\NotNull()]
    // // constructor
    // private ?\DateTimeImmutable $dateBirth =null;
    // public function __construct()
    // {
    //     $this->dateBirth = new \DateTimeImmutable();

    // }
    #[ORM\Column] 
    #[Assert\Positive]
    #[Assert\LessThan(200)]
    #[Assert\NotNull()]
    private ?int $matricule = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    // public function getDateBirth(): ?\DateTimeImmutable
    // {
    //     return $this->dateBirth;
    // }

    // public function setDateBirth(\DateTimeImmutable $dateBirth): static
    // {
    //     $this->dateBirth = $dateBirth;

    //     return $this;
    // }

    public function getMatricule(): ?int
    {
        return $this->matricule;
    }

    public function setMatricule(int $matricule): static
    {
        $this->matricule = $matricule;

        return $this;
    }
}

<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;


class AdressbuchEntity
{

    private \DateTimeImmutable $createdAt;

    #[Assert\NotBlank]
    #[Assert\Length(max:255)]
    private string $Ort;
    #[Assert\NotBlank]
    #[Assert\Length(max:255)]
    private string $Strasse;
    #[Assert\NotBlank]
    #[Assert\Length(5)]
    private int $Postleitzahl;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
    }


    public function getOrt(): string
    {
        return $this->Ort;
    }


    public function setOrt(string $Ort): void
    {
        $this->Ort = $Ort;
    }


    public function getStrasse(): string
    {
        return $this->Strasse;
    }


    public function setStrasse(string $Strasse): void
    {
        $this->Strasse = $Strasse;
    }


    public function getPostleitzahl(): int
    {
        return $this->Postleitzahl;
    }

    
    public function setPostleitzahl(int $Postleitzahl): void
    {
        $this->Postleitzahl = $Postleitzahl;
    }


    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }


    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}

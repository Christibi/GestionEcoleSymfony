<?php

namespace App\Entity;

use App\Repository\RetardRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RetardRepository::class)]
class Retard
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'datetime')]
    private $dateRetard;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateRetard(): ?\DateTimeInterface
    {
        return $this->dateRetard;
    }

    public function setDateRetard(\DateTimeInterface $dateRetard): self
    {
        $this->dateRetard = $dateRetard;

        return $this;
    }
}

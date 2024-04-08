<?php

namespace App\Entity;

use App\Repository\ServicesPageRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ServicesPageRepository::class)]
class ServicesPage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Veuillez renseigner un titre pour la page prestations.')]
    #[Assert\Length(
        min: 2, max: 255,
        minMessage: 'Le titre de la page doit être de 2 caractères minimum.',
        maxMessage: "Le titre de le page ne doit pas dépasser 255 caractères"
    )]
    private ?string $pageTitle = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message: 'Veuillez renseigner un texte pour la page prestations.')]
    #[Assert\Length(
        min: 10, max: 1255,
        minMessage: 'Le titre de la page doit être de 10 caractères minimum.',
        maxMessage: "Le nom ne doit pas dépasser 1255 caractères"
    )]
    private ?string $pageText = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPageTitle(): ?string
    {
        return $this->pageTitle;
    }

    public function setPageTitle(string $pageTitle): static
    {
        $this->pageTitle = $pageTitle;

        return $this;
    }

    public function getPageText(): ?string
    {
        return $this->pageText;
    }

    public function setPageText(?string $pageText): static
    {
        $this->pageText = $pageText;

        return $this;
    }
}

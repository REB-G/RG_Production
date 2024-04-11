<?php

namespace App\Entity;

use App\Repository\HomePageRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: HomePageRepository::class)]
class HomePage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Veuillez renseigner le titre de la page d\'accueil.')]
    #[Assert\Length(
        min: 2, max: 255,
        minMessage: 'Le titre de la page doit être de 2 caractères minimum.',
        maxMessage: "Le titre de la page ne doit pas dépasser 255 caractères"
    )]
    private ?string $pageTitle = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Veuillez renseigner le titre de la section "À propos".')]
    #[Assert\Length(
        min: 2, max: 255,
        minMessage: 'Le titre de la section \"À propos\" doit être de 2 caractères minimum.',
        maxMessage: "Le titre de la section \"À propos\" ne doit pas dépasser 255 caractères"
    )]
    private ?string $aboutSectionTitle = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message: 'Veuillez renseigner le texte de la section "À propos".')]
    #[Assert\Length(
        min: 10, max: 1255,
        minMessage: 'Le texte de la section \"À propos\" doit être de 10 caractères minimum.',
        maxMessage: "Le texte de la section \"À propos\" ne doit pas dépasser 1255 caractères"
    )]
    private ?string $aboutSectionText = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Veuillez renseigner le titre de la section "Services".')]
    #[Assert\Length(
        min: 2, max: 255,
        minMessage: 'Le titre de la section \"Services\" doit être de 2 caractères minimum.',
        maxMessage: "Le titre de la section \"Services\" ne doit pas dépasser 255 caractères"
    )]
    private ?string $servicesSectionTitle = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message: 'Veuillez renseigner le texte de la section "Services".')]
    #[Assert\Length(
        min: 10, max: 1255,
        minMessage: 'Le texte de la section \"Services\" doit être de 10 caractères minimum.',
        maxMessage: "Le texte de la section \"Services\" ne doit pas dépasser 1255 caractères"
    )]
    private ?string $servicesSectionText = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Veuillez renseigner le titre de la section "Services".')]
    #[Assert\Length(
        min: 2, max: 255,
        minMessage: 'Le titre de la section \"Projets\" doit être de 2 caractères minimum.',
        maxMessage: "Le titre de la section \"Projets\" ne doit pas dépasser 255 caractères"
    )]
    private ?string $projectsSectionTitle = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message: 'Veuillez renseigner le texte de la section "Services".')]
    #[Assert\Length(
        min: 10, max: 1255,
        minMessage: 'Le texte de la section \"Projets\" doit être de 10 caractères minimum.',
        maxMessage: "Le texte de la section \"Projets\" ne doit pas dépasser 1255 caractères"
    )]
    private ?string $projectsSectionText = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Veuillez renseigner le titre de la section "Services".')]
    #[Assert\Length(
        min: 2, max: 255,
        minMessage: 'Le titre de la section \"Contact\" doit être de 2 caractères minimum.',
        maxMessage: "Le titre de la section \"Contact\" ne doit pas dépasser 255 caractères"
    )]
    private ?string $contactSectionTitle = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message: 'Veuillez renseigner le texte de la section "Services".')]
    #[Assert\Length(
        min: 10, max: 1255,
        minMessage: 'Le texte de la section \"Contact\" doit être de 10 caractères minimum.',
        maxMessage: "Le texte de la section \"Contact\" ne doit pas dépasser 1255 caractères"
    )]
    private ?string $contactSectionText = null;

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

    public function getAboutSectionTitle(): ?string
    {
        return $this->aboutSectionTitle;
    }

    public function setAboutSectionTitle($aboutSectionTitle): static
    {
        $this->aboutSectionTitle = $aboutSectionTitle;

        return $this;
    }

    public function getAboutSectionText(): ?string
    {
        return $this->aboutSectionText;
    }

    public function setAboutSectionText(string $aboutSectionText): static
    {
        $this->aboutSectionText = $aboutSectionText;

        return $this;
    }

    public function getServicesSectionTitle(): ?string
    {
        return $this->servicesSectionTitle;
    }

    public function setServicesSectionTitle(string $servicesSectionTitle): static
    {
        $this->servicesSectionTitle = $servicesSectionTitle;

        return $this;
    }

    public function getServicesSectionText(): ?string
    {
        return $this->servicesSectionText;
    }

    public function setServicesSectionText(string $servicesSectionText): static
    {
        $this->servicesSectionText = $servicesSectionText;

        return $this;
    }

    public function getProjectsSectionTitle(): ?string
    {
        return $this->projectsSectionTitle;
    }

    public function setProjectsSectionTitle(string $projectsSectionTitle): static
    {
        $this->projectsSectionTitle = $projectsSectionTitle;

        return $this;
    }

    public function getProjectsSectionText(): ?string
    {
        return $this->projectsSectionText;
    }

    public function setProjectsSectionText(string $projectsSectionText): static
    {
        $this->projectsSectionText = $projectsSectionText;

        return $this;
    }

    public function getContactSectionTitle(): ?string
    {
        return $this->contactSectionTitle;
    }

    public function setContactSectionTitle(string $contactSectionTitle): static
    {
        $this->contactSectionTitle = $contactSectionTitle;

        return $this;
    }

    public function getContactSectionText(): ?string
    {
        return $this->contactSectionText;
    }

    public function setContactSectionText(string $contactSectionText): static
    {
        $this->contactSectionText = $contactSectionText;

        return $this;
    }
}

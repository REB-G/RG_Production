<?php

namespace App\Entity;

use App\Repository\ProjectsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ProjectsRepository::class)]
#[Vich\Uploadable]
class Projects
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Veuillez renseigner le titre du projet.')]
    #[Assert\Length(
        min: 2, max: 255,
        minMessage: 'Le titre du projet doit être de 3 caractères minimum.',
        maxMessage: "Le titre du projet ne doit pas dépasser 255 caractères"
    )]
    private ?string $name = null;

    #[Vich\UploadableField(mapping: 'enterprise_images', fileNameProperty: 'imageName')]
    private ?File $imageFile = null;

    #[ORM\Column(length: 255)]
    private ?string $imageName = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message: 'Veuillez renseigner la description du projet.')]
    #[Assert\Length(
        min: 10, max: 1255,
        minMessage: 'La description du projet doit être de 10 caractères minimum.',
        maxMessage: "La description du projet ne doit pas dépasser 1255 caractères"
    )]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    #[Assert\Length(
        min: 2, max: 255,
        minMessage: 'Le lien doit être de 3 caractères minimum.',
        maxMessage: "Le lien ne doit pas dépasser 255 caractères"
    )]
    #[Assert\NotBlank(message: 'Veuillez renseigner la lien du projet.')]
    private ?string $link = null;

    #[ORM\ManyToOne(inversedBy: 'projects')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $author = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

    public function setImageFile($imageFile): self
    {
        $this->imageFile = $imageFile;

        return $this;
    }

    public function getImageName()
    {
        return $this->imageName;
    }

    public function setImageName(string $imageName): self
    {
        $this->imageName = $imageName;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): static
    {
        $this->link = $link;

        return $this;
    }

    public function getAuthor(): ?User
    {
        return $this->author;
    }

    public function setAuthor(?User $author): static
    {
        $this->author = $author;

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\ServicesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ServicesRepository::class)]
#[Vich\Uploadable]
class Services
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Veuillez renseigner le titre de la prestation.')]
    #[Assert\Length(
        min: 2, max: 255,
        minMessage: 'Le titre de la prestation doit être de 3 caractères minimum.',
        maxMessage: "Le titre de la prestation ne doit pas dépasser 255 caractères"
    )]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message: 'Veuillez renseigner la description de la prestation.')]
    #[Assert\Length(
        min: 10, max: 1255,
        minMessage: 'La description de la prestation doit être de 10 caractères minimum.',
        maxMessage: "La description de la prestation ne doit pas dépasser 1255 caractères"
    )]
    private ?string $description = null;

    #[Vich\UploadableField(mapping: 'enterprise_images', fileNameProperty: 'imageName')]
    private ?File $imageFile = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imageName = null;

    #[ORM\Column(nullable: true)]
    #[Assert\Length(
        min: 1, max: 3,
        minMessage: 'Le prix de la prestation doit être d\'un caractères minimum.',
        maxMessage: "Le prix de la prestation ne doit pas dépasser 3 caractères"
    )]
    #[Assert\PositiveOrZero(message: 'Le prix de la prestation ne peut pas être négatif.')]
    #[Assert\Regex(pattern: '/^[0-9]+$/', message: 'Le prix de la prestation ne doit contenir que des chiffres.')]
    private ?int $price = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

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

    public function setImageName(?string $imageName): self
    {
        $this->imageName = $imageName;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(?int $price): static
    {
        $this->price = $price;

        return $this;
    }
}

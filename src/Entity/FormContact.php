<?php

namespace App\Entity;

use App\Repository\FormContactRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: FormContactRepository::class)]
class FormContact
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 155)]
    #[Assert\NotBlank(message: 'Veuillez renseigner un nom.')]
    #[Assert\Length(
        min: 2, max: 155,
        minMessage: 'Le nom doit contenir 2 caractères minimum.',
        maxMessage: "Le nom ne doit pas dépasser 155 caractères"
    )]
    #[Assert\Regex(pattern: '/^[a-zA-Z]+$/', message: 'Le nom ne doit contenir que des lettres.')]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Veuillez renseigner un titre pour la page contact.')]
    #[Assert\Length(
        min: 2, max: 255,
        minMessage: 'L\'objet doit être de 2 caractères minimum.',
        maxMessage: "L\'objet ne doit pas dépasser 255 caractères"
    )]
    private ?string $subject = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message: 'Veuillez renseigner un commentaire.')]
    #[Assert\Length(
        min: 2, max: 1200,
        minMessage: 'Le commentaire doit être de 2 caractères minimum.',
        maxMessage: "Le commentaire ne doit pas dépasser 1200 caractères"
    )]
    private ?string $message = null;

    #[ORM\Column(length: 180)]
    #[Assert\NotBlank(message: 'Veuillez renseigner une adresse email.')]
    #[Assert\Email(message: 'L\'email {{ value }} n\'est pas valide.',)]
    private ?string $email = null;

    #[ORM\Column(length: 15)]
    #[Assert\NotBlank(message: 'Veuillez renseigner un numéro de téléphone.')]
    #[Assert\Length(
        min: 10, max: 15,
        minMessage: 'Le numéro de téléphone doit être de 10 caractères minimum.',
        maxMessage: "Le numéro de téléphone ne doit pas dépasser 15 caractères"
    )]
    #[Assert\Regex(pattern: '/^0[1-9]([-. ]?[0-9]{2}){4}$/', message: 'Le numéro de téléphone ne doit contenir que des chiffres, des espaces et le caractère +.')]
    private ?string $phoneNumber = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
    }

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

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): static
    {
        $this->subject = $subject;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): static
    {
        $this->message = $message;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): static
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}

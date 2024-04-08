<?php

namespace App\Entity;

use App\Repository\EnterpriseRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EnterpriseRepository::class)]
class Enterprise
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 15)]
    #[Assert\NotBlank(message: 'Veuillez renseigner un numéro de téléphone.')]
    #[Assert\Length(
        min: 10, max: 15,
        minMessage: 'Le numéro de téléphone doit être de 10 caractères minimum.',
        maxMessage: "Le numéro de téléphone ne doit pas dépasser 15 caractères"
    )]
    #[Assert\Regex(pattern: '/^0[1-9]([-. ]?[0-9]{2}){4}$/', message: 'Le numéro de téléphone ne doit contenir que des chiffres, des espaces et le caractère +.')]
    private ?string $phoneNumber = null;

    #[ORM\Column(length: 180)]
    #[Assert\NotBlank(message: 'Veuillez renseigner votre email.')]
    #[Assert\Email(message: 'Veuillez renseigner un email valide.')]
    private ?string $mail = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): static
    {
        $this->mail = $mail;

        return $this;
    }
}

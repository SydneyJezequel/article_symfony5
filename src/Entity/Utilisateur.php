<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
class Utilisateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null; // Delete NULL

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank()] // Contraintes de validation qui seront appliquées pour la BDD.
    #[Assert\Length(min:12, max:50)] // Contraintes de validation qui seront appliquées pour la BDD.
    private ?string $identifiant = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank()] // Contraintes de validation qui seront appliquées pour la BDD.
    #[Assert\Length(min:12, max:50)] // Contraintes de validation qui seront appliquées pour la BDD.
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank()] // Contraintes de validation qui seront appliquées pour la BDD.
    private ?string $email = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;



    // Constructeur ajouté à la main :
    public function __construct()
    {
        $this ->createdAt = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdentifiant(): ?string
    {
        return $this->identifiant;
    }

    public function setIdentifiant(string $identifiant): self
    {
        $this->identifiant = $identifiant;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}

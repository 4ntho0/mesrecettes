<?php

namespace App\Entity;

use App\Repository\RepaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RepaRepository::class)]
class Repa
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 25)]
    private ?string $nom = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $instruction = null;

    #[ORM\Column(nullable: true)]
    private ?int $note = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $datecreation = null;

    #[ORM\Column(nullable: true)]
    private ?int $duree = null;


    /**
     * @var Collection<int, Legume>
     */
    #[ORM\ManyToMany(targetEntity: Legume::class)]
    private Collection $legumes;

    /**
     * @var Collection<int, Viande>
     */
    #[ORM\ManyToMany(targetEntity: Viande::class)]
    private Collection $viandes;

    /**
     * @var Collection<int, Fromage>
     */
    #[ORM\ManyToMany(targetEntity: Fromage::class)]
    private Collection $fromages;

    /**
     * @var Collection<int, Feculent>
     */
    #[ORM\ManyToMany(targetEntity: Feculent::class)]
    private Collection $feculents;

    /**
     * @var Collection<int, Epice>
     */
    #[ORM\ManyToMany(targetEntity: Epice::class)]
    private Collection $epices;

    /**
     * @var Collection<int, Autre>
     */
    #[ORM\ManyToMany(targetEntity: Autre::class)]
    private Collection $autres;

    public function __construct()
    {
        $this->legumes = new ArrayCollection();
        $this->viandes = new ArrayCollection();
        $this->fromages = new ArrayCollection();
        $this->feculents = new ArrayCollection();
        $this->epices = new ArrayCollection();
        $this->autres = new ArrayCollection();
    }
    
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

    public function getInstruction(): ?string
    {
        return $this->instruction;
    }

    public function setInstruction(?string $instruction): static
    {
        $this->instruction = $instruction;

        return $this;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(?int $note): static
    {
        $this->note = $note;

        return $this;
    }

    public function getDatecreation(): ?\DateTime
    {
        return $this->datecreation;
    }

    public function setDatecreation(?\DateTime $datecreation): static
    {
        $this->datecreation = $datecreation;
        return $this;
    }
    
     public function getDatecreationString(): string
    {
        if($this->datecreation == null){
            return "";
        }else{
            return $this->datecreation->format('d/m/Y');
        }
    }

     public function getDuree(): ?int
     {
         return $this->duree;
     }

     public function setDuree(?int $duree): static
     {
         $this->duree = $duree;

         return $this;
     }

     public function getLegume(): ?string
     {
         return $this->legume;
     }

     public function setLegume(string $legume): static
     {
         $this->legume = $legume;

         return $this;
     }

     /**
      * @return Collection<int, Legume>
      */
     public function getLegumes(): Collection
     {
         return $this->legumes;
     }

     public function addLegume(Legume $legume): static
     {
         if (!$this->legumes->contains($legume)) {
             $this->legumes->add($legume);
         }

         return $this;
     }

     public function removeLegume(Legume $legume): static
     {
         $this->legumes->removeElement($legume);

         return $this;
     }

     /**
      * @return Collection<int, Viande>
      */
     public function getViandes(): Collection
     {
         return $this->viandes;
     }

     public function addViande(Viande $viande): static
     {
         if (!$this->viandes->contains($viande)) {
             $this->viandes->add($viande);
         }

         return $this;
     }

     public function removeViande(Viande $viande): static
     {
         $this->viandes->removeElement($viande);

         return $this;
     }

     /**
      * @return Collection<int, Fromage>
      */
     public function getFromages(): Collection
     {
         return $this->fromages;
     }

     public function addFromage(Fromage $fromage): static
     {
         if (!$this->fromages->contains($fromage)) {
             $this->fromages->add($fromage);
         }

         return $this;
     }

     public function removeFromage(Fromage $fromage): static
     {
         $this->fromages->removeElement($fromage);

         return $this;
     }

     /**
      * @return Collection<int, Feculent>
      */
     public function getFeculents(): Collection
     {
         return $this->feculents;
     }

     public function addFeculent(Feculent $feculent): static
     {
         if (!$this->feculents->contains($feculent)) {
             $this->feculents->add($feculent);
         }

         return $this;
     }

     public function removeFeculent(Feculent $feculent): static
     {
         $this->feculents->removeElement($feculent);

         return $this;
     }

     /**
      * @return Collection<int, Epice>
      */
     public function getEpices(): Collection
     {
         return $this->epices;
     }

     public function addEpice(Epice $epice): static
     {
         if (!$this->epices->contains($epice)) {
             $this->epices->add($epice);
         }

         return $this;
     }

     public function removeEpice(Epice $epice): static
     {
         $this->epices->removeElement($epice);

         return $this;
     }

     /**
      * @return Collection<int, Epice>
      */
     public function getAutres(): Collection
     {
         return $this->autres;
     }

     public function addAutre(Epice $autre): static
     {
         if (!$this->autres->contains($autre)) {
             $this->autres->add($autre);
         }

         return $this;
     }

     public function removeAutre(Epice $autre): static
     {
         $this->autres->removeElement($autre);

         return $this;
     }
}

<?php

namespace App\Entity;

use App\Repository\CandidateRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CandidateRepository::class)
 */
class Candidate
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $upload;

    /**
     * @ORM\OneToOne(targetEntity=User::class, cascade={"persist", "remove"})
     */
    private $userInfo;

    /**
     * @ORM\ManyToMany(targetEntity=Project::class, inversedBy="candidates")
     */
    private $projectName;

    /**
     * @ORM\OneToOne(targetEntity=Vote::class, cascade={"persist", "remove"})
     */
    private $voteNumber;

    public function __construct()
    {
        $this->projectName = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getUpload(): ?string
    {
        return $this->upload;
    }

    public function setUpload(string $upload): self
    {
        $this->upload = $upload;

        return $this;
    }

    public function getUserInfo(): ?User
    {
        return $this->userInfo;
    }

    public function setUserInfo(?User $userInfo): self
    {
        $this->userInfo = $userInfo;

        return $this;
    }

    /**
     * @return Collection<int, Project>
     */
    public function getProjectName(): Collection
    {
        return $this->projectName;
    }

    public function addProjectName(Project $projectName): self
    {
        if (!$this->projectName->contains($projectName)) {
            $this->projectName[] = $projectName;
        }

        return $this;
    }

    public function removeProjectName(Project $projectName): self
    {
        $this->projectName->removeElement($projectName);

        return $this;
    }

    public function getVoteNumber(): ?Vote
    {
        return $this->voteNumber;
    }

    public function setVoteNumber(?Vote $voteNumber): self
    {
        $this->voteNumber = $voteNumber;

        return $this;
    }
}

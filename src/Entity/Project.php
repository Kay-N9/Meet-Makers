<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProjectRepository::class)
 */
class Project
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateLacement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $uploadProject;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $uploadPicture;

    /**
     * @ORM\Column(type="integer")
     */
    private $budget;

    /**
     * @ORM\ManyToOne(targetEntity=Status::class, inversedBy="projects")
     * @ORM\JoinColumn(nullable=false)
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity=TypeDeServices::class, inversedBy="projects")
     */
    private $typeService;

    /**
     * @ORM\ManyToMany(targetEntity=Candidate::class, mappedBy="projectName")
     */
    private $candidates;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $projectName;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="projects")
     * @ORM\JoinColumn(nullable=false)
     */
    private $createBy;

    public function __construct()
    {
        $this->candidates = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateLacement(): ?\DateTimeInterface
    {
        return $this->dateLacement;
    }

    public function setDateLacement(\DateTimeInterface $dateLacement): self
    {
        $this->dateLacement = $dateLacement;

        return $this;
    }

    public function getUploadProject(): ?string
    {
        return $this->uploadProject;
    }

    public function setUploadProject(string $uploadProject): self
    {
        $this->uploadProject = $uploadProject;

        return $this;
    }

    public function getUploadPicture(): ?string
    {
        return $this->uploadPicture;
    }

    public function setUploadPicture(string $uploadPicture): self
    {
        $this->uploadPicture = $uploadPicture;

        return $this;
    }

    public function getBudget(): ?int
    {
        return $this->budget;
    }

    public function setBudget(int $budget): self
    {
        $this->budget = $budget;

        return $this;
    }

    public function getStatus(): ?Status
    {
        return $this->status;
    }

    public function setStatus(?Status $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getTypeService(): ?TypeDeServices
    {
        return $this->typeService;
    }

    public function setTypeService(?TypeDeServices $typeService): self
    {
        $this->typeService = $typeService;

        return $this;
    }

    /**
     * @return Collection<int, Candidate>
     */
    public function getCandidates(): Collection
    {
        return $this->candidates;
    }

    public function addCandidate(Candidate $candidate): self
    {
        if (!$this->candidates->contains($candidate)) {
            $this->candidates[] = $candidate;
            $candidate->addProjectName($this);
        }

        return $this;
    }

    public function removeCandidate(Candidate $candidate): self
    {
        if ($this->candidates->removeElement($candidate)) {
            $candidate->removeProjectName($this);
        }

        return $this;
    }

    public function getProjectName(): ?string
    {
        return $this->projectName;
    }

    public function setProjectName(string $projectName): self
    {
        $this->projectName = $projectName;

        return $this;
    }

    public function getCreateBy(): ?User
    {
        return $this->createBy;
    }

    public function setCreateBy(?User $createBy): self
    {
        $this->createBy = $createBy;

        return $this;
    }
}

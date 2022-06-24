<?php

namespace App\Entity;

use App\Repository\VoteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VoteRepository::class)
 */
class Vote
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="bigint")
     */
    private $voteDonee;

    /**
     * @ORM\Column(type="bigint")
     */
    private $voteRecus;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="voteInfo")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVoteDonee(): ?string
    {
        return $this->voteDonee;
    }

    public function setVoteDonee(string $voteDonee): self
    {
        $this->voteDonee = $voteDonee;

        return $this;
    }

    public function getVoteRecus(): ?string
    {
        return $this->voteRecus;
    }

    public function setVoteRecus(string $voteRecus): self
    {
        $this->voteRecus = $voteRecus;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}

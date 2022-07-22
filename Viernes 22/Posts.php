<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Posts
 *
 * @ORM\Table(name="posts", indexes={@ORM\Index(name="fk_posts_admin1", columns={"admin_nombre"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\PostsRepository")
 */
class Posts
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_post", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idPost;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=45, nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=45, nullable=false)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text", length=65535, nullable=false)
     */
    private $body;

    /**
     * @var \Admin|null
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Admin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="admin_nombre", referencedColumnName="nombre")
     * })
     */
    private $adminNombre;

    public function getIdPost(): ?int
    {
        return $this->idPost;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getBody(): ?string
    {
        return $this->body;
    }

    public function setBody(string $body): self
    {
        $this->body = $body;

        return $this;
    }

    public function getAdminNombre(): ?Admin
    {
        return $this->adminNombre;
    }

    public function setAdminNombre(?Admin $adminNombre): self
    {
        $this->adminNombre = $adminNombre;

        return $this;
    }


}

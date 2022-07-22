<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Comentarios
 *
 * @ORM\Table(name="comentarios", indexes={@ORM\Index(name="fk_comentarios_posts1", columns={"posts_id_post"}), @ORM\Index(name="fk_comentarios_clientes1", columns={"clientes_id_cliente"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\ComentariosRepository")
 */
class Comentarios
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_comentario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComentario;

    /**
     * @var string
     *
     * @ORM\Column(name="autor", type="string", length=45, nullable=false)
     */
    private $autor;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text", length=65535, nullable=false)
     */
    private $body;

    /**
     * @var string
     *
     * @ORM\Column(name="posts_admin_nombre", type="string", length=10, nullable=false)
     */
    private $postsAdminNombre;

    /**
     * @var int
     *
     * @ORM\Column(name="clientes_carro_id_carro", type="integer", nullable=false)
     */
    private $clientesCarroIdCarro;

    /**
     * @var \Clientes|null
     *
     * @ORM\ManyToOne(targetEntity="Clientes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="clientes_id_cliente", referencedColumnName="id_cliente")
     * })
     */
    private $clientesIdCliente;

    /**
     * @var \Posts|null
     *
     * @ORM\ManyToOne(targetEntity="Posts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="posts_id_post", referencedColumnName="id_post")
     * })
     */
    private $postsIdPost;

    public function getIdComentario(): ?int
    {
        return $this->idComentario;
    }

    public function getAutor(): ?string
    {
        return $this->autor;
    }

    public function setAutor(string $autor): self
    {
        $this->autor = $autor;

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

    public function getPostsAdminNombre(): ?string
    {
        return $this->postsAdminNombre;
    }

    public function setPostsAdminNombre(string $postsAdminNombre): self
    {
        $this->postsAdminNombre = $postsAdminNombre;

        return $this;
    }

    public function getClientesCarroIdCarro(): ?int
    {
        return $this->clientesCarroIdCarro;
    }

    public function setClientesCarroIdCarro(int $clientesCarroIdCarro): self
    {
        $this->clientesCarroIdCarro = $clientesCarroIdCarro;

        return $this;
    }

    public function getClientesIdCliente(): ?Clientes
    {
        return $this->clientesIdCliente;
    }

    public function setClientesIdCliente(?Clientes $clientesIdCliente): self
    {
        $this->clientesIdCliente = $clientesIdCliente;

        return $this;
    }

    public function getPostsIdPost(): ?Posts
    {
        return $this->postsIdPost;
    }

    public function setPostsIdPost(?Posts $postsIdPost): self
    {
        $this->postsIdPost = $postsIdPost;

        return $this;
    }


}

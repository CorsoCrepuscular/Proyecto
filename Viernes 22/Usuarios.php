<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;



/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios", indexes={@ORM\Index(name="fk_usuarios_roles", columns={"roles_id_rol"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\UsuariosRepository")
 */
class Usuarios
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */

  
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=40, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="keyword", type="string", length=10, nullable=false)
     */
    private $keyword;

    /**
     * @var \Roles|null
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Roles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="roles_id_rol", referencedColumnName="id_rol")
     * })
     */
    private $rolesIdRol;

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    //Creada a mano
    public function setNombre(string $nombre): self
    {
        $this->$nombre = $nombre;

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

    public function getKeyword(): ?string
    {
        return $this->keyword;
    }

    public function setKeyword(string $keyword): self
    {
        $this->keyword = $keyword;

        return $this;
    }

    public function getRolesIdRol(): ?Roles
    {
        return $this->rolesIdRol;
    }

    public function setRolesIdRol(?Roles $rolesIdRol): self
    {
        $this->rolesIdRol = $rolesIdRol;

        return $this;
    }


}

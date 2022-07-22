<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clientes
 *
 * @ORM\Table(name="clientes", indexes={@ORM\Index(name="fk_clientes_carro1", columns={"carro_id_carro"}), @ORM\Index(name="fk_clientes_historial1", columns={"historial_id_historial"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\ClientesRepository")
 */
class Clientes
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cliente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=45, nullable=false)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="calle", type="string", length=45, nullable=false)
     */
    private $calle;

    /**
     * @var int
     *
     * @ORM\Column(name="numero", type="integer", nullable=false)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="localidad", type="string", length=45, nullable=false)
     */
    private $localidad;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia", type="string", length=45, nullable=false)
     */
    private $provincia;

    /**
     * @var string
     *
     * @ORM\Column(name="pais", type="string", length=45, nullable=false)
     */
    private $pais;

    /**
     * @var int
     *
     * @ORM\Column(name="telefono", type="integer", nullable=false)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=45, nullable=false)
     */
    private $mail;

    /**
     * @var \Carro|null
     *
     * @ORM\ManyToOne(targetEntity="Carro")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="carro_id_carro", referencedColumnName="id_carro")
     * })
     */
    private $carroIdCarro;

    /**
     * @var \Historial|null
     *
     * @ORM\ManyToOne(targetEntity="Historial")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="historial_id_historial", referencedColumnName="id_historial")
     * })
     */
    private $historialIdHistorial;

    public function getIdCliente(): ?int
    {
        return $this->idCliente;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellidos(): ?string
    {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): self
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    public function getCalle(): ?string
    {
        return $this->calle;
    }

    public function setCalle(string $calle): self
    {
        $this->calle = $calle;

        return $this;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getLocalidad(): ?string
    {
        return $this->localidad;
    }

    public function setLocalidad(string $localidad): self
    {
        $this->localidad = $localidad;

        return $this;
    }

    public function getProvincia(): ?string
    {
        return $this->provincia;
    }

    public function setProvincia(string $provincia): self
    {
        $this->provincia = $provincia;

        return $this;
    }

    public function getPais(): ?string
    {
        return $this->pais;
    }

    public function setPais(string $pais): self
    {
        $this->pais = $pais;

        return $this;
    }

    public function getTelefono(): ?int
    {
        return $this->telefono;
    }

    public function setTelefono(int $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getCarroIdCarro(): ?Carro
    {
        return $this->carroIdCarro;
    }

    public function setCarroIdCarro(?Carro $carroIdCarro): self
    {
        $this->carroIdCarro = $carroIdCarro;

        return $this;
    }

    public function getHistorialIdHistorial(): ?Historial
    {
        return $this->historialIdHistorial;
    }

    public function setHistorialIdHistorial(?Historial $historialIdHistorial): self
    {
        $this->historialIdHistorial = $historialIdHistorial;

        return $this;
    }


}

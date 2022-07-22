<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Historial
 *
 * @ORM\Table(name="historial")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\HistorialRepository")
 */
class Historial
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_historial", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idHistorial;

    /**
     * @var string
     *
     * @ORM\Column(name="servicio", type="string", length=45, nullable=false)
     */
    private $servicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    private $fecha;

    /**
     * @var int
     *
     * @ORM\Column(name="importe", type="integer", nullable=false)
     */
    private $importe;

    public function getIdHistorial(): ?int
    {
        return $this->idHistorial;
    }

    public function getServicio(): ?string
    {
        return $this->servicio;
    }

    public function setServicio(string $servicio): self
    {
        $this->servicio = $servicio;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getImporte(): ?int
    {
        return $this->importe;
    }

    public function setImporte(int $importe): self
    {
        $this->importe = $importe;

        return $this;
    }


}

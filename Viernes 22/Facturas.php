<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facturas
 *
 * @ORM\Table(name="facturas")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\FacturasRepository")
 */
class Facturas
{
    /**
     * @var int
     *
     * @ORM\Column(name="numero_factura", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numeroFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="concepto", type="string", length=45, nullable=false)
     */
    private $concepto;

    /**
     * @var string
     *
     * @ORM\Column(name="numero cuenta", type="string", length=45, nullable=false)
     */
    private $numeroCuenta;

    /**
     * @var int
     *
     * @ORM\Column(name="importe", type="integer", nullable=false)
     */
    private $importe;

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
     * @var string
     *
     * @ORM\Column(name="nif", type="string", length=9, nullable=false)
     */
    private $nif;

    public function getNumeroFactura(): ?int
    {
        return $this->numeroFactura;
    }

    public function getConcepto(): ?string
    {
        return $this->concepto;
    }

    public function setConcepto(string $concepto): self
    {
        $this->concepto = $concepto;

        return $this;
    }

    public function getNumeroCuenta(): ?string
    {
        return $this->numeroCuenta;
    }

    public function setNumeroCuenta(string $numeroCuenta): self
    {
        $this->numeroCuenta = $numeroCuenta;

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

    public function getNif(): ?string
    {
        return $this->nif;
    }

    public function setNif(string $nif): self
    {
        $this->nif = $nif;

        return $this;
    }


}

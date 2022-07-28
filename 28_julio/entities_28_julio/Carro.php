<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carro
 *
 * @ORM\Table(name="carro", indexes={@ORM\Index(name="fk_carro_facturas1", columns={"facturas_numero_factura"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\CarroRepository")
 */
class Carro
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_carro", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCarro;

    /**
     * @var string
     *
     * @ORM\Column(name="servicio", type="string", length=45, nullable=false)
     */
    private $servicio;

    /**
     * @var int|null
     *
     * @ORM\Column(name="importe", type="integer", nullable=true)
     */
    private $importe;

    /**
     * @var \Facturas|null
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Facturas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="facturas_numero_factura", referencedColumnName="numero_factura")
     * })
     */
    private $facturasNumeroFactura;

    public function getIdCarro(): ?int
    {
        return $this->idCarro;
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

    public function getImporte(): ?int
    {
        return $this->importe;
    }

    public function setImporte(?int $importe): self
    {
        $this->importe = $importe;

        return $this;
    }

    public function getFacturasNumeroFactura(): ?Facturas
    {
        return $this->facturasNumeroFactura;
    }

    public function setFacturasNumeroFactura(?Facturas $facturasNumeroFactura): self
    {
        $this->facturasNumeroFactura = $facturasNumeroFactura;

        return $this;
    }


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pagos
 *
 * @ORM\Table(name="pagos", indexes={@ORM\Index(name="fk_pagos_modo_pago1", columns={"modo_pago_id_modo"}), @ORM\Index(name="fk_pagos_facturas1", columns={"facturas_numero_factura"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\PagosRepository")
 */
class Pagos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pago", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPago;

    /**
     * @var \ModoPago|null
     *
     * @ORM\ManyToOne(targetEntity="ModoPago")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="modo_pago_id_modo", referencedColumnName="id_modo")
     * })
     */
    private $modoPagoIdModo;

    /**
     * @var \Facturas|null
     *
     * @ORM\ManyToOne(targetEntity="Facturas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="facturas_numero_factura", referencedColumnName="numero_factura")
     * })
     */
    private $facturasNumeroFactura;

    public function getIdPago(): ?int
    {
        return $this->idPago;
    }

    public function getModoPagoIdModo(): ?ModoPago
    {
        return $this->modoPagoIdModo;
    }

    public function setModoPagoIdModo(?ModoPago $modoPagoIdModo): self
    {
        $this->modoPagoIdModo = $modoPagoIdModo;

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

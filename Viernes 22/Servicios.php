<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servicios
 *
 * @ORM\Table(name="servicios", indexes={@ORM\Index(name="fk_servicios_clientes1", columns={"clientes_id_cliente"}), @ORM\Index(name="fk_servicios_sesiones1", columns={"sesiones_id_evento"}), @ORM\Index(name="fk_servicios_admin1", columns={"admin_nombre"}), @ORM\Index(name="fk_servicios_pagos1", columns={"pagos_id_pago"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\ServiciosRepository")
 */
class Servicios
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_servicio", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idServicio;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=70, nullable=false)
     */
    private $descripcion;

    /**
     * @var int
     *
     * @ORM\Column(name="precio", type="integer", nullable=false)
     */
    private $precio;

    /**
     * @var int
     *
     * @ORM\Column(name="clientes_carro_id_carro", type="integer", nullable=false)
     */
    private $clientesCarroIdCarro;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=1, nullable=false)
     */
    private $tipo;

    /**
     * @var \Sesiones|null
     *
     * @ORM\ManyToOne(targetEntity="Sesiones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sesiones_id_evento", referencedColumnName="id_evento")
     * })
     */
    private $sesionesIdEvento;

    /**
     * @var \Admin|null
     *
     * @ORM\ManyToOne(targetEntity="Admin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="admin_nombre", referencedColumnName="nombre")
     * })
     */
    private $adminNombre;

    /**
     * @var \Pagos|null
     *
     * @ORM\ManyToOne(targetEntity="Pagos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pagos_id_pago", referencedColumnName="id_pago")
     * })
     */
    private $pagosIdPago;

    /**
     * @var \Clientes|null
     *
     * @ORM\ManyToOne(targetEntity="Clientes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="clientes_id_cliente", referencedColumnName="id_cliente")
     * })
     */
    private $clientesIdCliente;

    public function getIdServicio(): ?int
    {
        return $this->idServicio;
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

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getPrecio(): ?int
    {
        return $this->precio;
    }

    public function setPrecio(int $precio): self
    {
        $this->precio = $precio;

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

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getSesionesIdEvento(): ?Sesiones
    {
        return $this->sesionesIdEvento;
    }

    public function setSesionesIdEvento(?Sesiones $sesionesIdEvento): self
    {
        $this->sesionesIdEvento = $sesionesIdEvento;

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

    public function getPagosIdPago(): ?Pagos
    {
        return $this->pagosIdPago;
    }

    public function setPagosIdPago(?Pagos $pagosIdPago): self
    {
        $this->pagosIdPago = $pagosIdPago;

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


}

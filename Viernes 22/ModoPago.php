<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModoPago
 *
 * @ORM\Table(name="modo_pago")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\ModoPagoRepository")
 */
class ModoPago
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_modo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idModo;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=1, nullable=false)
     */
    private $tipo;

    public function getIdModo(): ?int
    {
        return $this->idModo;
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


}

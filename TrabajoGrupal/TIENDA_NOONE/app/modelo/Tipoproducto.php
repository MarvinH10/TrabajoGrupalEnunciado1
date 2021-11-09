<?php

class Tipoproducto
{
    private $id_Tproducto;
    private $tipo;

    /**
     * @return mixed
     */
    public function getIdTproducto()
    {
        return $this->id_Tproducto;
    }

    /**
     * @param mixed $id_Tproducto
     */
    public function setIdTproducto($id_Tproducto): void
    {
        $this->id_Tproducto = $id_Tproducto;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo): void
    {
        $this->tipo = $tipo;
    }


}
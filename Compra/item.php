<?php
class item
{

    public $name;
    public $quant;
    public $price;


    // Constructor del item
    function __construct($name, $quant, $price)
    {
        $this->name = $name;
        $this->quant = $quant;
        $this->price = $price;
    }

    // Metodos setter

     public function set_name($name)
    {
        $this->name = $name;
    }

    public function set_quant($quant)
    {
        $this->quant = $quant;
    }

    public function set_price($price)
    {
        $this->price = $price;
    }

    // Metodos getter

    public function get_quant()
    {
        return $this->quant;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_price()
    {
        return $this->price;
    }

}
?>
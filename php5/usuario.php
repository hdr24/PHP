<?php

class usuario
{
    // User class attributes
    public $nombre;
    public $email;

    public $id;


    function __construct($nombre, $email, $id)
    {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->id = $id;
    }

    // Setter methods
    function set_nombre($nombre)
    {
        $this->nombre = $nombre;
    }
    function set_email($email)
    {
        $this->email = $email;
    }
    function set_id($id)
    {
        $this->id = $id;
    }

    // Getter methods
    function get_nombre()
    {
        return $this->nombre;
    }
    function get_email()
    {
        return $this->email;
    }
    function get_id()
    {
        return $this->id;
    }
}

<?php
defined("ACCESS_SUCCESS") or die ("NO TIENES PERMISO PARA VER ESTO");

class Register
{
    public function index()
    {
        require_once "views/register.php";        
    }
}


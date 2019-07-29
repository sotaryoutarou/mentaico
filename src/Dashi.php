<?php

class Dashi
{
    function __construct($konbu, $katsuo, $alcohol, $mirin)
    {
        if ($konbu != 1 || $katsuo != 5 || $alcohol != 200 || $mirin != 45)
            throw new Exception('Not appropriate quantity');
    }
}
<?php
class Overload {
    public $key;
    function __set($mark, $res) {$this->key[$mark] = $res;}
    function __get($mark) {$err = "NO DATA"; if(array_key_exists($mark, $this->key)) return $this->key[$mark]; return $err;}
    function __isset($mark) {$err = "NOT SET"; if(array_key_exists($mark, $this->key)) return isset($this->key[$mark]); return $this->key[$mark] = $err;}
    function __unset($mark) {if(array_key_exists($name, $this->key)) unset($this->key[$mark]); $this->key[$mark] = NULL;}
}

?>
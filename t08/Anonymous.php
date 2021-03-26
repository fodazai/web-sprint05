<?php

class Anonymous {
    private $name, $alias, $affiliation;
    function __construct($name, $alias, $affiliation) {$this->name = $name; $this->alias = $alias; $this->affiliation = $affiliation;}
    public function getName() {return $this->name;}
    public function getAlias() {return $this->alias;}
    public function getAffiliation() {return $this->affiliation;}
}

function get_anonymous($name, $alias, $affiliation) {
    $anon = new Anonymous($name, $alias, $affiliation);
    return $anon;
}

?>
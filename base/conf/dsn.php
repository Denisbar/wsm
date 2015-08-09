<?php

class DB {
private $xmlstr = <<<XML
<?xml version='1.0' standalone='yes'?>
<options>
 <dsn>mysql:host=localhost;dbname=wsm</dsn>
 <usr>root</usr>
 <pwd>8169x5it</pwd>
</options>
XML;
    public $DB;
    function __construct () {
        $opt = simplexml_load_string($this->xmlstr);

        $dsn = $opt->dsn;
        $usr = $opt->usr;
        $pwd = $opt->pwd;

        $this->DB = new PDO($dsn, $usr, $pwd); 
    }
}
?>

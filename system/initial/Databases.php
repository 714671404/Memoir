<?php
namespace System\initial;


/*
 * 链接数据库类
 */
class Databases
{
    private  $db        =       null;
    private  $string    =       '';
    private  $host      =       '192.168.10.10';
    private  $user      =       'homestead';
    private  $pass      =       'secret';
    private  $dbname    =       'memoir';
    private  $port      =       3306;
    private  $charset   =       'utf8';

    /*
     * 链接数据库
     */
    function __construct(array $array)
    {
        $this->host     =   $array['memoir_host'];
        $this->user     =   $array['memoir_user'];
        $this->pass     =   $array['memoir_pass'];
        $this->dbname   =   $array['memoir_dbname'];
        $this->port     =   $array['memoir_port'];
        $this->charset  =   $array['memoir_charset'];

        $this->string = 'mysql:host=' . $this->host;
        $this->string .= ';dbname=' . $this->dbname;
        $this->string .= ';port=' . $this->port;

//        var_dump($this->string);exit;

        $this->db = new \PDO($this->string, $this->user, $this->pass);

        $this->db->exec('SET names ' . $this->charset);

        return $this->db;
    }
}
<?php

namespace Source\Database;

use \PDO;
use \PDOException;

class Connect
{
    private const HOST = 'localhost';
    private const USER = 'root';
    private const DBNAME = 'fullstackphp';
    private const PASSWD = '';

    private const OPTIONS = [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', // Forçar os nomes com padrão utf8
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Qualquer erro utilizando PDO vai estourar uma PDOException
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, // o default do .fetch vai ser fetchAssc
        PDO::ATTR_CASE => PDO::CASE_NATURAL // Garante o mesmo nome de colunas no banco de dados
    ];

    private static $instance;

    final private function __construct()
    {
    }

    final private function __clone()
    {
    }

    /**
     * @return PDO
     */
    public static function getInstance(): PDO
    {
        if (empty(self::$instance)) {
            try {
                self::$instance = new PDO(
                    'mysql:host=' . self::HOST . ';dbname=' . self::DBNAME,
                    self::USER,
                    self::PASSWD,
                    SELF::OPTIONS
                );
            } catch (PDOException $exception) {
                die("<h1>Whoops! Erro ao conectar...</h1>");
            }
        }
        return self::$instance;
    }
}

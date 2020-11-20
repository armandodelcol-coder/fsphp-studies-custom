<?php

namespace Source\Core;

use \PDO;
use \PDOException;

class Connect
{
    private const OPTIONS = [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', // Forçar os nomes com padrão utf8
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Qualquer erro utilizando PDO vai estourar uma PDOException
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, // o default do .fetch vai ser um objeto stdClass
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
                    'mysql:host=' . CONF_DB_HOST . ';dbname=' . CONF_DB_NAME,
                    CONF_DB_USER,
                    CONF_DB_PASS,
                    SELF::OPTIONS
                );
            } catch (PDOException $exception) {
                die("<h1>Whoops! Erro ao conectar...</h1>");
            }
        }
        return self::$instance;
    }
}

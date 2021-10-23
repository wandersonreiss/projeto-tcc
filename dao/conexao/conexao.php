<?php

abstract class Conexao {

    private static $instance;

    /**
     * 
     * @return PDO
     */
    public static function getInstance() {
        try {
            if (!isset(self::$instance)) {
                // sudo cp /etc/php.ini.default /etc/php.ini
                // cd /etc
                // vim php.ini
                // setei -> pdo_mysql.default_socket=/tmp/mysqld.sock
                // configurei a porta do mysql "localhost:3306" para fzr a conexão
                self::$instance = new PDO("mysql:host=localhost:3306;dbname=db_controle_prenatal;charset=UTF8", "root", "Sasukenaruto00#");
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return self::$instance;
        } catch (PDOException $exc) {
            echo "Erro ao conectar o banco de dados :" . $exc->getMessage();
        }
    }

}

?>

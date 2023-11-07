<?php
define('HOST', 'localhost');
//define('DB', 'cadastro');
define('USER', 'root');
define('PASS', '');
//$dsn = 'mysql:host=' . HOST . ';dbname=' . DB;
$dsn = 'mysql:host=' . HOST;

try {
    $bd = new PDO($dsn, USER, PASS);
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Criar o Banco de Dados caso não exista
    $sql = 'CREATE DATABASE IF NOT EXISTS lixeiravirtual;';
    try {
        $query = $bd->prepare($sql);
        $query->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    // Criar a Tabela caso não exista
    $sql = '
    USE lixeiravirtual;
    CREATE TABLE tab_usuarios(
        id_usuario int NOT NULL AUTO_INCREMENT,
        primary key(id_usuario),
        nome varchar(50) not null,
        email varchar(100) not null,
        senha varchar(100) not null,
        nivel int not null,
        ativo int not null
    );
    INSERT INTO tab_usuarios(nome, email, senha, nivel, ativo)
    VALUES( "Administrador",
            "admin@gmail.com",
            "a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3",
            0,
            1
        );
    ';
    try {
        $query = $bd->prepare($sql);
        $query->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

} catch (PDOException $e) {
    echo $e->getMessage();
}





class Conexao {
    // Armazena a instância única da conexão com o BD, propriedade estática
    private static $connect;
    // Método estático público, usado para obter uma conexão com o BD
    public static function getConexao(){
        // Verifica se a propriedade estática $conecct ainda não foi inicializada
        if(!isset(self::$connect)){
            // Criando uma instância da classe PDO
            self::$connect = new PDO('mysql:host=localhost;dbname=lixeiravirtual','root', '');
            // Retorna a instância da conexão
            return self::$connect;
        }else{
            return self::$connect;
        }
    }
}

?>
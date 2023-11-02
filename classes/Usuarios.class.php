<?php
include_once 'Conexao.class.php';

class Usuarios
{
    public function login($email, $senha) {
        // Criptografar Senha
        $senha = hash('sha256', $senha);

        // Verificar se o Email existe no Banco de Dados
        $sql = 'SELECT * FROM tab_usuarios
                WHERE email = :email AND ativo = 1';
        try {

            $query = Conexao::getConexao()->prepare($sql);
            $query -> bindValue(':email', $email);
            $query -> execute();
            $resultado = $query -> fetch(PDO::FETCH_ASSOC);
            if ($query -> rowCount() <= 0) {
                echo '<script>alert("Email não cadastrado! Faça seu cadastro primeiro");</script>';
            } else {
                
                // Verificar se as senhas correspondem
                if ($resultado['senha'] != $senha) {
                    echo '<script>alert("Senha Incorreta!");</script>';
                } else {

                    // Criar seção
                    session_start();
                    $_SESSION['id_usuario'] = $resultado['id_usuario'];
                    $_SESSION['nome'] = $resultado['nome'];
                    $_SESSION['email'] = $resultado['email'];
                    $_SESSION['nivel'] = $resultado['nivel'];
                    
                    if ($_SESSION['nivel'] == 0) {
                        echo '<meta http-equiv="refresh" content="0;url=admin/">';
                    } else {
                        echo '<meta http-equiv="refresh" content="0;url=comum.php">';
                    }
                
                }
            }

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }





    public function insereUsuario($nome, $email, $senha, $nivel)
    {
        // Verificar se email já foi cadastrado
        $sql = 'SELECT * FROM tab_usuarios
                WHERE email = :email';
        try {

            $query = Conexao::getConexao()->prepare($sql);
            $query->bindValue(':email', $email);
            $query->execute();

            if ($query->rowCount() > 0) {
                echo '<script>alert("Email já cadastrado!");</script>';
            } else {



                // Criptografar a senha
                $senha = hash('sha256', $senha);

                $sql = 'INSERT INTO tab_usuarios (nome, email, senha, nivel, ativo)
                VALUES (:nome, :email, :senha, :nivel, 1)';

                try {
                    $query = Conexao::getConexao()->prepare($sql);
                    $query->bindValue(':nome', $nome);
                    $query->bindValue(':email', $email);
                    $query->bindValue(':senha', $senha);
                    $query->bindValue(':nivel', $nivel);
                    $query->execute();
                    echo '<script>alert("Usuário Inserido com Sucesso");</script>';

                } catch (PDOException $e) {
                    echo $e->getMessage();
                }



            }

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
?>



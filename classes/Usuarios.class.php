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
                    // session_start();
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





    public function mostraUsuarios() {
        $sql = 'SELECT * FROM tab_usuarios';
        try {

            $query = Conexao::getConexao()->prepare($sql);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }





    public function mostraUsuario($id_usuario) {
        $sql = 'SELECT * FROM tab_usuarios
                WHERE id_usuario = :id_usuario';
        try {

            $query = Conexao::getConexao()->prepare($sql);
            $query->bindValue(':id_usuario', $id_usuario);
            $query->execute();
            return $query->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }





    public function excluiUsuario($id_usuario) {
        $sql = 'DELETE FROM tab_usuarios
                WHERE id_usuario = :id_usuario
                LIMIT 1'; 
                
        try {

            $query = Conexao::getConexao()->prepare($sql);
            $query->bindValue(':id_usuario', $id_usuario);
            $query->execute();

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }





    public function desativaUsuario($id_usuario) {
        $sql = 'UPDATE tab_usuarios
                SET ativo = 0
                WHERE id_usuario = :id_usuario
                LIMIT 1';
        try {

            $query = Conexao::getConexao()->prepare($sql);
            $query->bindValue(':id_usuario', $id_usuario);
            $query->execute();

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }





    public function ativaUsuario($id_usuario) {
        $sql = 'UPDATE tab_usuarios
                SET ativo = 1
                WHERE id_usuario = :id_usuario
                LIMIT 1';
        try {

            $query = Conexao::getConexao()->prepare($sql);
            $query->bindValue(':id_usuario', $id_usuario);
            $query->execute();

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }





    public function alteraUsuario($id_usuario, $nome, $email, $nivel) {
        // Verificar se email já foi cadastrado
        $sql = 'SELECT * FROM tab_usuarios
                WHERE email = :email AND id_usuario <> :id_usuario';
        try {

            $query = Conexao::getConexao()->prepare($sql);
            $query->bindValue(':email', $email);
            $query->bindValue(':id_usuario', $id_usuario);
            $query->execute();

            if ($query->rowCount() > 0) {
                echo '<script>alert("Email já cadastrado!");</script>';
            } else {


                $sql = 'UPDATE tab_usuarios
                        SET nome = :nome, email = :email, nivel = :nivel
                        WHERE id_usuario = :id_usuario
                        LIMIT 1';  
                
                try {

                    $query = Conexao::getConexao()->prepare($sql);
                    $query->bindValue(':nome', $nome);
                    $query->bindValue(':email', $email);
                    $query->bindValue(':nivel', $nivel);
                    $query->bindValue(':id_usuario', $id_usuario);
                    $query->execute();

                } catch (PDOException $e) {
                    echo $e->getMessage();
                }
                



            }

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }





    public function redefinirSenha($id_usuario) {
        // Criptografar senha
        $senha = hash('sha256', '123');

        $sql = 'UPDATE tab_usuarios
                SET senha = :senha
                WHERE id_usuario = :id_usuario
                LIMIT 1';
        try {

            $query = Conexao::getConexao()->prepare($sql);
            $query->bindValue(':senha', $senha);
            $query->bindValue(':id_usuario', $id_usuario);
            $query->execute();

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }





    public function alteraSenha($id_usuario, $senha, $nsenha) {
        $senha = hash('sha256', $senha);
        $nsenha = hash('sha256', $nsenha);

        $usuario = $this->mostraUsuario($id_usuario);

        // Verifica se a senha está correta
        if ($senha != $usuario['senha']) {
            echo '<script>alert("Senha Incorreta!");</script>';
        } else {
            $sql = 'UPDATE tab_usuarios
                    SET senha = :senha
                    WHERE id_usuario = :id_usuario
                    LIMIT 1';

            try {

                $query = Conexao::getConexao()->prepare($sql);
                $query->bindValue(':senha', $nsenha);
                $query->bindValue(':id_usuario', $id_usuario);
                $query->execute();
                 
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
}
?>



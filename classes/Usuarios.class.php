<?php
include_once 'Conexao.class.php';

class Usuarios
{
    public function login($email, $senha)
    {
        // Criptografar Senha
        $senha = hash('sha256', $senha);

        // Verificar se o Email existe no Banco de Dados
        $sql = 'SELECT * FROM tab_usuarios
                WHERE email = :email AND ativo = 1';
        try {

            $query = Conexao::getConexao()->prepare($sql);
            $query->bindValue(':email', $email);
            $query->execute();
            $resultado = $query->fetch(PDO::FETCH_ASSOC);
            if ($query->rowCount() <= 0) {
                //echo '<script>alert("Email não cadastrado! Faça seu cadastro primeiro");</script>';

                echo '<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>';
                ?>

                <!-- Modal para email não cadastrado -->
                <div class="modal fade" id="emailNaoCadastrado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-danger">
                                <h5 class="modal-title" id="exampleModalLabel">Aviso</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-dark">
                                Email não cadastrado! Faça seu primeiro cadastro!
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                <!-- <button type="button" class="btn btn-primary">Salvar mudanças</button> -->
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                echo '<script> $("#emailNaoCadastrado").modal(); </script>';

            } else {

                // Verificar se as senhas correspondem
                if ($resultado['senha'] != $senha) {
                    //echo '<script>alert("Senha Incorreta!");</script>';

                    echo '<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>';
                    ?>

                    <!-- Modal para senha incorreta -->
                    <div class="modal fade" id="senhaIncorreta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-danger">
                                    <h5 class="modal-title" id="exampleModalLabel">Aviso</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body text-dark">
                                    Senha Incorreta!
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                    <!-- <button type="button" class="btn btn-primary">Salvar mudanças</button> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    echo '<script> $("#senhaIncorreta").modal(); </script>';

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
                //echo '<script>alert("Email já cadastrado!");</script>';
                echo '<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                        crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
                        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
                        crossorigin="anonymous"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
                        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
                        crossorigin="anonymous"></script>';
                ?>

                <!-- Modal para email ja cadastrado -->
                <div class="modal fade" id="emailJaCadastrado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-warning">
                                <h5 class="modal-title" id="exampleModalLabel">Aviso</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-dark">
                                Email já cadatsrado!
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                <!-- <button type="button" class="btn btn-primary">Salvar mudanças</button> -->
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                echo '<script> $("#emailJaCadastrado").modal(); </script>';

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
                    //echo '<script>alert("Usuário Inserido com Sucesso");</script>';

                    echo '<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>';

                    ?>
                    <!-- Modal para quando o usuário for inserido -->
                    <div class="modal fade" id="usuarioInserido" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-success">
                                    <h5 class="modal-title" id="exampleModalLabel">Sucesso!</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body text-dark">
                                    Usuário inserido com sucesso!
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                    <!-- <button type="button" class="btn btn-primary">Salvar mudanças</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php

                    echo '<script>$("#usuarioInserido").modal();</script>';

                } catch (PDOException $e) {
                    echo $e->getMessage();
                }

            }

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }





    public function mostraUsuarios()
    {
        $sql = 'SELECT * FROM tab_usuarios';
        try {

            $query = Conexao::getConexao()->prepare($sql);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function mostraUsuariosPorNome()
    {
        $sql = 'SELECT * FROM tab_usuarios ORDER BY nome';
        try {

            $query = Conexao::getConexao()->prepare($sql);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function mostraUsuariosPorEmail()
    {
        $sql = 'SELECT * FROM tab_usuarios ORDER BY email';
        try {

            $query = Conexao::getConexao()->prepare($sql);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function mostraUsuariosPorNivel()
    {
        $sql = 'SELECT * FROM tab_usuarios ORDER BY nivel';
        try {

            $query = Conexao::getConexao()->prepare($sql);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }





    public function mostraUsuario($id_usuario)
    {
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





    public function excluiUsuario($id_usuario)
    {
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





    public function desativaUsuario($id_usuario)
    {
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





    public function ativaUsuario($id_usuario)
    {
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





    public function alteraUsuario($id_usuario, $nome, $email, $nivel)
    {
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





    public function redefinirSenha($id_usuario)
    {
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





    public function alteraSenha($id_usuario, $senha, $nsenha)
    {
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
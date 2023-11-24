<?php
include_once 'Conexao.class.php';

class Sugestoes {

    public function insereSugestao($id_usuario, $titulo, $sugestao) {
        date_default_timezone_set('America/Sao_Paulo');
        $data = date('Y-m-d');

        $sql = '
            INSERT INTO tab_sugestoes (id_usuario, titulo, sugestao, data)
            VALUES (:id_usuario, :titulo, :sugestao, :data);
        ';

        try {

            $query = Conexao::getConexao()->prepare($sql);
            $query -> bindValue(':id_usuario', $id_usuario);
            $query -> bindValue(':titulo', $titulo);
            $query -> bindValue(':sugestao', $sugestao);
            $query -> bindValue(':data', $data);
            $query -> execute();

        } catch (PDOException $e) {
            echo $e -> getMessage();
        }
    }





    public function mostraSugestoes() {
        $sql = '
            SELECT 
                tab_sugestoes.id_sugestao,
                tab_sugestoes.titulo,
                tab_sugestoes.sugestao,
                tab_sugestoes.data,
                tab_usuarios.nome,
                tab_usuarios.email
            FROM tab_sugestoes

            JOIN tab_usuarios
            ON tab_sugestoes.id_usuario = tab_usuarios.id_usuario

            ORDER BY id_sugestao DESC
        ';

        try {

            $query = Conexao::getConexao() -> prepare($sql);
            $query -> execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOEXception $e) {
            echo $e -> getMessage();
        }
    }





    public function excluiSugestao($id_sugestao) {
        $sql = '
            DELETE FROM tab_sugestoes
            WHERE id_sugestao = :id_sugestao
            LIMIT 1;
        ';

        try {

            $query = Conexao::getConexao() -> prepare($sql);
            $query -> bindValue(':id_sugestao', $id_sugestao);
            $query -> execute();

        } catch (PDOException $e) {
            echo $e -> getMessage();
        }
    }

}

?>
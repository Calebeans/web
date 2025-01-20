<?php
require_once './conexao.php';
class controleCarta
{
    public function inserir()
    {
        $sql = 'insert into cartas (nome, descricao) values (?,?)';
        $nome = 'Carta base';
        $descricao = 'Essa é uma carta base';
        $preparado = Conexao::preparaComando($sql);
        $preparado->bindValue(1, $nome);
        $preparado->bindValue(2, $descricao);
        if ($preparado->execute()) {
            return ['status' => 'Gravou'];
        } else {
            return ['status' => 'Erro'];
        }
    }

    public function listar()
    {
        $sql = 'select * from cartas';
        $preparado = Conexao::preparaComando($sql);
        if ($preparado->execute()) {
            $todos = $preparado->fetchAll(PDO::FETCH_ASSOC);
        }
        return $todos;
    }
}
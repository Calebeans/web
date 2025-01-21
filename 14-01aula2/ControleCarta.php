<?php
require_once './conexao.php';
class controleCarta
{
    public function inserir()
    {
        $sql = 'insert into cards (nome, descricao) values (?,?)';
        $nome = filter_input(INPUT_POST, 'nome');
        $descricao = filter_input(INPUT_POST, 'descricao');
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
        $sql = 'select * from cards';
        $todos = [];
        $preparado = Conexao::preparaComando($sql);
        if ($preparado->execute()) {
            $todos = $preparado->fetchAll(PDO::FETCH_ASSOC);
        }
        return $todos;
    }
}
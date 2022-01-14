<?php

require_once "Conexao.php";

class Monstro
{
    private $id;
    private $nome;
    private $tipo;
    private $nivel;
    private $hp;
    private $face;

    // Gets & Sets
    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function getNivel()
    {
        return $this->nivel;
    }

    public function getHp()
    {
        return $this->hp;
    }

    public function getFace()
    {
        return $this->face;
    }
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
        return $this;
    }

    public function setNivel($nivel)
    {
        $this->nivel = $nivel;
        return $this;
    }

    public function setHp($hp)
    {
        $this->hp = $hp;
        return $this;
    }
    public function setFace($face)
    {
        $this->face = $face;
        return $this;
    }

    // Funções
    public function atualizar()
    {
        $tabela = "monstro";
        $parametros = "nome='" . $this->nome . "',tipo='" . $this->tipo . "',nivel=" . $this->nivel . ",hp=" . $this->hp . ",face='" . $this->face . "'";
        // $parametros = "nome='". $this->nome ."',valor=".$this->valor.",cor='".$this->cor."'";
        Conexao::update(
            $tabela,
            $parametros,
            $this->id
        );
    }

    public function salvar()
    {
        $tabela = "";
        $colunas = "";
        $valores = "";
        $tabela = "monstro";
        $colunas = "nome, tipo, nivel, hp, face";
        $valores = "'" . $this->nome . "', '" . $this->tipo . "', " . $this->nivel . ", " . $this->hp . ", '" . $this->face . "'";
        Conexao::insert($tabela, $colunas, $valores);
    }

    public static function retornarTodos()
    {
        $tabela = "monstro";
        $colunas = "id, nome, tipo, nivel, hp, face";

        $dados = Conexao::select($tabela, $colunas);
        $monstros = [];
        foreach ($dados as $d) {
            $monstro = new Monstro();
            $monstro->id = $d["id"];
            $monstro->nome = $d["nome"];
            $monstro->tipo = $d["tipo"];
            $monstro->nivel = $d["nivel"];
            $monstro->hp = $d["hp"];
            $monstro->face = $d["face"];
            $monstros[] = $monstro;
        }
        return $monstros;
    }

    public static function retornarPorId($id)
    {
        $tabela = "monstro";
        $colunas = "id, nome, tipo, nivel, hp, face";

        $dados = Conexao::selectById($tabela, $colunas, $id);

        foreach ($dados as $d) {
            $monstro = new Monstro();
            $monstro->id = $d["id"];
            $monstro->nome = $d["nome"];
            $monstro->tipo = $d["tipo"];
            $monstro->nivel = $d["nivel"];
            $monstro->hp = $d["hp"];
            $monstro->face = $d["face"];
            return $monstro;
        }
        return null;
    }

    public static function deletar($id)
    {
        Conexao::delete("monstro", $id);
    }
}

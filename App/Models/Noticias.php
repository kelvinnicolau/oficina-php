<?php
    class Noticias {
        private $table = 'noticias';
        private $db;

        function __construct()
        {
            $this->db = new Conexao();
        }

        public function get(){
            $sql = "SELECT noticias.*, categorias.name from $this->table INNER JOIN categorias ON categorias.id = noticias.categoria_id"; 
            $this->db->montasql($sql);
            $this->db->executar();
            return $this->db->converteResultado();
        }
    }
?>
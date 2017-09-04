<?php

    class contato{

        public $idCadastro;
        public $nome;
        public $celular;
        public $telefone;
        public $email;


        //metodo construtor
        public function __construct(){

            //incluir o arquivo de conexao
            require_once('models/bd_class.php');
            //cria uma instancia da classe mysql_db
            $conexao_bd = new mysql_db();
            //estabelece a conexao com BD
            $conexao_bd->conectar();



        }

        //metodo para inserir no banco
         public function Insert($contato){

            $sql ="insert into tblPoo (nome, telefone, celular, email)values('".$contato->nome."', '".$contato->telefone."', '".$contato->celular."', '".$contato->email."')";


            if (mysql_query($sql)){
              header('location:index.php');



            }else{


                echo('impossivel');



            }



        }

        //metodo para atualizar um campo no banco
         public function Update(){



        }

        //metodo para deletar algo do banco
         public function Delete($contato){
           $sql="delete from tblPoo where idPoo = $contato->idPoo";
           if (mysql_query($sql)){
             header('location:index.php');



           }else{


               echo('impossivel');



           }



        }

        //metodo para selecionar tudo do banco
         public function SelectALL(){
           //script de select no banco de dados
           $sql = "select * from tblPoo order by idPoo desc";
           $select = mysql_query($sql);
           $cont=0;

           //repetição para guardar os registros do banco de dados em array de objetos
           while ($rs=mysql_fetch_array($select)) {

             //instancia da classe contato, criando uma coleção de objetos
             $listcontatos[] = new contato;

             //guardando em cada objeto um registro do banco de dados, referenciando pelo indece $cont
              $listcontatos[$cont]->idPoo=$rs['idPoo'];
              $listcontatos[$cont]->nome=$rs['nome'];
              $listcontatos[$cont]->telefone=$rs['telefone'];
              $listcontatos[$cont]->celular=$rs['celular'];
              $listcontatos[$cont]->email=$rs['email'];

              $cont+=1;

           }

           return $listcontatos;

        }


        //selecionar por id
         public function SelectById($contato){

           


        }


    }

?>

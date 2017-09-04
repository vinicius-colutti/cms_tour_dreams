<?php
/*


Objetivo: CRUD contatos.
data: 02/08/2017.
desenvolvedor: Vinicius Ivan Colutti.
última modificação:02/08/2017
observações: nd.
Arquivos relacionados: router.php, contatos_view.php, contato_class.php.



*/

    class controllerContatos{

        //metodo para inserir um novo contato
        public function novo(){
            //Verifica se a requisição feite pelo form é utilizando o metodo POST
            if($_SERVER['REQUEST_METHOD'] == 'POST'){


                //Resgatando os valores do form
                $nome=$_POST['nome'];
                $telefone=$_POST['telefone'];
                $celular=$_POST['celular'];
                $email=$_POST['email'];



                $contato_controller = new contato();

                $contato_controller->nome = $nome;
                $contato_controller->telefone = $telefone;
                $contato_controller->celular = $celular;
                $contato_controller->email = $email;

                $contato_controller->Insert($contato_controller);


            }



        }

        //metodo para atualizar um contato
        public function atualizar(){




        }

        //metodo para apagar um contato
        public function apagar(){
          if($_SERVER['REQUEST_METHOD'] == 'GET'){


              //Resgatando os valores do form
              $idPoo=$_GET['idPoo'];


              $contato_controller = new contato();
              $contato_controller->idPoo = $idPoo;


              $contato_controller->Delete($contato_controller);


          }






        }

        //metodo para listar todos os contato
        public function listar(){

            require_once('models/contato_class.php');

            //Cria a instancia para model contato
            $listContatos_controller = new contato();
            //chamada para o método SelectALL que vai fazer o select no banco de dados;
            return $listContatos_controller->SelectALL();





        }

        //metodo para buscar um determinado contato
        public function buscar(){
        


        }


    }

?>

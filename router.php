<?php

    //verificar qual view está requisitando o router e qual ação a view quer executar (inserir, editar, excluir, etc)
    //essa informação é criad no action de cada form na view
    $controller=$_GET['controller'];
    $modo=$_GET['modo'];

    //verificar qual controller devemos instanciar, essa informação e enviada na varíavel controller pela view
    switch($controller){

            case'contatos':
                //incluindo todos os arquivos necessários para a programação, no caso a controller e a model
                require_once('controllers/contatos_controller.php');
                require_once('models/contato_class.php');

                switch($modo){

                        case'novo':
                            //instancia da classe controllerContatos
                            $controller_contato = new controllerContatos();
                            //chamando o método novo();
                            $controller_contato->novo();


                        case'editar':
                        


                        case'excluir':
                        $controller_contato = new controllerContatos();
                        //chamando o método excluir();
                        $controller_contato->apagar();








                }



    }









?>

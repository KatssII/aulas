<?php
//Modelo
    class Veiculo{
        //atributos
        private $marca;
        private $modelo;
        private $ano;
        private $placa;
 
        //metodos ou funcoes
        function saudacao(){
            return 'Ola henriqe hihi';
        }

        function  getMarca(){
            return $this->marca;
        }

        function setMarca($marca){
            $this->marca = $marca;
        }

        function  passarMarcha() {
            return 'Pressionar a embreagem com o pe, trocar marcha com a mao';
        }
    }
    class Carro extends Veiculo{
        
    }
    class Moto extends veiculo{
        function passarMarcha(){
            return 'Pressionar a embreagem com a mao, trocar marcha com o pe';
        }
    }
    class Caminhao extends Veiculo{
    }
    echo 'Carro';
    $c = new Carro();
    $c->setMarca('honda');
    echo '<br>';
    echo $c->getMarca();
    echo '<br>';
    echo $c->passarMarcha();

    echo '<br>';
    echo 'Moto';
    $m = new Moto();
    echo '<br>';
    echo $m->passarMarcha();

    echo '<br>';
    echo 'Caminhao';
    $caminhao = new Caminhao();
    echo '<br>';
    echo $caminhao->passarMarcha();
?>
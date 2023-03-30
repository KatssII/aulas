<?php
    interface Eletrodomestico{
        function ligar();
        function desligar();
    }
    class Liquidificador{
        function ligarLiquidificador(){
            return 'Ligando';
        }

        function desligarLiguidificador(){
            return 'Desligando';
        }
        function misturarAlimentos(){
            return 'Misturando';
        }
    }

    class Televisao implements Eletrodomestico{
        function ligar(){
            return 'Ligando';
        }
        function desligar(){
            return 'Desligando';
        }
        function trocarCanal(){
            return 'Trocando';
        }
    }
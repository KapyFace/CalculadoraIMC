<?php


enum ClassificaMenorDeIdade: string
{
    case Magreza            = 'Magreza';
    case Normal             = 'Normal';
    case Sobrepeso          = 'Sobrepeso';
    case ObesidadeGrau     = 'Obesidade';

    public static function classifica(float $imc): string
    {

        if ($imc >= 27.7) {
            return 'Obesidade';
        }

        if ($imc >= 23.3 && $imc < 27.7) {
            return 'Sobrepeso';
        }

        if ($imc >= 19.9 && $imc < 23.6) {
            return 'Normal';
        }

        if ($imc < 19.9) {
            return  'Magreza';
        }
    }
}

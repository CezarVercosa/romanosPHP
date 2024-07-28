<?php

class conversorRomano {
    private static $numeraisRomanos = [
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    ];

    public static function converteRealParaRomano($numeroReal) {
        $retorno = '';

        foreach (self::$numeraisRomanos as $valorRomano => $valorReal) {
            $matches = intval($numeroReal / $valorReal);
            $retorno .= str_repeat($valorRomano, $matches);
            $numeroReal = $numeroReal % $valorReal;
        }

        return $retorno;
    }

    public static function converteRomanoParaReal($numeroRomano) {
        $retorno = 0;
        $numeroRomano = strtoupper($numeroRomano);
        $i = 0;

        while ($i < strlen($numeroRomano)) {
            foreach (self::$numeraisRomanos as $valorRomano => $valorReal) {
                if (substr($numeroRomano, $i, strlen($valorRomano)) == $valorRomano) {
                    $retorno += $valorReal;
                    $i += strlen($valorRomano);
                    break;
                }
            }
        }

        return $retorno;
    }
}
?>

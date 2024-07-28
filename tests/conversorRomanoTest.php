<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/conversorRomano.php';

class conversorRomanoTest extends TestCase {
    public function testeValoresReaisParaRomanos() {
        $this->assertEquals('I', conversorRomano::converteRealParaRomano(1));
        $this->assertEquals('IV', conversorRomano::converteRealParaRomano(4));
        $this->assertEquals('IX', conversorRomano::converteRealParaRomano(9));
        $this->assertEquals('XL', conversorRomano::converteRealParaRomano(40));
        $this->assertEquals('XC', conversorRomano::converteRealParaRomano(90));
        $this->assertEquals('CD', conversorRomano::converteRealParaRomano(400));
        $this->assertEquals('CM', conversorRomano::converteRealParaRomano(900));
        $this->assertEquals('MCMXCIX', conversorRomano::converteRealParaRomano(1999));
        $this->assertEquals('MMXXIV', conversorRomano::converteRealParaRomano(2024));
    }

    public function testeValoresRomanosParaReais() {
        $this->assertEquals(1, conversorRomano::converteRomanoParaReal('I'));
        $this->assertEquals(4, conversorRomano::converteRomanoParaReal('IV'));
        $this->assertEquals(9, conversorRomano::converteRomanoParaReal('IX'));
        $this->assertEquals(40, conversorRomano::converteRomanoParaReal('XL'));
        $this->assertEquals(90, conversorRomano::converteRomanoParaReal('XC'));
        $this->assertEquals(400, conversorRomano::converteRomanoParaReal('CD'));
        $this->assertEquals(900, conversorRomano::converteRomanoParaReal('CM'));
        $this->assertEquals(1999, conversorRomano::converteRomanoParaReal('MCMXCIX'));
        $this->assertEquals(2024, conversorRomano::converteRomanoParaReal('MMXXIV'));
    }
}

?>

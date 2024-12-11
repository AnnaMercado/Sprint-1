<?php
namespace test;

use PHPUnit\Framework\TestCase;
use App\verificarGrado;

class verificarGradoTest extends TestCase
{
    public function test_PrimerGrado()
    {
        $prueba = new verificarGrado();
        $grado = $prueba->verificarGrado(67);

        $this->assertSame("El grado de la alumno es Primera División.", $grado);
    }

    public function test_SegundoGrado()
    {
        $prueba = new verificarGrado();

        $grado = $prueba->verificarGrado(48);

        $this->assertSame("El grado de la alumno es Segunda División.", $grado);
    }

    public function test_TercerGrado()
    {
        $prueba = new verificarGrado();

        $grado = $prueba->verificarGrado(35);
        $this->assertSame("El grado de la alumno es Tercera División.", $grado);
    }

    public function test_Suspendido()
    {
        $prueba = new verificarGrado();
        $grado = $prueba->verificarGrado(4);
        $this->assertSame( "El alumno esta suspendido.", $grado);
    }
}


?>
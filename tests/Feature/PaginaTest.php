<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PaginaTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_pagina_contacto()
    {
        $response = $this->get('/contacto');

        $response->assertStatus(200);
        $response->assertSeeText(['Hola', 'Contacto', 'formulario']);
    }

    /** @test */
    public function validacion_formulario()
    {
        $response = $this->post('/contacto', [
            'nombre' => '',
            'correo' => 'correoNoValido',
            'mensaje' => 'asd',
        ]);
        
        $response->assertSessionHasErrors([
            'nombre',
            'correo',
            'mensaje',
        ]);
    }

    /** @test */
    public function prellenado_formulario_contacto()
    {
        $response = $this->get('/contacto/1234');

        $response->assertStatus(200);

        $this->assertEquals('Osvaldo González', $response['nombre']);
        $this->assertEquals('gonzalezascencioosvaldo@gmail.com', $response['correo']);
    }
}

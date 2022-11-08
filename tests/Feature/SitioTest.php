<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SitioTest extends TestCase
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

        $response->assertSeeText(['Nombre','Correo','Comentarios extra']);
    }

    public function test_contacto_con_codigo()
    {
        $response = $this->get('/contacto/1234');
        //$response->assertSeeText('Leonardo Castillo');

        $response->assertStatus(200);
    }

    /** @test */
    public function validacion_formulario()
    {
        $response = $this->post('/recibe-form-contacto', [
            'nombre' => '',
            'email' => 'correoNoValido',
            'mensaje' => 'asd',
        ]);

        $response->assertSessionHasErrors([
            'nombre',
            'email',
            'mensaje',
        ]);
    }

    /** @test */
    public function prellenado_formulario_contacto()
    {
        $response = $this->get('/contacto/1234');
        $response->assertStatus(200);

        $this->assertEquals('Leonardo Castillo', $response['nombre']);
    }
}

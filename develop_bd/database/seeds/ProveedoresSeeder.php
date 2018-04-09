<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProveedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proveedores')->insert(
        	["nombre" => "Movistar", "razon_social" => "Telefónica Móviles Chile S.A", "email" => "soporte@movistar.cl", "telefono1" => "600-600-3000", "direccion" => "Carlos Ossandón 1301 - Local 2 Barrio: Barrio Ossandon", "descripcion" => "Empresa de telefonía", "estado" => true]
        );
    }
}

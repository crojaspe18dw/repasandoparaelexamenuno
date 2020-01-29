<?php

use Illuminate\Database\Seeder;

class seederparaempleados extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i <= 10 ; $i++) { 
	        DB::table('empleados')->insert([
	        	'nombre'=>'juan'.$i,
	        	'apellido'=>'rodriguez',
	        	'email'=>'juanro@gmail.com',
	        	'telefono'=>'123456789'
	        ]);
    	}
    }
}

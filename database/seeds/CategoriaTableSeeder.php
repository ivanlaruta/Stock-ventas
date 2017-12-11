<?php

use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('trf_categorias')->delete();
        
        DB::table('trf_categorias')->insert
        ([
			'descripcion'=>'AUTOMOVILES',
			'estado'=>'1',
        ]);
        DB::table('trf_categorias')->insert
        ([
			'descripcion'=>'VAGONETAS',
			'estado'=>'1',
        ]);
        DB::table('trf_categorias')->insert
        ([
			'descripcion'=>'UTILITARIO',
			'estado'=>'1',
        ]);
        DB::table('trf_categorias')->insert
        ([
			'descripcion'=>'CAMIONETA',
			'estado'=>'1',
        ]);
        DB::table('trf_categorias')->insert
        ([
			'descripcion'=>'AUTO LUJO',
			'estado'=>'1',
        ]);
        DB::table('trf_categorias')->insert
        ([
			'descripcion'=>'VAGONETAS LUJO',
			'estado'=>'1',
        ]);
        DB::table('trf_categorias')->insert
        ([
			'descripcion'=>'CAMIONES',
			'estado'=>'1',
        ]);
        DB::table('trf_categorias')->insert
        ([
			'descripcion'=>'OTROS MODELOS',
			'estado'=>'1',
        ]);
        DB::table('trf_categorias')->insert
        ([
			'descripcion'=>'YAMAHA',
			'estado'=>'1',
        ]);
    }
}
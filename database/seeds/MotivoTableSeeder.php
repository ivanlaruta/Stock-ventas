<?php

use Illuminate\Database\Seeder;

class MotivoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('trf_motivos')->delete();
        
        DB::table('trf_motivos')->insert
        ([
            'descripcion'=>'VEHICULOS TOYOTA',
            'estado'=>'1',
        ]);

        DB::table('trf_motivos')->insert
        ([
            'descripcion'=>'VEHICULOS LEXUS',
            'estado'=>'1',
        ]);

        DB::table('trf_motivos')->insert
        ([
            'descripcion'=>'VEHICULOS HINO',
            'estado'=>'1',
        ]);

        DB::table('trf_motivos')->insert
        ([
			'descripcion'=>'MOTOS Y CUADRAS',
			'estado'=>'1',
        ]);

        DB::table('trf_motivos')->insert
        ([
			'descripcion'=>'TRAMITES DE VENTA',
			'estado'=>'1',
        ]);
        DB::table('trf_motivos')->insert
        ([
			'descripcion'=>'REPUESTOS',
			'estado'=>'1',
        ]);
        DB::table('trf_motivos')->insert
        ([
			'descripcion'=>'SERVICIOS',
			'estado'=>'1',
        ]);
        DB::table('trf_motivos')->insert
        ([
			'descripcion'=>'LICITACIONES',
			'estado'=>'1',
        ]);
        DB::table('trf_motivos')->insert
        ([
			'descripcion'=>'MONTACARGAS',
			'estado'=>'1',
        ]);
        DB::table('trf_motivos')->insert
        ([
			'descripcion'=>'MAQUINARIA PESADA',
			'estado'=>'1',
        ]);
        DB::table('trf_motivos')->insert
        ([
			'descripcion'=>'LLANTAS',
			'estado'=>'1',
        ]);
        DB::table('trf_motivos')->insert
        ([
			'descripcion'=>'MAQUINARIA AGRICOLA',
			'estado'=>'1',
        ]);
    }
}

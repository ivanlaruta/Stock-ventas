<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->delete();
        
        // DB::table('users')->insert([
        //     'usuario' => 'admin',
        //     'password' => bcrypt('12345'),
        //     'email'=> 'admin@toyosa.com',
        //     'nombre'=> 'ADMIN',
        //     'paterno'=> 'PRINCIPAL',
        //     'id_ubicacion' =>'131C',
        //     'rol'=>'1',
        //     ]);

        // DB::table('users')->insert([
        //     'usuario' => 'solicitante',
        //     'password' => bcrypt('12345'),
        //     'email'=> 'solicitante@toyosa.com',
        //     'nombre'=> 'solicitante',
        //     'paterno'=> 'solicitante',
        //     'id_ubicacion' =>'131C',
        //     'rol'=>'2',
        //     ]);

        // DB::table('users')->insert([
        //     'usuario' => 'resp_solicitudes',
        //     'password' => bcrypt('12345'),
        //     'email'=> 'responsable_sol@toyosa.com',
        //     'nombre'=> 'responsable',
        //     'paterno'=> 'solicitudes',
        //     'id_ubicacion' =>'131C',
        //     'rol'=>'3',
        //     ]);

        // DB::table('users')->insert([
        //     'usuario' => 'resp_envios',
        //     'password' => bcrypt('12345'),
        //     'email'=> 'resp_envios@toyosa.com',
        //     'nombre'=> 'responsable',
        //     'paterno'=> 'de envios',
        //     'id_ubicacion' =>'131C',
        //     'rol'=>'4',
        //     ]);

        // DB::table('users')->insert([
        //     'usuario' => 'resp_almacen',
        //     'password' => bcrypt('12345'),
        //     'email'=> 'resp_almacen@toyosa.com',
        //     'nombre'=> 'responsable',
        //     'paterno'=> 'de almacen',
        //     'id_ubicacion' =>'131C',
        //     'rol'=>'5',
        //     ]);DB::table('users')->delete();
        
        // DB::table('users')->insert([
        //     'usuario' => 'admin',
        //     'password' => bcrypt('12345'),
        //     'email'=> 'admin@toyosa.com',
        //     'nombre'=> 'ADMIN',
        //     'paterno'=> 'PRINCIPAL',
        //     'id_ubicacion' =>'131C',
        //     'rol'=>'1',
        //     ]);

        // DB::table('users')->insert([
        //     'usuario' => 'solicitante',
        //     'password' => bcrypt('12345'),
        //     'email'=> 'solicitante@toyosa.com',
        //     'nombre'=> 'solicitante',
        //     'paterno'=> 'solicitante',
        //     'id_ubicacion' =>'131C',
        //     'rol'=>'2',
        //     ]);

        // DB::table('users')->insert([
        //     'usuario' => 'resp_solicitudes',
        //     'password' => bcrypt('12345'),
        //     'email'=> 'responsable_sol@toyosa.com',
        //     'nombre'=> 'responsable',
        //     'paterno'=> 'solicitudes',
        //     'id_ubicacion' =>'131C',
        //     'rol'=>'3',
        //     ]);

        // DB::table('users')->insert([
        //     'usuario' => 'resp_envios',
        //     'password' => bcrypt('12345'),
        //     'email'=> 'resp_envios@toyosa.com',
        //     'nombre'=> 'responsable',
        //     'paterno'=> 'de envios',
        //     'id_ubicacion' =>'131C',
        //     'rol'=>'4',
        //     ]);

        // DB::table('users')->insert([
        //     'usuario' => 'resp_almacen',
        //     'password' => bcrypt('12345'),
        //     'email'=> 'resp_almacen@toyosa.com',
        //     'nombre'=> 'responsable',
        //     'paterno'=> 'de almacen',
        //     'id_ubicacion' =>'131C',
        //     'rol'=>'5',
        //     ]);

        // DB::table('users')->insert([
        //     'usuario' => 'trafico',
        //     'password' => bcrypt('12345'),
        //     'email'=> 'trafico@toyosa.com',
        //     'nombre'=> 'trafico',
        //     'paterno'=> 'prueba',
        //     'id_ubicacion' =>'131C',
        //     'rol'=>'101',
        //     ]);

        // DB::table('users')->insert([
        //     'usuario' => 'equipetrol',
        //     'password' => bcrypt('12345'),
        //     'email'=> 'trafico@toyosa.com',
        //     'nombre'=> 'usuario',
        //     'paterno'=> 'equipetrol',
        //     'id_ubicacion' =>'141E',
        //     'rol'=>'100',
        //     ]);

        // DB::table('users')->insert([
        //     'usuario' => 'trespasos',
        //     'password' => bcrypt('12345'),
        //     'email'=> 'trafico@toyosa.com',
        //     'nombre'=> 'usuario',
        //     'paterno'=> 'tres pasos al frente',
        //     'id_ubicacion' =>'143',
        //     'rol'=>'100',
        //     ]);

        // DB::table('users')->insert([
        //     'usuario' => 'papapaulo',
        //     'password' => bcrypt('12345'),
        //     'email'=> 'trafico@toyosa.com',
        //     'nombre'=> 'usuario',
        //     'paterno'=> 'papa paulo',
        //     'id_ubicacion' =>'121PP',
        //     'rol'=>'100',
        //     ]);














                DB::table('users')->insert([
            'usuario' => '131C.CENTRAL@toyosa.com',
            'password' => bcrypt('toyosa'),
            'email'=> 'admin@toyosa.com',
            'nombre'=> 'ADMIN',
            'paterno'=> 'PRINCIPAL',
            'id_ubicacion' =>'131C',
            'rol'=>'1',
            ]);
        DB::table('users')->insert([
            'usuario' => '137.CALACOTO@toyosa.com',
            'password' => bcrypt('toyosa'),
            'email'=> 'admin@toyosa.com',
            'nombre'=> 'ADMIN',
            'paterno'=> 'PRINCIPAL',
            'id_ubicacion' =>'137',
            'rol'=>'1',
            ]);
        DB::table('users')->insert([
            'usuario' => '121K.KM7@toyosa.com',
            'password' => bcrypt('toyosa'),
            'email'=> 'admin@toyosa.com',
            'nombre'=> 'ADMIN',
            'paterno'=> 'PRINCIPAL',
            'id_ubicacion' =>'121K',
            'rol'=>'1',
            ]);
        DB::table('users')->insert([
            'usuario' => '141B.BANZER@toyosa.com',
            'password' => bcrypt('toyosa'),
            'email'=> 'admin@toyosa.com',
            'nombre'=> 'ADMIN',
            'paterno'=> 'PRINCIPAL',
            'id_ubicacion' =>'141B',
            'rol'=>'1',
            ]);
        DB::table('users')->insert([
            'usuario' => '152.ORURO@toyosa.com',
            'password' => bcrypt('toyosa'),
            'email'=> 'admin@toyosa.com',
            'nombre'=> 'ADMIN',
            'paterno'=> 'PRINCIPAL',
            'id_ubicacion' =>'152',
            'rol'=>'1',
            ]);
        DB::table('users')->insert([
            'usuario' => '141E.EQUIPETROL@toyosa.com',
            'password' => bcrypt('toyosa'),
            'email'=> 'admin@toyosa.com',
            'nombre'=> 'ADMIN',
            'paterno'=> 'PRINCIPAL',
            'id_ubicacion' =>'141E',
            'rol'=>'1',
            ]);
        DB::table('users')->insert([
            'usuario' => '143.3PF@toyosa.com',
            'password' => bcrypt('toyosa'),
            'email'=> 'admin@toyosa.com',
            'nombre'=> 'ADMIN',
            'paterno'=> 'PRINCIPAL',
            'id_ubicacion' =>'143',
            'rol'=>'1',
            ]);
        DB::table('users')->insert([
            'usuario' => '141D.DVIA@toyosa.com',
            'password' => bcrypt('toyosa'),
            'email'=> 'admin@toyosa.com',
            'nombre'=> 'ADMIN',
            'paterno'=> 'PRINCIPAL',
            'id_ubicacion' =>'141D',
            'rol'=>'1',
            ]);
        DB::table('users')->insert([
            'usuario' => '121PP.PP@toyosa.com',
            'password' => bcrypt('toyosa'),
            'email'=> 'admin@toyosa.com',
            'nombre'=> 'ADMIN',
            'paterno'=> 'PRINCIPAL',
            'id_ubicacion' =>'121PP',
            'rol'=>'1',
            ]);
        DB::table('users')->insert([
            'usuario' => '141BRISA.BRISAS@toyosa.com',
            'password' => bcrypt('toyosa'),
            'email'=> 'admin@toyosa.com',
            'nombre'=> 'ADMIN',
            'paterno'=> 'PRINCIPAL',
            'id_ubicacion' =>'141BRISA',
            'rol'=>'1',
            ]);
        DB::table('users')->insert([
            'usuario' => '151.POTOSI@toyosa.com',
            'password' => bcrypt('toyosa'),
            'email'=> 'admin@toyosa.com',
            'nombre'=> 'ADMIN',
            'paterno'=> 'PRINCIPAL',
            'id_ubicacion' =>'151',
            'rol'=>'1',
            ]);
        DB::table('users')->insert([
            'usuario' => '121.CBBA@toyosa.com',
            'password' => bcrypt('toyosa'),
            'email'=> 'admin@toyosa.com',
            'nombre'=> 'ADMIN',
            'paterno'=> 'PRINCIPAL',
            'id_ubicacion' =>'121',
            'rol'=>'1',
            ]);
        DB::table('users')->insert([
            'usuario' => '134.ELALTO@toyosa.com',
            'password' => bcrypt('toyosa'),
            'email'=> 'admin@toyosa.com',
            'nombre'=> 'ADMIN',
            'paterno'=> 'PRINCIPAL',
            'id_ubicacion' =>'134',
            'rol'=>'1',
            ]);
        DB::table('users')->insert([
            'usuario' => '142.MONTERO@toyosa.com',
            'password' => bcrypt('toyosa'),
            'email'=> 'admin@toyosa.com',
            'nombre'=> 'ADMIN',
            'paterno'=> 'PRINCIPAL',
            'id_ubicacion' =>'142',
            'rol'=>'1',
            ]);
    }
}

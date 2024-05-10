<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'administrador',
            'tipo' => 'administrador',
            'email' => 'admin@camaraarmenia.org.co',
            'password' => Hash::make('admincamara'),
        ]);

        DB::table('users')->insert([
            'name' => 'Gestion de ventas',
            'tipo' => 'asesor',
            'email' => 'ventas@camaraarmenia.org.co',
            'password' => Hash::make('gestioncamara'),
        ]);

        DB::table('users')->insert([
            'name' => 'Funeraria',
            'tipo' => 'funeraria',
            'email' => 'funeraria@camaraarmenia.org.co',
            'password' => Hash::make('funerariacamara'),
        ]);


        DB::table('arboles')->insert([
            'titulo' => 'Guayacán de Manizales',
            'descripcion' => '<ul>
            <li>&Aacute;rbol que crece en promedio entre 12 y 15 metro de altura</li>
            <li>Especie siembre verde, es decir nunca pierde sus hojas</li>
            <li>Es un &aacute;rbol que sirve de alimento par la fauna silvestre y nectar&iacute;fera</li>
            </ul>',
        ]);

        


        
    }
}

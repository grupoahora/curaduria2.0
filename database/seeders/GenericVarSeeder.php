<?php

namespace Database\Seeders;

use App\Models\GenericVar;

use Illuminate\Database\Seeder;

class GenericVarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GenericVar::create([
            'vart1' => 'Curaduria Urbana No 2',
            'vart2' => 'carlos jose martinez velazco',
            'vara1' => 'Arquitecto',
            'vara3' => 'curador urbano No 2 san jose de cucuta',
            'vara4' => 'avenida 2e No 17 a 27 barrio los caobos ',
            'vara5' => 'ciudad',
            'vara6' => 'asunto memorial de responsaabilidad',
            'vara7' => 'cordial saludo',
            'varc1' => 'ingeniero civil matricula profesional vigente No',  
            'varc2' => 'y responsable del diseño estructural memorias de calculo y planos de elementos estructurol y no estructurales despieces declaro bajo gravedad de juramento que el presente proyecto presentado a consideracion en la curaduria urbana No 2 de san jose de cucuta norte de santander cuya ubicaccion es',
            'varc3' => 'de propiedad es',
            'varc4' => 'con cc No',
            'varc5' => 'cumple a cabalidad con los requisitos y parametros exigidos en la nsr 10 reglamento que entro en vigencia apartir del 15 de diciembre de 2010 segun el decreto 926 del mismo año',       
            'varc6' => 'declaro',
            'varc7' => 'que asumo la responsabilidad por los perjuicios que a causa de ellos pudiera deducirse exonerado a esta curaduria urbana de toda responsabilidad',     
            'varc8' => 'acepto  y reconozco que la revision efectuada por esta curaduria no constituye una aprobacion al diseño estructural sino una verficiacion del cumplimienot de las normas colombianas de diseño y construciion sismo rsistente',       
            'varc9' => 'en constancia se firma en san jose de cucuta a los ',
            'varc10' => 'dias del mes',
            'varc11' => 'de',
            'varc12' => 'firma',
            'varc13' => 'mp',
        ]);
        
            
    }
}

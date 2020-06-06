<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jobs = [
            [
              "company" => "MCR Infoelectronic S.L.",
              "position" => "Responsable del Área de Desarrollo Web",
              "description" => "Fui reclutado como full stack developer para ocuparme en exclusiva del mantenimiento y desarrollo de su página web, la cual creamos en Pixiepixel. Poco a poco, fui tomando más responsabilidades y aplicaciones, hasta llegar a la actualidad, en la cual soy el principal responsable de las aplicaciones ecommerce de la empresa. En estos momentos, estoy desarrollando una nueva versión con la ayuda de un equipo externo, haciendo labores de gestión del proyecto y de programación en ciertas tareas.",
              "begin_at" => "05-2015",
              "end_at" => null
            ],
            [
              "company" => "Pixiepixel",
              "position" => "Programador Web",
              "description" => "Mi primera experiencia en el desarrollo web profesional. Usando PHP y Symfony 2 como framework fui creciendo en el desarrollo backend pero, a su vez, hacía muchas labores de frontend al ser uno de los más experimentados. Fue una etapa corta pero intensa, de mucho trabajo y de mucho aprendizaje.",
              "begin_at" => "03-2014",
              "end_at" => "05-2015"
            ],
            [
              "company" => "Escuela Trazos",
              "position" => "Profesor",
              "description" => "Ya finalizando el Máster en Ingeniería Web, me aventuré a impartir un curso de Responsive Design con Bootstrap.",
              "begin_at" => "05-2014",
              "end_at" => "06-2014"
            ],
            [
              "company" => "Redsys",
              "position" => "Profesor",
              "description" => "Como trabajo temporal, impartí clases de Boostrap 2 como profesor asociado con la Escuela Trazos.",
              "begin_at" => "08-2013",
              "end_at" => "08-2013"
            ],
            [
              "company" => "Atisa",
              "position" => "Programador",
              "description" => "Fue mi primera experiencia como programador. Trabajé en aplicaciones de escritorio para la empresa en un lenguaje un poco antiguo ya por entonces => Clipper. Utilicé la librería Harbour y dBase para bases de datos. Al ver que no podía crecer mucho, me aventuré a dejar la empresa para realizar un Máster en Ingeniería Web.",
              "begin_at" => "09-2011",
              "end_at" => "09-2013"
            ]
        ];
        foreach ($jobs as $job) {
            DB::table('jobs')
                ->updateOrInsert(
                    [
                        'company' => $job['company'],
                        'position' => $job['position']
                    ],
                    [
                        'description' => $job['description'],
                        'begin_at' => $job['begin_at'],
                        'end_at' => $job['end_at'],
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ]
                );
        }
    }
}

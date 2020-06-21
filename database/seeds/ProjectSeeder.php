<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            [
                "name" => "Entrenos Desabi",
                "image" => "entrenos-desabi.png",
                "description" => "Entrenos Desabi fue mi primer proyecto web profesional. Este proyecto consistía en que nuestro cliente, como administrador, pudiera de alta entrenadores y deportistas. Los entrenadores se autenticaban y creaban entrenamientos para sus deportistas y los deportistas podían ver las rutinas de entrenamiento creadas por su entrenador. Desabi fue realizado junto con mis compañeros de https://jarroba.com/.",
                "relevance" => 1,
                "started_at" => "2013",
                "finished_at" => "2013",
                "skills" => ["Kanban", "MySQL", "PHP", "HTML 5", "CSS 3", "Bootstrap", "Javascript", "jQuery"],
                "url" => "http://entrenos.desabi.es",
                "resources" => [
                    ["url" => "https://www.youtube.com/watch?v=YZ5fpJZsjHk", "type" => "youtube"]
                ]
            ],
            [
                "name" => "Score",
                "image" => "score.png",
                "description" => "Mi primera aplicación Android. Score es un marcador genérico y personalizable.",
                "relevance" => 2,
                "started_at" => "2013",
                "finished_at" => "2013",
                "skills" => ["Android"],
                "url" => "https://play.google.com/store/apps/details?id=com.inactec.score",
                "resources" => [
                    ["url" => "https://github.com/7Alberto7/Score", "type" => "github"]
                ]
            ],
            [
                "name" => "Verdad o Mentira",
                "image" => "verdad-mentira.png",
                "description" => "Verdad o mentira es una aplicación muy simple que desarrollé en un par de días. La aplicación consiste en que el usuario dice una frase y la app con un algoritmo indica si es verdad o mentira mediante un audio gracioso. Básicamente, la realicé para trabajar sobre interfaces de usuario en Android y monetización de apps. Actualmente se encuentra desactualizada pero llego a alcanzar más de 20.000 descargas en 2 años.",
                "relevance" => 3,
                "started_at" => "2013",
                "finished_at" => "2013",
                "skills" => ["Android"],
                "url" => "https://play.google.com/store/apps/details?id=com.inactec.score",
                "resources" => [
                    ["url" => "https://github.com/7Alberto7/Score", "type" => "github"]
                ]
            ],
            [
                "name" => "Electrónica Losdel",
                "image" => "electronica-losdel.png",
                "description" => "Proyecto SPA para la empresa Electrónica Losdel. Aproveché este proyecto para trabajar por primera vez con SEO, Analytics y con mi primer framework PHP, Code Igniter. Además, al realizarlo yo solo, fue mi primera experiencia en toma de requisitos con cliente final.",
                "relevance" => 4,
                "started_at" => "2014",
                "finished_at" => "2014",
                "skills" => ["PHP", "HTML 5", "CSS 3", "Bootstrap", "Javascript", "jQuery", "SEO"],
                "url" => "http://electronicalosdel.com",
                "resources" => []
            ],
            [
                "name" => "WePlay Web",
                "image" => "weplay.png",
                "description" => "WePlay web fue la primera parte del proyecto fin de máster que presenté, junto a mis compañeros Lien y Adrián, ante la Universidad Politécnica de Madrid. Este proyecto supuso un primer contacto completo con Symfony2 y MongoDB. Además, hicimos una adaptación de la metodología SCRUM para poder compenetrarnos lo mejor posible y realizar el proyecto a tiempo, sin dejar de lado la flexibilidad ante los cambios que nos iba indicando nuestro cliente, el profesor.",
                "relevance" => 5,
                "started_at" => "2014",
                "finished_at" => "2014",
                "skills" => ["Scrum", "Git", "MongoDB", "PHP", "Symfony", "HTML 5", "CSS 3", "Bootstrap", "Javascript", "jQuery"],
                "url" => null,
                "resources" => [
                    ["url" => "https://github.com/7Alberto7/pfmweb", "type" => "github"],
                    ["url" => "https://www.youtube.com/watch?v=IAdDdWE1VVA", "type" => "youtube"]
                ]
            ],
            [
                "name" => "WePlay Mobile",
                "image" => "weplay-mobile.png",
                "description" => "Aplicación Android presentada como Proyecto Fin de Máster junto con mis compañeros Adrián y Lien. Con esta parte, completamos el proyecto. Gracias a la implementación de servicios REST en la parte web, conseguimos reproducir los datos en la aplicación móvil.",
                "relevance" => 6,
                "started_at" => "2014",
                "finished_at" => "2014",
                "skills" => ["Scrum", "Android"],
                "url" => null,
                "resources" => [
                    ["url" => "https://github.com/7Alberto7/pfmandroid", "type" => "github"],
                    ["url" => "https://www.youtube.com/watch?v=Knv3nlJvhcY", "type" => "youtube"]
                ]
            ],
            [
                "name" => "Certify Legal",
                "image" => "certify-legal.png",
                "description" => "Gestor documental para certificación de edificios. Mi primera toma de contacto con Symfony2, realizada con la empresa PixiePixel.",
                "relevance" => 7,
                "started_at" => "2014",
                "finished_at" => "2014",
                "skills" => ["Git", "MySQL", "PHP", "Symfony", "HTML 5", "CSS 3", "Bootstrap", "Javascript", "jQuery"],
                "url" => null,
                "resources" => []
            ],
            [
                "name" => "MCR",
                "image" => "mcr.png",
                "description" => "Tienda online de la empresa MCR. La implementé junto con otros dos compañeros en PixiePixel y, más adelante, me contrató MCR para realizar labores de mantenimiento y crear nuevas funcionalidades.",
                "relevance" => 8,
                "started_at" => "2014",
                "finished_at" => "2020",
                "skills" => ["Kanban", "Git", "MySQL", "Redis", "PHP", "Symfony", "Linux", "HTML 5", "CSS 3", "Bootstrap", "Javascript", "jQuery", "SEO", "Analytics"],
                "url" => "https://www.mcr.com.es",
                "resources" => []
            ],
            [
                "name" => "OpenMCR",
                "image" => "openmcr.png",
                "description" => "Aplicación para que los clientes puedan integrar los datos del portfolio de productos de MCR.",
                "relevance" => 9,
                "started_at" => "2015",
                "finished_at" => "2020",
                "skills" => ["Kanban", "Git", "MySQL", "PHP", "Linux", "HTML 5", "CSS 3"],
                "url" => "https://www.openmcr.com.es",
                "resources" => []
            ],
            [
                "name" => "Personal Portfolio",
                "image" => "personal-portfolio.png",
                "description" => "Versión anterior de esta página, con los contenidos de mis proyectos, mis conocimientos, contacto, ....",
                "relevance" => 10,
                "started_at" => "2016",
                "finished_at" => "2020",
                "skills" => ["Git", "HTML 5", "CSS 3", "Angular"],
                "url" => "http://old.albertocasero.com",
                "resources" => [
                    ["url" => "https://github.com/7Alberto7/PersonalPortfolio", "type" => "github"]
                ]
            ],
            [
                "name" => "MCR Pro",
                "image" => "mcr-pro.png",
                "description" => "Tienda online para la división Pro de MCR. Forma parte de la aplicación monolítica en la que se encuentra MCR, compartiendo a su vez dominio y página de presentación.",
                "relevance" => 11,
                "started_at" => "2019",
                "finished_at" => "2020",
                "skills" => ["Kanban", "Git", "MySQL", "Redis", "PHP", "Symfony", "Linux", "HTML 5", "CSS 3", "Bootstrap", "Javascript", "jQuery", "SEO", "Analytics"],
                "url" => "https://www.mcr.com.es",
                "resources" => []
            ],
            [
                "name" => "ab materials",
                "image" => "abmaterials.png",
                "description" => "Tienda online para la división de papelería de MCR. Forma parte de la aplicación monolítica en la que se encuentra MCR pero, en este caso, el dominio y la página de presentación son diferentes.",
                "relevance" => 12,
                "started_at" => "2019",
                "finished_at" => "2020",
                "skills" => ["Kanban", "Git", "MySQL", "Redis", "PHP", "Symfony", "Linux", "HTML 5", "CSS 3", "Bootstrap", "Javascript", "jQuery", "SEO", "Analytics"],
                "url" => "https://www.abmaterials.es",
                "resources" => []
            ],
            [
                "name" => "albertocasero.com",
                "image" => "albertocasero.png",
                "description" => "Página personal que sirve para presentarme, junto con mis proyectos y mis habilidades.",
                "relevance" => 13,
                "started_at" => "2020",
                "finished_at" => null,
                "skills" => ["Kanban", "Git", "MongoDB", "PHP", "Laravel", "Linux", "HTML 5", "SASS", "Bootstrap", "Nuxtjs", "SEO", "Analytics"],
                "url" => "https://www.albertocasero.com",
                "resources" => [
                    ["url" => "https://github.com/7Alberto7/albertocasero.com", "type" => "github"]
                ]
            ],
            [
                "name" => "MCR 2.0",
                "image" => "mcr-2.png",
                "description" => "Proyecto multiapp de MCR consistente en una api y varias aplicaciones clientes hechas con Nuxt, que son las diferentes tiendas MCR, app OpenMCR, intranet y una administración para todo ello. En esta aplicación, no sólo estoy programando, sino que estoy haciendo labores de gestión de proyecto, teniendo a mi cargo un equipo de una empresa externa.",
                "relevance" => 14,
                "started_at" => "2020",
                "finished_at" => null,
                "skills" => ["Scrum", "Git", "MySQL", "PHP", "Laravel", "Linux", "HTML 5", "SASS", "Bootstrap", "Vuejs", "Nuxtjs", "SEO", "Analytics"],
                "url" => null,
                "resources" => []
            ]
        ];
        foreach ($projects as $project) {
            DB::table('projects')
                ->updateOrInsert(
                    ['name' => $project['name']],
                    [
                        'image' => $project['image'],
                        'description' => $project['description'],
                        'relevance' => $project['relevance'],
                        'started_at' => $project['started_at'],
                        'finished_at' => $project['finished_at'],
                        'skills' => $project['skills'],
                        'url' => $project['url'],
                        'resources' => $project['resources'],
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ]
                );
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = [
            [
              "name" => "Scrum",
              "image" => "scrum.png",
              "description" => "Scrum es el framework ágil en el que he basado habitualmente mi manera de gestionar proyectos. Actualmente, como responsable del nuevo proyecto de MCR, llevo la coordinación de 7 miembros, ayudándome de Taiga.",
              "level_of_knowledge" => 5,
              "currently" => true
            ],
            [
              "name" => "Kanban",
              "image" => "kanban.png",
              "description" => "En proyectos más antiguos, sobre todo trabajando sólo, me he guiado más por el uso de tableros Kanban. Usando herramientas como Trello, he podido gestionar de esta forma las diferentes tareas.",
              "level_of_knowledge" => 5,
              "currently" => true
            ],
            [
              "name" => "Git",
              "image" => "git.png",
              "description" => "Desde hace ya muchos años llevo trabajando con git, usando tanto Github como Bitbucket para la gestión de repositorios.",
              "level_of_knowledge" => 5,
              "currently" => true
            ],
            [
              "name" => "MySQL",
              "image" => "mysql.png",
              "description" => "MySQL es el motor de base de datos que he usado en la gran mayoría de proyectos.",
              "level_of_knowledge" => 5,
              "currently" => true
            ],
            [
              "name" => "Redis",
              "image" => "redis.png",
              "description" => "Uso Redis como sistema de caché para optimizar la carga de precios y menús en las páginas de MCR.",
              "level_of_knowledge" => 4,
              "currently" => true
            ],
            [
              "name" => "MongoDB",
              "image" => "mongodb.png",
              "description" => "He hecho algún curso de MongoDB y, además, hace unos años lo use en el proyecto del máster que hice.",
              "level_of_knowledge" => 3,
              "currently" => false
            ],
            [
              "name" => "PHP",
              "image" => "php.png",
              "description" => "La gran mayoría de los desarrollos que he hecho en aplicaciones web han sido con el lenguaje de programación PHP.",
              "level_of_knowledge" => 5,
              "currently" => true
            ],
            [
              "name" => "Laravel",
              "image" => "laravel.png",
              "description" => "Tras abandonar Symfony 2, tomé la decisión de utilizar Laravel 6 como framework PHP. Aproximadamente llevo un año de experiencia con él.",
              "level_of_knowledge" => 4,
              "currently" => true
            ],
            [
              "name" => "Symfony",
              "image" => "symfony.png",
              "description" => "Después de una pequeña experiencia con Code Igniter, me lancé con Symnfony en su versión 2. He estado trabajando con esta versión durante varios años.",
              "level_of_knowledge" => 4,
              "currently" => false
            ],
            [
              "name" => "Android",
              "image" => "android.png",
              "description" => "Hace unos años hice unas pocas apps de móvil, algunas las publiqué y otras no. Hace tiempo que no programo para Android pero es posible que vuelva a ello en un futuro no muy lejano.",
              "level_of_knowledge" => 3,
              "currently" => false
            ],
            [
              "name" => "Java",
              "image" => "java.png",
              "description" => "En la carrera y en el máster fue el lenguaje de programación que más use. Profesionalmente no me dediqué a ello pero tengo cierta experiencia extraprofesional.",
              "level_of_knowledge" => 3,
              "currently" => false
            ],
            [
              "name" => "Spring",
              "image" => "spring.png",
              "description" => "Hice alguna pequeña aplicación web como práctica del máster. No lo volví a utilizar desde entonces.",
              "level_of_knowledge" => 1,
              "currently" => false
            ],
            [
              "name" => ".NET",
              "image" => "net.png",
              "description" => "Hice alguna pequeña aplicación web como práctica del máster. No lo volví a utilizar desde entonces.",
              "level_of_knowledge" => 1,
              "currently" => false
            ],
            [
              "name" => "Linux",
              "image" => "linux.png",
              "description" => "Todos los servidores en los que he corrido aplicaciones web han sido Linux, incluso, he trabajado en entorno local Ubuntu cuando he podido. Mis conocimientos no son profundos pero puedo manejarme en este sistema.",
              "level_of_knowledge" => 3,
              "currently" => true
            ],
            [
              "name" => "Windows",
              "image" => "windows.png",
              "description" => "Por política de empresa, tengo mi entorno local de trabajo en Windows y, por lo tanto, me manejo a un buen nivel en este sistema.",
              "level_of_knowledge" => 3,
              "currently" => true
            ],
            [
              "name" => "HTML 5",
              "image" => "html5.png",
              "description" => "Como todos, los primeros pasos son con HTML. En mi caso, desde su aterrizaje, he estado trabajando con HTML 5 y conozco su sistema de etiquetas perfectamente, aplicándolo al SEO.",
              "level_of_knowledge" => 5,
              "currently" => true
            ],
            [
              "name" => "CSS 3",
              "image" => "css3.png",
              "description" => "Desde hace un tiempo uso precompiladores pero he utilizado mucho CSS 3 en mi labor como Full Stack Developer.",
              "level_of_knowledge" => 5,
              "currently" => false
            ],
            [
              "name" => "SASS",
              "image" => "sass.png",
              "description" => "He hecho alguna prueba con otros como Stylus o Less pero, al final, me quedé con SASS. Es con el que trabajo actualmente para aplicar estilo a mis aplicaciones web.",
              "level_of_knowledge" => 5,
              "currently" => true
            ],
            [
              "name" => "Bootstrap",
              "image" => "bootstrap.png",
              "description" => "Desde su versión 2, he estado trabajando con Bootstrap y hasta he impartido clases de ello. He usado otros como Foundation o Materialize, pero Bootstrap siempre ha sido mi favorito.",
              "level_of_knowledge" => 5,
              "currently" => true
            ],
            [
              "name" => "Javascript",
              "image" => "javascript.png",
              "description" => "Siempre para el front he trabajado con javascript. Normalmente me he apoyado de frameworks pero también lo he hecho sin ellos.",
              "level_of_knowledge" => 5,
              "currently" => true
            ],
            [
              "name" => "jQuery",
              "image" => "jquery.png",
              "description" => "Antes de la llegada de Angular o React, la librería de jQuery ha sido la que he usado.",
              "level_of_knowledge" => 5,
              "currently" => false
            ],
            [
              "name" => "Vuejs",
              "image" => "vuejs.png",
              "description" => "Desde hace algo más de un año llevo utilizando Vuejs. Tras algo de experiencia con Angular decidí embarcarme en Vuejs debido a las buenas opiniones de la comunidad y la facilidad de aprendizaje.",
              "level_of_knowledge" => 3,
              "currently" => true
            ],
            [
              "name" => "Nuxtjs",
              "image" => "nuxtjs.png",
              "description" => "Llevo poquito usando este framework pero la necesidad de SSR y SEO, entre otros, me empujó a utilizarlo en el proyecto actual de MCR.",
              "level_of_knowledge" => 2,
              "currently" => true
            ],
            [
              "name" => "Angular",
              "image" => "angular.png",
              "description" => "El primer framework con el que me decidí aventurar y, de hecho, la antigua página de albertocasero.com estaba hecha con la primera versión del framework.",
              "level_of_knowledge" => 2,
              "currently" => false
            ],
            [
              "name" => "SEO",
              "image" => "seo.png",
              "description" => "La demanda de SEO de algunas de las aplicaciones que he programado han hecho que tenga que aprender sobre distintos patrones o normas que se deben seguir en el marcado de la página, las palabras o textos a utilizar, las distintas estrategias para mejorar tu posición.",
              "level_of_knowledge" => 3,
              "currently" => false
            ],
            [
              "name" => "Analytics",
              "image" => "analytics.png",
              "description" => "En aplicaciones ecommerce como las de MCR es clave la integración con analytics y su API. Hace tiempo que la integré en la aplicación actual de MCR pero en la nueva tendré que volver a reciclarme.",
              "level_of_knowledge" => 4,
              "currently" => false
            ],
            [
              "name" => "Unity",
              "image" => "unity.png",
              "description" => "Tras probar con Flash, hice un curso y alguna práctica con Unity.",
              "level_of_knowledge" => 1,
              "currently" => false
            ]
        ];
        foreach ($skills as $skill) {
            DB::table('skills')
                ->updateOrInsert(
                    ['name' => $skill['name']],
                    [
                        'image' => $skill['image'],
                        'description' => $skill['description'],
                        'level_of_knowledge' => $skill['level_of_knowledge'],
                        'currently' => $skill['currently'],
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ]
                );
        }
    }
}

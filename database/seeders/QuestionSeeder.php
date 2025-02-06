<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionSeeder extends Seeder {
    public function run() {
        $questions = [
            ['question' => '¿Qué son los datos no estructurados?', 'option_a' => 'Datos con un esquema predefinido', 'option_b' => 'Datos en tablas relacionales', 'option_c' => 'Datos que no tienen un esquema predefinido y pueden estar en distintos formatos', 'option_d' => 'Datos almacenados en SQL', 'correct_option' => 'C'],
            ['question' => '¿Cuál de las siguientes bases de datos es orientada a documentos?', 'option_a' => 'PostgreSQL', 'option_b' => 'MongoDB', 'option_c' => 'Oracle', 'option_d' => 'MySQL', 'correct_option' => 'B'],
            ['question' => '¿Cuál de las siguientes bases de datos es un ejemplo de clave-valor?', 'option_a' => 'MongoDB', 'option_b' => 'Redis', 'option_c' => 'Neo4j', 'option_d' => 'PostgreSQL', 'correct_option' => 'B'],
            ['question' => '¿Cuál es una característica de MongoDB?', 'option_a' => 'Almacena datos en tablas', 'option_b' => 'Almacena datos en documentos JSON/BSON', 'option_c' => 'Usa solo SQL', 'option_d' => 'No soporta escalabilidad', 'correct_option' => 'B'],
            ['question' => '¿Cuál de las siguientes bases de datos es un gestor de documentos?', 'option_a' => 'MySQL', 'option_b' => 'Neo4j', 'option_c' => 'MongoDB', 'option_d' => 'Oracle', 'correct_option' => 'C'],
            ['question' => '¿Cuál de las siguientes bases de datos es un ejemplo de base de datos de grafos?', 'option_a' => 'Neo4j', 'option_b' => 'MongoDB', 'option_c' => 'Redis', 'option_d' => 'Cassandra', 'correct_option' => 'A'],
            ['question' => '¿Qué característica define a las bases de datos clave-valor?', 'option_a' => 'Almacenan datos en tablas', 'option_b' => 'Usan JSON para almacenar documentos', 'option_c' => 'Almacenan pares clave-valor donde la clave es única', 'option_d' => 'Utilizan estructuras de grafos', 'correct_option' => 'C'],
            ['question' => '¿Para qué tipo de aplicaciones son ideales las bases de datos de grafos?', 'option_a' => 'Almacenamiento de archivos multimedia', 'option_b' => 'Análisis de redes sociales y conexiones complejas', 'option_c' => 'Gestión de bases de datos relacionales', 'option_d' => 'Manejo de sesiones', 'correct_option' => 'B'],
            ['question' => '¿En qué tipo de aplicaciones son más utilizadas las bases de datos orientadas a objetos?', 'option_a' => 'Aplicaciones que utilizan modelos de programación orientada a objetos', 'option_b' => 'Almacenamiento de logs', 'option_c' => 'Manejo de datos estructurados', 'option_d' => 'Bases de datos tradicionales', 'correct_option' => 'A'],
            ['question' => '¿Cuál de las siguientes bases de datos es orientada a objetos?', 'option_a' => 'PostgreSQL', 'option_b' => 'MongoDB', 'option_c' => 'ObjectDB', 'option_d' => 'MySQL', 'correct_option' => 'C'],
            ['question' => '¿Qué estructura de datos utilizan las bases de datos orientadas a documentos?', 'option_a' => 'Registros en tablas', 'option_b' => 'Documentos en formato JSON, BSON o XML', 'option_c' => 'Archivos CSV', 'option_d' => 'Claves y valores sin estructura', 'correct_option' => 'B'],
            ['question' => '¿Qué significa que una base de datos NoSQL sea eventualmente consistente?', 'option_a' => 'Siempre está sincronizada', 'option_b' => 'Que los datos pueden no estar sincronizados temporalmente, pero eventualmente lo estarán', 'option_c' => 'No permite concurrencia', 'option_d' => 'Requiere SQL para consultas', 'correct_option' => 'B'],
            ['question' => '¿Cuál es una ventaja clave de las bases de datos orientadas a documentos?', 'option_a' => 'Alto consumo de almacenamiento', 'option_b' => 'Requiere esquema fijo', 'option_c' => 'Permiten manejar datos semiestructurados de forma eficiente', 'option_d' => 'Solo funcionan en entornos locales', 'correct_option' => 'C'],
            ['question' => '¿Cuál de las siguientes opciones describe mejor las diferencias entre datos estructurados, semiestructurados y no estructurados?', 'option_a' => 'Todos tienen la misma estructura', 'option_b' => 'Los datos estructurados tienen un esquema rígido, los semiestructurados tienen etiquetas o metadatos, y los no estructurados no tienen formato definido', 'option_c' => 'Los datos estructurados y semiestructurados son iguales', 'option_d' => 'Los datos no estructurados solo existen en bases de datos NoSQL', 'correct_option' => 'B'],
            ['question' => '¿Qué gestor de base de datos es conocido por su rendimiento en almacenamiento de caché?', 'option_a' => 'MongoDB', 'option_b' => 'Redis', 'option_c' => 'Neo4j', 'option_d' => 'Cassandra', 'correct_option' => 'B'],
            ['question' => '¿Qué es una base de datos NoSQL?', 'option_a' => 'Un modelo de base de datos que no sigue una estructura relacional y es altamente escalable', 'option_b' => 'Un tipo de base de datos basada en SQL', 'option_c' => 'Solo permite consultas SQL', 'option_d' => 'Requiere esquema fijo', 'correct_option' => 'A'],
            ['question' => '¿Cuál de las siguientes características NO es común en las bases de datos NoSQL?', 'option_a' => 'Uso de SQL para todas las consultas', 'option_b' => 'Escalabilidad horizontal', 'option_c' => 'Alta flexibilidad', 'option_d' => 'Uso de documentos JSON/BSON', 'correct_option' => 'A'],
            ['question' => '¿Qué modelo de datos utilizan las bases de datos orientadas a grafos?', 'option_a' => 'Tablas relacionales', 'option_b' => 'Registros de clave-valor', 'option_c' => 'Nodos y relaciones', 'option_d' => 'Archivos planos', 'correct_option' => 'C'],
            ['question' => '¿Cuál de los siguientes modelos NO es un tipo de base de datos NoSQL?', 'option_a' => 'Relacional', 'option_b' => 'Clave-valor', 'option_c' => 'Documentos', 'option_d' => 'Grafos', 'correct_option' => 'A'],
            ['question' => '¿Para qué tipo de aplicaciones es ideal una base de datos clave-valor?', 'option_a' => 'Análisis de datos en redes sociales', 'option_b' => 'Aplicaciones que requieren almacenamiento de sesiones y caché', 'option_c' => 'Bases de datos científicas', 'option_d' => 'Modelado de relaciones entre datos', 'correct_option' => 'B'],
            ['question' => '¿Qué base de datos NoSQL usa Facebook para manejar su red social?', 'option_a' => 'MongoDB', 'option_b' => 'Redis', 'option_c' => 'Cassandra', 'option_d' => 'Neo4j', 'correct_option' => 'C'],
            ['question' => '¿Cuál de los siguientes ejemplos representa datos no estructurados?', 'option_a' => 'Datos en una tabla de SQL', 'option_b' => 'Un conjunto de imágenes almacenadas sin etiquetas o metadatos', 'option_c' => 'Un archivo CSV', 'option_d' => 'Datos en una hoja de cálculo', 'correct_option' => 'B']
        ];
        
        
        foreach ($questions as $q) {
            Question::create($q);
        }
    }
}
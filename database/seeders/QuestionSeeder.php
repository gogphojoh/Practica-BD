<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionSeeder extends Seeder {
    public function run() {
        $questions = [
            ['question' => '1. ¿Cuál de los siguientes es un ejemplo de un panel de discusión?', 
            'option_a' => 'Un grupo de amigos hablando sobre películas en una cafetería', 
            'option_b' => 'Un grupo de médicos discutiendo sobre los avances en inteligencia artificial en la medicina', 
            'option_c' => '[Ilegible]', 
            'option_d' => 'Un grupo de empleados debatiendo sobre nuevas políticas laborales', 
            'correct_option' => 'B'],
        
            ['question' => '2. Técnica de comunicación y toma de decisiones en la que un grupo de personas se reúne para debatir, discutir y/o resolver temas de interés común, usada desde la democracia ateniense.', 
            'option_a' => 'Debate', 
            'option_b' => 'Ponencia', 
            'option_c' => 'Discurso', 
            'option_d' => 'Asamblea', 
            'correct_option' => 'D'],
        
            ['question' => '3. Es aquella que se establece entre los miembros de un grupo pequeño de individuos o de manera interpersonal, es cotidiana, simple y natural.', 
            'option_a' => 'Conferencia', 
            'option_b' => 'Comunicación formal', 
            'option_c' => 'Diálogo', 
            'option_d' => 'Comunicación informal', 
            'correct_option' => 'D'],
        
            ['question' => '4. Técnica de comunicación que consiste en la confrontación organizada de ideas u opiniones diferentes sobre un tema determinado, en la que dos o más personas exponen y defienden sus puntos de vista.', 
            'option_a' => 'Debate', 
            'option_b' => 'Conferencia', 
            'option_c' => 'Tertulia', 
            'option_d' => 'Asamblea', 
            'correct_option' => 'A'],
        
            ['question' => '5. ¿Cuál de los siguientes NO es un participante de las asambleas?', 
            'option_a' => 'Secretario', 
            'option_b' => 'Presidente', 
            'option_c' => 'Moderador', 
            'option_d' => 'Vocales o Consejeros', 
            'correct_option' => 'C'],
        
            ['question' => '6. Reunión informal y periódica de personas para conversar y debatir sobre un tema específico o intereses compartidos.', 
            'option_a' => 'Panel', 
            'option_b' => 'Tertulia', 
            'option_c' => 'Discurso', 
            'option_d' => 'Mesa redonda', 
            'correct_option' => 'B'],
        
            ['question' => '7. Son ejemplos de técnicas de comunicación formal.', 
            'option_a' => 'Tertulia, Debate, Panel, Discurso.', 
            'option_b' => 'Panel, Discurso, Conferencia, Ponencia.', 
            'option_c' => 'Mesa redonda, asamblea, coloquio, debate', 
            'option_d' => 'Conferencia, Discurso, Ponencia, Debate', 
            'correct_option' => 'B'],
        
            ['question' => '8. Su propósito es transmitir conocimientos, ideas o experiencias a una audiencia interesada en el tema. También puede fomentar la discusión y el intercambio de opiniones mediante preguntas al público.', 
            'option_a' => 'Asamblea', 
            'option_b' => 'Seminario', 
            'option_c' => 'Mesa redonda', 
            'option_d' => 'Conferencia', 
            'correct_option' => 'D'],
        
            ['question' => '9. Tiene como propósito transmitir un mensaje claro, organizado y efectivo al público, también sirve para motivar, influenciar o inspirar a los oyentes.', 
            'option_a' => 'Monólogo', 
            'option_b' => 'Ponencia', 
            'option_c' => 'Discurso', 
            'option_d' => 'Asamblea', 
            'correct_option' => 'C'],
        
            ['question' => '10. ¿Cuál es un posible desafío de la mesa redonda?', 
            'option_a' => 'Puede ser difícil llegar a un consenso entre los participantes.', 
            'option_b' => 'Solo puede utilizarse en contextos académicos', 
            'option_c' => 'No se permite la participación del público', 
            'option_d' => 'No se puede utilizar en debates informales', 
            'correct_option' => 'A'],
        
            ['question' => '11. Proceso en el que las personas intercambian y valoran ideas e información con el objetivo de aumentar el conocimiento de un tema determinado o de resolver un problema que afecta a los miembros de una comunidad.', 
            'option_a' => 'Conferencia', 
            'option_b' => 'Comunicación formal', 
            'option_c' => 'Diálogo', 
            'option_d' => 'Comunicación informal', 
            'correct_option' => 'C'],
        
            ['question' => '12. Es un diálogo formal que se realiza entre varias personas sobre un tema específico, su objetivo es fomentar el análisis crítico y la reflexión, también permite ampliar el conocimiento y considerar distintas perspectivas.', 
            'option_a' => 'Coloquio', 
            'option_b' => 'Debate', 
            'option_c' => 'Tertulia', 
            'option_d' => 'Conferencia', 
            'correct_option' => 'A'],
        
            ['question' => '13. El moderador es el encargado de guiar la discusión y mantener el orden en una mesa redonda.', 
            'option_a' => 'Verdadero', 
            'option_b' => 'Falso', 
            'option_c' => '', 
            'option_d' => '', 
            'correct_option' => 'A'],
        
            ['question' => '14. En un panel de discusión, los panelistas siempre deben estar de acuerdo entre sí para que la conversación sea ordenada y productiva.', 
            'option_a' => 'Verdadero', 
            'option_b' => 'Falso', 
            'option_c' => '', 
            'option_d' => '', 
            'correct_option' => 'B'],
        
            ['question' => '15. El coloquio, debate y la tertulia son técnicas de la comunicación informal.', 
            'option_a' => 'Verdadero', 
            'option_b' => 'Falso', 
            'option_c' => '', 
            'option_d' => '', 
            'correct_option' => 'A'],

            /*['question' => '16. Acción de comunicar algo a alguien reservadamente o en secreto". Proviene del latín fidare, fiar.', 'option_a' => 'Confidencia', 'option_b' => 'Coloquio', 'option_c' => 'Diálogo', 'option_d' => 'Conversación', 'correct_option' => 'A'],
    
            ['question' => '17. En ésta comunicación las personas que hablan se llaman interlocutores, debe estar caracterizado por una apertura sin reservas.', 'option_a' => 'Coloquio', 'option_b' => 'Diálogo', 'option_c' => 'Conversación', 'option_d' => 'Confidencia', 'correct_option' => 'B'],
            
            ['question' => '18. Es independiente de todo contrato, se extiende a todo lo que, ya sea descubierto por casualidad, por investigación personal o por confidencia, y no puede divulgarse.', 'option_a' => 'Secreto prometido', 'option_b' => 'Secreto confiado', 'option_c' => 'Secreto natural', 'option_d' => 'Coloquio', 'correct_option' => 'C'],
            
            ['question' => '19. Es una discusión informal, realizada por un grupo de especialistas o "expertos", para analizar los diferentes aspectos de un tema, aclarar controversias o tratar de resolver problemas de su interés.', 'option_a' => 'Panel', 'option_b' => 'Mesa redonda', 'option_c' => 'Asamblea', 'option_d' => 'Conferencia', 'correct_option' => 'A'],
            
            ['question' => '20. Es la reunión de varias personas, tres o seis por lo general, para exponer sobre un tema predeterminado y preparado, bajo la dirección de un moderador. Su objetivo es suministrar nuevos conocimientos sobre un tema interesante.', 'option_a' => 'Panel', 'option_b' => 'Mesa redonda', 'option_c' => 'Asamblea', 'option_d' => 'Conferencia', 'correct_option' => 'B'],
            
            ['question' => '21. Son reuniones planificadas dirigidas por un moderador en las que participa un número amplio de personas. Su objeto es discutir entre todos una cuestión con el fin de tomar decisiones o llegar a algún tipo de acuerdo mediante votación de los asistentes.', 'option_a' => 'Panel', 'option_b' => 'Mesa redonda', 'option_c' => 'Asamblea', 'option_d' => 'Conferencia', 'correct_option' => 'C'],
            
            ['question' => '22. Es cuando se exponen los resultados de los análisis ante una o más personas, es un "discurso" porque se limitan a escuchar y usar su inteligencia para discernir lo que se dice.', 'option_a' => 'Panel', 'option_b' => 'Mesa redonda', 'option_c' => 'Asamblea', 'option_d' => 'Conferencia', 'correct_option' => 'D'],
            
            ['question' => '23. Es una de las características del discurso y persigue la clara compresión de un asunto, tema o idea que resuelve una incertidumbre.', 'option_a' => 'Informar', 'option_b' => 'Entretener', 'option_c' => 'Convencer', 'option_d' => 'Argumentar', 'correct_option' => 'A'],
            
            ['question' => '24. En la conclusión del guion, es aquella donde debemos preocuparnos en cada una de las palabras que expresamos, en los puntos principales que acciona el emisor y estos a su vez, produzcan una impresión entre los receptores.', 'option_a' => 'Originalidad', 'option_b' => 'Exactitud', 'option_c' => 'Claridad', 'option_d' => 'Concisión', 'correct_option' => 'B'],
            
            ['question' => '25. Es una declaración larga y compleja del tema a redactar, en donde la idea reside en las acciones principales que el orador realiza y manifiesta el propósito de que el receptor o los receptores puedan crear preguntas en su mente.', 'option_a' => 'Originalidad', 'option_b' => 'Exactitud', 'option_c' => 'Claridad', 'option_d' => 'Concisión', 'correct_option' => 'D']*/
        ];

        foreach ($questions as $question) {
            Question::create([
                'question' => $question['question'],
                'option_a' => $question['option_a'],
                'option_b' => $question['option_b'],
                'option_c' => $question['option_c'],
                'option_d' => $question['option_d'],
                'correct_option' => $question['correct_option'],
            ]);
        }
    }
}
        /*$questions = [
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
        ];*/
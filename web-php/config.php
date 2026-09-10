<?php

declare(strict_types=1);

// GLOBALES DEL SITIO
const SITE_NAME = 'Informe de Personas';
const SITE_TAGLINE = 'El informe más completo del mercado.';
const SUPPORT_EMAIL = 'ayuda@informedepersonas.com.ar';
const ADMIN_EMAIL = 'administracion@buscadata.com.ar';
const WHATSAPP_URL = 'https://wa.me/5493512190843';
const PRECIO_INFORME = 500;

// Base URL calculada automáticamente (portable a cualquier subdirectorio del hosting).
define('BASE_URL', rtrim(str_replace('\\', '/', dirname((string) ($_SERVER['SCRIPT_NAME'] ?? '/'))), '/'));

// SECCIONES DE LA PÁGINA "/informe"
const INFORME_SECTIONS = [
    ['title' => 'Información Personal', 'description' => 'Consultá nombre completo, fecha de nacimiento, nacionalidad, edad y otros datos identificatorios relevantes de la persona.', 'icon' => 'bi-person-vcard'],
    ['title' => 'Evaluación Crediticia', 'description' => 'Conocé un indicador de comportamiento financiero basado en antecedentes de pago, nivel de cumplimiento y perfil de riesgo.', 'icon' => 'bi-graph-up-arrow'],
    ['title' => 'Ubicación y Medios de Contacto', 'description' => 'Accedé a domicilios registrados, teléfonos asociados y direcciones de correo electrónico vinculadas al titular.', 'icon' => 'bi-geo-alt'],
    ['title' => 'Relaciones y Grupo Familiar', 'description' => 'Identificá posibles vínculos personales y familiares, incluyendo familiares directos, pareja y personas relacionadas.', 'icon' => 'bi-diagram-3'],
    ['title' => 'Actividad Laboral e Ingresos', 'description' => 'Obtené información sobre antecedentes laborales, situación ocupacional actual y referencias estimadas de ingresos.', 'icon' => 'bi-briefcase'],
    ['title' => 'Vehículos Asociados', 'description' => 'Visualizá automotores relacionados con la persona, incluyendo dominio, marca, modelo y demás información registral disponible.', 'icon' => 'bi-truck'],
    ['title' => 'Estado Crediticio y Financiero', 'description' => 'Consultá antecedentes informados en el sistema financiero, niveles de cumplimiento y posibles obligaciones o deudas registradas.', 'icon' => 'bi-bank'],
    ['title' => 'Información Impositiva y Comercial', 'description' => 'Conocé su condición fiscal, actividad declarada, inscripciones tributarias, participación en sociedades y antecedentes comerciales.', 'icon' => 'bi-clipboard-data'],
];

// RESULTADOS ESTÁTICOS DE LA PÁGINA "/resultados"
const RESULTADOS = [
    ['id' => 1, 'nombre' => 'Juan Pérez', 'dni' => '30.123.456', 'cuil' => '20-30123456-7', 'edad' => 35, 'sexo' => 'Masculino', 'provincia' => 'Buenos Aires', 'ciudad' => 'La Plata'],
    ['id' => 2, 'nombre' => 'Juan Pérez', 'dni' => '30.123.456', 'cuil' => '20-30123456-7', 'edad' => 35, 'sexo' => 'Masculino', 'provincia' => 'Buenos Aires', 'ciudad' => 'La Plata'],
];

// PERFILES PARA LA PÁGINA "/solicitar/{id}"
const PERSONAS = [
    1 => ['id' => 1, 'nombre' => 'Juan Pérez', 'dni' => '30.123.456', 'cuil' => '20-30123456-7', 'edad' => 35, 'sexo' => 'Masculino', 'provincia' => 'Buenos Aires', 'ciudad' => 'La Plata'],
];
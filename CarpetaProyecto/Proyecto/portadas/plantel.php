<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Colegio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
     body {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0 20px;
        background-color: #f5f5f5;
    }

    h1, h2 {
        text-align: center;
        color: #002855;
    }

    h2 {
        margin-top: 50px;
        margin-bottom: 20px;
        color: #e19e05; 
    }

    .area {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        margin-bottom: 50px;
    }

    .card {
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        width: 200px;
        padding: 15px;
        text-align: center;
        transition: transform 0.2s;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0,0,0,0.15);
    }

    .emoji {
        font-size: 50px;
        margin-bottom: 10px;
    }

    .nombre {
        font-weight: 600;
        color: #002855;
        margin-bottom: 5px;
    }

    .cargo {
        font-size: 14px;
        color: #555;
    }

    /* espacio para que el footer no tape las últimas tarjetas */
    .espaciador {
        height: 120px;
    }

    /* Responsive */
    @media (max-width: 600px) {
        .card {
            width: 45%;
        }
    }

    @media (max-width: 400px) {
        .card {
            width: 100%;
        }
    }
</style>
</head>
<body>
  <?php include('../include/cabecera.php'); ?> 
<h1>Plantel Docente 2025</h1>

<!-- Área Dirección -->
<h2>Dirección</h2>
<div class="area">
    <div class="card">
        <div class="emoji">👨‍💼</div>
        <div class="nombre">David Félix Cordero Arancibia</div>
        <div class="cargo">Director</div>
    </div>
</div>

<!-- Área Ciencias Naturales -->
<h2>Ciencias Naturales</h2>
<div class="area">
    <div class="card">
        <div class="emoji">👩‍🔬</div>
        <div class="nombre">Ariel Aaron Alcocer Vasquez</div>
        <div class="cargo">Biología</div>
    </div>
    <div class="card">
        <div class="emoji">👩‍🔬</div>
        <div class="nombre">Silvia Eugenia Balderrama Quina</div>
        <div class="cargo">Biología</div>
    </div>
    <div class="card">
        <div class="emoji">👨‍🔬</div>
        <div class="nombre">Noelia Iveth Camacho Veizaga</div>
        <div class="cargo">Biología</div>
    </div>
    <div class="card">
        <div class="emoji">👨‍🔬</div>
        <div class="nombre">Viviana Paola Nogales Garcia</div>
        <div class="cargo">Biología</div>
    </div>
    <div class="card">
        <div class="emoji">👩‍🔬</div>
        <div class="nombre">Jeanneth Totora Salazar</div>
        <div class="cargo">Biología</div>
    </div>
    <div class="card">
        <div class="emoji">👨‍🔬</div>
        <div class="nombre">Hugo Villarroel Aviles</div>
        <div class="cargo">Física</div>
    </div>
    <div class="card">
        <div class="emoji">👩‍🔬</div>
        <div class="nombre">Maria Neyza Villarroel Soliz</div>
        <div class="cargo">Física / Química</div>
    </div>
</div>

<!-- Área Matemática -->
<h2>Matemática</h2>
<div class="area">
    <div class="card">
        <div class="emoji">🧮</div>
        <div class="nombre">Mariela Dubreika Flores Fernandez</div>
        <div class="cargo">Matemática</div>
    </div>
    <div class="card">
        <div class="emoji">🧮</div>
        <div class="nombre">Damian Mendoza Ajhuacho</div>
        <div class="cargo">Matemática</div>
    </div>
    <div class="card">
        <div class="emoji">🧮</div>
        <div class="nombre">Dely Pinto Blanco</div>
        <div class="cargo">Matemática</div>
    </div>
</div>

<!-- Área Ciencias Sociales -->
<h2>Ciencias Sociales</h2>
<div class="area">
    <div class="card">
        <div class="emoji">📚</div>
        <div class="nombre">Jose Walter Arnez Arnez</div>
        <div class="cargo">Ciencias Sociales</div>
    </div>
    <div class="card">
        <div class="emoji">📚</div>
        <div class="nombre">Carolina Carla Bustamante Molina</div>
        <div class="cargo">Ciencias Sociales</div>
    </div>
    <div class="card">
        <div class="emoji">📚</div>
        <div class="nombre">Hugo Garcia Claros</div>
        <div class="cargo">Ciencias Sociales</div>
    </div>
    <div class="card">
        <div class="emoji">📚</div>
        <div class="nombre">Rose Mary Serrudo Vargas</div>
        <div class="cargo">Ciencias Sociales</div>
    </div>
    <div class="card">
        <div class="emoji">📚</div>
        <div class="nombre">Ines Torrez Vasquez</div>
        <div class="cargo">Ciencias Sociales</div>
    </div>
</div>

<!-- Área Lenguaje -->
<h2>Lenguaje y Comunicación</h2>
<div class="area">
    <div class="card">
        <div class="emoji">✏️</div>
        <div class="nombre">Abel Javier Calle Camacho</div>
        <div class="cargo">Lenguaje y Comunicación</div>
    </div>
    <div class="card">
        <div class="emoji">✏️</div>
        <div class="nombre">Celia Mallcu Montoya</div>
        <div class="cargo">Lenguaje y Comunicación</div>
    </div>
    <div class="card">
        <div class="emoji">✏️</div>
        <div class="nombre">Jose Melgarejo Terrazas</div>
        <div class="cargo">Lenguaje y Comunicación</div>
    </div>
    <div class="card">
        <div class="emoji">✏️</div>
        <div class="nombre">Selma Amparo Maldonado Camacho</div>
        <div class="cargo">Lenguaje y Comunicación</div>
    </div>
    <div class="card">
        <div class="emoji">✏️</div>
        <div class="nombre">Aleja Celina Nogales Rocabado</div>
        <div class="cargo">Lenguaje y Comunicación</div>
    </div>
</div>

<!-- Área Valores / Religión -->
<h2>Valores y Religión</h2>
<div class="area">
    <div class="card">
        <div class="emoji">🕊️</div>
        <div class="nombre">Rosario Magdalena Aranibar Del Castillo</div>
        <div class="cargo">Valores / Religión</div>
    </div>
    <div class="card">
        <div class="emoji">🕊️</div>
        <div class="nombre">Marina Blanco Mamani</div>
        <div class="cargo">Valores / Religión</div>
    </div>
</div>

<!-- Área Artes -->
<h2>Artes Plásticas y Visuales</h2>
<div class="area">
    <div class="card">
        <div class="emoji">🎨</div>
        <div class="nombre">Felipa Lourdes Coca Camacho</div>
        <div class="cargo">Artes Plásticas y Visuales</div>
    </div>
    <div class="card">
        <div class="emoji">🎨</div>
        <div class="nombre">Guido Gonzalo Solis Quiroga</div>
        <div class="cargo">Artes Plásticas y Visuales</div>
    </div>
    <div class="card">
        <div class="emoji">🎨</div>
        <div class="nombre">Silvia Vicente Muyurico</div>
        <div class="cargo">Artes Plásticas y Visuales</div>
    </div>
</div>

<!-- Área Inglés -->
<h2>Lengua Extranjera Inglés</h2>
<div class="area">
    <div class="card">
        <div class="emoji">👩‍🏫</div>
        <div class="nombre">Juana Alcira Arispe Meruvia</div>
        <div class="cargo">Inglés</div>
    </div>
    <div class="card">
        <div class="emoji">👩‍🏫</div>
        <div class="nombre">Celia Vera Camacho</div>
        <div class="cargo">Inglés</div>
    </div>
</div>

<!-- Área Psicología y Filosofía -->
<h2>Psicología y Filosofía</h2>
<div class="area">
    <div class="card">
        <div class="emoji">🧠</div>
        <div class="nombre">Esperanza Nancy Condori Choque</div>
        <div class="cargo">Psicología / Filosofía</div>
    </div>
    <div class="card">
        <div class="emoji">🧠</div>
        <div class="nombre">David Antonio Crespo Duran</div>
        <div class="cargo">Psicología / Filosofía</div>
    </div>
</div>

<!-- Área Educación Musical -->
<h2>Educación Musical</h2>
<div class="area">
    <div class="card">
        <div class="emoji">🎵</div>
        <div class="nombre">Jose Eloy Almendras Balderrama</div>
        <div class="cargo">Educación Musical</div>
    </div>
    <div class="card">
        <div class="emoji">🎵</div>
        <div class="nombre">Javier Mollo Coaquira</div>
        <div class="cargo">Educación Musical</div>
    </div>
</div>

<!-- Área Educación Física -->
<h2>Educación Física y Deportes</h2>
<div class="area">
    <div class="card">
        <div class="emoji">🏃‍♂️</div>
        <div class="nombre">Cornelio Jimenez Enriquez</div>
        <div class="cargo">Educación Física</div>
    </div>
    <div class="card">
        <div class="emoji">🏃‍♀️</div>
        <div class="nombre">Fresia Vargas Rodriguez</div>
        <div class="cargo">Educación Física</div>
    </div>
</div>

<!-- Área Técnica / Administrativos -->
<h2>Técnica y Administración</h2>
<div class="area">
    <div class="card">
        <div class="emoji">💻</div>
        <div class="nombre">Shachenka Juana Carrasco Uriona</div>
        <div class="cargo">Técnica Tecnológica</div>
    </div>
    <div class="card">
        <div class="emoji">📎</div>
        <div class="nombre">Olivia Margarita Barrientos Lara</div>
        <div class="cargo">Secretaria</div>
    </div>
    <div class="card">
        <div class="emoji">📎</div>
        <div class="nombre">Teodora Maritza Espinoza Luizaga</div>
        <div class="cargo">Asistente Administrativa</div>
    </div>
    <div class="card">
        <div class="emoji">📎</div>
        <div class="nombre">Damaris Garcia Vargas</div>
        <div class="cargo">Asistente Administrativa</div>
    </div>
    <div class="card">
        <div class="emoji">🧹</div>
        <div class="nombre">Amparo Claudina Cabero Paz</div>
        <div class="cargo">Portera</div>
    </div>
</div>

<div class="espaciador"></div>
<?php include('../include/footer.php'); ?> 

</body>
</html>
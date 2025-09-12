<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <title>Ver Tareas Entregadas</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background: #fff;
      color: #202124;
    }

    header {
      padding: 20px;
      border-bottom: 1px solid #dadce0;
      background: #f8f9fa;
    }
    header h1 {
      margin: 0;
      font-size: 22px;
      color: #202124;
    }

    /* Tabs superiores */
    .tabs {
      display: flex;
      border-bottom: 2px solid #dadce0;
      margin-top: 10px;
    }
    .tab {
      padding: 12px 20px;
      cursor: pointer;
      font-size: 14px;
      color: #5f6368;
      border-bottom: 2px solid transparent;
    }
    .tab.active {
      color: #1a73e8;
      border-bottom: 2px solid #1a73e8;
      font-weight: 500;
    }

    /* Barra de controles */
    .controls {
      display: flex;
      align-items: center;
      padding: 15px 20px;
      border-bottom: 1px solid #dadce0;
      gap: 15px;
      background: #f8f9fa;
    }
    select, button {
      padding: 6px 10px;
      border: 1px solid #dadce0;
      border-radius: 4px;
      background: #fff;
      cursor: pointer;
      font-size: 14px;
    }
    button {
      background: #1a73e8;
      color: white;
      border: none;
    }
    button:hover {
      background: #1669c1;
    }

    /* Lista de tareas/alumnos */
    .lista {
      padding: 10px 20px;
    }
    .filtro {
      font-size: 14px;
      margin: 10px 0;
      color: #5f6368;
      font-weight: bold;
    }
    .alumno {
      display: flex;
      align-items: center;
      padding: 12px;
      border-bottom: 1px solid #dadce0;
      transition: background 0.2s;
    }
    .alumno:hover {
      background: #f1f3f4;
    }
    .alumno input[type="checkbox"] {
      margin-right: 15px;
    }
    .inicial {
      width: 36px;
      height: 36px;
      border-radius: 50%;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      margin-right: 15px;
      font-size: 14px;
    }
    /* Colores diferentes como en Classroom */
    .color-1 { background: #1a73e8; }
    .color-2 { background: #e91e63; }
    .color-3 { background: #f4511e; }
    .color-4 { background: #43a047; }
    .color-5 { background: #fbbc04; }

    .nombre {
      flex: 1;
      font-size: 14px;
      color: #202124;
    }
    .nota {
      font-size: 14px;
      color: green;
      font-weight: bold;
    }
  </style>
</head>
<body>

  <header>
    <h1>Ver tareas Entregadas</h1>
    <div class="tabs">
      <div class="tab">Instrucciones</div>
      <div class="tab active">Trabajo de los alumnos</div>
    </div>
  </header>

  <!-- Controles -->
  <div class="controls">
    <button>Enviar</button>
    <select>
      <option>Todos los alumnos</option>
    </select>
    <select>
      <option>Ordenar por estado</option>
    </select>
    <select>
      <option>100 puntos</option>
    </select>
  </div>

  <!-- Lista de alumnos -->
  <div class="lista">
    <div class="filtro">Entregado</div>

    <div class="alumno">
      <input type="checkbox">
      <div class="inicial color-1">A</div>
      <div class="nombre">ALVAREZ TEJADA ALEJANDRA</div>
      <div class="nota">__/100</div>
    </div>

    <div class="alumno">
      <input type="checkbox">
      <div class="inicial color-2">P</div>
      <div class="nombre">PRADO PEREIRA ANAHIR</div>
      <div class="nota">__/100</div>
    </div>

    <div class="alumno">
      <input type="checkbox">
      <div class="inicial color-3">U</div>
      <div class="nombre">URIBE GUILLEN ANDRES</div>
      <div class="nota">__/100</div>
    </div>

    <div class="alumno">
      <input type="checkbox">
      <div class="inicial color-4">G</div>
      <div class="nombre">GARCIA ORTUÑO ANGEL</div>
      <div class="nota">__/100</div>
    </div>

    <div class="alumno">
      <input type="checkbox">
      <div class="inicial color-5">S</div>
      <div class="nombre">SOLIS SAAVEDRA ARACELI</div>
      <div class="nota">__/100</div>
    </div>

  </div>

</body>
</html>
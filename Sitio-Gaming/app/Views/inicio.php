<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>GAMER ZONE | Comunidad Gaming Tlaxcala</title>
  
  <!-- Favicon (cámbialo por el tuyo) -->
  <link rel="icon" href="https://via.placeholder.com/32/000/fff?text=GZ" type="image/x-icon"/>
  
  <!-- Google Fonts (fuentes gaming/modernas) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      font-family: 'Roboto', sans-serif;
      background: #0d0d0d;
      color: #e0e0e0;
      line-height: 1.6;
      overflow-x: hidden;
    }
    
    header {
      height: 100vh;
      min-height: 700px;
      background: linear-gradient(rgba(0,0,0,0.75), rgba(0,0,0,0.85)),
                  url('https://images.unsplash.com/photo-1542751371-adc38448a05e?auto=format&fit=crop&q=80&w=2000') center/cover no-repeat;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      position: relative;
    }
    
    .logo {
      font-family: 'Orbitron', sans-serif;
      font-size: 5rem;
      font-weight: 700;
      color: #00ffea;
      text-shadow: 0 0 20px #00ffea, 0 0 40px #00ffea;
      margin-bottom: 1rem;
      letter-spacing: 8px;
      animation: glow 2s ease-in-out infinite alternate;
    }
    
    @keyframes glow {
      from { text-shadow: 0 0 10px #00ffea, 0 0 20px #00ffea; }
      to   { text-shadow: 0 0 30px #00ffea, 0 0 60px #00ffea, 0 0 100px #00ffea; }
    }
    
    .tagline {
      font-size: 2rem;
      margin: 1.5rem 0 2.5rem;
      max-width: 800px;
      opacity: 0.9;
    }
    
    .btn {
      display: inline-block;
      padding: 1rem 2.8rem;
      font-size: 1.3rem;
      font-weight: bold;
      text-decoration: none;
      color: #000;
      background: #00ffea;
      border-radius: 50px;
      box-shadow: 0 0 25px rgba(0, 255, 234, 0.6);
      transition: all 0.4s ease;
      margin: 0 1rem;
    }
    
    .btn:hover {
      transform: translateY(-5px) scale(1.05);
      box-shadow: 0 0 40px rgba(0, 255, 234, 0.9);
    }
    
    .btn-outline {
      background: transparent;
      color: #00ffea;
      border: 2px solid #00ffea;
    }
    
    .btn-outline:hover {
      background: #00ffea;
      color: #000;
    }
    
    .scroll-down {
      position: absolute;
      bottom: 40px;
      font-size: 3rem;
      color: #00ffea;
      animation: bounce 2s infinite;
    }
    
    @keyframes bounce {
      0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
      40% { transform: translateY(-20px); }
      60% { transform: translateY(-10px); }
    }
  </style>
</head>
<body>

  <header>
    <h1 class="logo">GAMER ZONE</h1>
    <p class="tagline">La comunidad gaming más intensa de Tlaxcala • Torneos • Streams • Comunidad • ¡Sube de nivel!</p>
    
    <a href="#juegos" class="btn">Ver Juegos</a>
    <a href="#unirse" class="btn btn-outline">Únete Ahora</a>
    
    <div class="scroll-down">↓</div>
    <a href="<?= base_url('index') ?>" class="btn-principal">
    ¡Contáctame!
    </a>
  </header>

  <!-- Aquí irían las siguientes secciones: juegos, noticias, equipo, etc. -->

</body>
</html>
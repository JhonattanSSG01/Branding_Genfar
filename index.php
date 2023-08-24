<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="description"
    content="En Genfar somos un laboratorio especializado en productos para nuestros clientes y su cuidado"/>
  <link rel="stylesheet" href="./assets/css/index.css"/>
  <link rel="stylesheet" href="./assets/css/variables.css"/>
  <link rel="stylesheet" href="./assets/css/reset.css"/>
  <title>Branding Genfar - Inicio</title>
</head>

<body class="container home">
  <div class="main">
    <div class="border figure"></div>
    <header class="figure">
      <nav>
        <ul>
          <li><a class="active" href="#">Home</a></li>
          <li><a href="#">Estrellas</a></li>
          <li><a href="#">Lanzamientos</a></li>
          <li><a href="./otc.html">OTC</a></li>
          <li><a href="#">Higen</a></li>
          <li><a href="#">Calidad Genfar</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <div class="data">
        <h1>
          “Cuidar a tu 
          familia no debería
          costarte más” <br />
          <span>Te recomiendo
          Genfar</span>
        </h1>
        <section>
          <form method="post">
            <fieldset>
              <label for="nombre"></label>
              <input type="text" placeholder="Ingrese nombre" name="nombre" autofocus required id="nombre" />
            </fieldset>
            <fieldset>
              <label for="correo"></label>
              <input type="email" placeholder="Ingrese correo" name="correo" required id="correo" />
            </fieldset>
            <fieldset class="checkList">
              <span>Desea recibir información</span>
              <label for="si">
                Si
                <input type="radio" id="si" required name="select" />
              </label>
              <label for="no">
                No
                <input type="radio" id="no" required name="select" />
              </label>
            </fieldset>
            <button class="btn" type="submit" name="enviar">Enviar</button>
          </form>
        </section>
      </div>
    </main>
    <footer class="mainFooter">
      <div class="copy">
        <a href="https://www.genfar.com" target="_blank">www.genfar.com</a>
        <p>
          Material de propiedad exclusiva de Sanofi dirigido al profesional de la salud que prescribe y dispensa. Para
          mayor
          información comunicarse con el departamento médico de
          Colombia: Sanofi-Aventis de Colombia S.A. Transversal 23 N° 97-73 - Edificio City Business. Piso 8. Bogotá
          D.C.
          Teléfono: 621 4400 Fax: 744 4237. Para reportes de eventos
          adversos: Colombia: Farmacovigilancia.colombia@sanofi.com. Material para uso exclusivo del Representante de
          Ventas/Médico. MAT-CO-2300831 (05/23)
        </p>
      </div>
      <div class="logo">
        <img src="./assets/images/logo.png" alt="Logo Genfar">
      </div>
    </footer>
  </div>
  <?php
    include("enviar.php");
    include("correo.php");
  ?>
</body>

</html>
<!doctype html>
<!-- Idioma de la página -->
<html lang="es">
  <?php
    require_once("verificarHeader.php");
  ?>
    <!-- Productos -->
    <div class="row caja">
      <h1>Productos</h1>
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" src="https://www.corresponsables.com/sites/default/files/styles/news_detail/public/coca-cola-logo-splash.jpg?itok=3M53T8Zr" width="auto" height="150" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
        <h2>Coca Cola</h2>
        <p> Botella de cristal 35 cl. Bebida gaseosa azucarada sabor cola. <br><b>2.00 €</b></p>
        <p><a class="btn btn-secondary" onclick="alert('Debes iniciar sesión para añadir artículos en la cesta.');" data-bs-toggle="modal" data-bs-target="#ModalLogin" href="#">Añadir a la cesta &raquo;</a></p>
      </div>
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/Fanta_logo_%282016%29.png/800px-Fanta_logo_%282016%29.png" width="auto" height="150" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
        <rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
        <h2>Fanta</h2>
        <p>Botella de cristal de 35 cl. Bebida gaseosa azucarada sabor naranja o limón. <br><b>2.00 €</b></p>
        <p><a class="btn btn-secondary" onclick="alert('Debes iniciar sesión para añadir artículos en la cesta.');" data-bs-toggle="modal" data-bs-target="#ModalLogin" href="#">Añadir a la cesta &raquo;</a></p>
      </div>
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" src="https://brandemia.org/sites/default/files/inline/images/aquarius_nuevo_logo.jpg" width="auto" height="150" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text>
      </img>
        <h2>Aquarius</h2>
        <p>Botella de cristal de 30cl. Bebida azucarada sin gas sabor naranja o limón. <br><b>2.00 €</b></p>
        <p><a class="btn btn-secondary" onclick="alert('Debes iniciar sesión para añadir artículos en la cesta.');" data-bs-toggle="modal" data-bs-target="#ModalLogin" href="#">Añadir a la cesta &raquo;</a></p>
      </div>
    </div>
    <div class="row caja">
      <div class="col-lg-4" >
        <img class="bd-placeholder-img rounded-circle"  src="imagenes/tirador.png" width="auto" height="150" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" alt="Imagen" focusable="false"><title>Imagen</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>
        <h2>Cerveza Barril</h2>
        <p>Dos tamaños disponibles: <br> 30 cl <b>2.00 €</b><br> 50 cl <b>3.00 €</b> </p>
        <p><a class="btn btn-secondary" onclick="alert('Debes iniciar sesión para añadir artículos en la cesta.');" data-bs-toggle="modal" data-bs-target="#ModalLogin" href="#">Añadir a la cesta &raquo;</a></p>
      </div>
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" src="https://s03.s3c.es/imag/_v0/770x420/4/5/b/estrella-galicia-770.jpg" width="auto" height="150" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>
        <h2>Estrella Galicia</h2>
        <p>Cerveza creada por los hermanos rivera y mejorada durante generaciones, una de las mejores cervezas del mundo.<br><b>2.00 €</b></p>
        <p><a class="btn btn-secondary" onclick="alert('Debes iniciar sesión para añadir artículos en la cesta.');" data-bs-toggle="modal" data-bs-target="#ModalLogin" href="#">Añadir a la cesta &raquo;</a></p>
      </div>
      <div class="col-lg-4">
        <img  class="bd-placeholder-img rounded-circle" src="https://ipmark.com/wp-content/uploads/mahou-800x445.jpg" width="auto" height="150" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>
        <h2>Mahou</h2>
        <p>El sabor cervecero por excelencia, la auténtica Mahou 5 Estrellas, nada más que añadir.<br><b>2.00 €</b></p>
        <p><a class="btn btn-secondary" onclick="alert('Debes iniciar sesión para añadir artículos en la cesta.');" data-bs-toggle="modal" data-bs-target="#ModalLogin" href="#">Añadir a la cesta &raquo;</a></p>
      </div>
    </div>
    <hr class="featurette-divider">
  </main>
  <!-- Footer -->
  <?php
    require_once("footer.php");
  ?>
  </body>
</html>
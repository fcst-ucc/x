<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Title</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!--Archivo en el que se encuentra la logica de los modulos--> 
    <script src="code/hash.js"></script>
    <!--Archivo en el que se encuentra el JS/jQuery que es compartido por todas las paginas--> 
    <script src="code/fcst.js"></script>

    <!-- CSS de las pestañas y las barras personalizadas (pagina con pestañas)-->
    <link href="code/fcst-tabs.css" rel="stylesheet">

    <!-- Plugin para agregar animaciones -->
    <link href="plugins/animate.css" rel="stylesheet">
    <!--PACE Plugin + Loading Bar Theme-->
    <script src="plugins/pace.min.js"></script>
    <link href="plugins/pace-theme-minimal.css" rel="stylesheet" />
    <!-- Plugin para utilizar la funcion serializeObject, para JSON --> 
    <script src="plugins/serializeobject.js"></script>


  </head>
  <body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Panel de navegacion. Se llama con jQuery-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    </nav>

    <!-- Todo el contenido de la pagina, excluyendo panel superior e inferior -->
    <div class="content-wrapper">
      <!-- Contenido de la pagina, se llama con jQuery -->
      <div id="mainContainer" class="container-fluid animated fadeInLeft"></div>
      <!-- /.container-fluid-->
      <!-- /.content-wrapper-->
      <footer class="sticky-footer" id="footerContainer"></footer>
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top"><i class="fa fa-angle-up"></i></a>
      <!-- Logout Modal-->
      <div id="modalContainer"></div>
    </div>
  </body>
</html>

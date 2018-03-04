<!-- Page level plugin JavaScript-->
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
<!-- Custom scripts for this page-->
<script src="js/sb-admin-datatables.min.js"></script>    
<!-- Page level plugin CSS-->
<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

<!-- Example DataTables Card-->
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i> Ejemplo Tabla 2</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Posicion</th>
            <th>Detalles</th>
            <th>Eliminar</th>
            <th>Cambiar</th>
          </tr>
        </thead>
<!--        <tfoot>
          <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011/04/25</td>
            <td>$320,800</td>

            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
          </tr>
        </tfoot>-->
        <tbody>
          <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td><a onclick="contentLoad('Ejemplo de Detalle 2', 'LIST2-2.php');" class="btn btn-secondary text-white">
                <span class="fa fa-w fa-list-ul" aria-hidden="true"></span> Detalle</a></td>
            <td><a class="btn btn-danger text-white"><span class="fa fa-w fa-times" aria-hidden="true"></span></a></td>
            <td><a class="btn btn-warning text-white"><span class="fa fa-w fa-edit" aria-hidden="true"></span></a></td>
          </tr>
          <tr>
            <td>Garrett Winters</td>
            <td>Accountant</td>
            <td><a onclick="contentLoad('Ejemplo de Tabla 2', 'LIST2-2.php');" class="btn btn-primary text-white">
                <span class="fa fa-w fa-list-ul" aria-hidden="true"></span> Detalle</a></td>
            <td><a class="btn btn-danger text-white"><span class="fa fa-w fa-times" aria-hidden="true"></span></a></td>
            <td><a class="btn btn-warning text-white"><span class="fa fa-w fa-edit" aria-hidden="true"></span></a></td>
          </tr>
          <tr>
            <td>Ashton Cox</td>
            <td>Junior Technical Author</td>
            <td><a onclick="contentLoad('Ejemplo de Tabla 2', 'LIST2-2.php');" class="btn btn-primary text-white">
                <span class="fa fa-w fa-list-ul" aria-hidden="true"></span> Detalle</a></td>
            <td><a class="btn btn-danger text-white"><span class="fa fa-w fa-times" aria-hidden="true"></span></a></td>
            <td><a class="btn btn-warning text-white"><span class="fa fa-w fa-edit" aria-hidden="true"></span></a></td>
          </tr>
          <tr>
            <td>Cedric Kelly</td>
            <td>Senior Javascript Developer</td>
            <td><a onclick="contentLoad('Ejemplo de Tabla 2', 'LIST2-2.php');" class="btn btn-primary text-white">
                <span class="fa fa-w fa-list-ul" aria-hidden="true"></span> Detalle</a></td>
            <td><a class="btn btn-danger text-white"><span class="fa fa-w fa-times" aria-hidden="true"></span></a></td>
            <td><a class="btn btn-warning text-white"><span class="fa fa-w fa-edit" aria-hidden="true"></span></a></td>
          </tr>
          <tr>
            <td>Airi Satou</td>
            <td>Accountant</td>
            <td><a onclick="contentLoad('Ejemplo de Detalle', 'LIST2-2.php');" class="btn btn-primary text-white">
                <span class="fa fa-w fa-list-ul" aria-hidden="true"></span> Detalle</a></td>
            <td><a class="btn btn-danger text-white"><span class="fa fa-w fa-times" aria-hidden="true"></span></a></td>
            <td><a class="btn btn-warning text-white"><span class="fa fa-w fa-edit" aria-hidden="true"></span></a></td>
          </tr>
          <tr>
            <td>Brielle Williamson</td>
            <td>Integration Specialist</td>
            <td><a onclick="contentLoad('Ejemplo de Tabla 2', 'LIST2-2.php');" class="btn btn-primary text-white">
                <span class="fa fa-w fa-list-ul" aria-hidden="true"></span> Detalle</a></td>
            <td><a class="btn btn-danger text-white"><span class="fa fa-w fa-times" aria-hidden="true"></span></a></td>
            <td><a class="btn btn-warning text-white"><span class="fa fa-w fa-edit" aria-hidden="true"></span></a></td>
          </tr>
          <tr>
            <td>Herrod Chandler</td>
            <td>Sales Assistant</td>
            <td><a onclick="contentLoad('Ejemplo de Tabla 2', 'LIST2-2.php');" class="btn btn-primary text-white">
                <span class="fa fa-w fa-list-ul" aria-hidden="true"></span> Detalle</a></td>
            <td><a class="btn btn-danger text-white"><span class="fa fa-w fa-times" aria-hidden="true"></span></a></td>
            <td><a class="btn btn-warning text-white"><span class="fa fa-w fa-edit" aria-hidden="true"></span></a></td>
          </tr>
          <tr>
            <td>Rhona Davidson</td>
            <td>Integration Specialist</td>
            <td><a onclick="contentLoad('Ejemplo de Tabla 2', 'LIST2-2.php');" class="btn btn-primary text-white">
                <span class="fa fa-w fa-list-ul" aria-hidden="true"></span> Detalle</a></td>
            <td><a class="btn btn-danger text-white"><span class="fa fa-w fa-times" aria-hidden="true"></span></a></td>
            <td><a class="btn btn-warning text-white"><span class="fa fa-w fa-edit" aria-hidden="true"></span></a></td>
          </tr>
          <tr>
            <td>Colleen Hurst</td>
            <td>Javascript Developer</td>
            <td><a onclick="contentLoad('Ejemplo de Tabla 2', 'LIST2-2.php');" class="btn btn-primary text-white">
                <span class="fa fa-w fa-list-ul" aria-hidden="true"></span> Detalle</a></td>
            <td><a class="btn btn-danger text-white"><span class="fa fa-w fa-times" aria-hidden="true"></span></a></td>
            <td><a class="btn btn-warning text-white"><span class="fa fa-w fa-edit" aria-hidden="true"></span></a></td>
          </tr>
          <tr>
            <td>Sonya Frost</td>
            <td>Software Engineer</td>
            <td><a onclick="contentLoad('Ejemplo de Tabla 2', 'LIST2-2.php');" class="btn btn-primary text-white">
                <span class="fa fa-w fa-list-ul" aria-hidden="true"></span> Detalle</a></td>
            <td><a class="btn btn-danger text-white"><span class="fa fa-w fa-times" aria-hidden="true"></span></a></td>
            <td><a class="btn btn-warning text-white"><span class="fa fa-w fa-edit" aria-hidden="true"></span></a></td>
          </tr>
          <tr>
            <td>Jena Gaines</td>
            <td>Office Manager</td>
            <td><a onclick="contentLoad('Ejemplo de Tabla 2', 'LIST2-2.php');" class="btn btn-primary text-white">
                <span class="fa fa-w fa-list-ul" aria-hidden="true"></span> Detalle</a></td>
            <td><a class="btn btn-danger text-white"><span class="fa fa-w fa-times" aria-hidden="true"></span></a></td>
            <td><a class="btn btn-warning text-white"><span class="fa fa-w fa-edit" aria-hidden="true"></span></a></td>
          </tr>
          <tr>
            <td>Quinn Flynn</td>
            <td>Support Lead</td>
            <td><a onclick="contentLoad('Ejemplo de Tabla 2', 'LIST2-2.php');" class="btn btn-primary text-white">
                <span class="fa fa-w fa-list-ul" aria-hidden="true"></span> Detalle</a></td>
            <td><a class="btn btn-danger text-white"><span class="fa fa-w fa-times" aria-hidden="true"></span></a></td>
            <td><a class="btn btn-warning text-white"><span class="fa fa-w fa-edit" aria-hidden="true"></span></a></td>
          </tr>
          <tr>
            <td>Charde Marshall</td>
            <td>Regional Director</td>
            <td><a onclick="contentLoad('Ejemplo de Tabla 2', 'LIST2-2.php');" class="btn btn-primary text-white">
                <span class="fa fa-w fa-list-ul" aria-hidden="true"></span> Detalle</a></td>
            <td><a class="btn btn-danger text-white"><span class="fa fa-w fa-times" aria-hidden="true"></span></a></td>
            <td><a class="btn btn-warning text-white"><span class="fa fa-w fa-edit" aria-hidden="true"></span></a></td>
          </tr>
          <tr>
            <td>Haley Kennedy</td>
            <td>Senior Marketing Designer</td>
            <td><a onclick="contentLoad('Ejemplo de Tabla 2', 'LIST2-2.php');" class="btn btn-primary text-white">
                <span class="fa fa-w fa-list-ul" aria-hidden="true"></span> Detalle</a></td>
            <td><a class="btn btn-danger text-white"><span class="fa fa-w fa-times" aria-hidden="true"></span></a></td>
            <td><a class="btn btn-warning text-white"><span class="fa fa-w fa-edit" aria-hidden="true"></span></a></td>
          </tr>
          <tr>
            <td>Tatyana Fitzpatrick</td>
            <td>Regional Director</td>
            <td><a onclick="contentLoad('Ejemplo de Tabla 2', 'LIST2-2.php');" class="btn btn-primary text-white">
                <span class="fa fa-w fa-list-ul" aria-hidden="true"></span> Detalle</a></td>
            <td><a class="btn btn-danger text-white"><span class="fa fa-w fa-times" aria-hidden="true"></span></a></td>
            <td><a class="btn btn-warning text-white"><span class="fa fa-w fa-edit" aria-hidden="true"></span></a></td>
          </tr>
          <tr>
            <td>Michael Silva</td>
            <td>Marketing Designer</td>
            <td><a onclick="contentLoad('Ejemplo de Tabla 2', 'LIST2-2.php');" class="btn btn-primary text-white">
                <span class="fa fa-w fa-list-ul" aria-hidden="true"></span> Detalle</a></td>
            <td><a class="btn btn-danger text-white"><span class="fa fa-w fa-times" aria-hidden="true"></span></a></td>
            <td><a class="btn btn-warning text-white"><span class="fa fa-w fa-edit" aria-hidden="true"></span></a></td>
          </tr>
          <tr>
            <td>Paul Byrd</td>
            <td>Chief Financial Officer (CFO)</td>
            <td><a onclick="contentLoad('Ejemplo de Tabla 2', 'LIST2-2.php');" class="btn btn-primary text-white">
                <span class="fa fa-w fa-list-ul" aria-hidden="true"></span> Detalle</a></td>
            <td><a class="btn btn-danger text-white"><span class="fa fa-w fa-times" aria-hidden="true"></span></a></td>
            <td><a class="btn btn-warning text-white"><span class="fa fa-w fa-edit" aria-hidden="true"></span></a></td>
          </tr>
          <tr>
            <td>Gloria Little</td>
            <td>Systems Administrator</td>
            <td><a onclick="contentLoad('Ejemplo de Tabla 2', 'LIST2-2.php');" class="btn btn-primary text-white">
                <span class="fa fa-w fa-list-ul" aria-hidden="true"></span> Detalle</a></td>
            <td><a class="btn btn-danger text-white"><span class="fa fa-w fa-times" aria-hidden="true"></span></a></td>
            <td><a class="btn btn-warning text-white"><span class="fa fa-w fa-edit" aria-hidden="true"></span></a></td>
          </tr>
          <tr>
            <td>Bradley Greer</td>
            <td>Software Engineer</td>
            <td><a onclick="contentLoad('Ejemplo de Tabla 2', 'LIST2-2.php');" class="btn btn-primary text-white">
                <span class="fa fa-w fa-list-ul" aria-hidden="true"></span> Detalle</a></td>
            <td><a class="btn btn-danger text-white"><span class="fa fa-w fa-times" aria-hidden="true"></span></a></td>
            <td><a class="btn btn-warning text-white"><span class="fa fa-w fa-edit" aria-hidden="true"></span></a></td>
          </tr>
          <tr>
            <td>Dai Rios</td>
            <td>Personnel Lead</td>
            <td><a onclick="contentLoad('Ejemplo de Tabla 2', 'LIST2-2.php');" class="btn btn-primary text-white">
                <span class="fa fa-w fa-list-ul" aria-hidden="true"></span> Detalle</a></td>
            <td><a class="btn btn-danger text-white"><span class="fa fa-w fa-times" aria-hidden="true"></span></a></td>
            <td><a class="btn btn-warning text-white"><span class="fa fa-w fa-edit" aria-hidden="true"></span></a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
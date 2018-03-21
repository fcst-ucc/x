<!-- Page level plugin CSS-->
<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
<!-- Page level plugin JavaScript-->
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
<!-- Custom scripts for this page-->
<link href="vendor/datatables/colReorder.dataTables.min.css" rel="stylesheet">
<script src="vendor/datatables/dataTables.colReorder.min.js"></script>

<!-- JavaScript de la pagina -->
<script src="content/sedes/SE-J.js" ></script>
<script>window.onload = RFunction(1);</script>

<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">Tables</li>
</ol>
<!-- Example DataTables Card-->
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i> Data Table Example</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Opciones</th>
            <th>Nombre</th>
            <th>Ciudad</th>
            <th>Direccion</th>
            <th>Jefe</th>
            <th>Numero</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Opciones</th>
            <th>Nombre</th>
            <th>Ciudad</th>
            <th>Direccion</th>
            <th>Jefe</th>
            <th>Numero</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
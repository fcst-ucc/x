<!-- Page level plugin CSS-->
<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
<!-- Page level plugin JavaScript-->
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
<!-- Custom scripts for this page-->
<link href="vendor/datatables/colReorder.dataTables.min.css" rel="stylesheet">
<script src="vendor/datatables/dataTables.colReorder.min.js"></script>

<!--<script src="js/sb-admin-datatables.min.js"></script>-->

<script>
  function llamarJSON() {
    $.ajax({
      url: 'content/sedes/SE-Test.php',
      dataType: 'json',
      success: function (json) {
        //here inside json variable you've the json returned by your PHP
        alert("\nNombre: " + json[0].name +
                "\nCiudad: " + json[0].city +
                "\nDir: " + json[0].dir +
                "\nJefe: " + json[0].jefe +
                "\nNum: " + json[0].num);
      }
    });
  }

  $(document).ready(function () {
    var table = $('#dataTable').DataTable({
      "ajax": 'content/sedes/SE-LL.php',
//      colReorder: true,
      "columnDefs": [{
          "targets": 0,
          "data": null,
          "defaultContent": "\
            \ <a class='btn btn-detail btn-secondary text-white'> \
            \ <span class='fa fa-w fa-list-ul'></span></a> \
            \ <a class='btn btn-delete btn-danger text-white'> \
            \ <span class='fa fa-w fa-times'></span></a> \
            \ <a class='btn btn-update btn-warning text-white'> \
            \<span class='fa fa-w fa-edit'></span></a>"}]
    });
//    llamarJSON();
    $('#dataTable tbody').on('click', '.btn-delete', function () {
      var rowData = table.row($(this).parents('tr')).data();
      var obj = {"id": rowData[0]};
      var formData = JSON.stringify(obj);
      $.ajax({
        type: "POST",
        url: "content/sedes/SE-DL.php",
        data: formData,
        dataType: "json",
        contentType: "application/json",
        success: function () {}
      });
      callModal('#logoutModal');
      table.ajax.reload();
    });

    $('#dataTable tbody').on('click', '.btn-update', function () {
      var rowData = table.row($(this).parents('tr')).data();
      localStorage.SEUid = rowData[0];
      changeHash('SEU');
    });

  });



</script>
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
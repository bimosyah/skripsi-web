</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.js') ?>"></script>
<!-- jsGrid -->
<script src="<?php echo base_url('assets/plugins/jsgrid/demos/db.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/jsgrid/jsgrid.min.js') ?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') ?>"></script>
<!-- page script -->
<script>
  var data = null;
  $(function () {
    $("#table_kategori").DataTable();
    $("#table_data_deteksi").DataTable();
    $("#jsGrid1").jsGrid({
      width: "100%",
      height: "auto",

      autoload:   true,
      paging:     true,
      sorting: true,

      controller: {
        loadData: function(filter) {
          return $.ajax({
            url: "<?php echo base_url('api/data/load_data') ?>",
            dataType: "json"
          });
        }
      },
      fields: [
      {name: "id", width: 50},
      {name: "jumlah", width: 100},
      {name: "create_at", width: 100}
      ]
    });
  });
</script>

</body>
</html>

@extends('layouts.event_design')
@section('content')

  <!-- Page -->
  <div class="page">
    <div class="page-header">
      <h1 class="page-title">Data Kegiatan</h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/admin')}}">Beranda</a></li>
        <li class="active">Kegiatan</li>
        <li class="active">Data Kegiatan</li>
      </ol>
    </div><br>
    <div class="page-content">

      <!-- Panel Basic -->
      <div class="panel">
        <header class="panel-heading">
          <div class="panel-actions"></div>
          <h3 class="panel-title">Kegiatan</h3>
        </header>
        <div class="panel-body">
          <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
            <thead>
              <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Tanggal</th>
                <th>Alat</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Tanggal</th>
              </tr>
            </tfoot>
            <tbody>
            <?php $i = 1; ?>
                @foreach ($event as $data)
              <tr>
                <td><?php echo $i; $i+=1; ?></td>
                <td>{{$data->nama_kegiatan}}</td>
                <td>{{$data->jenis_kegiatan}}</td>
                <td>{{date_format(date_create($data->tanggal_kegiatan),"d M Y")}}</td>
                <td>
                  <a href="{{route('update_event',$data->id)}}">
                    <button type="button" class="btn btn-icon btn-warning" title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></button>
                  </a>
                  &nbsp
                  <a href="{{ $data->id }}">
                    <button type="button" class="btn btn-icon btn-danger" title="Hapus"><i class="icon wb-trash" aria-hidden="true"></i></button>
                  </a>
                </td>
              </tr>
              @endforeach
              
            </tbody>
          </table>
        </div>
      </div>
      <!-- End Panel Basic -->
    </div>
  </div>

   <!-- Core  -->
  <script src="{{url('/vendor1/jquery/jquery.js')}}"></script>
  <script src="{{url('/vendor1/bootstrap/bootstrap.js')}}"></script>
  <script src="{{url('/vendor1/animsition/jquery.animsition.js')}}"></script>
  <script src="{{url('/vendor1/asscroll/jquery-asScroll.js')}}"></script>
  <script src="{{url('/vendor1/mousewheel/jquery.mousewheel.js')}}"></script>
  <script src="{{url('/vendor1/asscrollable/jquery.asScrollable.all.js')}}"></script>

  <!-- Plugins -->
  <script src="{{url('/vendor1/switchery/switchery.min.js')}}"></script>
  <script src="{{url('/vendor1/intro-js/intro.js')}}"></script>
  <script src="{{url('/vendor1/screenfull/screenfull.js')}}"></script>
  <script src="{{url('/vendor1/slidepanel/jquery-slidePanel.js')}}"></script>

  <script src="{{url('/vendor1/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{url('/vendor1/datatables-fixedheader/dataTables.fixedHeader.js')}}"></script>
  <script src="{{url('/vendor1/datatables-bootstrap/dataTables.bootstrap.js')}}"></script>
  <script src="{{url('/vendor1/datatables-responsive/dataTables.responsive.js')}}"></script>
  <script src="{{url('/vendor1/datatables-tabletools/dataTables.tableTools.js')}}"></script>

  <!-- Scripts -->
  <script src="{{url('/js1/core.js')}}"></script>
  <script src="{{url('/js1/site.js')}}"></script>


  <script src="{{url('/js1/sections/menu.js')}}"></script>
  <script src="{{url('/js1/sections/menubar.js')}}"></script>
  <script src="{{url('/js1/sections/sidebar.js')}}"></script>


  <script src="/js1/components/asscrollable.js"></script>
  <script src="/js1/components/animsition.js"></script>
  <script src="/js1/components/slidepanel.js"></script>
  <script src="/js1/components/switchery.js"></script>
  <script src="/js1/components/datatables.js"></script>

  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;

      $(document).ready(function($) {
        Site.run();
      });

      // Fixed Header Example
      // --------------------
      (function() {
        // initialize datatable
        var table = $('#exampleFixedHeader').DataTable({
          responsive: true,
          "bPaginate": false,
          "sDom": "t" // just show table, no other controls
        });

        // initialize FixedHeader
        var offsetTop = 0;
        if ($('.site-navbar').length > 0) {
          offsetTop = $('.site-navbar').eq(0).innerHeight();
        }
        var fixedHeader = new FixedHeader(table, {
          offsetTop: offsetTop
        });

        // redraw fixedHeaders as necessary
        $(window).resize(function() {
          fixedHeader._fnUpdateClones(true);
          fixedHeader._fnUpdatePositions();
        });
      })();

      // Individual column searching
      // ---------------------------
      (function() {
        $(document).ready(function() {
          var defaults = $.components.getDefaults("dataTable");

          var options = $.extend(true, {}, defaults, {
            initComplete: function() {
              this.api().columns().every(function() {
                var column = this;
                var select = $(
                    '<select class="form-control width-full"><option value=""></option></select>'
                  )
                  .appendTo($(column.footer()).empty())
                  .on('change', function() {
                    var val = $.fn.dataTable.util.escapeRegex(
                      $(this).val()
                    );

                    column
                      .search(val ? '^' + val + '$' : '',
                        true, false)
                      .draw();
                  });

                column.data().unique().sort().each(function(
                  d, j) {
                  select.append('<option value="' + d +
                    '">' + d + '</option>')
                });
              });
            }
          });

          $('#exampleTableSearch').DataTable(options);
        });
      })();

      // Table Tools
      // -----------
      (function() {
        $(document).ready(function() {
          var defaults = $.components.getDefaults("dataTable");

          var options = $.extend(true, {}, defaults, {
            "aoColumnDefs": [{
              'bSortable': false,
              'aTargets': [-1]
            }],
            "iDisplayLength": 5,
            "aLengthMenu": [
              [5, 10, 25, 50, -1],
              [5, 10, 25, 50, "All"]
            ],
            "sDom": '<"dt-panelmenu clearfix"Tfr>t<"dt-panelfooter clearfix"ip>',
            "oTableTools": {
              "sSwfPath": "/vendor'/datatables-tabletools/swf/copy_csv_xls_pdf.swf"
            }
          });

          $('#exampleTableTools').dataTable(options);
        });
      })();

      // Table Add Row
      // -------------

      (function() {
        $(document).ready(function() {
          var defaults = $.components.getDefaults("dataTable");

          var t = $('#exampleTableAdd').DataTable(defaults);

          $('#exampleTableAddBtn').on('click', function() {
            t.row.add([
              'Adam Doe',
              'New Row',
              'New Row',
              '30',
              '2015/10/15',
              '$20000'
            ]).draw();
          });
        });
      })();
    })(document, window, jQuery);
  </script>

</body>

</html>
@endsection
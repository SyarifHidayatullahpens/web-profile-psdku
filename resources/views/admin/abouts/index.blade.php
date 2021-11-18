@extends('../layouts.pages-admin.main-content')

@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Admin Dashboard</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tables</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 col-5 text-right">
            <a href="#" class="btn btn-sm btn-neutral">Add</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid mt--6">
    <!-- Table -->
    <div class="row">
      <div class="col">
        <div class="card">
          <!-- Card header -->
          <div class="card-header">
          <h3 class="mb-0">About Campus Data</h3>
          </div>
          <div class="table-responsive py-4">
            <table class="table align-items-center table-flush" id="table_about">
              <thead class="thead-light">
                <tr>
                  <th>No</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
    @include('layouts.pages-admin.footer')
  </div>

  <script type="text/javascript">
        $('document').ready(function() {
          $('#table_about').DataTable({
            processing: true,
            serverside: true,
            ajax: {
              url: "{{ route('abouts.index') }}",
              type: 'GET'
            },
            "responsive": true,
            "languange": {
              "sNext": "<i class='fas fa-angle-right'>",
              "sPrevious": "<i class='fas fa-angle-left'>",
            },
            processing: '<img src="{{ asset('images/loader/loader.gif') }}">',
          },
          columns: [
                    {
                        data: 'DT_RowIndex',
                    },
                    {
                        data: 'description',
                    },
                    {
                        data: 'action',
                    },
                  ],
          });
        });

        $('#add').click(function() {
          $('#form-create').trigger("reset");
          $('#modal-judul').html('Create New About Campus');
          $('create-modal').modal('show');
          $('error_description').text('');
        });

        $("#form-create").on('submit', function(e){
            e.preventDefault();
            description = $("#description").val();
            $('#error_description').text('');

            $.ajax({
              url: "{{ route('abouts.store') }}",
              type: "POST",
              data:{
                  "_token": "{{ csrf_token() }}",
                  brand:brand,
                  description:description,
              },
              success:function(response){
                console.log(response);
                if (response) {
                   $("#form-create")[0].reset();
                   $('#create-modal').modal('hide');
                   toastr.success(response.message);
                   var oTable = $('#table_abouts').dataTable()
                   oTable.fnDraw(false);                 }
              },
              error: function(response) {
                  $('#error_description').text(response.responseJSON.errors.description);
              }
            });
        });

        function deleteItem(e){
            let id = e.getAttribute('data-id');
            let name = e.getAttribute('data-name');
            console.log(name);
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: true
            });
            swalWithBootstrapButtons.fire({
              title: 'Are you sure?',
              text: "Do you want to delete info "+name+"?",
              icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    if (result.isConfirmed){
                        $.ajax({
                            type:'POST',
                            url:"abouts/"+id,
                            data:{
                                "_token": "{{ csrf_token() }}",
                                "_method": 'DELETE',
                            },
                            success:function(data) {
                                if (data.success){
                                        toastr.success(data.message)
                                        var oTable = $('#table_brands').dataTable(); //inialisasi datatable
                                        oTable.fnDraw(false); //reset datatable
                                }
                            }
                           
                        });
                    }
                } else if (
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                  swal.fire(
                    'Cancelled',
                    'Data is not deleted',
                    'error'
                  )
                }
            });
        }
  </script>
@endsection
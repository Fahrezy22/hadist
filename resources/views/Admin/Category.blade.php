@extends('Layouts.Admin.Base')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="float-left mt-2"><b>Data Category</b></h4>
                    <button id="create" class="btn btn-primary float-right">Tambah Data Category</button>
                </div>
                <div class="card-body">
                    <table id="datatables" class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('Admin.Modal.Category')
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    $('#datatables').DataTable({
        "language": {
            "emptyTable": "Belum ada data, silahkan tambahkan data baru!"
          },
        processing: true,
        serverSide: true,
        ajax: {
            url:  '/admin/category',
            type: 'GET'
        },
        columns: [{
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
            },
            {
                data: 'name',
                name: 'name',
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            },
        ],
        order: [
            [0, 'desc']
        ]
    });

    $('#create').click(function () {
        $('#simpan').val("create-Item");
        $('#id').val('');
        $('#ItemForm').trigger("reset");
        $('#modelheader').html("Tambah Data Baru");
        $('#univModal').modal('show');
    });

    $('body').on('click', '.editItem', function () {
        var Item_id = $(this).data('id');
        $.get("/admin/category" + '/' + Item_id + '/edit', function (data) {
            $('#modelheader').html("Edit Data");
            $('#simpan').val("edit-user");
            $('#univModal').modal('show');
            $('#id').val(data.id);
            $('#name').val(data.name);
            $('#code').val(data.code);
        })
    });

    $('#simpan').click(function (e) {
        e.preventDefault();
        $(this).html('Sending..');

        $.ajax({
            data: $('#ItemForm').serialize(),
            url: "/admin/category",
            type: "POST",
            dataType: 'json',
            success: function (data) {
                $('#ItemForm').trigger("reset");
                $('#simpan').html("simpan");
                $('#univModal').modal('hide');
                var table = $('#datatables').DataTable();
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: 'Data berhasil di simpan !',
                    showConfirmButton: true,
                });
                table.draw();
            },
            error: function (data) {
                console.log('Error:', data);
                $('#simpan').html('Save Changes');
            }
        });
    });

    $('#batal').on('click',function(){
        location.reload();
    });

});

function deleteConfirmation(id, name) {
        swal.fire({
            title: "HAPUS?",
            text: "Yakin ingin menghapus data (" + name + ") !",
            icon: "warning",
            showCancelButton: !0,
            cancelButtonText: "Tidak, batal!",
            confirmButtonText: "Ya, Hapus!",
            confirmButtonColor: '#ff0000',
            reverseButtons: 0
        }).then(function (e) {

            if (e.value === true) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    type: 'POST',
                    url: '/admin/category/destroy/'+id,
                    data: {
                        _token: CSRF_TOKEN
                    },
                    dataType: 'JSON',
                    success: function (results) {
                        if (results.success === true) {
                            swal.fire("Berhasil!", results.message, "success").then((result) => {
                                var oTable = $('#datatables').DataTable();
                                oTable.ajax.reload();
                            });
                        } else {
                            swal.fire("Gagal!", results.message, "error").then((result) => {
                                var oTable = $('#datatables').DataTable();
                                oTable.ajax.reload();
                            });
                        }
                    },
                    error: OnError
                });

            } else {
                e.dismiss;
            }

        }, function (dismiss) {
            return false;
        })
    };
    function OnError(xhr, errorType, exception) {
        swal.fire("Gagal!", 'Data yang ingin anda hapus memiliki keterkaitan di data item', "error").then((result) => {
            var oTable = $('#datatables').DataTable();
            oTable.ajax.reload();
        });
    }
</script>
@endsection

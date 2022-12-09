<div id="univModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelheader"></h4>
            </div>
            <form id="form-input" action="{{route('hadist.store')}}"  method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group row">
                        <label for="recipient-name" class="col-form-label">Kategori :</label>
                        <select class="form-control" name="category_id" id="category_id" required>
                            <option value="" selected disabled>Pilih Kategori</option>
                            @foreach ($category as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="recipient-name" class="col-form-label">Arab :</label>
                        <input type="file" class="form-control" name="arab">
                    </div>
                    <div class="form-group row">
                        <label for="recipient-name" class="col-form-label">Latin :</label>
                        <textarea class="form-control" name="latin" id="latin" cols="30" rows="5" placeholder="Isi Disini..." required></textarea>
                    </div>
                    <div class="form-group row">
                        <label for="recipient-name" class="col-form-label">Arti :</label>
                        <textarea class="form-control" name="translation" id="translation" cols="30" rows="5" placeholder="Isi Disini..." required></textarea>
                    </div>
                    <div class="form-group row">
                        <label for="recipient-name" class="col-form-label">Deskripsi :</label>
                        <textarea class="form-control" name="desc" id="desc" cols="30" rows="5" placeholder="Isi Disini..." required></textarea>
                    </div>
                    <div class="form-group row">
                        <label for="recipient-name" class="col-form-label">Jenis :</label>
                        <select class="form-control" name="type" id="type" required>
                            <option value="" selected disabled>Pilih Jenis</option>
                            <option value="Shahih">Shahih</option>
                            <option value="Hasan">Hasan</option>
                            <option value="dhaif">dhaif</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="recipient-name" class="col-form-label">Perawi :</label>
                        <input type="text" name="narator" class="form-control" id="narator"
                            placeholder="Isi disini.." required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="batal" class="btn btn-danger" data-dismiss="modal">BATAL</button>
                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                </div>
            </form>
        </div>
    </div>
</div>

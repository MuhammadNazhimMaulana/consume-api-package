<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Form Data</div>
            <div class="card-body">
                <form action="{{ url('tambah_data') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="userId">Id</label>
                        <input type="text" name="userId" id="userId" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <input type="text" name="body" id="body" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Data</button>
                </form>
            </div>
        </div>
    </div>
</div>

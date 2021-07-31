@extends('layout.template')

@section('title', 'Suhu Tubuh')

@section('content')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Pengukuran Suhu Tubuh</h1>
            </div>
        </div>
    </div>
</div>
<div class="card-body table-responsive">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <form action="{{url ('/suhu/store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                                <label> Pilih Pasien </label>
                                <select class="form-control select2" name="id_pasien" id="id_pasien">
                                    <option disabled value> Pilih Pasien</option>
                                    @foreach ($pasien as $item)
                                    <option value="{{ $item->id_pasien }}"> {{ $item->nama_pasien }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
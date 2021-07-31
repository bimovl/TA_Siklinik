@extends('layout.template')

@section('title', 'Kapasitas Paru')

@section('content')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="pull-left">
        </div>

        <div class="card-body table-responsive">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <form action="{{url ('/paru/grafik')}}" method="get" enctype="multipart/form-data">
                        @csrf
                                <div class="form-group">
                                <label> Pilih Pasien </label>
                            <select class="form-control select2" name="id_pasien" id="id_pasien">
                                <option value> --Pilih Pasien-- </option>
                                @foreach ($pasien as $item)
                                <option value="{{ $item->id_pasien }}"> PS0{{ $item->id_pasien }} -- {{ $item->nama_pasien }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>        
                    </div>
                            
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
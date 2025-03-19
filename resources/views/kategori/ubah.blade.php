@extends('layout.app')
{{--costumize layout sections--}}

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle','Kategori')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"> Kategori</div>
        </div>
        <div class="card-body">
            <form action="{{route ('simpan_ubah',$kategori->kategori_id)}}" method="POST" >
              @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label for="kategori_kode" class="form-label">Kode Kategori</label>
                    <input type="text" class="form-control" id="kategori_kode" name="kategori_kode" value="{{ $kategori->kategori_kode }}" required>
                </div>

                <div class="mb-3">
                    <label for="kategori_nama" class="form-label">Nama Kategori</label>
                    <input type="text" class="form-control" id="kategori_nama" name="kategori_nama" value="{{ $kategori->kategori_nama }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection
{{--Push extra CSS--}}

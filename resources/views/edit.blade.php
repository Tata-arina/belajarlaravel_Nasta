@extends('mainapps')
@section('title') Edit @endsection
@section('content')
    <div class="container py-3">
        <h3 class="fw-bold">Tambahkan Blog</h3>
        <div class="card">
            <div class="card-body">
                <form method="post" action="/updateblog/{{ $posts->id }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class= "mb-3">
                        <label for="penulis" class="form-label">Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis_post"
                         value="{{ $posts->penulis_post}}">
                    </div>
                    <div class= "mb-3">
                        <label for="judul_post" class="form-label">Judul Post</label>
                        <input type="text" class="form-control" id="judul_post" name="judul_post"
                        value="{{ $posts->judul_post}}">
                    </div>
                    <div class= "mb-3">
                        <label for="isi_post" class="form-label">Isi Post</label>
                        <textarea class="form-control" id="isi_post" cols="30" rows="5" name="isi_post">
                        {{ $posts->isi_post}}
                        </textarea>
                    </div>
                    <div class= "mb-3">
                        <label for="gambar_post" class="form-label">Gambar Post</label>
                        <input type="file" class="form-control" id="gambar_post" name="gambar_post" accept="image/*">
                        <input type="hidden" name="oldImage"  value="{{ $posts->gambar_post }}">
                        <img src="{{ asset('storage/' . $posts->gambar_post) }}" class="img-thumbhnail mt-3" width="40%" alt="foto">
                    </div>
                    <div class="text-end">
                        <a href="/home" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-secondary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
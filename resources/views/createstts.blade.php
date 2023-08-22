@extends('mainapps')
@section('title') Create @endsection
@section('content')
    <div class="container py-3">
        <h3 class="fw-bold">Tambahkan Blog</h3>
        <div class="card">
            <div class="card-body">
                <form method="post" action="/saveblog" enctype="multipart/form-data">
                    @csrf
                    <div class= "mb-3">
                        <label for="penulis" class="form-label">Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis_post"
                         placeholder="nama penulis">
                    </div>
                    <div class= "mb-3">
                        <label for="judul_post" class="form-label">Judul Post</label>
                        <input type="text" class="form-control" id="judul_post" name="judul_post"
                         placeholder="judul post">
                    </div>
                    <div class= "mb-3">
                        <label for="isi_post" class="form-label">Isi Post</label>
                        <textarea class="form-control" id="isi_post" cols="30" rows="5" name="isi_post" placeholder="isi post">
                        </textarea>
                    </div>
                    <div class= "mb-3">
                        <label for="gambar_post" class="form-label">Gambar Post</label>
                        <input type="file" class="form-control" id="gambar_post" name="gambar_post" accept="image/*">
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-secondary">Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
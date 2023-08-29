@extends('mainapps')
@section('title')Home @endsection
@section('content')
  <section id="header" class="header">
    <div class="container">
      <h1 class="judul-header"><p class="text-secondary-emphasis fw-bold">Selamat Datang Di <br> Blog Nasta</h1>
    </div>
  </section>

  <section class="py-5" id="blog">
    <div class="container">
      <a href="/createstts" class="btn btn-secondary fw-bold">Tambahkan Blog Anda</a>
      @foreach ($posts as $post)
      <div class="card mb-3 mt-3" style="max-width: 100%;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ asset('storage/' . $post->gambar_post) }}" class="img-fluid rounded-start" alt="...">
    </div>

    <div class="col-md-8">
      <div class="card-body">
        <div class="d-flex justify-content-end" role="group">
          <button type="button" class="btn" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-three-dots"></i>
          </button>
            <ul class="dropdown-menu">
              @if (Auth::user()->id === $post->users_id)
              <li><a class="dropdown-item" href="/edit/{{ $post->id}}">Edit</a></li>
              <li><a class="dropdown-item" href="/delete/{{ $post->id}}">Delete</a></li>
              @else
              <li><a class="dropdown-item" href="">Bagikan</a></li>
              @endif
            </ul>
        </div>
              <h5 class="card-title fw-bold">{{ $post->judul_post }}</h5>
            <p class="card-text">{{ $post->isi_post }}</p>
            <p class="card-text"><small class="text-body-secondary">{{ $post->users['name'] }} </small> <a href="" class="btn"><i class="bi bi-heart"></i> like</a> <a href="" class="btn"><i class="bi bi-chat-text"></i>Comment</a></p>
      </div>
    </div>
  </div>
</div>
  @endforeach
    </div>
    </section>

@endsection

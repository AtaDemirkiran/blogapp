@extends('backend.layout')

@section('content')


      
      <h2>Blog Panele Hoşgeldiniz</h2>

      <hr>
    <div class="container">

        <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Kategoriler</h5>
                  <p class="card-text">Web siteniz için yeni kategoriler ekleyebilirsinz.</p>
                  <a href="{{ route('backend.category.index') }}" class="btn btn-primary">Kategoriler</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Blog</h5>
                  <p class="card-text">Web siteniz için yeni blog ekleyebilirsinz.</p>
                  <a href="{{ route('backend.blog.index') }}" class="btn btn-primary">Blog</a>
                </div>
              </div>
            </div>
          </div>

    </div>

@endsection
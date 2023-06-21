@extends('frontend.layout')
@section('title',$category->title)


@section('content')

    <div class="container" style="margin-top:4%">

        <div class="row">

           <h3>{{ $category->title }}</h3>
          <hr>

            @foreach ($blogs as $blog)
            
              <div class="col-md-4">

                <div class="card">
                    <img class="card-img-top" src="{{ asset('uploads/blog/' . $blog->picture) }}" style="height:250px;object-fit:cover;width:100%" />
                    <div class="card-body">
                      <h5 class="card-title">{{ $blog->title }}</h5>
                      <p class="card-text">{{ $blog->summary }}</p>
                      <a href="{{ route('frontend.blog.detail', ['slug' => $blog->slug, 'id' => $blog->id]) }}" class="btn btn-info">Daha Fazla</a>
                    </div>
                  </div>
                
            </div>

            @endforeach  

          

        </div>

    </div>



@endsection
@extends('frontend.layout')
@section('title','Kategoriler')


@section('content')

    <div class="container" style="margin-top:4%">

        <div class="row">

          @foreach ($categories as $category)
              
        

            <div class="col-md-6 mt-2">

                <div class="card">
                    <img class="card-img-top" src="{{ asset('uploads/category/' . $category->picture) }}" style="height:450px;object-fit:cover;width:100%"  alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">{{ $category->title }}</h5>
                      <p class="card-text">{{ $category->description }}</p>
                      <a href="{{ route('frontend.category.detail', ['slug' => $category->slug, 'id' => $category->id]) }}" class="btn btn-info">İncele</a>
                    </div>
                  </div>
                
            </div>
        
        @endforeach

           

        </div>

    </div>



@endsection
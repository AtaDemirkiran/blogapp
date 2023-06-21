@extends('frontend.layout')

@section('title',$blog->title)


@section('content')


{{-- BURADA BU ŞEKİLDE KULLANMA SEBEBİM AŞAĞIDA DİĞER BLOGLAR KISMINDA KATEGORİ SLUG DEĞERİNİ BAŞARILI BİR ŞEKİLDE ALMAK --}}
@php
    use App\Models\Category;
@endphp

<div class="container" style="margin-top:4%;margin-bottom:4%">

    <div class="card mb-3">
        <img class="card-img-top blog-detail-img" src="{{ asset('uploads/blog/' . $blog->picture) }}">
        <div class="card-body">
          <h5 class="card-title">{{ $blog->title }}</h5>
          <p class="card-text">{{ $blog->description }}</p>


          @php
              $category = Category::find($blog->category_id);
          @endphp
          <a href="{{ route('frontend.category.detail', ['slug' => $category->slug, 'id' => $category->id]) }}" class="btn btn-info">Diğer Bloglar</a>
          
        </div>

        
      </div>

</div>


@endsection
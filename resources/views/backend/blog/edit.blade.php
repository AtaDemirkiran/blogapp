@extends('backend.layout')

@section('content')

        <a href=" {{ route('backend.blog.index') }} " style="float: right;" class="btn btn-warning" >Geri</a>
        <h3>{{ $blog->title }}</h3>

        <hr>

        <form action="{{ route('backend.blog.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
           
          @csrf

          @method('PUT')
      
          <div class="form-group">
            <label for="exampleInputEmail1">Başlık</label>
            <input type="text" value="{{ $blog->title }}" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Başlık Giriniz..">
          </div>
          
      
          <div class="form-group mt-3">
            <img src="{{ asset('uploads/blog/' . $blog->picture) }}" width="150" height="150" />
            <label for="exampleFormControlFile1">Görsel Seçiniz</label> <br>
            <input value="{{ $blog->picture }}" type="file" class="form-control-file" id="exampleFormControlFile1" name="picture">
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Kategori Seçiniz</label>

            <select name="category" class="form-control" id="exampleFormControlSelect1">

              @foreach ($categories as $category)
                <option @if($blog->category_id == $category->id) selected @endif value="{{ $category->id }}"> 
                  {{ $category->title }} 
                </option>
              @endforeach
 
             
            </select>
          </div>

          <div class="form-group mt-3">
            <label for="descriptionPart">Summary</label>
            <textarea value="{{ $blog->summary }}" class="form-control" id="summaryPart"  name="summary" rows="5">{{old('description', $blog->summary) }}</textarea>
          </div>
      
          <div class="form-group mt-3">
            <label for="descriptionPart">Description</label>
            <textarea value="{{ $blog->description }}" class="form-control" id="descriptionPart"  name="description" rows="10">{{old('description', $blog->description) }}</textarea>
          </div>
       
      
          <input type="submit" class="btn btn-primary mt-3" name="" id="" value="Blog Düzenle">
        </form>


@endsection
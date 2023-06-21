@extends('backend.layout')

@section('content')

        <a href=" {{ route('backend.category.index') }} " style="float: right;" class="btn btn-warning" >Geri</a>
        <h3>{{ $category->title }}</h3>

        <hr>

        <form action="{{ route('backend.category.update',$category->id) }}" method="POST" enctype="multipart/form-data">
           
          @csrf

          @method('PUT')
      
          <div class="form-group">
            <label for="exampleInputEmail1">Başlık</label>
            <input type="text" value="{{ $category->title }}" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Başlık Giriniz..">
          </div>
          
      
          <div class="form-group mt-3">
            <img src="{{ asset('uploads/category/' . $category->picture) }}" width="150" height="150" />
            <label for="exampleFormControlFile1">Görsel Seçiniz</label> <br>
            <input value="{{ $category->picture }}" type="file" class="form-control-file" id="exampleFormControlFile1" name="picture">
          </div>
 
      
          <div class="form-group mt-3">
            <label for="descriptionPart">Description</label>
            <textarea value="{{ $category->description }}" class="form-control" id="descriptionPart"  name="description" rows="10">{{ old('description', $category->description) }}
            </textarea>
          </div>
       
      
          <input type="submit" class="btn btn-primary mt-3" name="" id="" value="Kategori Düzenle">
        </form>


@endsection
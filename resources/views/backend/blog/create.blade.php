@extends('backend.layout')

@section('content')

        <a href=" {{ route('backend.blog.index') }} " style="float: right;" class="btn btn-warning" >Geri</a>
        <h3>Blog Adı</h3>

        <hr>

        <form action="{{ route('backend.blog.store') }}" method="POST" enctype="multipart/form-data">
      
          @csrf
      
          <div class="form-group">
            <label for="exampleInputEmail1">Başlık</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Başlık Giriniz..">
          </div>
          
      
          <div class="form-group mt-3">
            <label for="exampleFormControlFile1">Görsel Seçiniz</label> <br>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="picture">
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Kategori Seçiniz</label>
            <select name="category_id" class="form-control" id="exampleFormControlSelect1">

              @foreach ($categories as $category)
              <option value="{{ $category->id }}"> {{ $category->title }} </option>
              @endforeach
 
             
            </select>
          </div>
      
          <div class="form-group mt-3">
            <label for="exampleFormControlTextarea">Summary</label>
            <textarea class="form-control" id="exampleFormControlTextarea"  name="summary" rows="5"></textarea>
          </div>

          <div class="form-group mt-3">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1"  name="description" rows="10"></textarea>
          </div>
       
      
          <input type="submit" class="btn btn-primary mt-3" name="" id="" value="Blog Kaydet">
        </form>


@endsection
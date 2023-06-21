@extends('backend.layout')

@section('content')

        <a href=" {{ route('backend.category.index') }} " style="float: right;" class="btn btn-warning" >Geri</a>
        <h3>Kategori Adı</h3>

        <hr>

<form action="{{ route('backend.category.store') }}" method="POST" enctype="multipart/form-data">
      
    @csrf

    <div class="form-group">
      <label for="exampleInputEmail1">Başlık</label>
      <input type="text" name="title" class="form-control" placeholder="Başlık Giriniz.." required>
    </div>

    <div class="form-group mt-3">
      <label for="picturePart">Görsel Seçiniz</label> <br>
      <input  name="picture" type="file" class="form-control-file" id="picturePart" required>
    </div>

    <div class="form-group mt-3">
      <label for="descPart">Description</label>
      <textarea class="form-control" id="descPart"  name="description" rows="10" required></textarea>
    </div>
 

    <input type="submit" class="btn btn-primary mt-3" name="" id="" value="Kategori Kaydet">
  </form>


@endsection
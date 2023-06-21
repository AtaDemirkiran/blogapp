@extends('backend.layout')

@section('content')

        <a href=" {{ route('backend.category.create') }} " style="float: right;" class="btn btn-success" >Yeni Ekle</a>
        <h3>Kategori Part</h3>

        <hr>

        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Resim</th>
                <th scope="col">Başlık</th>
                <th scope="col">Düzenle</th>
                <th scope="col">Sil</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($categories as $category )
            <tr>
                <th scope="row">{{ $category->id }}</th>
                <td> <img src="{{ asset('uploads/category/' . $category->picture) }}" width="50" height="50" /> </td>
                <td>{{ $category->title }}</td>
                <td> <a href="{{ route('backend.category.edit',$category->id) }}" class="btn btn-primary" >Düzenle</a></td>
                <td> <a href="{{ route('backend.category.delete',$category->id) }}" onclick="deleteCategory()" class="btn btn-danger" >Sil</a></td>
            </tr>
            @endforeach
 
            </tbody>
        </table>



<script>
    function deleteCategory() {
        if (confirm("Bu kategoriyi gönderisini silmek istediğinize emin misiniz?")) {
                return true; // "Evet" seçeneği seçildiğinde işleme devam et
        } else {
            event.preventDefault();
            return false; // "Hayır" seçeneği seçildiğinde işlemi iptal et
        }
    }
</script>

@endsection
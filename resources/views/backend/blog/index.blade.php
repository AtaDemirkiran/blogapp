@extends('backend.layout')

@section('content')

      
        <a href="{{ route('backend.blog.create') }}" style="float: right;" class="btn btn-success" >Yeni Ekle</a>
        <h3>Blog Part</h3>

        <hr>

        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        @if (session('deleteMessage'))
        <div class="alert alert-danger">
            {{ session('deleteMessage') }}
        </div>
    @endif

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Resim</th>
                <th scope="col">Başlık</th>
                <th scope="col">Kategori</th>
                <th scope="col">Düzenle</th>
                <th scope="col">Sil</th>
            </tr>
            </thead>
            <tbody>

                @foreach ($blogs as $blog )
            <tr>
                <th scope="row">{{ $blog->id }}</th>
                <td> <img src="{{ asset('uploads/blog/' . $blog->picture) }}" width="50" height="50" /> </td>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->category->title }}</td>
                <td> <a href="{{ route('backend.blog.edit',$blog->id) }}" class="btn btn-primary" >Düzenle</a></td>
                <td> <a href="{{ route('backend.blog.delete',$blog->id) }}" onclick="deleteBlog()" class="btn btn-danger" >Sil</a></td>
            </tr>
              @endforeach
  
            </tbody>
        </table>

@endsection


<script>
    function deleteBlog() {
        if (confirm("Bu blog gönderisini silmek istediğinize emin misiniz?")) {
             return true; // "Evet" seçeneği seçildiğinde işleme devam et
        } else {
            event.preventDefault();
            return false; // "Hayır" seçeneği seçildiğinde işlemi iptal et
        }
    }
</script>
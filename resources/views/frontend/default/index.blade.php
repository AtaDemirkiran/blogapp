@extends('frontend.layout')

@section('title','Anasayfa')

@section('content')


        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Blog Websiteme Hoşgeldiniz.</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Sizlere bilim, sağlık ,teknoloji ve daha farklı bir çok alan trendleri hakkında güncel bilgilere erişim sağlayan bir platform olarak hizmet veriyoruz. Trendleri takip etmek ve yenilikleri keşfetmek için bizi ziyaret edin!</p>
                        <a class="btn btn-primary btn-xl" href="{{route('frontend.category.index')}}">Kategoriler</a>
                    </div>
                </div>
            </div>
        </header>


@endsection
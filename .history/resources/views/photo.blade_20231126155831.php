@extends('layouts.main')

@section('title', 'photo')
    
@section('content')
    <header id="header" class="wrapper">
        <h1 class="site-title"><a href="#"><img src="img/logo.svg"></a></h1>
    </header>

    <main class="wrapper">
        <div id="mainvisual">
            <img src="img/mainvisual.jpg">
        </div>
        <section id="index">
            <h2 class="sec-title">INDEX</h2>
            <ol>
                <li>タイトルタイトルタイトル</li>
                <li>タイトルタイトルタイトル</li>
                <li>タイトルタイトルタイトル</li>
                <li>タイトルタイトルタイトル</li>
                <li>タイトルタイトルタイトル</li>
            </ol>
        </section>
        <section id="detail">
            <h2 class="sec-title">DETAIL</h2>
            <div class="flex-item">
            
            </div>
            
        </section>
    </main>

    <footer id="footer" class="wrapper">
        <p class="copyright">&copy; 2023 PHOTO BOOK</p>
    </footer>
@endsection

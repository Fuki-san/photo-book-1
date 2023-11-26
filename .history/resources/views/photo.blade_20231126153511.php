@extends('layouts.main')

@section('title', 'photo')
    
@section('content')
    <header id="header">
        <h1 class="site-title"><a href="#"><img src="img/logo.svg"></a></h1>
    </header>

    <main>
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
        <section id="detail"></section>
    </main>

    <footer></footer>
@endsection

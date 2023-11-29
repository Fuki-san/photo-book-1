@extends('layouts.main')

@section('title', 'photo')

@section('content')
    <div class="container">
        <header id="header">
            <h1 class="site-title"><a href="#"><img src="img/logo.svg" alt=""></a></h1>
        </header>

        <main>
            <div class="mainvisual">
                <img src="img/mainvisual.jpg" alt="">
            </div>
            <section id="index">
                <div class="content">
                    <h2 class="sec-title">INDEX</h2>
                    <ol class="index-list">
                        <li>タイトルタイトルタイトル</li>
                        <li>タイトルタイトルタイトル</li>
                        <li>タイトルタイトルタイトル</li>
                        <li>タイトルタイトルタイトル</li>
                        <li>タイトルタイトルタイトル</li>
                    </ol>
                </div>
            </section>
        </main>
        <footer></footer>
    </div>
@endsection

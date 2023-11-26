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
        <section id="detail">
            <h2 class="sec-title">DETAIL</h2>
            <div class="detail-img">
                <img src="img/detail.jpg">
            </div>
            <div class="detail-text">
                <h2 class="sec-title">タイトルタイトルタイトル</h2>
                <dl>
                    <dt>著者</dt><dd>タイトル</dd>
                    <dt>出版社</dt><dd></dd>
                    <dt>発行年</dt><dd></dd>
                </dl>
            </div>
        </section>
    </main>

    <footer></footer>
@endsection

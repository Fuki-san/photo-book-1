@extends('layouts.main')

@section('title', 'photo')

@section('content')
    <div class="container">
        <header id="header">
            <h1 class="site-title">
                <a href="index.html"><img src="img/logo.svg" alt="PHOTO BOOK"></a>
            </h1>
        </header>

        <main>
            <div id="mainvisual">
                <img src="img/mainvisual.jpg" alt="テキストテキストテキスト">
            </div>

            <section id="index">
                <div class="inner">
                    <h2 class="section-title">INDEX</h2>
                    <ol class="index-list">
                        <li>タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</li>
                        <li>タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</li>
                        <li>タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</li>
                        <li>タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</li>
                        <li>タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</li>
                    </ol>
                </div>
            </section>

            <section id="detail">
                <div class="inner">
                    <h2 class="section-title">DETAIL</h2>
                    <div class="content">
                        <img class="img" src="img/detail.jpg" alt="">
                        <div class="text">
                            <p class="title">タイトルタイトルタイトル</p>
                            <dl>
                                <dt>著者</dt>
                                <dd>タイトルタイトルタイトル</dd>
                                <dt>出版社</dt>
                                <dd>タイトルタイトルタイトル</dd>
                                <dt>発行年</dt>
                                <dd>タイトルタイトルタイトル</dd>
                            </dl>
                            <p>
                                テキストテキストテキストテキストテキストテキスト
                                テキストテキストテキストテキストテキストテキスト
                            </p>
                            <a class="link" href="#" target="_blank" rel="noopener noreferrer">オンラインストアで見る</a>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer id="footer">
            <p class="inner">&copy; 2020 PHOTO BOOK</p>
        </footer>
    </div>
@endsection

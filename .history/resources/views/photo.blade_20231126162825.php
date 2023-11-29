@extends('layouts.main')

@section('title', 'photo')

@section('content')
    <div class="container">
        <header id="header">
            <h1 class="site-title"><a href="#"><img src="img/logo.svg"></a></h1>
        </header>

        <main>
            <div id="mainvisual">
                <img src="img/mainvisual.jpg">
            </div>

            <section id="index">
                <div class="inner">
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

            <section id="detail">
                <div class="inner">
                    <h2 class="sec-title">DETAIL</h2>
                    <div class="content">
                            <img src="img/detail.jpg">
                    
                        <div class="text">
                            <p></p>
                            <dl>
                                <dt>著者</dt>
                                <dd>タイトル</dd>
                                <dt>出版社</dt>
                                <dd>タイトル</dd>
                                <dt>発行年</dt>
                                <dd>タイトル</dd>
                            </dl>
                            <p>テキストテキストテキストテキストテキスト</p>
                            <a href="#">オンラインストアで見る</a>
                        </div>
                    </div>
                </div>

            </section>
        </main>

        <footer id="footer">
            <p class="copyright">&copy; 2023 PHOTO BOOK</p>
        </footer>
    </div>
@endsection

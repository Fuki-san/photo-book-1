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

            <section id="detail">
                <div class="content">
                    <h2 class="sec-title">DETAIL</h2>
                    <div class="detail-img"><img src="img/detail.jpg" alt=""></div>
                    <div class="text">
                        <h2 class="title">タイトルタイトルタイトル</h2>
                        <dl class="detail-deflist">
                            <dt>著者</dt><dd>タイトルタイトル</dd>
                            <dt>出版社</dt><dd>タイトルタイトル</dd>
                            <dt>発行年</dt><dd>タイトルタイトル</dd>
                        </dl>
                        <p>テキストテキストテキストテキストテキスト</p>
                        <a href="#">オンラインストアで見る</a>
                    </div>
                </div>
            </section>
        </main>

        <footer id="footer">
            <p class="copyright">&copy; 2023</p>
        </footer>
    </div>
@endsection

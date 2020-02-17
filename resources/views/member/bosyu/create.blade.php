
{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')

{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'ニュースの新規作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1>見出し１</h1>
                <h2>ニュース新規作成</h2>
                <h3>見出し３</h3>
                <ul>
                    <li>リスト</li>
                    <li>リスト</li>
                    <li>リスト</li>
                </ul>


            </div>
        </div>
    </div>
@endsection

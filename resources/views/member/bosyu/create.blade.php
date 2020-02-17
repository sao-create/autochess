
{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.member')

{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', '募集新規作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>メンバー募集新規作成</h2>
                <form action="{{ action('Member\BosyuController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="dropholder">
                        <p>Select</p>
                        <div class="dropdown">
                            <p><i class="fa fa-foursquare"></i> Please Rate</p>
                        </div>
                        <ul class="menu">
                            <li><i class="fa fa-thumbs-down"></i> Ugly</li>
                            <li><i class="fa fa-thumbs-up"></i> Not bad</li>
                            <li><i class="fa fa-bolt"></i> Ok it's good</li>
                            <li><i class="fa fa-star"></i> Very Nice works</li>
                            <li><i class="fa fa-heart"></i> Wow how you did it</li>
                        </ul>
                    </div>


                    <div class="form-group row">
                        <label class="col-md-2">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection

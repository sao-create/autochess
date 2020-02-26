@extends('layouts.common')
@section('content')

　<div class="parent">
    <div class="img"><img src="https://cdn.pixabay.com/photo/2018/04/16/15/52/chess-3325010_960_720.jpg"></div>
    <h2>AUTO CHESS ORIGINで仲間と戦おう</h2>
    <a href="{{ action('Member\BosyuController@index') }}"><p class="topbutton"><i class="fas fa-search"></i>仲間を探す</p></a>
  </div>
  <div class="parent">
    <div class="img"><img src="https://cdn.pixabay.com/photo/2018/08/18/21/54/chess-3615548_960_720.jpg"></div>
    <h2>AUTO CHESS ORIGINを攻略する</h2>
    <a href="{{ action('Member\CaptureController@index') }}"><p class="topbutton"><i class="far fa-clipboard"></i>攻略掲示板へ</p></a>
  </div>
  <div class="parent">
    <div class="img"><img src="https://cdn.pixabay.com/photo/2017/04/25/07/39/chess-2258804_960_720.jpg"></div>
    <h2>AUTO CHESS ORIGINで仲間と戦おう</h2>
    <p class="topbutton"><i class="fas fa-search"></i>仲間を探す<a href="{{ action('Member\BosyuController@index') }}"></p>
  </div>


@endsection



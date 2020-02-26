<header class="visible">
<nav id="headerNav">
 <div id="navber">
    <h1 class=""><a href=""><img src="{{ asset('public/logo.svg') }}" alt="ATTACK AUTO CHESS"></a></h1>
    <nav>
        <ul class="nav">
          <li class="TOP"><a href="{{ action('BosyuController@index') }}">TOP</a>
            <p class="subtext"></p>
          </li>
             <li class="仲間を探す"><a href="{{ action('Member\BosyuController@index') }}">仲間を探す</a>
          </li>
          <li class="仲間を募集する"><a href="{{ action('Member\BosyuController@create') }}">仲間を募集する</a>
            <p class="subtext"></p>
          </li>
          <li class="攻略掲示板"><a href="{{ action('Member\CaptureController@index') }}">攻略掲示板</a>
            <p class="subtext"></p>
          </li>
          <li></i><a href="{{ action('HomeController@index') }}">ログイン</a></li>
        </ul>
    </nav>
  </div>
</nav>
</header>


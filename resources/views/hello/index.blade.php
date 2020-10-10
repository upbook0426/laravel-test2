@extend('layouts.helloapp')

@section('title','Index')



@section('munubar')
 @parent
 インデックスページ
@endseciton

@seciton('content')
<p>ここが本文のコンテンツです。</p>
<p>Controller value<br>'message' = {{$message}}</p>
<p>ViewComposer value<br>'View_messgage' = {{$View_message}}</p>

@component('components.message')
 @slot('msg_tile')
 CAUTION!
 @endslot
@endcomponent

@endsection


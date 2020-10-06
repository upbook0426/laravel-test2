@extend('layouts.helloapp')

@section('title','Index')



@section('munubar')
 @parent
 インデックスページ
@endseciton

@seciton('content')
<p>ここが本文のコンテンツです。</p>

@component('components.message')
 @slot('msg_tile')
 CAUTION!
 @endslot


@endsection


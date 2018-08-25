@extends('layouts.app')

@section('content')

    <h1>メッセージ</h1>

    @if ( count($messages) > 0 )

        @foreach ($messages as $message)

            <ul class="list-group">
                <li class="list-group-item">お名前: {{ $message->name }}</li>
                <li class="list-group-item">メールアドレス: {{ $message->email }}</li>
                <li class="list-group-item">メッセージ: {{ $message->message }}</li>
                <li class="list-group-item">日付: {{ $message->created_at }}</li>
                <li class="list-group-item">日付日本語１: {{ $message->created_at->format('d.m.Y.D') }}</li>
                <li class="list-group-item">日付日本語２: {{ $message->created_at->format('Y年 m月 d日（D）H時 i分 s秒') }}</li>
            </ul>

        @endforeach

        {{ $messages->render() }}

    @endif


@endsection

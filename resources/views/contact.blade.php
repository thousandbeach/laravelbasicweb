@extends('layouts.app')

@section('content')
  <h1>お問い合わせ</h1>
  {!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
      {{Form::label('name', 'お名前')}}
      {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'お名前'])}}
    </div>
    <div class="form-group">
      {{Form::label('email', 'メールアドレス')}}
      {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'メールアドレス'])}}
    </div>
    <div class="form-group">
      {{Form::label('message', 'メッセージ')}}
      {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'メッセージ'])}}
    </div>
    <div>
      {{Form::submit('送 信', ['class'=> 'btn btn-primary'])}}
    </div>
  {!! Form::close() !!}
@endsection

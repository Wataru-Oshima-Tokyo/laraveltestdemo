@extends('layout')

@section('content')

<div class="mx-auto py-2 text-center">
  <h1>Contact Form</h1>

<form method="POST" action="{{ route('contact.send') }}">
  @csrf
  <div class="container-md" style="width: 80%;">
    <div class="mb-3">
      <label>お名前：</label>
      {{ $inputs['name'] }}
      <input
          name="name"
          value="{{ $inputs['name'] }}"
          type="hidden">
    </div>
    <div class="mb-3">
      <label>メールアドレス：</label>
      {{ $inputs['email'] }}
      <input
          name="email"
          value="{{ $inputs['email'] }}"
          type="hidden">

    </div>


    <div class="mb-3">
      <label>ご用件：</label>
      <!-- {{ $inputs['title'] }} -->
      {{ $inputs['title'] }}
      <input
          name="title"
          value="{{ $inputs['title'] }}"
          type="hidden">
    </div>
    <div class="mb-3">
      <label>お問い合わせ内容</label>
      <br>
      {!! nl2br(e($inputs['body'])) !!}
      <input
          name="body"
          value="{{ $inputs['body'] }}"
          type="hidden">
    </div>

    <button type="submit" name="action" value="back" class="btn btn-warning">
        入力内容修正
    </button>
    <button type="submit" name="action" value="submit" class="btn btn-primary">
        送信する
    </button>
  </div>
</div>
</form>
@endsection

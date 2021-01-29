@extends('layout')

@section('content')
<div class="mx-auto py-2 text-center">
  <h1>Contact Form</h1>
</div>
<form method="POST" action="{{ route('contact.confirm') }}">
  @csrf
  <div class="container-md" style="width: 80%;">
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Your Name</label>
      <input
      name="name" class="form-control  text-center" placeholder="John　Smith">
      @if ($errors->has('name'))
          <p class="error-message">{{ $errors->first('name') }}</p>
      @endif
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Your e-mail address</label>
      <input name="email"
      value="{{ old('email') }}"
      type="email" class="form-control  text-center" id="exampleFormControlInput1" placeholder="name@example.com">
      @if ($errors->has('email'))
          <p class="error-message">{{ $errors->first('email') }}</p>
      @endif

    </div>


    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">ご用件</label>
      <div class="form-check">
        <input
        class="form-check-input" type="radio" value="お仕事の依頼に関して" name="title" checked>
        <label class="form-check-label">
          お仕事の依頼に関して
       </label>
     </div>
     <div class="form-check">
       <input
       class="form-check-input" type="radio" value="作品に関して" name="title" >
       <label class="form-check-label">
         作品に関して
       </label>
    </div>
   <div class="form-check">
     <input
     class="form-check-input" type="radio" value="その他" name="title">
     <label class="form-check-label">
       その他
     </label>

    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">The content</label>
      <textarea name="body" class="form-control" rows="3"></textarea>
      @if ($errors->has('body'))
          <p class="error-message">{{ $errors->first('body') }}</p>
      @endif
    </div>
    <p>If you have anything you want to ask or talk about a job, please hit the below buton and email me.</p>
    <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Submit</button>
  </div>

</form>
@endsection

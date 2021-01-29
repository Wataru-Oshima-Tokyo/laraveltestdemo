@extends('layout')

@section('content')
<div class="mx-auto py-2 text-center">
  <h1>Contact Form</h1>
</div>
<form method="POST" action="{{ route('contact.confirm') }}">
  <div class="container-md" style="width: 80%;">
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Your Name</label>
      <input
      name="name" class="form-control" placeholder="John　Smith">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Your e-mail address</label>
      <input name="email"
      value="{{ old('email') }}"
      type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      @if ($errors->has('email'))
          <p class="error-message">{{ $errors->first('email') }}</p>
      @endif

    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Your email address</label>
      <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>


    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">ご用件</label>
      <div class="form-check">
        <input
        class="form-check-input" type="radio" value="お仕事の依頼に関して" name="flexRadio" checked>
        <label class="form-check-label" for="flexRadioDefault1">
          お仕事の依頼に関して
       </label>
     </div>
     <div class="form-check">
       <input
       class="form-check-input" type="radio" value="作品に関して" name="flexRadio" >
       <label class="form-check-label" for="flexRadioDefault2">
         作品に関して
       </label>
    </div>
   <div class="form-check">
     <input
     class="form-check-input" type="radio" value="その他" name="flexRadio">
     <label class="form-check-label" for="flexRadioDefault3">
       その他
     </label>

    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">The content</label>
      <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      @if ($errors->has('body'))
          <p class="error-message">{{ $errors->first('body') }}</p>
      @endif
    </div>
    <p>If you have anything you want to ask or talk about a job, please hit the below buton and email me.</p>
    <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Submit</button>
  </div>

</form>

@endsection

@extends("nav")
@section('content')
<form  class="mx-auto col-sm-12 col-md-6 col-lg-6 border border-5  p-3" method="POST" action="/register">
    @csrf
    <div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" name="name" class="form-control">
          <!-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" > -->
          <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="text" name="email" class="form-control">
          <!-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" > -->
          <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <!-- <input type="password" class="form-control" id="exampleInputPassword1"> -->
          <input type="text" name="password" class="form-control">
      
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection
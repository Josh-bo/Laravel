@extends('Noteapp.index')
{{-- NOTE BLADE --}}
@section('content')
<div class="">
    <div class="rounded text-center">
        <div class="col-sm-12 col-md-8 shadow p-5 rounded-5  col-lg-5 mx-auto">
            <form action="/noteApp_process" method="post" enctype="multipart/form-data">
                @csrf
                <h4>CREATE NOTE</h4>
                <div class="col-sm-12">
                    <input type="text" name="title" id="" class="form-control my-3" placeholder="Enter Note Title">
                </div>
                
                
                <div class="col-sm-12">
                    <textarea type="text" name="content" id="" class="form-control my-3" placeholder="Enter Note Content Here"></textarea>
                </div>
                <div class="col-sm-12">
                    <input type="file" name="image" id="" class="form-control my-3">
                </div>

                <div>
                    <button class="btn btn-dark border-0 w-100" type="submit">Create Note</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@extends('Noteapp.index')
{{-- NOTE BLADE --}}
@section('content')
<div class="">
    <div class="rounded text-center">
        <div class="col-sm-12 col-md-8 shadow p-5 rounded-5  col-lg-5 mx-auto">
            <form action="/displayNote/edit/{{$note->note_id}}" method="post">
                @csrf
                <h4>UPDATE NOTE</h4>
                <div class="col-sm-12">
                    <input type="text" name="title" id="" class="form-control my-3" placeholder="Enter Note Title" value="{{$note->title}}">
                </div>

                
                <div class="col-sm-12">
                    <textarea type="text" name="content" id="" class="form-control my-3" placeholder="Enter Note Content Here">{{$note->content}}</textarea>
                </div>

                <div>
                    <button class="btn btn-success border-0 w-100" type="submit">Update Note</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
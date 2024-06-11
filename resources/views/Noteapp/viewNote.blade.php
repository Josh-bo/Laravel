@extends('Noteapp.index')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4 mx-auto p-3 shadow-lg rounded">
            <p class="text-center fw-bold fs-5">Title: {{$note->title}}</p><hr>
            <p class=""><span class="fw-bold">Content :</span> {{$note->content}}</p>
            
            {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius laboriosam vero quisquam commodi molestiae. Placeat vel voluptate architecto accusantium quos consequuntur sint, impedit ipsa itaque praesentium, tenetur, facere ad natus.</p> --}}
            <img src="/images/{{$note->user_img}}" alt="image" class="rounded-5 img-fluid w-100" style="height:400px">
            <p class="mt-5 "><span class="fw-bold">Date / Time :</span> {{$note->createdAt}}</p>
        </div>
    </div>
</div>
@endsection
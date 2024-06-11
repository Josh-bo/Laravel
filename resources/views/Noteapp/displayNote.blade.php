
{{-- DISPLAY CODE --}}
@extends('Noteapp.index')
@section('content')
    <div class="container mt-5">
        <div class="mx-auto text-center">
          @if (Auth::user())
            <table class="table table-striped">
                    <th>
                        S/N
                    </th>
                    <th>
                        TITLE
                    </th>
                    {{-- <th>
                        CONTENT
                    </th>--}}
                    <th>
                        IMAGES
                    </th>
                    <th>
                        BUTTON
                    </th>

                @foreach ($allNote as $note) 
                <tr>
                    <td>{{$note->note_id}}</td>
                    <td>{{$note->title}}</td>
                    <td class="mt-3">
                        <img src="/images/{{$note->user_img}}" alt="image" style="height: 30px; border-radius:50%;  width:30px">
                    </td>
                    {{-- <td>{{$note->content}}</td> --}}
                    {{-- <td>{{$note->createdAt}}</td> --}}
                    <td class="d-flex gap-4 mx-auto justify-content-center">
                        <a href="/displayNote/edit/{{$note->note_id}} " class="nav-link">
                        <button class="btn btn-warning">Edit</button>
                    </a>

                    <a href="/displayNote/delete/{{$note->note_id}}">
                        <button class="btn btn-danger">Delete</button>
                    </a>

                        <a href="/viewNote/{{$note->note_id}}">
                            <button class="btn btn-success">View</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </table>
            @else
                <div>You are currently logged out</div>
            @endif

        </div>
    </div>
@endsection

{{-- DISPLAY CODE --}}
@extends('Noteapp.index')
@section('content')
    <div class="container">
        <div class="mx-auto text-center">
            <table class="table table-control">
                    <th>
                        S/N
                    </th>
                    <th>
                        TITLE
                    </th>
                    <th>
                        CONTENT
                    </th>
                    <th>
                        DATE
                    </th>
                    <th>
                        BUTTON
                    </th>

                @foreach ($allNote as $note) 
                <tr>
                    <td>{{$note->note_id}}</td>
                    <td>{{$note->title}}</td>
                    <td>{{$note->content}}</td>
                    <td>{{$note->createdAt}}</td>
                    <td>
                        <button class="btn btn-warning">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                @endforeach
            </table>

        </div>
    </div>
@endsection
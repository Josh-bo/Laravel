
{{-- DISPLAY CODE --}}
@extends('student.index')
@section('content')
    <div class="container mt-5">
        <div class="mx-auto text-center">
            <table class="table table-striped">
                    <th>
                        S/N
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        Phone Number
                    </th>
                    <th>
                        Address
                    </th>
                 
                    <th>
                        BUTTON
                    </th>

                @foreach ($student as $student) 
                <tr>
                    <td>{{$student->student_Id}}</td>
                    <td>{{$student->full_name}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->phone_number}}</td>
                    <td>{{$student->address}}</td>
                    {{-- <td>{{$student->content}}</td> --}}
                    {{-- <td>{{$student->createdAt}}</td> --}}
                    <td class="d-flex gap-4 mx-auto justify-content-center">
                        <a href="/displaystudent/edit/{{$student->student_id}} " class="nav-link">
                        <button class="btn btn-warning">Edit</button>
                    </a>

                    <a href="/displaystudent/delete/{{$student->student_id}}">
                        <button class="btn btn-danger">Delete</button>
                    </a>

                        <a href="/viewstudent/{{$student->student_id}}">
                            <button class="btn btn-success">View</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </table>

        </div>
    </div>
@endsection
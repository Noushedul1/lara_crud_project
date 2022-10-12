@extends('master')
@section('title')
    Manage Students
@endsection
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2 my-3">
                <h4 class="text-center text-success">{{ Session::get('updatemsg') }}</h4>
                <h4 class="text-center text-danger">{{ Session::get('deletemsg') }}</h4>
                <table class="table table-bordered text-center">
                    <tr>
                        <th>No :</th>
                        <th>Student ID: </th>
                        <th>Name :</th>
                        <th>Email :</th>
                        <th>Country :</th>
                        <th>Action :</th>
                    </tr>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->country }}</td>
                            <td>
                                <a href="{{ route('edit',['id'=>$student->id]) }}" class="btn btn-success btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="" class="btn btn-danger btn-sm" onclick="deleteStudent({{ $student->id }})">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <form action="{{ route('delete',['id'=>$student->id]) }}" method="POST" id="deleteStudentForm{{ $student->id }}">
                                    @csrf
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    <script>
        function deleteStudent(id){
            event.preventDefault();
            var check = confirm("Are You Sure?");
            if(check){
                document.getElementById('deleteStudentForm'+id).submit();
            }
        }
    </script>
@endsection
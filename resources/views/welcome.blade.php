@extends('layout.main')
@section('content')

<div>

    <h1 class="text-center mt-5">Student List</h1>

    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-9">
                @if (session('successMsg'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('successMsg') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                        <tr>
                            <th scope="row">{{ $student->id }}</th>
                            <td>{{ $student->first_name }}</td>
                            <td>{{ $student->last_name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->phone }}</td>
                            <td>
                                <a class="btn btn-flat btn-sm btn-green" href="{{ route('edit', $student->id) }}"><i class="fas fa-pen white-text"></i></a>

                                <form style="display: none;" method="POST" id="delete-form-{{ $student->id }}" action="{{ route('delete', $student->id) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                </form>


                                <!-- Button trigger modal-->
                                <button onclick="if (confirm('Are you sure to delete this data?')) {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $student->id }}').submit();
                                }else {
                                    event.preventDefault();
                                }" class="btn btn-flat btn-sm btn-red ml-2" data-toggle="modal" data-target="#modalPush"><i class="fas fa-trash white-text"></i></button>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mx-auto mt-5" style="width: 120px;">{{ $students->links() }}</div>
            </div>
        </div>
    </div>



</div>

@endsection

@extends('templates')

@section('content')
    <div class="p-10">
        <div class="card w-auto bg-base-100 shadow-xl">
            @include('students-page.error-form')
            <div class="card-body pt-0">
                <div class="overflow-x-auto">
                    <a href="{{ route('students.create') }}" class="btn btn-accent text-white px-10 rounded-full shadow-md my-5">+
                        Add</a>
                    <table class="table table-compact w-full text-center mb-5">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NIS</th>
                                <th>Name</th>
                                <th>Majors</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nis }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->majors->name }}</td>
                                    <td>
                                        <form action="" method="post">
                                            @csrf
                                            <button class="btn btn-warning btn-sm btn-outline">Edit</button>
                                        </form>
                                        <button class="btn btn-error btn-sm btn-outline">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $data->links('pagination::tailwind') }}
                </div>
            </div>
        </div>
    </div>
@endsection

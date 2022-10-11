@extends('templates')

@section('content')
    <div class="p-10">
        <div class="card w-auto bg-base-100 shadow-xl">
            <div class="card-body">
                <div class="overflow-x-auto">
                    <a href="{{ route('students.create') }}" class="btn btn-accent text-white px-10 rounded-full my-5">+ Add</a>
                    <table class="table table-compact w-full">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NIS</th>
                                <th>Name</th>
                                <th>Majors</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nis }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->majors->name }}</td>
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

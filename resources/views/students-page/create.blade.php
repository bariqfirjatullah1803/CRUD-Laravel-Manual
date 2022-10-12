@extends('templates')
@section('content')
    <div class="p-10 flex justify-center">
        <div class="card w-8/12 bg-base-100 shadow-xl">
            @include('students-page.error-form')
            <form method="POST" action="{{ route('students.store') }}" class="card-body mx-auto w-10/12">
                @csrf
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text">NIS</span>
                    </label>
                    <input type="text" placeholder="Type here" class="input input-bordered w-full" name="nis" />
                </div>
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text">Name</span>
                    </label>
                    <input type="text" placeholder="Type here" class="input input-bordered " name="name" />
                </div>
                <div class="form-control w-full max-full">
                    <label class="label">
                        <span class="label-text">Majors</span>
                    </label>
                    <select class="select select-bordered" name="majors_id">
                        @foreach ($data as $d)
                            <option value="{{ $d->id }}" @selected(old('majors_id') == $d)> {{ $d->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn rounded-lg btn-accent text-white" type="submit">Add</button>
            </form>
        </div>
    @endsection

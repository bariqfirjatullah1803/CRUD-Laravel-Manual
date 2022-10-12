@extends('templates')
@section('content')
    <div class="p-10 flex justify-center">
        <div class="card w-8/12 bg-base-100 shadow-xl">
            @include('students-page.error-form')
            <form method="POST" action="{{ route('students.update',$data['students']->id) }}" class="card-body mx-auto w-10/12">
                @csrf
                @method('PUT')
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text">NIS</span>
                    </label>
                    <input type="text" placeholder="Type here" class="input input-bordered w-full" name="nis" value="{{ $data['students']->nis }}" readonly/>
                </div>
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text">Name</span>
                    </label>
                    <input type="text" placeholder="Type here" class="input input-bordered " name="name"  value="{{ $data['students']->name }}"/>
                </div>
                <div class="form-control w-full max-full">
                    <label class="label">
                        <span class="label-text">Majors</span>
                    </label>
                    <select class="select select-bordered" name="majors_id">
                        @foreach ($data['majors'] as $majors)
                            <option value="{{ $majors->id }}" @if ($data['students']->majors_id == $majors->id) {{ 'selected' }}@endif> 
                                {{ $majors->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <button class="btn rounded-lg btn-accent text-white" type="submit">Add</button>
            </form>
        </div>
    @endsection

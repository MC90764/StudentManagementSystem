@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="home-title">Dashboard</h1>
        </div>

            <div class="col-lg-12">
                <form action="{{ route('dashboard.store') }}" method="POST" enctype="multipart/form">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="col">
                                        <input type="text" class="form-control" placeholder="Student name" name="name">
                                        </div>
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <label for="upload"> Student photo:</label>
                                        <input type="file" name="image">
                                        </div>

                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="col">
                                        <input type="number" class="form-control" placeholder="Age" name="age">
                                        </div>
                                    </div>


                                    <div class="input-group mb-3">
                                        <select class="form-select" id="inputGroupSelect02">
                                        <option selected>Choose</option>
                                        <option value="0">Active</option>
                                        <option value="1">Inactive</option>
                                        </select>

                                    </div>
                                </div>
                        </div>

                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <button type="submit" class="btn btn-success">
                        Submit
                        </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-12">
                <table class="table table-dark">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Age</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($students as $key => $student)
                        <tr>
                            <th scope="row">{{ $key++ }}</th>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->image }}</td>
                            <td>{{ $student->age }}</td>

                            <td>
                                @if ($student->status==0)
                                    <span class="badge bg-success">Active</span>
                                @else
                                <span class="badge bg-warning">Inctive</span>
                                @endif
                            </td>
                            <td><a href="{{ route('dashboard.destroy',$student->id) }}" class="btn btn-danger">Delete </a>
                            <a href="{{ route('dashboard.activate',$student->id) }}" class="btn btn-primary">Activate </a>
                            <a href="{{ route('dashboard.deactivate',$student->id) }}" class="btn btn-success">Deactivate </a></td>
                        </tr>
                    @endforeach





                    </tbody>
                  </table>
            </div>

    </div>
</div>
@endsection


@push('css')
<style>
.home-title
{
    padding-top: 1vh;
    font-size: 5rem;
    color: rgb(146, 23, 23);
}

</style>

@endpush

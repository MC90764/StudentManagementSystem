@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="home-title">Home</h1>
        </div>
    </div>
</div>
@endsection


@push('css')
<style>
.home-title
{
    padding-top: 12vh;
    font-size: 5rem;
    color: rgb(23, 146, 140);
}
</style>

@endpush

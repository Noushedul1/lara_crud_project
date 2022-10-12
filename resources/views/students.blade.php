@extends('master')
@section('title')
    Add Students
@endsection
@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2 my-3">
            <div class="card card-body">
                <h1 class="text-center text-success">Add Students</h1>
                <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
                <form action="{{ route('addstudents') }}" method="POST">
                    @csrf
                    <div class="row form-group my-2">
                        <label for="" class="form-label col-md-3">Name : </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="row form-group my-2">
                        <label for="" class="form-label col-md-3">Email : </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="row form-group my-2">
                        <label for="" class="form-label col-md-3">Country : </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="country">
                        </div>
                    </div>
                    <div class="row form-group my-2">
                        <label for="" class="form-label col-md-3"></label>
                        <div class="col-md-9">
                            <input type="submit" class="btn btn-success" name="submit" value="Add Students">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layout.main')

@section('title', 'Contact')

@section('heading')
<div class="mt-5">
    <h1 class="font-weight-bold mb-2">Contact me</h1>
    <p class="text-c-grey">Have questions? I have answers!</p>
</div>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 py-3">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <textarea cols="35" rows="5" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-info text-uppercase">send</button>
                </form>
            </div>
        </div>
    </div>
@endsection

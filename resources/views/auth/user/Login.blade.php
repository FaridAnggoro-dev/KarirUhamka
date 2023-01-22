@extends('layouts.app')

@section('content')
<section id="login">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 border border-1 m-5 p-5">
                <h3 class="text-center mb-3">Masuk CareerSeeker</h3>
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="button">Masuk</button>
                    </div>
                    <p class="text-center m-auto mt-2 mb-2">atau</p>
                    <div class="d-grid gap-2">
                        <a href="{{route('user.login.google')}}" class="btn btn-primary" type="button"><i class="bi bi-google p-3"></i>Masuk dengan Google</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
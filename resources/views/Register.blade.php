@extends('layouts.app')

@section('content')
<section id="login">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 border border-1 m-5 p-5">
                <h3 class="text-center mb-3">Daftar</h3>
                <form class="row g-3">
                    <div class="col-md-6 mt-4">
                        <input type="text" class="form-control" placeholder="Nama Depan" aria-label="First name">
                    </div>
                    <div class="col-md-6 mt-4">
                        <input type="text" class="form-control" placeholder="Nama Belakang" aria-label="Last name">
                    </div>
                    <div class="col-12 mt-4">
                        <input type="email" class="form-control" placeholder="Email" aria-label="Email" id="inputEmail4">
                    </div>
                    <div class="col-12 mt-4">
                        <input type="password" class="form-control" placeholder="Kata Sandi" aria-label="Kata Sandi" id="inputPassword4">
                    </div>
                    <div class="col-12 mt-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Check me out
                            </label>
                        </div>
                    </div>
                    <div class="d-grid gap-2 mt-4">
                        <button class="btn btn-primary" type="button">Daftar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
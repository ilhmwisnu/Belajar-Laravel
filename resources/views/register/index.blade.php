@extends('layouts.main_layout')
<style>
    .form-signin {
        max-width: 330px;
        padding: 15px;
    }

    .form-signin .form-floating:focus-within {
        z-index: 2;
    }

    .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .form-signin input[type="text"] {
        margin: -1px 0px;
        border-radius: 0
    }

    .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
</style>

@section('container')
    <div class="text-center mt-5">
        <main class="form-signin w-100 m-auto">
            <form method="POST" action="">
                @csrf
                <h1 class="h3 mb-3 fw-normal">Register</h1>
                <div class="form-floating">
                    <input type="email" class="form-control @error("email")
                    is-invalid
                    @enderror" name="email" id="floatingInput">
                    <label for="floatingInput">Email address</label>
                    @error("email")
                        <div class="invalid-feedback mb-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control @error("username")
                    is-invalid
                    @enderror" id="username">
                    <label for="username">Username</label>
                    @error("username")
                        <div class="invalid-feedback mb-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control @error("password")
                    is-invalid
                    @enderror" id="floatingPassword">
                    <label for="floatingPassword">Password</label>
                    @error("password")
                        <div class="invalid-feedback mb-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
            </form>
            <p>Already have account ? <a href="/login">Login</a></p>
        </main>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="col-4 bg-white p-4 rounded">
            @if (session('status'))
                <div class="bg-danger text-white p-4 rounded mb-6 text-center">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label form="email" class="visually-hidden">email</label>
                    <input type="text" name="email" id="email" placeholder="email"
                        class="bg-light border border-2 border-gray-100 w-100 p-4 rounded @error('email')
            border border-danger" @enderror value="{{ old('email') }}">
                    @error('email')
                        <div class="text-danger mt-2 small">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label form="password" class="visually-hidden">password</label>
                    <input type="password" name="password" id="password" placeholder="password"
                        class="bg-light border border-2 border-gray-100 w-100 p-4 rounded @error('password')
            border border-danger" @enderror value="">
                </div>
                @error('password')
                    <div class="text-danger mt-2 small">
                        {{ $message }}
                    </div>
                @enderror
                <div class="mb-3 form-check">
                    <input type="checkbox" name="remember" id="remember" class="form-check-input">
                    <label for="remember" class="form-check-label">Remember me</label>
                </div>
                <button type="submit" class="bg-primary text-white px-4 py-3 rounded font-weight-medium w-100 ">
                    Login
                </button>
        </div>
        </form>

    </div>
    </div>
@endsection

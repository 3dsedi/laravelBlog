@extends('layouts.app')

@section('content')
   <div class="d-flex justify-content-center">
      <div class="col-4 bg-white p-4 rounded">
        <form action="{{route('register')}}" method="POST">
          @csrf
          <div class="mb-4">
            <label form="name" class="visually-hidden">name</label>
            <input type="text" name="name" id="name" placeholder="name"
            class="bg-light border border-2 border-gray-100 w-100 p-4 rounded @error('name')
            border border-danger" @enderror value="{{ old('name') }}">
            @error('name')
            <div class="text-danger mt-2 small">
                {{$message}}
            </div>
            @enderror

        </div>
          <div class="mb-4">
            <label form="username" class="visually-hidden">username</label>
            <input type="text" name="username" id="username" placeholder="username"
            class="bg-light border border-2 border-gray-100 w-100 p-4 rounded @error('username')
            border border-danger" @enderror value="{{old('username')}}">
            @error('username')
            <div class="text-danger mt-2 small">
                {{$message}}
            </div>
            @enderror
          </div>
          <div class="mb-4">
            <label form="email" class="visually-hidden">email</label>
            <input type="text" name="email"  id="email" placeholder="email"
            class="bg-light border border-2 border-gray-100 w-100 p-4 rounded @error('email')
            border border-danger" @enderror value="{{old('email')}}">
            @error('email')
            <div class="text-danger mt-2 small">
                {{$message}}
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
              {{$message}}
          </div>
          @enderror
          <div class="mb-4">
            <label form="password_confirmation" class="visually-hidden">repeat password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="repeat password"
            class="bg-light border border-2 border-gray-100 w-100 p-4 rounded @error('password_confirmation')
            border border-danger" @enderror value="">
          </div>
          <div>
            <button type="submit" class="bg-primary text-white px-4 py-3 rounded font-weight-medium w-100 "
            >
            Register
            </button>
          </div>
        </form>

      </div>
   </div>
@endsection

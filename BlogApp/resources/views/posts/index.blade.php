@extends('layouts.app')

@section('content')
   <div class="d-flex justify-content-center">
      <div class="col-8 bg-white px-6 rounded">
 <form action="{{route('posts')}}" method="POST">
    @csrf
    <div class="mb-3 p-4">
        <label for="body" class="sr-only"></label>
        <textarea name="body" id="body" cols="30" rows="4" class="bg-light
         border border-2 w-100 px-4 rounded
         @error('body') border-danger @enderror"
         placeholder="Post somthing!"></textarea>
         @error('body')
         <div class=" text-danger mt-2 text-sm">
            {{$message}}
         </div>
         @enderror
    </div>
    <div class="mb-3 px-4">
        <button type="submit" class="bg-primary text-white px-4 py-2
        rounded font-weight-medium">
        Post
        </button>
      </div>

 </form>
      </div>
   </div>
@endsection

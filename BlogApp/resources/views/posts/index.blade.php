@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="col-8 bg-white px-6 rounded">
            <form action="{{ route('posts') }}" method="POST">
                @csrf
                <div class="mb-3 p-4">
                    <label for="body" class="sr-only"></label>
                    <textarea name="body" id="body" cols="30" rows="4"
                        class="bg-light
         border border-2 w-100 px-4 rounded
         @error('body') border-danger @enderror"
                        placeholder="Post somthing!"></textarea>
                    @error('body')
                        <div class=" text-danger mt-2 text-sm">
                            {{ $message }}
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
            @if ($posts->count())
                @foreach ($posts as $post)
                    <x-post :post="$post" />
                @endforeach
                <div class="pagination justify-content-center">
                    <ul class="pagination ">
                        @if ($posts->onFirstPage())
                            <li class="page-item disabled">
                                <a class="page-link" href="#">Previous</a>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $posts->previousPageUrl() }}">
                                    Previous</a>
                            </li>
                        @endif

                        @foreach ($posts as $post)
                            <li class="page-item{{ $posts->currentPage() === $loop->iteration ? ' active' : '' }}">
                                <a class="page-link" href="{{ url('posts?page=' . $loop->iteration) }}">
                                    {{ $loop->iteration }}</a>
                            </li>
                        @endforeach

                        @if ($posts->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $posts->nextPageUrl() }}">
                                    Next</a>
                            </li>
                        @else
                            <li class="page-item disabled">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        @endif
                    </ul>
                </div>
            @else
                <p>There is no post</p>
            @endif


        </div>
    </div>
@endsection

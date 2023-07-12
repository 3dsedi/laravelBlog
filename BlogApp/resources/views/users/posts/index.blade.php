@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="col-8 ">
            <div class="p-6">
                <h1 class="text-2xl font-medium mb-1">{{ $user->name }}</h1>
                <p>Posted {{ $posts->total() }} {{ Str::plural('post', $posts->total()) }} and received x likes</p>
            </div>
            <div class="bg-white px-6 rounded">
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

                            @for ($i = 1; $i <= $posts->lastPage(); $i++)
                                <li class="page-item{{ $posts->currentPage() === $i ? ' active' : '' }}">
                                    <a class="page-link" href="{{ $posts->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor

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
                    </div>
                    </ul>
            </div>
        @else
            <p>{{ user()->name }} dose not have any post</p>
            @endif
        </div>
    </div>
@endsection

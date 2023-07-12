@props(['post'=> $post])

<div class="">
    <div class="m-4">
        <a href="{{route('users.posts',$post->user)}}" class="fw-bold text-decoration-none" style="color: black;">
            {{ $post->user->name }}</a> <span
            class="text-muted small">{{ $post->created_at->diffForHumans() }}</span>
        <p class="mb-2">{{ $post->body }}</p>
        @if ($post->ownedBy(auth()->user()))
            <div>
                <form action="{{ route('posts.destroy', $post) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-link text-primary p-0"
                        style="text-decoration: none;">Delete</button>
                </form>
            </div>
        @endif
        <div class="d-flex align-items-center">
            @auth
                @if (!$post->likedBy(auth()->user()))
                    <form action="{{ route('posts.likes', $post) }}" method="post" class="mr-2">
                        @csrf
                        <button type="submit" class="btn btn-link text-primary p-0"
                            style="text-decoration: none;">Like</button>
                    </form>
                @else
                    <form action="{{ route('posts.likes', $post) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link text-primary py-1"
                            style="text-decoration: none;">UnLike</button>
                    </form>
                @endif

            @endauth
            <span>{{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }}</span>
        </div>

    </div>

</div>

<?php

namespace App\Observers;

use App\Models\Post;
use App\Notifications\NewPost;
use Illuminate\Support\Str;

class PostObserver
{
    /**
     * Listen to the Post saving event.
     */
    public function saving(Post $post): void
    {
        $post->slug = Str::slug($post->title, '-');
    }
    public function created(Post $post)
    {
        $user = $post->user;
        foreach ($user->followers as $follower) {
            $follower->notify(new NewPost($user, $post));
        }
    }
}

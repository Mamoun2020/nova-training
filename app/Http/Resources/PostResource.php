<?php

namespace App\Http\Resources;

use App\Nova\Post;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    public function toArray($request)
    {
        /**
         * @var Post $post
         */
        $post = $this->resource;
        return [
            'id' => $post->id,
            'title' => $post->title,
            'body' => $post->body,
            'publish_at' => $post->publish_at,
            'publish_until' => $post->publish_until,
            'is_published' => $post->is_published,
            'category' => $post->category,
            'tags_count' => $post->tags_count,

        ];
    }
}

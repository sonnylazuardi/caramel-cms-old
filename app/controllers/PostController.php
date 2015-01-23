<?php

class PostController extends BaseController {

    public function getIndex() {
        $posts = Post::all();
        return $posts;
    }

    public function getView($id) {
        $post = Post::findOrFail($id);
        return $post;
    }

    public function getSlug($slug) {
        $slug = Str::slug($slug);
        $post = Post::where('slug', $slug)->firstOrFail();
        return $post;
    }

}

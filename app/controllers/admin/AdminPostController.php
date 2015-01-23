<?php

class AdminPostController extends BaseController {

    public function getIndex() {
        $posts = Post::all();
        return View::make('admin.posts.index')
            ->with('posts', $posts);
    }

    public function getCreate() {
        return View::make('admin.posts.form')
            ->with('post', new Post());
    }

    public function postCreate() {
        $input = Input::all();
        Post::create($input);
        return Redirect::to('admin/posts/index')
            ->with('alert', 'A post has been created');
    }

    public function getDelete($id) {
        $post = Post::findOrFail($id)->delete();
        return Redirect::to('admin/posts/index')
            ->with('alert', 'A post has been deleted');
    }

    public function getUpdate($id) {
        $post = Post::findOrFail($id);
        return View::make('admin.posts.form')
            ->with('post', $post);
    }

}

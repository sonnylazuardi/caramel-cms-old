<?php

class Post extends Eloquent {
    
    protected $fillable = array(
        'title',
        'slug',
        'description',
        'html',
        'image',
        'status',
    ); 
}
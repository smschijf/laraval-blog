<?php

namespace App\Models;

class Post
{
  public static function all()
  {
    return [
      [
        'id' => 1,
        'title' => 'Post One',
        'date' => '28 November, 2022, 14:36',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti pariatur reiciendis saepe, obcaecati ipsa tempora quae, officia maxime harum quam explicabo non sequi iste, dolorum provident sit sint nemo? Eligendi.'
      ],
      [
        'id' => 2,
        'title' => 'Post Two',
        'date' => '28 November, 2022, 14:36',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti pariatur reiciendis saepe, obcaecati ipsa tempora quae, officia maxime harum quam explicabo non sequi iste, dolorum provident sit sint nemo? Eligendi.'
      ]
    ];
  }

  public static function find($id) {
    $posts = self::all();

    foreach($posts as $post) {
      if($post['id'] == $id) {
        return $post;
      }
    }
  }
}

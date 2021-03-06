<?php 
namespace App\Models;

use DateTime;

class Post extends Model {

     protected $table = 'posts';

     public function getCreatedAt(): string
     {
          $date = (new DateTime($this->created_at))->format('d/m/Y à H:m:s');
          return $date;
     }

     public function getExcerpt(): string
     {
          return substr($this->content, 0, 220).'...';
     }

     public function getButton(): string
     {
          return <<<HTML

          <a href="/posts/{$this->id}" class="btn btn-primary">Lire l'article</a>

HTML;
     }

         public function getTags()
    {
        return $this->query("
          SELECT t.* FROM tags t
          INNER JOIN post_tag pt ON pt.tag_id = t.id
          WHERE pt.post_id = ?", $this->id 
                            );
    }

    



}
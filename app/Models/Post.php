<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    use sluggable;

    // protected $fillable = ['tittle', 'excerpt', 'body'];

    protected $guarded = ['id'];
    protected $with =['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
        // if(isset($filters['search']) ? $filters['search'] : false){
        //     return $query->where('tittle', 'like', '%' . $filters['search'] . '%')
        //     ->orwhere('excerpt', 'like', '%' . $filters['search'] . '%')
        //     ->orwhere('body', 'like', '%' . $filters['search'] . '%');
        // }

        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {
                 $query->where('tittle', 'like', '%' . $search . '%')
                        ->orwhere('excerpt', 'like', '%' . $search . '%')
                        ->orWhere('body', 'like', '%' . $search . '%');
             });
         });

         $query->when($filters['category'] ?? false, function($query, $category) {
            return $query->whereHas('category', function($query) use ($category) {
                 $query->where('slug', $category);
             });
         });

         $query->when($filters['author'] ?? false, fn($query, $author) =>
                 $query->whereHas('author', fn($query) =>
                 $query->where('username', $author)
             )
         );
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}

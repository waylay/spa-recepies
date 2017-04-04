<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{

    protected $with = ['user','ingredients','steps'];

    public function ingredients()
    {
      return $this->belongsToMany('App\Ingredient', 'recipe_ingredient')->withPivot('quantity');
    }

    public function user()
    {
      return $this->belongsTo('App\User')->select('id','name');
    }

    public function steps()
    {
      return $this->hasMany('App\Step');
    }

    public function path()
    {
      return 'recipes/'.$this->id;
    }

    /**
     * Scope a query to only include popular users.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePopular($query)
    {
        return $query->orderBy('created_at','ASC');
    }
}

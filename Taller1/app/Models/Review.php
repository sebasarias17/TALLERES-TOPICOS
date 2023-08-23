<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    /**
     * PRODUCT ATTRIBUTES
     * $this->attributes['id'] - int - contains the product primary key (id)
     * $this->attributes['name'] - string - contains the reviewer name
     * $this->attributes['content'] - string - contains the product review
    */

    protected $fillable = ['name_user','content'];

    public function getId(){
        return $this->attributes['id'];
    }

    public function setId($id){
        $this->attributes['id'] = $id;
    }
    public function getName(){
        return $this->attributes['name_user'];
    }

    public function setName($name){
        $this->attributes['name_user'] = $name;
    }

    public function getReview(){
        return $this->attributes['content'];
    }

    public function setReview($review){
        $this->attributes['content'] = $review;
    }
        
    
}

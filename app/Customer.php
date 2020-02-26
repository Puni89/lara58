<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  // protected $fillable = ['name','email','status'];

  //Guarded example
   protected $guarded = [];

  public function scopeActive($query){
      return $query->whereStatus(1);
  }

  public function scopeInactive($query){
    return $query->whereStatus(0);
}

  public function company(){
    return $this->belongsTo(Company::class);
  }

   public function getStatusAttribute($attribute){
     return[
       0 => 'Inactive',
       1 => 'Active'
     ][$attribute];
   }


}

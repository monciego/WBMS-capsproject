<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class AdminResidents extends Authenticatable
{
  use HasFactory, HasApiTokens, Notifiable;

  protected $fillable = [
    'first_name',
    'middle_name',
    'last_name',
    'nickname',
    'place_of_birth',
    'birthdate',
    'age',
    'civil_status',
    'street',
    'gender',
    'voter_status',
    'citizenship',
    'email',
    'phone_number',
    'occupation',
    'resident_image',
    'password',

  ];

  public function scopeFilter($query, array $filters)
  {

    if ($filters['search'] ?? false) {
      $query->where('first_name', 'like', '%' . request('search') . '%')
        ->orWhere('middle_name', 'like', '%' . request('search') . '%')
        ->orWhere('last_name', 'like', '%' . request('search') . '%');
    }
  }

  public function request_certificate()
  {
    return $this->hasMany(RequestCertificate::class);
  }
}

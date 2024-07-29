<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'dni',
        'phone_number'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    //  la función casts se utiliza para definir cómo deben ser convertidos los atributos del modelo cuando se accede a ellos o se guardan en la base de datos.
    protected function casts(): array
    {
        //  esto indica que el atributo email_verified_at debe ser tratado como un objeto DateTime. Cuando se recupera este valor de la base de datos, Laravel lo convertirá automáticamente en una instancia de DateTime, facilitando su manipulación.
        //  Esta es una nueva característica en Laravel 10 y versiones posteriores. Define que el atributo password debe ser automáticamente hasheado (usualmente con bcrypt) cuando se establece. Esto asegura que las contraseñas se almacenen de manera segura en la base de datos.
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


}

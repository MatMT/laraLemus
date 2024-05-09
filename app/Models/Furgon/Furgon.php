<?php

namespace App\Models\Furgon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Furgon extends Model
{
    use HasFactory;

    protected $table = 'log_furgones';
    protected $primaryKey = 'id_placa';
    public $incrementing = false;	// PK no autoincrementable
    protected $keyType = 'string';	// PK tipo string

    protected $fillable = [
        'id_placa',
        'vin',
        'id_marca_furg',
        'id_color_furg',
        'suspensiones',
        'puertas_cortinas',
        'propiedas',
        'refendada',
        'permiso_salud',
        'dimensiones',
        'altura_maxima',
        'tipo_techo',
        'tipo_rieles',
        'tipo_tadem',
        'tipo_rin',
        'tipo_piso',
        'durmientes',
        'perfil_llantas',
        'cinta_reflectiva',
        'predes_internas',
        'granada',
        'plancha',
        'rotulado',
    ];

    protected $casts = [
        'altura_maxima' => 'double',
        'rotulado' => 'boolean',
    ];

    // public function marca()
    // {
    //     return $this->belongsTo(FurgonMarca::class, 'id_marca_furg');
    // }

    // public function color()
    // {
    //     return $this->belongsTo(FurgonColor::class, 'id_color_furg');
    // }

}

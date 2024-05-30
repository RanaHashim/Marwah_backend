<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'name',
        'price_single',
        'what_to_expect',
        'price_quad',
        'main_points',
        'price_double',
        'price_tripple',
        'currency',
        'hotel_makkah_name',
        'hotel_madina_name',
        'hotel_makkah_detail',
        'hotel_madina_detail',
        'hotel_madina_image',
        'hotel_makkah_image',
        'trans_title',
        'trans_detail',
        'trans_image',
        'visa_title',
        'visa_detail',
        'visa_image',
        'nights_makkah',
        'nights_madina',
        'nights',
        'is_roundtrip',
        'ziyarat',
        'guide',
        'email',
        'whatsapp',
        'phone',
        'hotel_makkah_enabled',
        'hotel_madina_enabled',
        'visa_enabled',
        'ticket_enabled',
        'breakfast_enabled',
        'dinner_enabled',
        'visa_duration',
        'package_image',
        'transport_enabled',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

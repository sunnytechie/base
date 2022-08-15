<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Base extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description', 
        'category_id', 
        'user_id', 

        'event_name', 
        'event_date', 
        'event_time', 
        'event_location', 
        'event_description', 
        'event_image', 

        'website_name', 
        'website_url', 
        'website_image', 
        'website_description', 
        'website_username', 
        'website_passcode', 
        'website_email', 
        'website_cpanel_url', 
        'website_cpanel_username', 
        'website_cpanel_passcode', 
        'website_cpanel_email', 
        'website_cpanel_hostname', 
        'website_cpanel_hostpasscode', 
        'website_cpanel_hostemail', 
        'website_cpanel_hostusername', 

        'map_location', 
        'map_image', 
        'map_description', 

        'social_name', 
        'social_url', 
        'social_username', 
        'social_passcode', 
        'social_email',

        'task_name', 
        'task_description', 
        'task_image', 
        'task_url',

        'password_username',
        'password_passcode',
        'password_email',
        'password_description',

        'bank_name',
        'bank_description',
        'bank_acct_name',
        'bank_acct_number',
        'bank_acct_type',
        'bank_acct_pin',

        'resources_name',
        'resources_description',
        'report_name',
        'report_description',
        'report_image',
        'report_url',
    ];

    //belong to category
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    //belong to user
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    //has many threads
    public function threads()
    {
        return $this->hasMany('App\Models\Thread');
    }
}

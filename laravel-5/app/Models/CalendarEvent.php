<?php namespace App\Models;

use Illuminate\Support\Facades\Config;
use Illuminate\Database\Eloquent\Model;

class CalendarEvent extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'calendar_events';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description', 'init_at','end_at','backgroundcolor','all_day'];

    /**
     * Create a new Eloquent model instance.
     *
     * @param array $attributes
     * @return mixed
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }
}

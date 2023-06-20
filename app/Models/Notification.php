<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
    {
    use HasFactory;

    protected $fillable = [
        'title', 'message', 'recipient_id', 'sender_id', 'read'
    ];

    /**
     * Get the recipient user of the notification.
     */
    public function recipient()
    {
        return $this->belongsTo(User::class, 'recipient_id');
    }

    /**
     * Get the sender user of the notification.
     */
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }
}

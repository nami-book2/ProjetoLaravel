<?php

namespace App\Events;

use App\Models\AvisoUser;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AvisoUserCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    private $avisoUser;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(AvisoUser $avisoUser)
    {
        $this->avisoUser = $avisoUser;
    }
    
    public function getAvisoUser()
    {
        return $this->avisoUser;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}

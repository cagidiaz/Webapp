<?php

namespace App\Events;

use App\Store;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class RegisterStoreEvent extends Event implements ShouldBroadcast
{
    use InteractsWithSockets, SerializesModels;

    public $store;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Store $store)
    {
        $this->store = $store;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return ['test_channel'];
    }
}

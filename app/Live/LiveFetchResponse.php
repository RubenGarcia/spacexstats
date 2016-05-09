<?php
namespace SpaceXStats\Live;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use SpaceXStats\Models\Mission;

class LiveFetchResponse implements \JsonSerializable {
    public function jsonSerialize() {
        return [
            'isAuthenticated' => $this->isAuthenticated(),
            'isLive' => $this->isLive(),
            'nextMission' => $this->nextMission(),
            'previousMission' => $this->previousMission()
        ];
    }

    protected function isAuthenticated() {
        return (Auth::check() && Auth::user()->isLaunchController()) || Auth::isAdmin();
    }

    protected function isLive() {
        return Redis::get('live:active');
    }

    protected function nextMission() {
        return Mission::next();
    }

    protected function previousMission() {
        return Mission::previous();
    }
}
<?php
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use SpaceXStats\Models\PrelaunchEvent;

class PrelaunchEventsTableSeeder extends Seeder {
    public function run() {
        // F9F1
        PrelaunchEvent::create([
            'mission_id' => 6,
            'event' => 'Launch Change',
            'occurred_at' => Carbon::createFromDate(2010, 3, 9),
            'summary' => 'Abort at spin start T-0:02',
            'supporting_document' => null
        ]);

        PrelaunchEvent::create([
            'mission_id' => 6,
            'event' => 'Launch Change',
            'occurred_at' => Carbon::createFromDate(2010, 6, 4),
            'summary' => 'Out of range engine parameter, sensor error',
            'supporting_document' => null
        ]);

        //F9F2
        PrelaunchEvent::create([
            'mission_id' => 7,
            'event' => 'Launch Change',
            'occurred_at' => Carbon::createFromDate(2010, 12, 3),
            'summary' => 'Aborted at T-1.1 seconds due to high engine chamber pressure',
            'supporting_document' => null
        ]);

        PrelaunchEvent::create([
            'mission_id' => 7,
            'event' => 'Launch Site Static Fire',
            'occurred_at' => Carbon::createFromDate(2010, 12, 4),
            'summary' => null,
            'supporting_document' => null
        ]);

        PrelaunchEvent::create([
            'mission_id' => 7,
            'event' => 'Launch Change',
            'occurred_at' => Carbon::createFromDate(2010, 12, 4),
            'summary' => 'Low gas generator pressure in engine 6',
            'supporting_document' => null
        ]);

        PrelaunchEvent::create([
            'mission_id' => 7,
            'event' => 'Launch Change',
            'occurred_at' => Carbon::createFromDate(2010, 12, 8),
            'summary' => 'False abort on the Ordnance Interrupter (OI) ground feedback',
            'supporting_document' => null
        ]);

        //F9F3
        PrelaunchEvent::create([
            'mission_id' => 8,
            'event' => 'Launch Change',
            'occurred_at' => Carbon::createFromDate(2012, 5, 19),
            'summary' => 'High pressure reading in engine 5 chamber due to a faulty check valve T-0:01',
            'supporting_document' => null
        ]);

        // F9F4
        PrelaunchEvent::create([
            'mission_id' => 9,
            'event' => 'Launch Site Static Fire',
            'occurred_at' => Carbon::createFromDate(2012, 9, 29),
            'summary' => null,
            'supporting_document' => null
        ]);

        // F9F5
        PrelaunchEvent::create([
            'mission_id' => 10,
            'event' => 'Launch Site Static Fire',
            'occurred_at' => Carbon::createFromDate(2013, 2, 25),
            'summary' => null,
            'supporting_document' => null
        ]);

        // F9F6
        PrelaunchEvent::create([
            'mission_id' => 11,
            'event' => 'Launch Change',
            'occurred_at' => Carbon::createFromDate(2013, 9, 11),
            'summary' => 'Several issues during tanking',
            'supporting_document' => null
        ]);

        PrelaunchEvent::create([
            'mission_id' => 11,
            'event' => 'Launch Change',
            'occurred_at' => Carbon::createFromDate(2013, 9, 12),
            'summary' => 'Countdown abort',
            'supporting_document' => null
        ]);

        PrelaunchEvent::create([
            'mission_id' => 11,
            'event' => 'Launch Change',
            'occurred_at' => Carbon::createFromDate(2013, 9, 12),
            'summary' => 'Countdown abort',
            'supporting_document' => null
        ]);

        PrelaunchEvent::create([
            'mission_id' => 11,
            'event' => 'Launch Site Static Fire',
            'occurred_at' => Carbon::createFromDate(2013, 9, 19),
            'summary' => null,
            'supporting_document' => null
        ]);
        
    }
}
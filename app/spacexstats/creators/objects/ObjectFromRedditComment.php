<?php

namespace SpaceXStats\Creators\Objects;

use SpaceXStats\Enums\ObjectPublicationStatus;
use SpaceXStats\Enums\MissionControlType;
use SpaceXStats\Enums\MissionControlSubtype;

class ObjectFromRedditComment extends ObjectCreator {

    public function isValid($input) {
        $this->input = $input;

        $rules = array_intersect_key($this->object->getRules(), []);
        return $this->validate($rules);
    }

    public function create() {
        \DB::transaction(function() {

            $this->object = \Object::create([
                'user_id'               => \Auth::user()->user_id,
                'type'                  => MissionControlType::Comment,
                'subtype'               => MissionControlSubtype::RedditComment,
                'title'                 => $this->input['title'],
                'size'                  => strlen($this->input['comment']),
                'summary'               => $this->input['comment'],
                'thumb_filename'        => 'comment.png',
                'cryptographic_hash'    => hash('sha256', $this->input['comment']),
                'originated_at'         => \Carbon\Carbon::now(),
                'status'                => ObjectPublicationStatus::QueuedStatus
            ]);

            $this->createMissionRelation();
            $this->createTagRelations();

            $this->object->push();
        });
    }
}
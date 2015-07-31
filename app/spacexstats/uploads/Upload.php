<?php
namespace SpaceXStats\Uploads;

class Upload {
    private $errors, $objects, $files;

    public function __construct(Checker $checker) {
        $this->checker = $checker;
    }

    public function check($files) {
        $this->files = $files;

        // Check files for errors, push any errors to the errors array
        if (is_array($this->files)) {
            $i = 0;
            foreach ($this->files as $file) {

                if (!$this->checker->check($file)) {
                    $this->errors[$i] = $this->checker->errors();
                } else {
                    $this->objects[$i] = $this->checker->create();
                }
                $i++;

            }
        } else {
            if (!$this->checker->check($this->files)) {
                $this->errors[0] = $this->checker->errors();
            } else {
                $this->objects[0] = $this->checker->create();
            }
        }

        return $this;
    }

    public function hasErrors() {
        return empty($this->errors);
    }

    // Turn the error codes and constants into messages.
    public function getErrors() {
        return $this->errors;
    }

    // Call this to create an upload, and add it to the database
    public function create() {
        if (!$this->hasErrors()) {

            foreach ($this->objects as $object) {
                $object->addToMissionControl();
            }

        } else {
            throw new Exception("We cannot add an object to Mission Control when the files array has errors");
        }
    }
}
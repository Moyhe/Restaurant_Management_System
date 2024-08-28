<?php

class ValidationException extends Exception
{

    public readonly array $errors;
    public readonly array $old;

    public function throw($errors, $old): self
    {

        $instance = new static("The form failed to validate..");

        $instance->errors = $errors;
        $instance->old = $old;

        throw $instance;
    }
}

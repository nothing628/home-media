<?php

namespace App\Models\Traits;

use Illuminate\Support\Str;

trait UuidTrait {
    /**
     * Get all of the current attributes on the model for an insert operation.
     *
     * @return array
     */
    protected function getAttributesForInsert()
    {
        $attributes = $this->getAttributes();
        $keyName = $this->getKeyName();

        if (!isset($attributes[$keyName])) {
            $this->setAttribute($keyName, Str::uuid());
        }

        return $this->getAttributes();
    }
}

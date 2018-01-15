<?php

namespace gransfall\TrimBehavior\Model\Behavior;

use Cake\Datasource\EntityInterface;
use Cake\Event\Event;
use Cake\ORM\Behavior;

class TrimBehavior extends Behavior
{
    public function beforeSave(Event $event, EntityInterface $entity)
    {
        $fields = $entity->visibleProperties();
        foreach ($fields as $field) {
            $value = $entity->get($field);
            if (is_string($value)) {
                $entity->$field = trim($value);
            }
        }
        return true;
    }
}
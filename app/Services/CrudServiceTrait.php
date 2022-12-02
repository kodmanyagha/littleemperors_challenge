<?php

namespace App\Services;

use App\Events\AbstractBaseEvent;
use Illuminate\Database\Eloquent\Model;

/**
 * @property Model $model
 * @property AbstractBaseEvent $createdEventClass
 * @property AbstractBaseEvent $updatedEventClass
 * @property AbstractBaseEvent $deletedEventClass
 */
trait CrudServiceTrait
{
    public function create(array|Model $data): Model
    {
        $data = makeArray($data);

        $model = (new $this->model())->create($data);

        if (property_exists($this, 'createdEventClass')) {
            event(new $this->createdEventClass($model->id));
        }

        return $model;
    }

    public function update(int|Model $oldModel, array|Model $newModel): Model
    {
        if (is_int($oldModel)) {
            $oldModel = (new $this->model())->findOrFail($oldModel);
        }
        $oldModel->update($newModel);

        if (property_exists($this, 'updatedEventClass')) {
            event(new $this->updatedEventClass($oldModel->id));
        }

        return $oldModel->refresh();
    }

    public function delete(int|Model $model)
    {
        $id = $model->id;
        $model->delete();

        if (property_exists($this, 'deletedEventClass')) {
            event(new $this->deletedEventClass($id));
        }
    }
}

<?php

namespace models;

use \RedBeanPHP\R as R;

class Form extends \RedBeanPHP\SimpleModel
{
    public function durationsAll()
    {
        return R::findAll('durations');
    }

    public function requestsAll()
    {
        return R::findAll('requests');
    }

    public function store($data)
    {
        $path = __DIR__ . '/uploads/';

        $duration = R::dispense('durations');
        $request = R::dispense('requests');

        foreach ($data as $key => $value) {
            if ($key == 'file') {
                move_uploaded_file($_FILES['userfile']['tmp_name'], $path);
                $request[$key] = $_FILES['userfile']['tmp_name'];
            } elseif ($key == 'duration') {
                $request[$key] = R::load('durations', $value);
                // $request[$key] = R::findOne('durations', ' id = ? ', [$value]);
            } else {
                $request[$key] = $value;
            }
            $request[$key] = $value;
        }

        return R::store($request);
    }
}

<?php

namespace controllers;

use models\Form;
use Smarty;
use Rakit\Validation\Validator;

class FormController
{
    public function action_index()
    {
        $smarty = new Smarty;
        $smarty->display('views/request/list_request.tpl');
    }

    public function action_create()
    {
        $smarty = new Smarty;
        $duration = new Form;
        $smarty->assign('durations', $duration->durationsAll());
        $smarty->display('views/request/create_request.tpl');
    }

    public function action_store()
    {
        $data = $_POST;

        unset($data['send']);

        $validator = new Validator;

        $validation = $validator->validate($data + $_FILES, [
            'email'                 => 'required|email',
            'title'                 => 'required|min:6|max:50',
            'message'               => 'required|min:6|max:140',
        ]);

        if ($validation->fails()) {
            // handling errors
            $errors = $validation->errors();
            echo "<pre>";
            print_r($errors->firstOfAll());
            echo "</pre>";
            exit;
        } else {
            // validation passes
            echo "Success!";
        }

        $store = new Form;
        $store->store($data);

        // header('Location: ?controller=form&action=index');
    }
}

<?php

use Illuminate\Database\Eloquent\Model;

uses()->group('admin')->in('src/Admin');
uses()->group('forms')->in('src/Forms');
uses()->group('notifications')->in('src/Notifications');
uses()->group('tables')->in('src/Tables');

expect()->extend('toBeSameModel', function (Model $model) {
    return $this
        ->is($model)->toBeTrue();
});

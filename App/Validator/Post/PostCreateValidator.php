<?php

namespace Validator\Post;

use Core\Validator;

class PostCreateValidator extends Validator
{

    protected $errors = [
        'title_error'       => 'Название должно содержать минимум 5 символа',
        'content_error'     => 'Текст не должен быть пустым'
    ];

    protected $rules = [
        'title'  => '/[A-Za-zА-Яа-я]{5,}/',
        'content'   => '/[A-Za-zА-Яа-я]{1,}/'
    ];
}
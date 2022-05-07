<?php

return [
  'custom' => [
      'parent_id' => [
          'required' => 'Вы не выбрали родителя',
          'numeric' => 'Идентификатор должен быть числом'
      ],
      'title' => [
          'required' => 'Вы не указали название',
          'max' => 'Слишком длинное название',
          'string' => 'Неверный тип названия'
      ],
      'description' => [
          'required' => 'Вы не ввели описание',
          'min' => 'Описание не может быть короче 3 символов',
          'max' => 'Слишком длинное описание',
          'string'=> 'Неверный тип описания',
      ],
  ],
    'msg' => [
        'success' => 'Запись успешно добавлена',
        'error' => 'Что - то пошло не так'
    ]
];

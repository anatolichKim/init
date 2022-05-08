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
          'min' => 'Описание не может быть таким коротким',
          'max' => 'Слишком длинное описание',
          'string'=> 'Описание не может быть пустым',
      ],
  ],
    'msg' => [
        'success_add' => 'Запись успешно добавлена',
        'success_edit' => 'Запись успешно обновлена',
        'error' => 'Что - то пошло не так'
    ]
];

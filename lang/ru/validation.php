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

      'text' => [
          'required' => 'Вы не ввели текст',
          'min' => 'Текст не может быть таким коротким',
          'max' => 'Слишком длинный текст',
          'string' => 'Текст не может быть пустым'
      ],

      'category_id' => [
          'required' => 'Вы не выбрали категорию',
          'numeric' => 'Идентификатор должен быть числом',
      ],

      'course_id' => [
        'required' => 'Вы не выбрали курс',
        'numeric' => 'Идентификатор должен быть числом',
      ],

      'is_published' => [
          'boolean' => 'Недопустимое значение для чекбокса'
      ],
      'slug' => [
          'max' => 'Слишком длинная ссылка',
          'string' => 'Ссылка тип данных'
      ]
  ],
    'msg' => [
        'success_add' => 'Запись успешно добавлена',
        'success_edit' => 'Запись успешно обновлена',
        'success_delete' => 'Запись успешно удалена',
        'error' => 'Что - то пошло не так'
    ]
];

<?php

return [
    'cms_object' => [
        'invalid_file' => 'Ошибка в имени файла: :name. Имена файлов могут содержать только латинские буквы, цифры, знаки подчеркивания и точки. Пример правильных имен файлов: about-us.htm, page, subdirectory/page',
        'invalid_property' => "Параметр ':name' нельзя изменить.",
        'file_already_exists' => "Файл ':name' уже существует.",
        'error_saving' => "Ошибка сохранения файла ':name'. Пожалуйста, проверьте права на запись.",
        'error_creating_directory' => 'Ошибка создания директории :name. Пожалуйста, проверьте права на запись.',
        'invalid_file_extension'=>'Указано неправильное расширение файла: :invalid. Разрешенные расширения: :allowed.',
        'error_deleting' => "Невозможно удалить файл шаблона ':name'. Пожалуйста, проверьте права на запись.",
        'delete_success' => 'Шаблоны были успешно удалены: :count.',
        'file_name_required' => 'Пожалуйста, укажите имя файла шаблона.'
    ],
    'dashboard' => [
        'active_theme' => [
            'widget_title_default' => 'Веб-сайт',
            'online' => 'Онлайн',
            'maintenance' => 'в разработке',
            'manage_themes' => 'Управление темами',
            'customize_theme' => 'Настройка Темы'
        ]
    ],
    'theme' => [
      'not_found_name' => "Тема ':name' не найдена.",
        'active' => [
            'not_set' => 'Активная тема не установлена.',
            'not_found' => 'Активная тема не найдена.'
        ],
        'edit' => [
            'not_set' => 'Тема для редактирования не установлена.',
            'not_found' => 'Тема для редактирования не найдена.',
            'not_match' => 'Объект, который вы пытаетесь открыть, не принадлежит редактируемой теме. Пожалуйста, обновите страницу.'
        ],
        'settings_menu' => 'Фронтенд темы',
        'settings_menu_description' => 'Просмотр списка установленных тем и выбор активной темы.',
        'default_tab' => 'Свойства',
        'name_label' => 'Название',
        'name_create_placeholder' => 'Новое название темы',
        'author_label' => 'Автор',
        'author_placeholder' => 'Человек или название компании',
        'description_label' => 'Описание',
        'description_placeholder' => 'Описание темы',
        'homepage_label' => 'Домашняя страница',
        'homepage_placeholder' => 'Адрес сайта',
        'code_label' => 'Уникальный код',
        'code_placeholder' => 'Уникальный код темы, который используются для её распространения',
        'dir_name_create_label' => 'Директория темы',
        'dir_name_label' => 'Имя директории',
        'theme_label' => 'Тема',
        'theme_title' => 'Темы',
        'activate_button' => 'Активировать',
        'active_button' => 'Активировано',
        'customize_theme' => 'Настройка Темы',
        'customize_button' => 'Настроить',
        'duplicate_button' => 'Дублировать',
        'duplicate_title' => 'Дублировать тему',
        'duplicate_theme_success' => 'Дублирование успешно завершено!',
        'manage_button' => 'Управление',
        'manage_title' => 'Управление темой',
        'edit_properties_title' => 'Тема',
        'edit_properties_button' => 'Редактирование свойств',
        'save_properties' => 'Сохранить свойства',
        'import_button' => 'Импортировать',
        'import_title' => 'Импортировать тему',
        'import_theme_success' => 'Импортирование темы успешно завершено!',
        'import_uploaded_file' => 'Файл архива темы',
        'import_overwrite_label' => 'Перезаписывать существующие файлы',
        'import_overwrite_comment' => 'Отключите эту опцию, чтобы импортировать только новые файлы',
        'import_folders_label' => 'Директории',
        'import_folders_comment' => 'Пожалуйста, выберите директории темы, которые вы хотели бы импортировать',
        'export_button' => 'Экспортировать',
        'export_title' => 'Экспортировать тему',
        'export_folders_label' => 'Директории',
        'export_folders_comment' => 'Пожалуйста, выберите директории темы, которые вы хотели бы экспортировать',
        'delete_button' => 'Удалить',
        'delete_confirm' => 'Вы уверены, что хотите удалить эту тему? Это действие необратимо!',
        'delete_active_theme_failed' => 'Невозможно удалить активный тему, попробуйте сделать другую тему активной.',
        'delete_theme_success' => 'Удаление темы успешно завершено!',
        'create_title' => 'Создать тему',
        'create_button' => 'Создать',
        'create_new_blank_theme' => 'Создать новый бланк темы',
        'create_theme_success' => 'Создание темы успешно завершено!',
        'create_theme_required_name' => 'Пожалуйста, укажите имя для темы.',
        'new_directory_name_label' => 'Директория темы',
        'new_directory_name_comment' => 'Укажите новое имя каталога для дубликата темы.',
        'dir_name_invalid' => 'Имя может содержать только цифры, латинские буквы и следующие символы: _ -',
        'dir_name_taken' => 'Указанный каталог уже существует.',
        'find_more_themes' => 'Найти еще темы',
        'saving' => 'Сохранение темы...',
        'return' => 'Вернуться к списку тем'
    ],
    'maintenance' => [
        'settings_menu' => 'Режим обслуживания',
        'settings_menu_description' => 'Управление режимом обслуживания сайта.',
        'is_enabled' => 'Включить режим обслуживания',
        'is_enabled_comment' => 'При активации этого режима посетители сайта увидят страницу выбранную ниже.',
        'hint' => 'Режим обслуживания покажет страницу обслуживания для посетителей, которые не авторизовались в CMS.'
    ],
    'page' => [
        'not_found_name' => "Страница ':name' не найдена",
        'not_found' => [
            'label' => 'Страница не найдена',
            'help' => 'Запрошенная страница не найдена.'
        ],
        'custom_error' => [
            'label' => 'Ошибка на странице',
            'help' => 'К сожалению, страница не может быть отображена из-за ошибки.'
        ],
        'menu_label' => 'Страницы',
        'unsaved_label' => 'Несохранённая(е) страница(ы)',
        'no_list_records' => 'Страницы не найдены',
        'new' => 'Новая страница',
        'invalid_url' => 'Неверный формат адреса. Адрес страницы должен начинаться со знака / и может содержать цифры, латинские буквы, и следующие знаки: ._-[]:?|/+*^$',
        'delete_confirm_multiple' => 'Вы действительно хотите удалить выделенные страницы?',
        'delete_confirm_single' => 'Вы действительно хотите удалить эту страницу?',
        'no_layout' => '-- без шаблона --'
    ],
    'layout' => [
        'not_found_name' => "Не удалось найти шаблон (layout) с именем :name.",
        'menu_label' => 'Шаблоны',
        'unsaved_label' => 'Несохранённый(е) макет(ы)',
        'no_list_records' => 'Шаблоны не найдены',
        'new' => 'Новый шаблон',
        'delete_confirm_multiple' => 'Вы действительно хотите удалить выделенные шаблоны?',
        'delete_confirm_single' => 'Вы действительно хотите удалить этот шаблон?'
    ],
    'partial' => [
        'not_found_name' => "Не удалось найти шаблон (partial) с именем :name.",
        'invalid_name' => 'Ошибка в имени шаблона (partial) :name.',
        'menu_label' => 'Фрагменты',
        'unsaved_label' => 'Несохранённый(е) фрагмент(ы)',
        'no_list_records' => 'Фрагменты не найдены',
        'delete_confirm_multiple' => 'Вы действительно хотите удалить выделенные фрагменты?',
        'delete_confirm_single' => 'Вы действительно хотите удалить этот фрагмент?',
        'new' => 'Новый фрагмент'
    ],
    'content' => [
        'not_found_name' => "Не удалось найти файл содержимого (content file): ':name'.",
        'menu_label' => 'Содержимое',
        'unsaved_label' => 'Несохранённое содержимое',
        'no_list_records' => 'Файлы с содержимым не найдены',
        'delete_confirm_multiple' => 'Вы действительно хотите удалить выделенные файлы?',
        'delete_confirm_single' => 'Вы действительно хотите удалить этот файл?',
        'new' => 'Новый файл содержимого'
    ],
    'ajax_handler' => [
        'invalid_name' => 'Ошибка в имени обработчика AJAX: :name.',
        'not_found' => "Обработчик AJAX не найден: ':name'."
    ],
    'cms' => [
        'menu_label' => 'CMS'
    ],
    'sidebar' => [
        'add' => 'Добавить',
        'search' => 'Поиск...'
    ],
    'editor' => [
        'settings' => 'Настройки',
        'title' => 'Заголовок',
        'new_title' => 'Заголовок страницы',
        'url' => 'Адрес',
        'filename' => 'Имя файла',
        'layout' => 'Шаблон',
        'description' => 'Описание',
        'preview' => 'Предпросмотр',
        'meta' => 'Метатеги',
        'meta_title' => 'Заголовок (meta)',
        'meta_description' => 'Описание (meta)',
        'markup' => 'Разметка',
        'code' => 'Код',
        'content' => 'Содержание',
        'hidden' => 'Скрытая страница',
        'hidden_comment' => 'Скрытые страницы доступны только для вошедших в систему пользователей.',
        'enter_fullscreen' => 'Войти в полноэкранный режим',
        'exit_fullscreen' => 'Выйти из полноэкранного режима'
    ],
    'asset' => [
        'menu_label' => 'Ресурсы',
        'unsaved_label' => 'Несохранённый(е) файл(ы)',
        'drop_down_add_title' => 'Добавить...',
        'drop_down_operation_title' => 'Действие...',
        'upload_files' => 'Загрузить файл(ы)',
        'create_file' => 'Создать файл',
        'create_directory' => 'Создать директорию',
        'directory_popup_title' => 'Новая директория',
        'directory_name' => 'Имя директории',
        'rename' => 'Переименовать',
        'delete' => 'Удалить',
        'move' => 'Переместить',
        'select' => 'Выбрать',
        'new' => 'Новый файл',
        'rename_popup_title' => 'Переименовать',
        'rename_new_name' => 'Новое имя',
        'invalid_path' => 'Путь может содержать только цифры, латинские буквы, пробелы и следующие символы: ._-/',
        'error_deleting_file' => 'Ошибка удаления файла :name.',
        'error_deleting_dir_not_empty' => 'Невозможно удалить директорию :name. Директория содержит файлы или поддиректории.',
        'error_deleting_dir' => 'Ошибка удаления директории :name.',
        'invalid_name' => 'Имя может содержать только цифры, латинские буквы, пробелы и следующие символы: ._-',
        'original_not_found' => 'Оригинальный файл или директория не найдена',
        'already_exists' => 'Файл или директория с таким именем уже существует',
        'error_renaming' => 'Невозможно переименовать файл или директорию',
        'name_cant_be_empty' => 'Имя не может быть пустым',
        'too_large' => 'Загруженный файл слишком велик. Максимальный допустимый размер файла составляет :max_size',
        'type_not_allowed' => 'Разрешены только файлы следующих типов: :allowed_types',
        'file_not_valid' => 'Файл не может быть сохранен',
        'error_uploading_file' => "Ошибка загрузки файла ':name': :error",
        'move_please_select' => 'пожалуйста, выберите директорию',
        'move_destination' => 'Новая директория',
        'move_popup_title' => 'Переместить файлы',
        'move_button' => 'Переместить',
        'selected_files_not_found' => 'Выбранные файлы не найдены',
        'select_destination_dir' => 'Пожалуйста, выберите директорию',
        'destination_not_found' => 'Конечная директория не найдена',
        'error_moving_file' => 'Не удалось переместить файл :file',
        'error_moving_directory' => 'Не удалось переместить директорию :dir',
        'error_deleting_directory' => 'Не удалось удалить директорию :dir',
        'path' => 'Путь'
    ],
    'component' => [
        'menu_label' => 'Компоненты',
        'unnamed' => 'Безымянный',
        'no_description' => 'Без описания',
        'alias' => 'Псевдоним',
        'alias_description' => 'Псевдоним компонента определяет его имя, под которым он доступен в коде страницы или шаблона.',
        'validation_message' => 'Псевдонимы обязательны и могут содержать только латинские буквы, цифры и знаки подчеркивания. Псевдонимы должны начинаться с латинской буквы.',
        'invalid_request' => 'Шаблон не может быть сохранен, так как запрос содержит поврежденную информацию о компонентах.',
        'no_records' => 'Компоненты не найдены',
        'not_found' => "Компонент ':name' не найден.",
        'method_not_found' => "Компонент ':name' не содержит метод ':method'."
    ],
    'template' => [
        'invalid_type' => 'Неизвестный тип шаблона.',
        'not_found' => 'Запрошенный шаблон не найден.',
        'saved'=> 'Шаблон был успешно сохранен.'
    ],
    'permissions' => [
        'name' => 'Управление CMS',
        'manage_content' => 'Управление контентом',
        'manage_assets' => 'Управление файлами',
        'manage_pages' => 'Управление страницами',
        'manage_layouts' => 'Управление шаблонами',
        'manage_partials' => 'Управление фрагментами',
        'manage_themes' => 'Управление темами',
        'manage_media' => 'Управление медиафайлами'
    ],
    'mediafinder' => [
        'default_prompt' => 'Кликните на %s кнопку, чтобы найти медиафайл'
    ],
    'media' => [
        'invalid_path' => "Указан недопустимый путь к файлу: ':path'.",
        'menu_label' => 'Медиафайлы',
        'upload' => 'Загрузить',
        'move' => 'Переместить',
        'delete' => 'Удалить',
        'add_folder' => 'Создать папку',
        'search' => 'Поиск',
        'display' => 'Отобразить',
        'filter_everything' => 'Все файлы',
        'filter_images' => 'Изображения',
        'filter_video' => 'Видео',
        'filter_audio' => 'Музыка',
        'filter_documents' => 'Документы',
        'library' => 'Библиотека',
        'folder_size_items' => 'объектов',
        'size' => 'Размер',
        'title' => 'Имя',
        'last_modified' => 'Последнее изменение',
        'public_url' => 'Публичный адрес',
        'click_here' => 'Нажмите здесь',
        'thumbnail_error' => 'Ошибка создания миниатюры.',
        'return_to_parent' => 'Вернуться в родительскую папку',
        'return_to_parent_label' => 'Подняться на уровень выше ..',
        'nothing_selected' => 'Ничего не выбрано.',
        'multiple_selected' => 'Выбрано несколько объектов.',
        'uploading_file_num' => 'Загрузка файлов: :number',
        'uploading_complete' => 'Загрузка файлов завершена!',
        'uploading_error' => 'Ошибка загрузки',
        'order_by' => 'Сортировать по',
        'folder' => 'Папка',
        'no_files_found' => 'Ни один из файлов не удовлетворяет вашему запросу.',
        'delete_empty' => 'Пожалуйста, выберите объекты для удаления.',
        'delete_confirm' => 'Вы действительно хотите удалить выбранные объекты?',
        'error_renaming_file' => 'Ошибка изменения имени файла.',
        'new_folder_title' => 'Новая папка',
        'folder_name' => 'Название папки',
        'error_creating_folder' => 'Ошибка создания папки',
        'folder_or_file_exist' => 'Папка или файл с таким именем уже существует.',
        'move_empty' => 'Пожалуйста, выберите объекты для перемещения.',
        'move_popup_title' => 'Перемещение файлов или папок',
        'move_destination' => 'Папка назначения',
        'please_select_move_dest' => 'Пожалуйста, выберите папку назначения для перемещения.',
        'move_dest_src_match' => 'Пожалуйста, выберите другую папку.',
        'empty_library' => 'Библиотека медиафайлов пуста. Для начала загрузите файлы или создайте папки.',
        'insert' => 'Вставить',
        'crop_and_insert' => 'Обрезать и вставить',
        'select_single_image' => 'Пожалуйста, выберите одно изображение.',
        'selection_not_image' => 'Выбранный элемент не является изображением.',
        'restore' => 'Отменить все изменения',
        'resize' => 'Изменение размера...',
        'selection_mode_normal' => 'Нормальный',
        'selection_mode_fixed_ratio' => 'Фиксированное соотношение',
        'selection_mode_fixed_size' => 'Фиксированный размер',
        'height' => 'Высота',
        'width' => 'Ширина',
        'selection_mode' => 'Режим выделения',
        'resize_image' => 'Изменение размера изображения',
        'image_size' => 'Размер изображения:',
        'selected_size' => 'Выбрано:'
    ]
];

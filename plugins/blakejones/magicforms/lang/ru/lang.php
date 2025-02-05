<?php

    return [

        'plugin' => [
            'name'        => 'Magic Forms',
            'description' => 'С легкостью создайте AJAX форму'
        ],

        'menu' => [
            'label'    => 'Magic Forms',
            'records'  => ['label' => 'Записи'],
            'exports'  => ['label' => 'Экспорт'],
            'settings' => 'Настройки плагина',
        ],

        'controllers' => [
            'records' => [
                'title'      => 'Все заявки',
                'view_title' => 'Запись',
                'error'      => 'Запись не найдена',
                'deleted'    => 'Запись успешно удалена',
                'columns'    => [
                    'id'         => 'ID записи',
                    'group'      => 'Группа',
                    'ip'         => 'IP адрес',
                    'form_data'  => 'Поля формы',
                    'files'      => 'Прикрепленные файлы',
                    'created_at' => 'Создано',
                ],
                'buttons' => [
                    'read'       => 'Отметить как прочитано',
                    'unread'     => 'Отметить как непрочитанное',
                    'gdpr_clean' => 'Очистить GDPR',
                ],
                'alerts' => [
                    'gdpr_confirm' => "Вы действительно хотите удалить эти старые записи?\nЭто действие не может быть отменено!",
                    'gdpr_success' => 'Очистка GDPR успешна',
                    'gdpr_perms'   => 'У вас нет прав использования этой функции',
                ],
            ],
            'exports' => [
                'title'                 => 'Экспорт записей',
                'breadcrumb'            => 'Экспорт',
                'filter_section'        => '1. Фильтровать записи',
                'filter_type'           => 'Экспорт всех записей',
                'filter_groups'         => 'Группы',
                'filter_date_after'     => 'Дата от',
                'filter_date_before'    => 'дата до',
                'options_section'       => '2. Экстра опции',
                'options_metadata'      => 'Вложить метаданные',
                'options_metadata_com'  => 'Экспорт записей с метаданными(ID, группа, дата создания)',
                'options_deleted'       => 'Вложить удаленные записи',
                'options_delimiter'     => 'Использовать альтернативный разделитель полей',
                'options_delimiter_com' => 'Точка с запятой вместо запятой',
                'options_utf'           => 'Кодировать в UTF8',
                'options_utf_com'       => 'Ваш CSV файл будет закодирван в UTF-8',
            ],
        ],

        'components' => [
            'generic_form' => [
                'name'        => 'Стандартная AJAX форма',
                'description' => 'Выводит стандартную форму; Перезапишите HTML компонент со своей формой.',
            ],
            'upload_form' => [
                'name'        => 'AJAX форма с файлами',
                'description' => '[BETA] Форма с возможностью прикрепления файлов.',
            ],
            'empty_form' => [
                'name'        => 'Пустая AJAX форма',
                'description' => 'Создает пустой плейсхолдер для вашей формы, который вы должны перезаписать своим HTML кодом.',
            ],
            'shared' => [
                'csrf_error'        => 'Сессия формы истекла! Перезагрузите страницу.',
                'recaptcha_warn'    => 'Внимание: reCAPTCHA настроена не правильно. Пожалуйста, перейдите в Настройки > CMS > Magic Forms и заполните все обязательные поля.',
                'group_validation'  => 'Валидация формы',
                'group_messages'    => 'Флэш-сообщения',
                'group_mail'        => 'Настройки уведомлений',
                'group_mail_resp'   => 'Настройки авто-ответа',
                'group_settings'    => 'Остальные настройки',
                'group_security'    => 'Безопасность',
                'group_recaptcha'   => 'Настройки reCAPTCHA',
                'group_advanced'    => 'Продвинутые настройки',
                'group_uploader'    => 'Настройки файлового загрузчика',
                'validation_req'    => 'Этот атрибут обязателен',
                'group'             => ['title' => 'Группа'             , 'description' => 'Организуйте свои формы по группам. Эта опция полезна для экспорта записей.'],
                'rules'             => ['title' => 'Правила'            , 'description' => 'Используйте валидацию Laravel для установки своих правил обработки полей.'],
                'rules_messages'    => ['title' => 'Сообщения от правил', 'description' => 'Используйте свои собственные сообщения от кастомных валидаций.'],
                'custom_attributes' => ['title' => 'Кастомные атрибуты' , 'description' => 'Используйте кастомные атрибуты в своих правилах валидаций.'],
                'messages_success'  => ['title' => 'Успешно'            , 'description' => 'Сообщение об успешной отправке формы', 'default' => 'Your form has been sent successfully!'],
                'messages_errors'   => ['title' => 'Ошибки'             , 'description' => 'Сообщение с ошибками формы' , 'default' => 'There are errors in your application.'],
                'messages_partial'  => ['title' => 'Кастомный фрагмент' , 'description' => 'Переопределить стандартные уведомления кастомным фрагментом из вашей фронтенд темы.'],
                'mail_enabled'      => ['title' => 'Отправка уведомлений','description' => 'Отправлять увдеомления по email после каждого успешного заполенния формы.'],
                'mail_subject'      => ['title' => 'Тема письма'        , 'description' => 'Переопределить тему письма по умолчанию'],
                'mail_recipients'   => ['title' => 'Получатели'         , 'description' => 'Укажите получателей электронной почты. Используйте адреса электронной почты в качестве ключей и имена в качестве значений.'],
                'mail_bcc'          => ['title' => 'BCC'                , 'description' => 'Отправить копию получателям электронной почты (По одному адресу в строке)'],
                'mail_replyto'      => ['title' => 'ReplyTo поле email' , 'description' => 'Поле формы, содержащее адрес электронной почты отправителя, который будет использоваться как "ReplyTo"'],
                'mail_template'     => ['title' => 'Шаблон письма'      , 'description' => 'Используйте собственный шаблон письма. Укажите код шаблона, например, "blakejones.magicforms::mail.notification" (находится в разделе Настройки -> Почтовые шаблоны). Оставьте пустым, чтобы использовать по умолчанию.'],
                'mail_uploads'      => ['title' => 'Прикреплять файлы'  , 'description' => 'Прикреплять файлы к письму'],
                'mail_resp_enabled' => ['title' => 'Отправить авто-ответ','description' => 'Отправить автоответчик на email отправителя.'],
                'mail_resp_field'   => ['title' => 'Email поле'         , 'description' => 'Имя поля с email отправителя'],
                'mail_resp_from'    => ['title' => 'Email адрес отправителя', 'description' => 'Адрес электронной почты отправителя электронной почты с автоматическим ответом (например, noreply@yourcompany.com)'],
                'mail_resp_subject' => ['title' => 'Тема пиьсма'        , 'description' => 'Переопределить тему письма по умолчанию'],
                'reset_form'        => ['title' => 'Сбросить форму'     , 'description' => 'Сбросить форму после успешной отправки'],
                'redirect'          => ['title' => 'Редирект'			, 'description' => 'Редирект на URL после успешной отправки формы.'],
                'inline_errors'     => ['title' => 'Встроенные ошибки'  , 'description' => 'Отображать встроенные ошибки. Это требует дополнительного кода, проверьте документацию для получения дополнительной информации.', 'disabled' => 'Отключено', 'display' => 'Отображать ошибки', 'variable' => 'JS переменная'],
                'js_on_success'     => ['title' => '"Успешный" JS'      , 'description' => 'Выполнияет скрипт после успешной отправки формы. Не используйте <script> теги.'],
                'js_on_error'       => ['title' => '"Ошибочный" JS'     , 'description' => 'Выполнияет скрипт после не успешной отправки формы. Не используйте <script> теги'],
                'allowed_fields'    => ['title' => 'Разрешенные поля'   , 'description' => 'Укажите, какие поля должны быть отфильтрованы и сохранены (По одному адресу в строке)'],
                'anonymize_ip'      => ['title' => 'Анонимный IP'       , 'description' => 'Не хранить IP-адрес', 'full' => 'Полный', 'partial' => 'Частичынй', 'disabled' => 'Отключено'],
                'sanitize_data'     => ['title' => '"Sanitize" данные формы' , 'description' => 'Очищает поля формы от возмонжой XSS атаки', 'disabled' => 'Отключено', 'htmlspecialchars' => 'Использовать htmlspecialchars'],
                'recaptcha_enabled' => ['title' => 'Включить reCAPTCHA' , 'description' => 'Внедряет reCAPTCHA виджет в вашу форму (не забудьте добавить фрагмент).'],
                'recaptcha_theme'   => ['title' => 'Тема оформления'    , 'description' => 'Цветовая тема виджета', 'light' => 'Светлая' , 'dark' => 'Темная'],
                'recaptcha_type'    => ['title' => 'Тип'                , 'description' => 'Тип CAPTCHA', 'image'  => 'Картинки' , 'audio'   => 'Аудио'],
                'recaptcha_size'    => ['title' => 'Размер'             , 'description' => 'Размер виджета', 'normal' => 'Обычный', 'compact' => 'Комактный'],
                'skip_database'     => ['title' => 'Пропустить Базу'    , 'description' => 'Не хранить записи в базе данных. Полезно, если вы хотите использовать события с вашим плагином.'],
                'uploader_enable'   => ['title' => 'Разрешить загрузку' , 'description' => 'Включить загрузку файлов. Разрешает форме принимать файлы.'],
                'uploader_multi'    => ['title' => 'Множественные файлы', 'description' => 'Разрешить загрузку множества файлов (Если выключено то форма сможет принять только один файл)'],
                'uploader_pholder'  => ['title' => 'Placeholder текст'  , 'description' => 'Формулировка, отображаемая при отсутствии загруженного файла.', 'default' => 'Нажмите или перетащите файлы для загрузки'],
                'uploader_maxsize'  => ['title' => 'Ограничение размера файла', 'description' => 'Максимальный размер файла, который может быть загружен в мегабайтах'],
                'uploader_types'    => ['title' => 'Разрешенные типы файлов', 'description' => 'Разрешенные расширения файлов или звездочка (*) для всех типов (По одному расширению в строке)'],
                'uploader_remFile'  => ['title' => 'Popup текст об удалении'  , 'description' => 'Текст для отображения во всплывающем окне при удалении файла', 'default' => 'Вы уверены?'],
            ]
        ],

        'settings' => [
            'tabs'                    => ['general' => 'Основное', 'recaptcha' => 'reCAPTCHA', 'gdpr' => 'GDPR'],
            'section_flash_messages'  => 'Флэш-сообщения',
            'global_messages_success' => ['label' => 'Глобальное сообщение об успешной отправки формы', 'comment' => '(Этот параметр может быть переопределен из компонента)', 'default' => 'Your form has been sent successfully!'],
            'global_messages_errors'  => ['label' => 'Глобальное сообщение об не успешной отправки формы' , 'comment' => '(Этот параметр может быть переопределен из компонента)', 'default' => 'There are errors in your application.'],
            'plugin_help'             => 'Вы можете получить доступ к документации по плагину в GitHub:',
            'global_hide_button'      => 'Скрыть элемент навигации',
            'global_hide_button_desc' => 'Полезно, если вы хотите использовать события с вашим плагином.',
            'section_recaptcha'       => 'reCAPTCHA настройки',
            'recaptcha_site_key'      => 'Site key',
            'recaptcha_secret_key'    => 'Secret key',
            'gdpr_help_title'         => 'Информация',
            'gdpr_help_comment'       => 'Новый закон о GDPR в Европе, вы не можете хранить записи бесконечно, необходимо очистить их через определенный промежуток времени в зависимости от ваших потребностей',
            'gdpr_enable'             => 'Включить GDPR',
            'gdpr_days'               => 'Хранение записей максимум Х дней',
        ],

        'permissions' => [
            'tab'             => 'Magic Forms',
            'access_records'  => 'Доступ к записям форм',
            'access_exports'  => 'Доступ к экспорту записей',
            'access_settings' => 'Доступ к настройкам модуля',
            'gdpr_cleanup'    => 'Разрешить GDPR очистку',
        ],

        'mails' => [
            'form_notification' => ['description' => 'Уведомлять когда форма отправлена успешно'],
            'form_autoresponse' => ['description' => 'Авто-ответ при успешной отправке формы'],
        ],

        'validation' => [
            'recaptcha_error' => 'Не удается проверить поле reCAPTCHA'
        ],

        'classes' => [
            'GDPR' => [
                'alert_gdpr_disabled' => 'GDPR опции отключены',
                'alert_invalid_gdpr'  => 'Некорретное занчение дней в настройках GDPR',
            ]
        ]

    ];

?>

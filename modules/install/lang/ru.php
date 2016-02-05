<?php
$lang->introduce_title = 'Установка RhymiX';
$lang->install_checklist_title['php_version'] = 'Версия PHP';
$lang->install_checklist_title['permission'] = 'права доступа к папке files';
$lang->install_checklist_title['xml'] = 'xml / simplexml';
$lang->install_checklist_title['curl'] = 'curl';
$lang->install_checklist_title['iconv'] = 'iconv / mbstring';
$lang->install_checklist_title['json'] = 'json';
$lang->install_checklist_title['gd'] = 'gd';
$lang->install_checklist_title['mcrypt'] = 'mcrypt / openssl';
$lang->install_checklist_title['session'] = 'session.auto_start настройка';
$lang->install_checklist_desc['permission'] = '[Требуется] Путь установки RhymiX или директория ./files должна иметь права доступа 777';
$lang->install_checklist_desc['xml'] = '[Требуется] XML Библиотека нужна для XML коммуникации';
$lang->install_checklist_desc['session'] = '[Требуется] Файл настроек PHP (php.ini) \'Session.auto_start\' должен быть равен нулю, чтобы RhymiX могла использовать сессии';
$lang->install_checklist_desc['iconv'] = 'Iconv должна быть установлена для конвертирования между UTF-8 и иными языковыми кодировками';
$lang->install_checklist_desc['gd'] = 'GD Библиотека должна быть установлена для использования функции конвертироваия изображений';
$lang->install_checklist_xml = 'Установить XML библиотеку';
$lang->install_without_xml = 'XML библиотека не установлена';
$lang->install_checklist_gd = 'Установить GD библиотеку';
$lang->install_without_gd = 'GD библиотека не установлена';
$lang->install_without_iconv = 'Iconv библиотека не установлена';
$lang->install_session_auto_start = 'Возможно возникнут проблемы из-за настройки PHP session.auto_start, установленной в 1';
$lang->install_permission_denied = 'Права доступа пути не установлены в 777';
$lang->cmd_install_refresh_page = 'обновление';
$lang->cmd_install_next = 'Продолжить установку';
$lang->cmd_recommended = 'рекомендуемые';
$lang->db_desc['mysqli'] = 'Используем mysqli*() функцию, чтобы использовать базу данных mysql.<br />Транзакция отключена из-за того, что файл базы данных создан посредством myisam.';
$lang->db_desc['mysqli_innodb'] = 'Используем innodb  чтобы использовать базу данных mysql.<br />Транзакция включена для innodb';
$lang->db_desc['mysql'] = 'Используем mysql_*() функцию, чтобы использовать базу данных mysql.<br />Транзакция отключена из-за того, что файл базы данных создан посредством myisam.';
$lang->db_desc['mysql_innodb'] = 'Используем innodb  чтобы использовать базу данных mysql.<br />Транзакция включена для innodb';
$lang->db_desc['cubrid'] = 'Используем CUBRID DB. <a href="http://www.cubrid.org/wiki_tutorials/entry/cubrid-installation-instructions" target="_blank">Manual</a>';
$lang->db_desc['mssql'] = 'Используем Microsoft SQL Server DB.';
$lang->form_title = 'Пожалуйста, введите дазу данных &amp; Административная Информация';
$lang->db_title = 'Пожалуйста, введите информацию базы данных';
$lang->db_type = 'Тип базы данных';
$lang->select_db_type = 'Пожалуйста, выберите базу данных, которую Вы хотите использовать.';
$lang->db_hostname = 'Хост базы данных';
$lang->db_port = 'Порт базы данных';
$lang->db_userid = 'ID базы данных';
$lang->db_password = 'Пароль базы данных';
$lang->db_name = 'DB Имя';
$lang->db_database_file = 'Файл базы данных';
$lang->db_table_prefix = 'Префикс таблиц';
$lang->admin_title = 'Административная информация';
$lang->env_title = 'Конфигурация';
$lang->use_optimizer = 'Включить оптимизатор';
$lang->about_optimizer = 'Если оптимизатор включен, пользователи могут быстро использовать этот сайт, поскольку несколько CSS / JS файлов собраны вместе и сжаты до передачи. <br /> Тем не менее, эта оптимизация может быть проблематичной согласно CSS или JS. Если Вы выключите ее, движок будет работать правильно, хотя и медленее.';
$lang->use_rewrite = 'Использовать<br /> модуль перезаписи<br />(mod_rewrite)';
$lang->use_sso = '<abbr title="Single Sign On">SSO</abbr>';
$lang->about_rewrite = 'Если сервер предлагает mod_rewrite, длинные URL такие как  http://blah/?document_srl=123 могут быть сокращены до http://blah/123';
$lang->time_zone = 'Часовой пояс';
$lang->about_time_zone = 'Если серверное время и Ваше локальное время не совпадают, Вы можете установить такое же время, как Ваше локальное, используя часовой пояс';
$lang->ssl_options['none'] = 'Никогда';
$lang->ssl_options['optional'] = 'На выбор';
$lang->ssl_options['always'] = 'Всегда';
$lang->about_database_file = 'Sqlite сохраняет данные в файл. Размещение базы данных должно быть недоступно с веб<br/><span style="color:red">Файл базы данных должен иметь права доступа 777.</span>';
$lang->success_installed = 'Установка завершена';
$lang->msg_cannot_proc = 'Невозможно исполнить запрос, поскольку окружение установки не указано';
$lang->msg_already_installed = 'RhymiX уже установлена';
$lang->msg_dbconnect_failed = 'Произошла ошибка подключения к базе данных. Пожалуйста, проверьте иформацию базы данных еще раз';
$lang->msg_table_is_exists = 'Таблица существует в базе данных. Файл конфигурации создан заново';
$lang->msg_install_completed = 'Установка завершена. Спасибо Вам за выбор RhymiX.';
$lang->msg_install_failed = 'Произошла ошибка при создании файла конфигурации.';
$lang->ftp_form_title = 'Введите данные FTP';
$lang->ftp = 'FTP';
$lang->msg_ftp_not_connected = 'Connection to localhost via FTP failed. Please check the port number and if FTP service is available.';
$lang->msg_ftp_chmod_fail = 'Chmod failed. Please check the permission and configuration of FTP server.';

<?php
/**
 * Manager Russian Lexicon Entries for miniShop2
 *
 * @package minishop2
 * @subpackage lexicon
 */
$_lang['ms2_menu_create'] = 'Создать';
$_lang['ms2_menu_copy'] = 'Копировать';
$_lang['ms2_menu_add'] = 'Добавить';
$_lang['ms2_menu_update'] = 'Изменить';
$_lang['ms2_menu_remove'] = 'Удалить';
$_lang['ms2_menu_remove_multiple'] = 'Удалить выбранное';
$_lang['ms2_menu_remove_confirm'] = 'Вы уверены, что хотите удалить эту запись?';
$_lang['ms2_menu_remove_multiple_confirm'] = 'Вы уверены, что хотите удалить все выбранные записи?';

$_lang['ms2_combo_select'] = 'Нажмите для выбора';
$_lang['ms2_combo_select_status'] = 'Фильтр по статусу';

$_lang['ms2_id'] = 'Id';
$_lang['ms2_key'] = 'Ключ';
$_lang['ms2_name'] = 'Имя';
$_lang['ms2_color'] = 'Цвет';
$_lang['ms2_country'] = 'Страна';
$_lang['ms2_logo'] = 'Логотип';
$_lang['ms2_address'] = 'Адрес';
$_lang['ms2_phone'] = 'Телефон';
$_lang['ms2_fax'] = 'Факс';
$_lang['ms2_email'] = 'Email';
$_lang['ms2_active'] = 'Включен';
$_lang['ms2_required'] = 'Обязательный';
$_lang['ms2_class'] = 'Класс-обработчик';
$_lang['ms2_description'] = 'Описание';
$_lang['ms2_num'] = 'Номер';
$_lang['ms2_status'] = 'Статус';
$_lang['ms2_count'] = 'Количество';
$_lang['ms2_cost'] = 'Стоимость';
$_lang['ms2_order_cost'] = 'Стоимость заказа';
$_lang['ms2_cart_cost'] = 'Стоимость покупок';
$_lang['ms2_delivery_cost'] = 'Стоимость доставки';
$_lang['ms2_weight'] = 'Вес';
$_lang['ms2_createdon'] = 'Дата создания';
$_lang['ms2_updatedon'] = 'Дата изменения';
$_lang['ms2_user'] = 'Пользователь';
$_lang['ms2_timestamp'] = 'Метка времени';
$_lang['ms2_order_log'] = 'История заказа';
$_lang['ms2_order_products'] = 'Покупки';
$_lang['ms2_action'] = 'Действие';
$_lang['ms2_entry'] = 'Запись';
$_lang['ms2_username'] = 'Логин';
$_lang['ms2_fullname'] = 'Пользователь';
$_lang['ms2_resource'] = 'Ресурс';

$_lang['ms2_receiver'] = 'Получатель';
$_lang['ms2_index'] = 'Индекс';
$_lang['ms2_region'] = 'Область';
$_lang['ms2_city'] = 'Город';
$_lang['ms2_metro'] = 'Станция метро';
$_lang['ms2_street'] = 'Улица';
$_lang['ms2_building'] = 'Здание';
$_lang['ms2_room'] = 'Комната';
$_lang['ms2_comment'] = 'Комментарий';

$_lang['ms2_email_user'] = 'Письмо покупателю';
$_lang['ms2_email_manager'] = 'Письмо менеджеру';
$_lang['ms2_subject_user'] = 'Тема письма покупателю';
$_lang['ms2_subject_manager'] = 'Тема письма менеджеру';
$_lang['ms2_body_user'] = 'Чанк письма покупателю';
$_lang['ms2_body_manager'] = 'Чанк письма менеджеру';
$_lang['ms2_status_final'] = 'Итоговый';
$_lang['ms2_status_final_help'] = 'Если статус является итоговым - его нельзя переключить на другой.';
$_lang['ms2_status_fixed'] = 'Фиксирует';
$_lang['ms2_status_fixed_help'] = 'Фиксирующий статус запрещает переключение на статусы, которые идут в таблице раньше него.';
$_lang['ms2_options'] = 'Опции';
$_lang['ms2_add_cost'] = 'Доп. стоимость';
$_lang['ms2_add_cost_help'] = 'Дополнительная стоимость доставки или оплаты. Может быть отрицательной, можно указывать проценты.';
$_lang['ms2_weight_price'] = 'Стоимость ед/вес';
$_lang['ms2_weight_price_help'] = 'Добавочная стоимость доставки за единицу веса.<br/>Может быть использовано в кастомных классах.';
$_lang['ms2_distance_price'] = 'Стоимость ед/рст';
$_lang['ms2_distance_price_help'] = 'Добавочная стоимость доставки за единицу расстояния.<br/>Может быть использовано в кастомных классах.';
$_lang['ms2_order_requires'] = 'Обязательные поля';
$_lang['ms2_order_requires_help'] = 'При оформлении заказа, кастомный класс может требовать заполнение этих полей.';

$_lang['ms2_orders_selected_status'] = 'Сменить статус';

$_lang['ms2_link_name'] = 'Имя связи';
$_lang['ms2_link_one_to_one'] = 'Один к одному';
$_lang['ms2_link_one_to_one_desc'] = 'Равная связь двух товаров. Если вы хотите связать более чем 2 товара, нужно использовать "многие ко многим".';
$_lang['ms2_link_one_to_many'] = 'Один ко многим';
$_lang['ms2_link_one_to_many_desc'] = 'Связь главного товара с подчинёнными. Например, товар является набором других товаров. Хорошо подойдёт для указания рекомендованных товаров.';
$_lang['ms2_link_many_to_one'] = 'Многие к одному';
$_lang['ms2_link_many_to_one_desc'] = 'Связь подчинённых товаров с главным, при этом, друг с другом они не связаны. Например, товары, входят в определённый набор.';
$_lang['ms2_link_many_to_many'] = 'Многие ко многим';
$_lang['ms2_link_many_to_many_desc'] = 'Равная связь множества товаров. Все товары группы связаны друг с другом и при добавлении новой связи одному из них - её получают и другие. Типичное применение: связь по какому-то параметру, например цвету, размеру, языковой версии и т.д.';
$_lang['ms2_link_master'] = 'Главный товар';
$_lang['ms2_link_slave'] = 'Подчинённый товар';
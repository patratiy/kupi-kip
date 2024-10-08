# СЕРВИС АНАЛИТИКА (ERP МойСклад)

### Установка пакетов из packagist

```bash
php composer.phar install
```

загрузка композера https://getcomposer.org/download/

### Заполнить актуальные подключения к БД в .env

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=maxmoll
DB_USERNAME=maxmoll
DB_PASSWORD='_X#675:w88F8'
```

### установка миграций

```bash
php artisan migrate:install
php artisan migrate
```

### .ENV

настройка env окружения, открыть env.example, и скопировать три последние переменные в .env, заполнить их нужными данными

`TIME_OUT_BETWEEN_REQUEST` - время в мсек между запросами для заказов и бандлов

`MOY_SKLAD_TOKEN` - токен авторизации для ERP МойСклад 

`BASE_URL_MOY_SKLAD` - базовый url для ERP МойСклад 

`NAME_SYNC_ENTITY_FOR_FULL_LOAD` - через запятую указываются синхр. сущности, которые нужно синхронить целиком, при первой заливке это каталог и бандлы

`DAYS_INTERVAL_UPDATE` - временной отрезок от настоящего момент времени в днях, для выполнения обновления сущностей МойСклад

### настройка CRON

для функционирования shedule команд прописать на сервере в crontab команду

```bash
* * * * * cd /path_to_your_project_on_server && php artisan schedule:run >> /dev/null 2>&1
```

### запуск синхр. вручную

через artisan возможно запускать команды для синхронизации принудительно

```bash
php artisan sync:moysklad orders
```

### заполнение справочников

для справочников предусмотрена след. команда в artisan

```bash
php artisan sync:dict_data
```

### кэширование конфикурации

после того как env переменные были заполнены, конфигурацию можно закэшировать

```bash
php artisan config:cache
```

для внесения изменений, удалить кэш, и выполнить операцию выше

```bash
php artisan config:clear
```

### настроить права для работы apache2 или nginx с файловой системой, папка storage

```bash
cd /document_root_project
chown www-data:www-data ./storage
```

под пользователем www-data может быть любой др. пользователь от которого запущен apache2 (httpd) 





# Установка


### Первый запуск

- Клонируем репозиторий - `git clone https://github.com/barisceliker1/LaravelTDD.git`
- Переходим в папку с проектом - `cd LaravelTDD`
- Устанавливаем зависимости composer - `composer install`
- Устанавливаем зависимости npm - `npm install`
- Копируем файл конфигурации - `cp .env.example .env`
- Генерируем ключ - `php artisan key:generate`
- ``` php artisan storage:link```
- В файле `.env`, при необходимости, меняем на свои: <br/>`DB_DATABASE=crm_new` (default)<br/> `DB_USERNAME=root` (default)<br/> `DB_PASSWORD=` (default)
- В phpMyAdmin создаем базу данных согласно `DB_DATABASE` установленному в `.env`. По-умолчанию имя БД - `crm_new`. 
- Для запуска миграций выполняем команду - `php artisan migrate --seed`
- Запускаем сервер php - `php artisan serve`
- *[Hе обязательно]* Для live-обновления страницы после внесения любых изменений в код, запускаем команду - `npm run watch`
- Пишем код, вносим изменения, делаем мир лучше

### Последующие запуски

- Скачиваем последнюю версию репозитория - `git pull`
- Устанавливаем обновленные зависимости composer - `composer install`
- Устанавливаем обновленные зависимости npm - `npm install`
- Запускаем свежую миграцию сидов (может занят некоторое время) - `php artisan migrate:fresh --seed`
- Запускаем сервер php - `php artisan serve`
- *[Не обязательно]* Для live-обновления страницы после внесения любых изменений в код, запускаем команду - `npm run watch`
- Пишем код, вносим изменения, делаем мир лучше


## Medicine.com

### Шаги для установки проекта:

1. Клонируем репозиторий
`git clone https://github.com/levchenko-yarya/medicine.git`

2. Копируем файл окружения
`copy .env.example .env`

3. Устанавливаем зависимости laravel
`composer install`

4. Генерируем ключ
`php artisan key:generate`

5. Добавляем таблицы в базу данных
`php artisan migrate`

### Документация api запросов

GET-запрос `/agents` - выводит весь список лекарственных средств

GET-запрос `/agents/{id}` - выводит информацию указанного лекарства



### документация по настройке docker

https://laravel.demiart.ru/setup-laravel-in-docker-container/

`docker-compose build` - сборка docker контейнеров

`docker-compose up -d` - запуск docker
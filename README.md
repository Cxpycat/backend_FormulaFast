# Backend для проекта FormulaFast

Этот репозиторий содержит backend-часть проекта FormulaFast, посвященного миру гонок Формулы 1. Backend разработан на
Laravel 10.

Дополнительную информацию о проекте и его frontend можно найти в
репозитории [FormulaFastFront](https://github.com/Cxpycat/FormulaFastFront).

## Запуск

1. Создайте файл `.env` и скопируйте в него содержимое файла `.env.example`.
2. Запустите команду `php artisan key:generate` для генерации ключа приложения.
3. Запустите команду `php artisan jwt:secret` для генерации секретного ключа JWT.
4. Очистите конфигурацию командой `php artisan config:clear`.
5. Очистите кэш маршрутов командой `php artisan route:clear`.
6. Запустите Docker Compose с помощью команды `docker-compose up`.
7. Выполните миграции и заполните базу данных данными с помощью команды `php artisan migrate:refresh --seed`.

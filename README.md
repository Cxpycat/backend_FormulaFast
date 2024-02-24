# Backend для проекта FormulaFast

Этот репозиторий содержит backend-часть проекта FormulaFast, посвященного миру гонок Формулы 1. Backend разработан на
Laravel 10.

Дополнительную информацию о проекте и его frontend можно найти в
репозитории [FormulaFastFront](https://github.com/Cxpycat/FormulaFastFront).

Запуск

1) Создайте env файл
2) php artisan key:generate
3) php artisan jwt:secret
4) php artisan config:clear
5) php artisan route:clear
6) docker compose up
7) php artisan migrate:refresh --seed

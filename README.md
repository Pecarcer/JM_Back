Si clonas este repositorio deberás hacer lo siguiente:
composer install
cp .env.example .env
php artisan key:generate
php artisan cache:clear
php artisan config:cache
php artisan migrate
php artisan db:seed
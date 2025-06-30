@echo off

REM Docker management script for Laravel application

if "%1"=="start" (
    echo Starting the application...
    docker compose up -d
    echo Application is running at http://localhost
    goto :eof
)

if "%1"=="stop" (
    echo Stopping the application...
    docker compose down
    goto :eof
)

if "%1"=="restart" (
    echo Restarting the application...
    docker compose down
    docker compose up -d
    echo Application restarted and running at http://localhost
    goto :eof
)

if "%1"=="build" (
    echo Building the application...
    docker compose build --no-cache
    goto :eof
)

if "%1"=="logs" (
    docker compose logs -f
    goto :eof
)

if "%1"=="shell" (
    docker compose exec app bash
    goto :eof
)

if "%1"=="migrate" (
    echo Running Laravel migrations...
    docker compose exec app php artisan migrate
    goto :eof
)

if "%1"=="seed" (
    echo Running Laravel seeders...
    docker compose exec app php artisan db:seed
    goto :eof
)

if "%1"=="install" (
    echo Installing Laravel dependencies...
    docker compose exec app composer install
    goto :eof
)

if "%1"=="db-status" (
    echo Checking database status...
    docker compose exec db mysql -u root -pSNi4BuagZ23b -e "SHOW DATABASES;"
    goto :eof
)

if "%1"=="db-create" (
    echo Creating database if it doesn't exist...
    docker compose exec db mysql -u root -pSNi4BuagZ23b -e "CREATE DATABASE IF NOT EXISTS sharoel1_sharoel_studio CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
    goto :eof
)

if "%1"=="db-test" (
    echo Testing Laravel database connection...
    docker compose exec app php artisan tinker --execute="DB::connection()->getPdo();"
    goto :eof
)

if "%1"=="setup" (
    echo Setting up Laravel application...
    echo Generating application key...
    docker compose exec app php artisan key:generate --force
    echo Creating storage link...
    docker compose exec app php artisan storage:link
    echo Clearing caches...
    docker compose exec app php artisan config:clear
    docker compose exec app php artisan cache:clear
    docker compose exec app php artisan route:clear
    docker compose exec app php artisan view:clear
    echo Running migrations...
    docker compose exec app php artisan migrate --force
    echo Setup complete!
    goto :eof
)

if "%1"=="fresh-migrate" (
    echo Refreshing database with fresh migrations...
    docker compose exec app php artisan migrate:fresh --force
    goto :eof
)

echo Usage: %0 {start^|stop^|restart^|build^|logs^|shell^|migrate^|seed^|install^|db-status^|db-create^|db-test^|setup^|fresh-migrate}
echo.
echo Commands:
echo   start         - Start the application
echo   stop          - Stop the application
echo   restart       - Restart the application
echo   build         - Build Docker images
echo   logs          - Show application logs
echo   shell         - Access Laravel container shell
echo   migrate       - Run Laravel migrations
echo   seed          - Run Laravel seeders
echo   install       - Install Laravel dependencies
echo   db-status     - Check database status
echo   db-create     - Create database if missing
echo   db-test       - Test Laravel database connection
echo   setup         - Complete Laravel application setup
echo   fresh-migrate - Refresh database with fresh migrations

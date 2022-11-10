## Instruction

Clone using `git clone https://github.com/b14ck0ps/SamrtParking.git`
Go to the folder, copy `.env.example` and rename it to `.env`
Then open PowerShell and run

    composer install
    php artisan key:generate
    php artisan migrate
    php artisan serve

\*If ask to create database when migrating, type `yes`

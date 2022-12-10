## Instruction

Clone using `git clone https://github.com/b14ck0ps/SamrtParking.git`
Go to the folder, copy `.env.example` and rename it to `.env`
Then open PowerShell and run

    composer install
    php artisan key:generate
    php artisan migrate
    php artisan serve

\*If ask to create database when migrating, type `yes`

For react

    npm install
    npm run dev

For mailtrap

make an account on mailtrap.io and get the Credentials

    MAIL_DRIVER=smtp
    MAIL_HOST=smtp.mailtrap.io
    MAIL_PORT=2525
    MAIL_USERNAME=your_username
    MAIL_PASSWORD=your_password
    MAIL_ENCRYPTION=null

add this to .env file

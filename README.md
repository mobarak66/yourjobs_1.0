## Mobarak Hossain

## Upgraded 
** V 1.0: 15.01.2023

## GitHub


### Database Setup
This app uses MySQL. To use something different, open up config/Database.php and change the default driver.

To use MySQL, make sure you install it, setup a database(yourjobs_1.0) and then add your db credentials(database, db_port, username and password) to the .env.example file and rename it to .env

## Mobarak Hossain
composer update

### Migrations

To create all the necessary tables and columns, run the following
```
php artisan migrate
```

### Seeding The Database
To add the dummy jobs with a single user, run the following
```
php artisan db:seed
```

### File Uploading
When uploading job files, they go to "storage/app/public". Create a symlink with the following command to make them publicly accessible.
```
php artisan storage:link
```

### Running Then App
Upload the files to your document root, Valet folder or run 
```
php artisan serve
```
## For asking for key generation- Follow below:

php artisan key:generate

Finally:
php artisan serve

## License


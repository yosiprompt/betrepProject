## Instructions

- Rename the file **.env.example** to **.env**
- Modify database conection in **.env** file to your local database
- Run the following commands on the prject folder:
    - `composer install`
    - `npm install`
    - `npm run dev`
    - `php artisan migrate --seed` *(the `--seed` part it's optional)*
    - `php artisan serve`
- then go to http://127.0.0.1:8000/

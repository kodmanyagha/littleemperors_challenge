The test should be done in Laravel and committed to this repository.

Feel free to install any libraries or plugins you want to facilitate the tasks.

### Test 1
Implement a console command to import a CSV file with a list of hotels and store them in a local database. You can use any database engine of your choice.
In the hotels.csv file there are the fields and data you need to import.
Note the file columns are separated by semicolon ';' as some of the content might have commas in it, like the Hotel Name or the Description.

To help with the CSV parsing, you're free to install via composer any existing import library if you want or just use the PHP CSV functions. The script should run from the console via a simple command.

The script should run using the command: `php artisan import:hotels`

### Test 2
Implement a Restful API to manage CRUD operations for the hotels stored in the database from the *Test 1*.
The API should have an endpoint for each of the following actions:
- Return the list of all hotels. It should display only the id, name and city fields of each hotel.
- Return all the details of a single hotel given its ID.
- Add a new hotel in the database.
- Update the details of a single hotel.
- Delete a single hotel from the database. Please use soft deletes.


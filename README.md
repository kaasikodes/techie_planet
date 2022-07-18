# Solution

The solutions are broken down into different folders which are indicative of the different sections

## Section 1 - Programming and Algorithm

The folder consists of 3 files , with each file being a solution to the problem stated in the section.

## Section 2 - DATABASES AND SQL

The folder consists of a solutions.rtf file in which the answers to the questions in the section can be found.

## Section 3 - APPLICATION DEVELOPMENT

The application is built using the laravel framework, and as a result to be able to interact with the soln. You would have to :

- Open you preferred terminal
- cd into the school-report-card folder
- run `composer require` to install laravel and other packages (i.e composer has to be installed on system prior)
- Set up your DB(database) details in the .env
- Then run the `php artisan key:generate` command
- Then run the migrations using `php artisan migrate` command
- When your migration is done, your DB will be setup
- Then run `php artisan db:seed` to populate the subject and student table with data
- You can then run `php artisan serve` to run the appliction locally on your system
- Thank you.

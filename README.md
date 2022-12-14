## About Software Development @ Cyberhawk

need some content for this section

## The task
We've designed this task to try and give you the ability to show us what you can do and hopefully flex your technical and creative muscles. You can't show off too much here, show us you at your best and wow us!

To make things as simple as we could, we've opted to use [Laravel Sail](https://laravel.com/docs/8.x/sail) to provide a quick and convenient development environment, this will require you to install
[Docker Desktop](https://www.docker.com/products/docker-desktop) before you can start the test. We've provided [some more detailed instructions](#setting-everything-up) below in case this is your first time using Docker or Sail.

We'd like you to build an application that will display an example wind farm, its turbines and their components.
We'd like to be able to see components and their grades (measurement of damage/wear) ranging between 1 - 5.

For example, a turbine could contain the following components:
- Blade
- Rotor
- Hub
- Generator

Don't worry about using real names for components or accurate looking data, we're more interested in how you structure the application and how you present the data.

Don't be afraid of submitting incomplete code or code that isn't quite doing what you would like, just like your maths teacher, we like to see your working.
Just Document what you had hoped to achieve and your thoughts behind any unfinished code, so that we know what your plan was.

### Requirements
- Display a list of turbine inspections
- Each Turbine should have a number of components
- A component can be given a grade from 1 to 5 (1 being perfect and 5 being completely broken/missing)
- Use Laravel Models to represent the Entities in the task.

### Bonus Points
- Great UX/UI
- Use of React JS
- Use of Tailwind CSS
- Use of 3D
- Use of a web map technology in the display of the data
- Automated tests
- API Authentication
- Use of coding style guidelines (we use PSR-12 and AirBnb)
- Use of git with clear logical commits
- Specs/Plans/Designs

### Submitting The Task
We're not too fussy about how you submit the task, providing it gets to us and we're able to run it we'll be happy however here are some of the ways we commonly see:
- Fork this repo, work and add us as a collaborator on your GitHub repo and send us a link
- ZIP the project and email it to us at nick.stewart@thecyberhawk.com

## Setting Everything Up
As mentioned above we have chosen to make use of Laravel Sail as the foundation of this technical test.
- If you haven't already, you will need to install [Docker Desktop](https://www.docker.com/products/docker-desktop).
- One that is installed your next step is to install this projects composer dependencies (including Sail).
    - This will require either PHP 8 installed on your local machine or the use of [a small docker container](https://laravel.com/docs/8.x/sail#installing-composer-dependencies-for-existing-projects) that runs PHP 8 that can install the dependencies for us.
- If you haven't done so already copy the `.env.example` file to `.env`
    - If you are running a local development environment you may need to change some default ports in the `.env` file
        - We've already changed mysql to 33060 and NGINX to 81 for you
- It should now be time to [start Sail](https://laravel.com/docs/8.x/sail#starting-and-stopping-sail) and the task

### Installing Composer Dependencies
https://laravel.com/docs/9.x/sail#installing-composer-dependencies-for-existing-projects
```bash
docker run --rm \
-u "$(id -u):$(id -g)" \
-v $(pwd):/var/www/html \
-w /var/www/html \
laravelsail/php81-composer:latest \
composer install --ignore-platform-reqs
```

## Your Notes

Hello! Thank you for reviewing my my work. I look forward to the opportunity to discuss my approach to this solution.

Please note the front-end solution can be found here: [https://github.com/haakym/cyberhawk-fe](https://github.com/haakym/cyberhawk-fe)

### Getting started

1. Run `composer install`.
2. Check if `.env` file exists. If not, run `cp .env.example .env`.
3. Run `./vendor/bin/sail up`; docker must be installed and running for this to work.
4. Run `./vendor/bin/sail artisan migrate` to create the database tables.
5. Access on `http://localhost` with postman or use front-end solution.

Note: when running `./vendor/bin/sail up` the database may not run correctly if the `DB_HOST` env var in `.env` is set to `127.0.0.1`, it should be set to `DB_HOST=mysql`.

### Approach to solution

- Write an API specification using [Open Api Specification](https://github.com/OAI/OpenAPI-Specification) - this helps plan out endpoints, think about request and response data and also flesh out some domain objects in the process.
- Use outside-in TDD:
    - Write a broad encompassing test, i.e. a feature test (e.g. get all inspections).
    - Get the test passing using the minimum amount of code.
    - Refactor solution.
    - Write specific lower level tests in the process (Unit tests).
- Lean controllers
    - Controllers should only deal with request and response.
    - Hand off business logic/db interactions to a Service class.
- Use a DDD approach
    - Service class handles business logic.
    - Repositories handle DB/external interactions that are only accessed via a service class.
    - Value objects.
- Use Laravel's service container to define bindings, e.g. Service and Repository classes. When defining these bindings I have used interfaces so I could write unit tests that mocked the Service and Repository classes to ensure these classes methods were implemented correctly.

### Useful tips to review solution

- View `routes/api.php` to see available routes.
- Run `./vendor/bin/sail artisan db:seed` once app is running to seed a few inspections.
- To run tests: `./vendor/bin/sail test`.

### Significant files for review
  - specifications/api.json
  - routes/api.php
  - app/Http/Controllers/InspectionController.php
  - app/Providers/AppServiceProvider.php
  - app/CyberHawk/*
  - tests/Feature/GetInspectionsTest.php
  - tests/Unit/*

### Improvements

 - Implement authentication.
    - register/login/refresh routes that provide a JWT to the front-end solution.
 - Implement authorisation.
    - Associate the User model with the Account model, then restrict wind farms and related data to the user's account, then in the front end the user will only be able to see data that is linked to their account.
 - Implement pagination for the inspections endpoint so there is not too much data returned.
 - Comments, return types on all methods and classes - i.e. better documentation.
 - More domain objects.
 - More unit tests.
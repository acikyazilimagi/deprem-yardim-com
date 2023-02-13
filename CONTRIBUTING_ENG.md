# Contribution Guideline

[Türkçe](CONTRIBUTING.md)

## Things To Note Before Contributing

- Make sure that the contribution you seek to make is not the iteration of a former issue or hasn't been done by anyone else.
- If you face with a problem, open up an issue for it.
- For a change you await or want, open up an issue.
- Open up an issue in order to add a new feature.
- Create a PR to fix an issue.
- Create a PR to fix an error in the documentation.

## Getting Started

### Setting Up The Project In Docker

This project is using [Laravel Sail](https://laravel.com/docs/9.x/sail). So if you are using MacOS, Linux or Windows(WSL2); your only need is [Docker](https://docs.docker.com/get-docker/) to start development.

```bash
# Clone the project.
git clone https://github.com/acikkaynak/deprem-yardim-com.git

# Change directory to project directory.
cd deprem-yardim-com

# Copy env file.
cp .env.example .env

# Laravel Sail is a composer dependency. Therefore, you should install it first.
# You don't need PHP or Composer to install dependencies; use docker.
# Install Composer Dependencies with Docker command.
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
    
# Start development environment.
./vendor/bin/sail up -d

# Generate an "Application Key" for Laravel.
./vendor/bin/sail artisan key:generate

# Run Laravel Migrations.
./vendor/bin/sail artisan migrate
```
#### Optional: Alias for Sail Command
You can use ```sail``` instead ```./vendor/bin/sail``` by adding the line bellow to your shell configuration (~/.zshrc or ~/.bashrc).
```bash
alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'
```
Restart shell after adding.
### Sample Data
You can get the sample data from #depremyardimcom in the Discord server.
Store the dump file as ```/dump/locations.sql``` and:
```bash
# Proccess the dump file
./vendor/bin/sail artisan db:seed
```
### After Development
```bash
# Stop development environment.
./vendor/bin/sail down
```
### Setting Up The Project In Windows
If you want to install directly on Windows without using WSL2, follow these steps.

Requirements:

- php >= 8.1^
- MySQL >= 7.0^

```bash
# Clone the project
git clone https://github.com/acikkaynak/deprem-yardim-com.git

# Move to project directory
cd deprem-yardim-com

# Install the dependencies
composer install

# Run the development environment
php artisan serve
```
### Formatting The Code

We use [`prettier`](https://prettier.io/) on this project for code formatting. Linter configuration can be found [here](https://github.com/acikkaynak/deprem-yardim-frontend/blob/main/.prettierrc).

### Commit Messages

Each commit must include a **header**, a **body** and a **footer**. Title is formatted as **type**, **scope** and, **description**.

```plaintext
<type>(<scope>): <description>
<EMPTY LINE>
<body>
<EMPTY LINE>
<footer>
```

Commit messages should not exceed 72 characters.

### Message Header

Message header is mandatory and it must include a type, an optional scope and a short description. Ideally, it should not exceed 50 characters.

By complying with these rules, you can create an open change log for all versions.

It is advised to watching PR header for commit messages. This way, when a PR is merged, PR header can be used as commit message and allows the change history to be formatted appropriately.

#### Type

Type states the type of your change. Allowed types are:

- `feat`: Adds a new feature
- `fix`: Fixing an error/bug
- `docs`: Changes that affect only the documentation
- `style`: Just formatting changes such as punctuation, spaces etc.
- `refactor`: A change that does not affect the contents of the code
- `perf`: Performance change
- `test`: Adds missing tests or changes current ones
- `chore`: Other changes that does not affect the development process

#### Scope

Scope, states the part that is affected by the commit. For instance, a scope such as `kafka` or `login` can be stated.

#### Description

Description provides a short explanation regarding the purpose of the commit. First letter should be capitalized. Description should be one sentence. This could serve as the commit message header.

### Message Body

Message body is an explanation that states why the commit was made. Body can be one or more paragraphs. Paragraphs should not exceed 72 characters.

#### More info for writing git commit messages

- [Writing Git commit messages](http://365git.tumblr.com/post/3308646748/writing-git-commit-messages)

- [A Note About Git Commit Messages](http://tbaggery.com/2008/04/19/a-note-about-git-commit-messages.html)

### Message Footer

Completed, fixed or delivered cases should be added to footer as a separate line and start with "Finishes", "Fixes" or "Delivers" keyword:

`[(Finishes|Fixes|Delivers) #ISSUE_ID]`

### Message Sample

```sh
feat(34): implement exactly once delivery
- ensure every event published to kafka
```

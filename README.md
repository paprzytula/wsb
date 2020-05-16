# Projects

## Project1: larastronka - first excercises with the LARAVEL framework  
[larastronka](https://github.com/paprzytula/wsb/tree/master/larastronka)  

Using [Coder's Tape - Laravel 6 Beginner](https://www.youtube.com/watch?v=eD4yMI-IR8g&list=PLpzy7FIRqpGC8Jk6gyWdSVdxCVXZAsenQ&index=1)

## Project2: Project2 - second encounter ("Coder's Tape - Final Project")
 [Project2](https://github.com/paprzytula/wsb/tree/master/Project2) 

## Project3: App1 - third set of excersises  
[App1](https://github.com/paprzytula/app1)  

Using [Mr Digital - Laravel for Beginners](https://www.youtube.com/watch?v=Hyj0aUyGwKE&amp;list=PLgFB6lmeXFOqRC4Sc-RST38jboldiQdds)


## Final Project
http://pprzytula.pl

Users are registering by themselves.
There are user roles: Admin, Consultant, Customer.


// NOTE php artisan tinker 
// factory(WSB_BANK\User::class, 10)->create();
// alternative: php artisan db::seed


# Rules

## General  

**Actions Handled By Resource Controller**  
[Restful way of Controllers](https://laravel.com/docs/7.x/controllers#resource-controllers)

**Order of the commands in function is important**  
`public function store()
    {
       $service = new \App\Service();
        $service->name = request('name');
        $service->save();
        return redirect()->back();
    }`

## Commands in Laravel and terminal

**Form - old (passed by validation) data is still present after refresh**
`<input type="text" name="name" placeholder="Imię" autocomplete="off" value="{{ old('name') }}">`  
 
**Search for User with ID 2 and tries to pass data. If it doesn't exist, returns 404.**
`$user = User::findOrFail(2);`  
 
 **This enables authorization for Laravel**
`composer require laravel/ui`  
`php artisan ui:auth`  


**Prevents anonymous (null) users from POST content**
```
public function __construct()
   {
    $this->middleware('auth');
   }

```

**Preset with bootstrap scaffolding**
`php artisan ui bootstrap`  
run `npm install && npm run dev` to compile your fresh scaffolding.

**Revert any database changes**
`php artisan migrate:rollback`  

**Create model with database migration**
`php artisan make:model House -m`  

**SQLITE issues after change from mysql**
It was resolved by commenting DB_DATABASE=, thanks to an article: 
https://stackoverflow.com/questions/43140711/database-database-database-sqlite-does-not-exist-database-works-from-artisan


# Already installed software and extensions
 
**Name**|**Functionality**
 --------|--------------------------
[htmltagwrap](https://marketplace.visualstudio.com/items?itemName=bradgashler.htmltagwrap)|Wraps your selection in HTML tags. Can wrap inline selections and selections that span multiple lines (works with both single selections and multiple selections at once).To use, select one or many chunks of code and press "Alt + W" ("Option + W" for Mac).
[XAMPP](https://www.apachefriends.org/index.html)|XAMPP is a completely free, easy to install Apache distribution containing MariaDB, PHP, and Perl. The XAMPP open source package has been set up to be incredibly easy to install and to use.
[Node.JS](https://nodejs.org/en/)|Node.js® is a JavaScript runtime built on Chrome's V8 JavaScript engine.
[Composer](https://getcomposer.org/download/)|Composer is a tool for dependency management in PHP. It allows you to declare the libraries your project depends on and it will manage (install/update) them for you.
[Hosts File Editor](https://hostsfileeditor.com/)|Easily edit and manage the hosts file for Windows. 
[~~PHP Intelephense~~](https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client)|Intelephense is a high performance PHP language server packed full of essential features for productive PHP development. Causing problems by _unused_ functions
[Remote Development](https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.vscode-remote-extensionpack)|An extension pack that lets you open any folder in a container, on a remote machine, or in WSL and take advantage of VS Code's full feature set.


# VS Code shortcuts  

**Navigate file tree - type after pressing combination**
`CTRL + SHIFT + E`  


**DEVELOPER: Open Process Explorer**
`CTRL + SHIFT + DELETE` (manual setup)  


**Configure User snippets**
`CTRL + K` `I`


**Recently opened files**
`CTRL + P`


**Duplicate highlighted lines**
`ALT + Arrow Down/UP`  

**Expand selected brackets**
`SHIFT + ALT + RightArrow`  

**Shrink selected brackets**
`SHIFT + ALT + LeftArrow`  

**Open file by matching text**  
`CTRL + T`  

**Open/hide terminal**
`CTRL + \``  

**Reload window**
`CTRL + R`  

**Go to end of the line**
`END`  

**VS Code Built in snippets location**
`C:\Users\pprzy\AppData\Local\Programs\Microsoft VS Code\resources\app\extensions`


## Useful websites
* [Snippet generator](https://snippet-generator.app/)
* [Sort JSON](https://r37r0m0d3l.github.io/json_sort/)
* [PESEL validator](https://github.com/kduma-OSS/L5-polish-validator-rules)

## Used tips
* [Could not open input file: artisan](https://stackoverflow.com/questions/26193314/could-not-open-input-file-artisan) 
* [How to install laravel app in subfolder of shared host?](https://stackoverflow.com/questions/41407758/how-to-install-laravel-app-in-subfolder-of-shared-host)
* [Composer: Command Not Found](https://stackoverflow.com/questions/34028282/composer-command-not-found)
* [Instalacja Composera](https://cyberfolks.pl/pomoc/instalacja-composera/?source=lx)
* [Mr Digital - Laravel for Beginners](https://www.youtube.com/watch?v=Hyj0aUyGwKE&list=PLgFB6lmeXFOqRC4Sc-RST38jboldiQdds)
* [Coder's Tape - Laravel 5.8 Tutorial From Scratch](https://www.youtube.com/watch?v=qiMYkrkXJ6k&list=PLpzy7FIRqpGD0kxI48v8QEVVZd744Phi4&index=1)
* [Installing Nodejs on hosting via nvm](https://www.youtube.com/watch?v=5vkMI9V66N0)
* [How to Set Up Command Aliases in Linux/Ubuntu/Debian](https://www.hostingadvice.com/how-to/set-command-aliases-linuxubuntudebian/)
* [How to install Laravel manually](https://www.a2hosting.com/kb/installable-applications/manual-installations/laravel1?aid=1656214)
* [Class UserTableSeeder does not exist - Laravel 5.0 php artisan db:seed](https://stackoverflow.com/questions/36206742/class-usertableseeder-does-not-exist-laravel-5-0-php-artisan-dbseed)
* [SQLSTATE\[HY000\]: General error: 1364 Field 'address_street' doesn't have a default value \(SQL: insert into \`users\` \(\`name\`, \`email\`, \`password\`, \`updated_at\`, \`created_at\`\)](https://laracasts.com/discuss/channels/laravel/sqlstatehy000-general-error-1364-field-address-street-doesnt-have-a-default-value-sql-insert-into-users-name-email-password-updated-at-created-at) 
* [Laravel 5.3 db:seed command simply doesn't work](https://stackoverflow.com/questions/39521913/laravel-5-3-dbseed-command-simply-doesnt-work)
* [Responsive table view](https://www.cssscript.com/responsive-table-with-pure-css/)
* [Migration and Seeding Cannot truncate a table referenced in a foreign key constraint](https://gist.github.com/isimmons/8202227)
* [number_format() causes error “A non well formed numeric value encountered”](https://stackoverflow.com/questions/6542403/number-format-causes-error-a-non-well-formed-numeric-value-encountered/54837091#54837091)

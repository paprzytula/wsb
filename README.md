# wsb
WSB files

## larastronka - first excercises with the LARAVEL framework  
[larastronka](https://github.com/paprzytula/wsb/tree/master/larastronka)  
Using [Coder's Tape - Laravel 6 Beginner](https://www.youtube.com/watch?v=eD4yMI-IR8g&list=PLpzy7FIRqpGC8Jk6gyWdSVdxCVXZAsenQ&index=1)

## Project2 - second encounter ("Coder's Tape - Final Project")
 [Project2](https://github.com/paprzytula/wsb/tree/master/Project2) 

## App1 - third set of excersises  
[App1](https://github.com/paprzytula/app1)  
[Mr Digital - Laravel for Beginners](https://www.youtube.com/watch?v=Hyj0aUyGwKE&amp;list=PLgFB6lmeXFOqRC4Sc-RST38jboldiQdds)



## Commands in Laravel and terminal

`public function store()
    {
       $service = new \App\Service();
        $service->name = request('name');
        $service->save();
        return redirect()->back();
    }`
**Order of commands in function is important**

**Form - old (passed by validation) data is still present after refresh**
`<input type="text" name="name" placeholder="Imię" autocomplete="off" value="{{ old('name') }}">`  
 
**Search for User with ID 2 and tries to pass data. If it doesn't exist, returns 404.**
`$user = User::findOrFail(2);`  
 
 **This enables authorization for Laravel**
`composer require laravel/ui`  
`php artisan ui:auth`  

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


## Already installed software and extensions
 
**Name**|**Functionality**
 --------|--------------------------
[htmltagwrap](https://marketplace.visualstudio.com/items?itemName=bradgashler.htmltagwrap)|Wraps your selection in HTML tags. Can wrap inline selections and selections that span multiple lines (works with both single selections and multiple selections at once).To use, select one or many chunks of code and press "Alt + W" ("Option + W" for Mac).
[XAMPP](https://www.apachefriends.org/index.html)|XAMPP is a completely free, easy to install Apache distribution containing MariaDB, PHP, and Perl. The XAMPP open source package has been set up to be incredibly easy to install and to use.
[Node.JS](https://nodejs.org/en/)|Node.js® is a JavaScript runtime built on Chrome's V8 JavaScript engine.
[Composer](https://getcomposer.org/download/)|Composer is a tool for dependency management in PHP. It allows you to declare the libraries your project depends on and it will manage (install/update) them for you.
[Hosts File Editor](https://hostsfileeditor.com/)|Easily edit and manage the hosts file for Windows.
[PHP Intelephense](https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client)|Intelephense is a high performance PHP language server packed full of essential features for productive PHP development.
[Remote Development](https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.vscode-remote-extensionpack)|An extension pack that lets you open any folder in a container, on a remote machine, or in WSL and take advantage of VS Code's full feature set.


## Useful websites
* [Snippet generator](https://snippet-generator.app/)


## VS Code shortcuts
`CTRL + SHIFT + E`  
Navigate file tree - just type what you need


`CTRL + SHIFT + DELETE` (manual setup)  
DEVELOPER: Open Process Explorer


`CTRL + K` `I`
Configure User snippets 


`CTRL + P`
Recently opened files


`ALT + Arrow Down/UP`  
Duplicate highlighted lines

`SHIFT + ALT + RightArrow`  
Expand selected brackets

`SHIFT + ALT + LeftArrow`  
Shrink selected brackets

`CTRL + T`  
Open file by matching text  

`CTRL + \``  
Open/hide terminal

`CTRL + R`  
Reload window

`END`  
Go to end of the line
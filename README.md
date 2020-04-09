# wsb
WSB files

## larastronka - first excercises with the LARAVEL framework

### SQLITE issues after change from mysql
It was resolved by commenting DB_DATABASE=, thanks to an article: 
https://stackoverflow.com/questions/43140711/database-database-database-sqlite-does-not-exist-database-works-from-artisan

remember to add **@csrf** just above submit button (server will generate token for your page)

### Order of commands in function is important

 `public function store()
    {
       $service = new \App\Service();
        $service->name = request('name');
        $service->save();
        return redirect()->back();
    }`


### Form - old value, accepted by validation
 `<input type="text" name="name" placeholder="Imię" autocomplete="off" value="{{ old('name') }}">`
 
 ## Project2 - second encounter with the LARAVEL
 Using [Coder's Tape - Laravel 6 Begginer](https://www.youtube.com/watch?v=eD4yMI-IR8g&list=PLpzy7FIRqpGC8Jk6gyWdSVdxCVXZAsenQ&index=1)
 
 ## My extensions for VS Code
 
 **Name**|**Functionality**
 --------|--------------------------
 [htmltagwrap](https://marketplace.visualstudio.com/items?itemName=bradgashler.htmltagwrap)|Wraps your selection in HTML tags. Can wrap inline selections and selections that span multiple lines (works with both single selections and multiple selections at once).To use, select one or many chunks of code and press "Alt + W" ("Option + W" for Mac).
 [Browser Preview](https://marketplace.visualstudio.com/items?itemName=auchenberg.vscode-browser-preview)|Browser Preview for VS Code enables you to open a real browser preview inside your editor that you can debug. Browser Preview is powered by Chrome Headless, and works by starting a headless Chrome instance in a new process. This enables a secure way to render web content inside VS Code, and enables interesting features such as in-editor debugging and more!
 [Remote Development](https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.vscode-remote-extensionpack)|An extension pack that lets you open any folder in a container, on a remote machine, or in WSL and take advantage of VS Code's full feature set.
 

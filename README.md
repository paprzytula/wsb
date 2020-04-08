# wsb
WSB files

## larastronka - excercises with the LARAVEL framework

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
### htmltagwrap - vs code extension
Wraps your selection in HTML tags. Can wrap inline selections and selections that span multiple lines (works with both single selections and multiple selections at once).
https://marketplace.visualstudio.com/items?itemName=bradgashler.htmltagwrap
To use, select one or many chunks of code and press "Alt + W" ("Option + W" for Mac).

### Form - old value, accepted by validation
 `<input type="text" name="name" placeholder="Imię" autocomplete="off" value="{{ old('name') }}">`
 

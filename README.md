# wsb
WSB files

## larastronka - excercises with the LARAVEL framework

### SQLITE issues after change from mysql
It was resolved by commenting DB_DATABASE=, thanks to an article: 
https://stackoverflow.com/questions/43140711/database-database-database-sqlite-does-not-exist-database-works-from-artisan

remember to add @csrf just above submit button (server will generate token for your page)

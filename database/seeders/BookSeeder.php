<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use Carbon\Carbon;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create(['user_id' => 1,'title'=>'Sárkányfi16HP', 'published' => 'published', 'cover'=>'{625ed5ca17338}.png',
        'description'=>'Egy világ, mely fölött sárkányok uralkodnak. A legkülönfélébb méretben, s színekben pompázó pikkelyes, tüzet okádó hüllők. Ezek a csodálatos, ám nagyon veszélyes lények őrzik a városokat, és tartják fent a rendet. Sokan azt gondolják, hogy ez a rendszer tökéletes. Azonban csak igen kevesen sejtik csak, hogy ez nem teljesen van így. 

        Az ifjú William Jake Stonewing élete egy nap gyökeresen megváltozik. Rég elfeledett titkok és technikák kerülnek napvilágra - köztük egy igen veszélyes családi titok is. Elég kitartó lesz-e Jake ahhoz, hogy szembenézzen mindazzal, ami rá vár? És elég fontos lesz-e neki szerelme ahhoz, hogy olyan dolgokat tegyen meg, amelyet eddig még senkinek sem sikerült? Hamarosan kiderül....
        
        ------------
        Figyelem! Hosszú fejezetek!
        A történetet bétázza, és a hibák javításában segédkezik: Nadir137
        A történet javítás alatt.',
        'genre_id'=>1,'subGenre_id'=>1,'age_limit'=> 16,'views'=>0,
        'created_at'=> Carbon::now()->format('Y-m-d H:i:s'),
        'published_at'=> Carbon::now()->format('Y-m-d H:i:s'),
        'last_updated' => Carbon::now()->format('Y-m-d H:i:s')]);

        Book::create(['user_id' => 1,'title'=>'Sárkányfi12', 'published' => 'published', 'cover'=>'{625ed5ca17338}.png',
        'description'=>'Egy világ, mely fölött sárkányok uralkodnak. A legkülönfélébb méretben, s színekben pompázó pikkelyes, tüzet okádó hüllők. Ezek a csodálatos, ám nagyon veszélyes lények őrzik a városokat, és tartják fent a rendet. Sokan azt gondolják, hogy ez a rendszer tökéletes. Azonban csak igen kevesen sejtik csak, hogy ez nem teljesen van így. 

        Az ifjú William Jake Stonewing élete egy nap gyökeresen megváltozik. Rég elfeledett titkok és technikák kerülnek napvilágra - köztük egy igen veszélyes családi titok is. Elég kitartó lesz-e Jake ahhoz, hogy szembenézzen mindazzal, ami rá vár? És elég fontos lesz-e neki szerelme ahhoz, hogy olyan dolgokat tegyen meg, amelyet eddig még senkinek sem sikerült? Hamarosan kiderül....
        
        ------------
        Figyelem! Hosszú fejezetek!
        A történetet bétázza, és a hibák javításában segédkezik: Nadir137
        A történet javítás alatt.',
        'genre_id'=>1,'subGenre_id'=>1,'age_limit'=> 12,'views'=>0,
        'created_at'=> Carbon::now()->format('Y-m-d H:i:s'),
        'published_at'=> Carbon::now()->format('Y-m-d H:i:s'),
        'last_updated' => Carbon::now()->format('Y-m-d H:i:s')]);

        Book::create(['user_id' => 2,'title'=>'Sárkányfi18', 'published' => 'published', 'cover'=>'{625ed5ca17338}.png',
        'description'=>'Egy világ, mely fölött sárkányok uralkodnak. A legkülönfélébb méretben, s színekben pompázó pikkelyes, tüzet okádó hüllők. Ezek a csodálatos, ám nagyon veszélyes lények őrzik a városokat, és tartják fent a rendet. Sokan azt gondolják, hogy ez a rendszer tökéletes. Azonban csak igen kevesen sejtik csak, hogy ez nem teljesen van így. 

        Az ifjú William Jake Stonewing élete egy nap gyökeresen megváltozik. Rég elfeledett titkok és technikák kerülnek napvilágra - köztük egy igen veszélyes családi titok is. Elég kitartó lesz-e Jake ahhoz, hogy szembenézzen mindazzal, ami rá vár? És elég fontos lesz-e neki szerelme ahhoz, hogy olyan dolgokat tegyen meg, amelyet eddig még senkinek sem sikerült? Hamarosan kiderül....
        
        ------------
        Figyelem! Hosszú fejezetek!
        A történetet bétázza, és a hibák javításában segédkezik: Nadir137
        A történet javítás alatt.',
        'genre_id'=>1,'subGenre_id'=>1,'age_limit'=> 18,'views'=>0,
        'created_at'=> Carbon::now()->format('Y-m-d H:i:s'),
        'published_at'=> Carbon::now()->format('Y-m-d H:i:s'),
        'last_updated' => Carbon::now()->format('Y-m-d H:i:s')]);

        Book::create(['user_id' => 2,'title'=>'Sárkányfi12b', 'published' => 'published', 'cover'=>'{625ed5ca17338}.png',
        'description'=>'Egy világ, mely fölött sárkányok uralkodnak. A legkülönfélébb méretben, s színekben pompázó pikkelyes, tüzet okádó hüllők. Ezek a csodálatos, ám nagyon veszélyes lények őrzik a városokat, és tartják fent a rendet. Sokan azt gondolják, hogy ez a rendszer tökéletes. Azonban csak igen kevesen sejtik csak, hogy ez nem teljesen van így. 

        Az ifjú William Jake Stonewing élete egy nap gyökeresen megváltozik. Rég elfeledett titkok és technikák kerülnek napvilágra - köztük egy igen veszélyes családi titok is. Elég kitartó lesz-e Jake ahhoz, hogy szembenézzen mindazzal, ami rá vár? És elég fontos lesz-e neki szerelme ahhoz, hogy olyan dolgokat tegyen meg, amelyet eddig még senkinek sem sikerült? Hamarosan kiderül....
        
        ------------
        Figyelem! Hosszú fejezetek!
        A történetet bétázza, és a hibák javításában segédkezik: Nadir137
        A történet javítás alatt.',
        'genre_id'=>1,'subGenre_id'=>1,'age_limit'=> 12,'views'=>0,
        'created_at'=> Carbon::now()->format('Y-m-d H:i:s'),
        'published_at'=> Carbon::now()->format('Y-m-d H:i:s'),
        'last_updated' => Carbon::now()->format('Y-m-d H:i:s')]);

        Book::create(['user_id' => 2,'title'=>'Sárkányfi14', 'published' => 'published', 'cover'=>'{625ed5ca17338}.png',
        'description'=>'Egy világ, mely fölött sárkányok uralkodnak. A legkülönfélébb méretben, s színekben pompázó pikkelyes, tüzet okádó hüllők. Ezek a csodálatos, ám nagyon veszélyes lények őrzik a városokat, és tartják fent a rendet. Sokan azt gondolják, hogy ez a rendszer tökéletes. Azonban csak igen kevesen sejtik csak, hogy ez nem teljesen van így. 

        Az ifjú William Jake Stonewing élete egy nap gyökeresen megváltozik. Rég elfeledett titkok és technikák kerülnek napvilágra - köztük egy igen veszélyes családi titok is. Elég kitartó lesz-e Jake ahhoz, hogy szembenézzen mindazzal, ami rá vár? És elég fontos lesz-e neki szerelme ahhoz, hogy olyan dolgokat tegyen meg, amelyet eddig még senkinek sem sikerült? Hamarosan kiderül....
        
        ------------
        Figyelem! Hosszú fejezetek!
        A történetet bétázza, és a hibák javításában segédkezik: Nadir137
        A történet javítás alatt.',
        'genre_id'=>1,'subGenre_id'=>2,'age_limit'=> 14,'views'=>0,
        'created_at'=> Carbon::now()->format('Y-m-d H:i:s'),
        'published_at'=> Carbon::now()->format('Y-m-d H:i:s'),
        'last_updated' => Carbon::now()->format('Y-m-d H:i:s')]);

        Book::create(['user_id' => 1,'title'=>'Sárkányfi18b', 'published' => 'published', 'cover'=>'{625ed5ca17338}.png',
        'description'=>'Egy világ, mely fölött sárkányok uralkodnak. A legkülönfélébb méretben, s színekben pompázó pikkelyes, tüzet okádó hüllők. Ezek a csodálatos, ám nagyon veszélyes lények őrzik a városokat, és tartják fent a rendet. Sokan azt gondolják, hogy ez a rendszer tökéletes. Azonban csak igen kevesen sejtik csak, hogy ez nem teljesen van így. 

        Az ifjú William Jake Stonewing élete egy nap gyökeresen megváltozik. Rég elfeledett titkok és technikák kerülnek napvilágra - köztük egy igen veszélyes családi titok is. Elég kitartó lesz-e Jake ahhoz, hogy szembenézzen mindazzal, ami rá vár? És elég fontos lesz-e neki szerelme ahhoz, hogy olyan dolgokat tegyen meg, amelyet eddig még senkinek sem sikerült? Hamarosan kiderül....
        
        ------------
        Figyelem! Hosszú fejezetek!
        A történetet bétázza, és a hibák javításában segédkezik: Nadir137
        A történet javítás alatt.',
        'genre_id'=>1,'subGenre_id'=>1,'age_limit'=> 18,'views'=>0,
        'created_at'=> Carbon::now()->format('Y-m-d H:i:s'),
        'published_at'=> Carbon::now()->format('Y-m-d H:i:s'),
        'last_updated' => Carbon::now()->format('Y-m-d H:i:s')]);

        Book::create(['user_id' => 1,'title'=>'Sárkányfi14b', 'published' => 'published', 'cover'=>'{625ed5ca17338}.png',
        'description'=>'Egy világ, mely fölött sárkányok uralkodnak. A legkülönfélébb méretben, s színekben pompázó pikkelyes, tüzet okádó hüllők. Ezek a csodálatos, ám nagyon veszélyes lények őrzik a városokat, és tartják fent a rendet. Sokan azt gondolják, hogy ez a rendszer tökéletes. Azonban csak igen kevesen sejtik csak, hogy ez nem teljesen van így. 

        Az ifjú William Jake Stonewing élete egy nap gyökeresen megváltozik. Rég elfeledett titkok és technikák kerülnek napvilágra - köztük egy igen veszélyes családi titok is. Elég kitartó lesz-e Jake ahhoz, hogy szembenézzen mindazzal, ami rá vár? És elég fontos lesz-e neki szerelme ahhoz, hogy olyan dolgokat tegyen meg, amelyet eddig még senkinek sem sikerült? Hamarosan kiderül....
        
        ------------
        Figyelem! Hosszú fejezetek!
        A történetet bétázza, és a hibák javításában segédkezik: Nadir137
        A történet javítás alatt.',
        'genre_id'=>1,'subGenre_id'=>1,'age_limit'=> 14,'views'=>0,
        'created_at'=> Carbon::now()->format('Y-m-d H:i:s'),
        'published_at'=> Carbon::now()->format('Y-m-d H:i:s'),
        'last_updated' => Carbon::now()->format('Y-m-d H:i:s')]);

        Book::create(['user_id' => 1,'title'=>'Sárkányfi12c', 'published' => 'published', 'cover'=>'{625ed5ca17338}.png',
        'description'=>'Egy világ, mely fölött sárkányok uralkodnak. A legkülönfélébb méretben, s színekben pompázó pikkelyes, tüzet okádó hüllők. Ezek a csodálatos, ám nagyon veszélyes lények őrzik a városokat, és tartják fent a rendet. Sokan azt gondolják, hogy ez a rendszer tökéletes. Azonban csak igen kevesen sejtik csak, hogy ez nem teljesen van így. 

        Az ifjú William Jake Stonewing élete egy nap gyökeresen megváltozik. Rég elfeledett titkok és technikák kerülnek napvilágra - köztük egy igen veszélyes családi titok is. Elég kitartó lesz-e Jake ahhoz, hogy szembenézzen mindazzal, ami rá vár? És elég fontos lesz-e neki szerelme ahhoz, hogy olyan dolgokat tegyen meg, amelyet eddig még senkinek sem sikerült? Hamarosan kiderül....
        
        ------------
        Figyelem! Hosszú fejezetek!
        A történetet bétázza, és a hibák javításában segédkezik: Nadir137
        A történet javítás alatt.',
        'genre_id'=>1,'subGenre_id'=>1,'age_limit'=> 12,'views'=>0,
        'created_at'=> Carbon::now()->format('Y-m-d H:i:s'),
        'published_at'=> Carbon::now()->format('Y-m-d H:i:s'),
        'last_updated' => Carbon::now()->format('Y-m-d H:i:s')]);
    }
}

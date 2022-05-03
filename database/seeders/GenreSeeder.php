<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::create(['name'=>'Fantasy','description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima inventore eum deleniti pariatur, similique eaque consequatur excepturi beatae cupiditate ex, itaque, laboriosam natus explicabo perspiciatis deserunt quos vero dicta veniam.']);
        Genre::create(['name'=>'Horror','description'=>'Magni reiciendis, facilis aliquam iste in velit obcaecati? Porro qui nobis necessitatibus laborum quas, sit excepturi voluptatem asperiores nulla, praesentium voluptas, mollitia commodi quaerat explicabo architecto sed tempore ipsa maiores?']);
        Genre::create(['name'=>'Action','description'=>'Ut optio sit consequuntur deleniti minima cumque a tenetur? Iste, sunt nemo! Quasi iure repellendus esse vel deleniti unde corporis rerum consequatur. Fugiat nesciunt quas saepe? Vero rerum architecto sunt.']);
        Genre::create(['name'=>'Romance','description'=>'Quas, similique vero, saepe necessitatibus reiciendis, mollitia iure temporibus vel molestiae optio libero? In facilis quos recusandae fugit est beatae. Obcaecati animi numquam rem magni alias earum natus veritatis eum?']);
    }
}

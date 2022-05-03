<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Chapter;
use Carbon\Carbon;

class ChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Chapter::create([
            'title' => '1. Fejezet',
            'published' => 'published',
            'book_id' => '1',
            'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, totam soluta, veniam velit doloribus mollitia quo nisi accusamus cumque veritatis vitae laboriosam ipsum autem est harum provident qui quasi. Adipisci. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, totam soluta, veniam velit doloribus mollitia quo nisi accusamus cumque veritatis vitae laboriosam ipsum autem est harum provident qui quasi. Adipisci.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, totam soluta, veniam velit doloribus mollitia quo nisi accusamus cumque veritatis vitae laboriosam ipsum autem est harum provident qui quasi. Adipisci.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, totam soluta, veniam velit doloribus mollitia quo nisi accusamus cumque veritatis vitae laboriosam ipsum autem est harum provident qui quasi. Adipisci.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'published_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        Chapter::create([
            'title' => '2. Fejezet',
            'published' => 'published',
            'book_id' => '1',
            'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, totam soluta, veniam velit doloribus mollitia quo nisi accusamus cumque veritatis vitae laboriosam ipsum autem est harum provident qui quasi. Adipisci. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, totam soluta, veniam velit doloribus mollitia quo nisi accusamus cumque veritatis vitae laboriosam ipsum autem est harum provident qui quasi. Adipisci.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, totam soluta, veniam velit doloribus mollitia quo nisi accusamus cumque veritatis vitae laboriosam ipsum autem est harum provident qui quasi. Adipisci.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, totam soluta, veniam velit doloribus mollitia quo nisi accusamus cumque veritatis vitae laboriosam ipsum autem est harum provident qui quasi. Adipisci.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'published_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
      
        Chapter::create([
            'title' => '3. Fejezet',
            'published' => 'published',
            'book_id' => '1',
            'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, totam soluta, veniam velit doloribus mollitia quo nisi accusamus cumque veritatis vitae laboriosam ipsum autem est harum provident qui quasi. Adipisci. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, totam soluta, veniam velit doloribus mollitia quo nisi accusamus cumque veritatis vitae laboriosam ipsum autem est harum provident qui quasi. Adipisci.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, totam soluta, veniam velit doloribus mollitia quo nisi accusamus cumque veritatis vitae laboriosam ipsum autem est harum provident qui quasi. Adipisci.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, totam soluta, veniam velit doloribus mollitia quo nisi accusamus cumque veritatis vitae laboriosam ipsum autem est harum provident qui quasi. Adipisci.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'published_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
      
        Chapter::create([
            'title' => '1. Fejezet',
            'published' => 'published',
            'book_id' => '2',
            'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, totam soluta, veniam velit doloribus mollitia quo nisi accusamus cumque veritatis vitae laboriosam ipsum autem est harum provident qui quasi. Adipisci. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, totam soluta, veniam velit doloribus mollitia quo nisi accusamus cumque veritatis vitae laboriosam ipsum autem est harum provident qui quasi. Adipisci.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, totam soluta, veniam velit doloribus mollitia quo nisi accusamus cumque veritatis vitae laboriosam ipsum autem est harum provident qui quasi. Adipisci.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, totam soluta, veniam velit doloribus mollitia quo nisi accusamus cumque veritatis vitae laboriosam ipsum autem est harum provident qui quasi. Adipisci.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'published_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        Chapter::create([
            'title' => '1. Fejezet',
            'published' => 'published',
            'book_id' => '3',
            'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, totam soluta, veniam velit doloribus mollitia quo nisi accusamus cumque veritatis vitae laboriosam ipsum autem est harum provident qui quasi. Adipisci. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, totam soluta, veniam velit doloribus mollitia quo nisi accusamus cumque veritatis vitae laboriosam ipsum autem est harum provident qui quasi. Adipisci.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, totam soluta, veniam velit doloribus mollitia quo nisi accusamus cumque veritatis vitae laboriosam ipsum autem est harum provident qui quasi. Adipisci.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, totam soluta, veniam velit doloribus mollitia quo nisi accusamus cumque veritatis vitae laboriosam ipsum autem est harum provident qui quasi. Adipisci.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'published_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        Chapter::create([
            'title' => '2. Fejezet',
            'published' => 'published',
            'book_id' => '3',
            'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, totam soluta, veniam velit doloribus mollitia quo nisi accusamus cumque veritatis vitae laboriosam ipsum autem est harum provident qui quasi. Adipisci. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, totam soluta, veniam velit doloribus mollitia quo nisi accusamus cumque veritatis vitae laboriosam ipsum autem est harum provident qui quasi. Adipisci.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, totam soluta, veniam velit doloribus mollitia quo nisi accusamus cumque veritatis vitae laboriosam ipsum autem est harum provident qui quasi. Adipisci.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, totam soluta, veniam velit doloribus mollitia quo nisi accusamus cumque veritatis vitae laboriosam ipsum autem est harum provident qui quasi. Adipisci.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'published_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        Chapter::create([
            'title' => '1. Fejezet',
            'published' => 'published',
            'book_id' => '1',
            'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, totam soluta, veniam velit doloribus mollitia quo nisi accusamus cumque veritatis vitae laboriosam ipsum autem est harum provident qui quasi. Adipisci. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, totam soluta, veniam velit doloribus mollitia quo nisi accusamus cumque veritatis vitae laboriosam ipsum autem est harum provident qui quasi. Adipisci.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, totam soluta, veniam velit doloribus mollitia quo nisi accusamus cumque veritatis vitae laboriosam ipsum autem est harum provident qui quasi. Adipisci.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, totam soluta, veniam velit doloribus mollitia quo nisi accusamus cumque veritatis vitae laboriosam ipsum autem est harum provident qui quasi. Adipisci.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'published_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
    }

      
        

      
}

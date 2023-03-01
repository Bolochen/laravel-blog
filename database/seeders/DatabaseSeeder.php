<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Sandika Galih',
        //     'email' => 'sandikagalih@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::create([
            'name' => 'Bolo',
            'username' => 'bolostaid',
            'email' => 'dodi@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::Factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae quisquam consequuntur sunt, nulla blanditiis at debitis voluptate adipisci corrupti inventore numquam veritatis voluptates esse nobis explicabo.',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae quisquam consequuntur sunt, nulla blanditiis at debitis voluptate adipisci corrupti inventore numquam veritatis voluptates esse nobis explicabo. Ex quas voluptatibus fuga reprehenderit quae cupiditate quod unde obcaecati? Dolorem temporibus repudiandae architecto omnis obcaecati laborum nesciunt earum officiis, voluptatibus dolor, quidem fugiat aut totam odit aliquid vel commodi eius hic. Nemo porro dolor voluptates expedita quae officia, nihil ipsum. Iusto nemo excepturi tempora tempore in modi. In eligendi nostrum voluptatum. Tempora optio minima maiores rerum voluptate similique eos facilis eum odit facere autem tenetur nam, voluptates qui hic dolor blanditiis consequuntur ipsum voluptatibus et! Vero ullam iure doloremque animi voluptates? Ducimus cum impedit possimus accusantium perspiciatis distinctio quasi quisquam voluptatum quae natus?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae quisquam consequuntur sunt, nulla blanditiis at debitis voluptate adipisci corrupti inventore numquam veritatis voluptates esse nobis explicabo.',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae quisquam consequuntur sunt, nulla blanditiis at debitis voluptate adipisci corrupti inventore numquam veritatis voluptates esse nobis explicabo. Ex quas voluptatibus fuga reprehenderit quae cupiditate quod unde obcaecati? Dolorem temporibus repudiandae architecto omnis obcaecati laborum nesciunt earum officiis, voluptatibus dolor, quidem fugiat aut totam odit aliquid vel commodi eius hic. Nemo porro dolor voluptates expedita quae officia, nihil ipsum. Iusto nemo excepturi tempora tempore in modi. In eligendi nostrum voluptatum. Tempora optio minima maiores rerum voluptate similique eos facilis eum odit facere autem tenetur nam, voluptates qui hic dolor blanditiis consequuntur ipsum voluptatibus et! Vero ullam iure doloremque animi voluptates? Ducimus cum impedit possimus accusantium perspiciatis distinctio quasi quisquam voluptatum quae natus?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae quisquam consequuntur sunt, nulla blanditiis at debitis voluptate adipisci corrupti inventore numquam veritatis voluptates esse nobis explicabo.',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae quisquam consequuntur sunt, nulla blanditiis at debitis voluptate adipisci corrupti inventore numquam veritatis voluptates esse nobis explicabo. Ex quas voluptatibus fuga reprehenderit quae cupiditate quod unde obcaecati? Dolorem temporibus repudiandae architecto omnis obcaecati laborum nesciunt earum officiis, voluptatibus dolor, quidem fugiat aut totam odit aliquid vel commodi eius hic. Nemo porro dolor voluptates expedita quae officia, nihil ipsum. Iusto nemo excepturi tempora tempore in modi. In eligendi nostrum voluptatum. Tempora optio minima maiores rerum voluptate similique eos facilis eum odit facere autem tenetur nam, voluptates qui hic dolor blanditiis consequuntur ipsum voluptatibus et! Vero ullam iure doloremque animi voluptates? Ducimus cum impedit possimus accusantium perspiciatis distinctio quasi quisquam voluptatum quae natus?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae quisquam consequuntur sunt, nulla blanditiis at debitis voluptate adipisci corrupti inventore numquam veritatis voluptates esse nobis explicabo.',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae quisquam consequuntur sunt, nulla blanditiis at debitis voluptate adipisci corrupti inventore numquam veritatis voluptates esse nobis explicabo. Ex quas voluptatibus fuga reprehenderit quae cupiditate quod unde obcaecati? Dolorem temporibus repudiandae architecto omnis obcaecati laborum nesciunt earum officiis, voluptatibus dolor, quidem fugiat aut totam odit aliquid vel commodi eius hic. Nemo porro dolor voluptates expedita quae officia, nihil ipsum. Iusto nemo excepturi tempora tempore in modi. In eligendi nostrum voluptatum. Tempora optio minima maiores rerum voluptate similique eos facilis eum odit facere autem tenetur nam, voluptates qui hic dolor blanditiis consequuntur ipsum voluptatibus et! Vero ullam iure doloremque animi voluptates? Ducimus cum impedit possimus accusantium perspiciatis distinctio quasi quisquam voluptatum quae natus?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}

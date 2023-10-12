<?php

namespace Database\Seeders;

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


        User::create([
            'name' => 'Anna Putra Mandiri',
            'username' => 'annaputramandiri',
            'email' => 'annaputramandiri@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Mathio Jaya Pharma',
        //     'email' => 'mathiojayapharma@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'PT.GLOBAL PHARMA',
            'slug' => 'pt-global-pharma',
        ]);

        Category::create([
            'name' => 'PT. Enseval',
            'slug' => 'pt.enseval',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Brand Pertama',
        //     'slug' => 'brand-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto culpa, nam accusantium nostrum dolorum sequi commodi',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto culpa, nam accusantium nostrum dolorum sequi commodi, fugit quos itaque nesciunt accusamus atque, magni mollitia voluptate. Autem repellat tempore assumenda libero fuga enim facere quam iste odit! Dolor neque similique ratione delectus? Vero et aperiam alias, saepe neque distinctio voluptatibus ipsa quod consequatur veritatis recusandae ab repudiandae magni voluptate provident? Qui, ex! Rerum eos ducimus, veritatis at id repudiandae doloribus impedit quod, sed numquam aut error. Expedita mollitia at, veritatis nemo architecto dolores illum facere excepturi debitis deleniti doloremque nobis voluptas quis. Numquam, officiis nulla corporis iusto laboriosam quas fugiat eaque',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Brand Ke Dua',
        //     'slug' => 'brand-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto culpa, nam accusantium nostrum dolorum sequi commodi',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto culpa, nam accusantium nostrum dolorum sequi commodi, fugit quos itaque nesciunt accusamus atque, magni mollitia voluptate. Autem repellat tempore assumenda libero fuga enim facere quam iste odit! Dolor neque similique ratione delectus? Vero et aperiam alias, saepe neque distinctio voluptatibus ipsa quod consequatur veritatis recusandae ab repudiandae magni voluptate provident? Qui, ex! Rerum eos ducimus, veritatis at id repudiandae doloribus impedit quod, sed numquam aut error. Expedita mollitia at, veritatis nemo architecto dolores illum facere excepturi debitis deleniti doloremque nobis voluptas quis. Numquam, officiis nulla corporis iusto laboriosam quas fugiat eaque',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Brand Ke Tiga',
        //     'slug' => 'brand-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto culpa, nam accusantium nostrum dolorum sequi commodi',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto culpa, nam accusantium nostrum dolorum sequi commodi, fugit quos itaque nesciunt accusamus atque, magni mollitia voluptate. Autem repellat tempore assumenda libero fuga enim facere quam iste odit! Dolor neque similique ratione delectus? Vero et aperiam alias, saepe neque distinctio voluptatibus ipsa quod consequatur veritatis recusandae ab repudiandae magni voluptate provident? Qui, ex! Rerum eos ducimus, veritatis at id repudiandae doloribus impedit quod, sed numquam aut error. Expedita mollitia at, veritatis nemo architecto dolores illum facere excepturi debitis deleniti doloremque nobis voluptas quis. Numquam, officiis nulla corporis iusto laboriosam quas fugiat eaque',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Brand Ke Empat',
        //     'slug' => 'brand-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto culpa, nam accusantium nostrum dolorum sequi commodi',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto culpa, nam accusantium nostrum dolorum sequi commodi, fugit quos itaque nesciunt accusamus atque, magni mollitia voluptate. Autem repellat tempore assumenda libero fuga enim facere quam iste odit! Dolor neque similique ratione delectus? Vero et aperiam alias, saepe neque distinctio voluptatibus ipsa quod consequatur veritatis recusandae ab repudiandae magni voluptate provident? Qui, ex! Rerum eos ducimus, veritatis at id repudiandae doloribus impedit quod, sed numquam aut error. Expedita mollitia at, veritatis nemo architecto dolores illum facere excepturi debitis deleniti doloremque nobis voluptas quis. Numquam, officiis nulla corporis iusto laboriosam quas fugiat eaque',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}

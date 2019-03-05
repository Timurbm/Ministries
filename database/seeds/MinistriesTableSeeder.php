<?php

use Illuminate\Database\Seeder;

class MinistriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ministries = [
            [
                'category_name' => 'МИНИСТЕРСТВА КУЛЬТУРЫ И СПОРТА РЕСПУБЛИКИ КАЗАХСТАН',
                    'children' => [
                        [    
                            'category_name' => 'Комитет',
                            'children' => [
                                    ['category_name' => 'Комитет по развитию языков и общественно-политической работы'],
                                    ['category_name' => 'Комитет по делам спорта и физической культуры Министерства культуры и спорта Республики Казахстан'],
                            ],
                        ],
                        [    
                            'category_name' => 'Управление',
                                'children' => [
                                    ['category_name' => 'Управление лингвистических работ'],
                                    ['category_name' => 'Управление общественно-политической работы'],
                                    ['category_name' => 'Управление развития массового и неолимпийских видов спорта'],
                                    ['category_name' => 'Управление развития инфраструктуры спорта'],
                            ],
                        ],
                    ],
                ],
                [
                    'category_name' => 'МИНИСТЕРСТВО ВНУТРЕННИХ ДЕЛ РЕСПУБЛИКИ КАЗАХСТАН',
                        'children' => [
                        [
                            'category_name' => 'Комитет',
                            'children' => [
                                ['category_name' => 'Комитет уголовно-исполнительной системы МВД РК'],
                                ['category_name' => 'Комитет административной полиции МВД'],
                            ],
                        ],
                        [
                            'category_name' => 'Управление',
                            'children' => [
                                ['category_name' => 'Оперативное управление'],
                                ['category_name' => 'Управление собственной безопасности'],
                                ['category_name' => 'Управление по контролю за охранной деятельностью'],
                                ['category_name' => 'Управление административной практики'],
                            ],
                        ],
                    ],
                ],
        ];
        
        foreach($ministries as $ministr)
        {
            \App\Ministries::create($ministr);
        }
        
    }
}

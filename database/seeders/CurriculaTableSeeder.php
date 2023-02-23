<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CurriculaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('curricula')->delete();
        
        \DB::table('curricula')->insert(array (
            0 => 
            array (
                'id' => 10000,
                'name' => 'Basic Education Curriculum',
                'acronym' => 'BEC',
            'description' => 'Basic Education Curriculum (BEC), this is a form of tool which will stand as one point of learning areas as adequate for the development of competencies starting from Basic education up to the second level of which is renounced as High School.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 10001,
                'name' => 'Special Program in the Arts',
                'acronym' => 'SPA',
            'description' => 'The Special Program in the Arts (SPA) is a program by the Department of Education (DepEd) for high school students with potential or talents in the arts, namely, music, visual arts, theater arts, media arts, creative writing and dance.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 10002,
                'name' => 'Special Program in Journalism',
                'acronym' => 'SPJ',
            'description' => 'The Special program in Journalism (SPJ) is developed to enrich the experiences,hone the journalistic skills and competencies of student-writers and to strengthen free and responsible journalism.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 10003,
                'name' => 'Science, Technology and Engineering Program',
                'acronym' => 'STE',
            'description' => 'The Science, Technology and Engineering (STE) Program is the flagship program for the development of Science, Mathematics, Engineering and Research in Special Science Classes (SSC). The Science Curriculum Framework articulates standards, core competencies, approaches and underlying principles in Science for secondary schools in the country.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
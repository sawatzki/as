<?php

use Illuminate\Database\Seeder;
use App\Models\Note;
use Illuminate\Support\Facades\DB;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $note = new Note();
//        $note->title = 'Artem 123';
//        $note->user_id = 1;
//        $note->description = 'afegevef';
//        $note->save();
//
//        $notes[] = [
//            'user_id' => 1,
//            'title' => 'Note1',
//            'description' => 'text text text text 1111',
//        ];

        for ($i = 1; $i <= 13; $i++) {
            $notes[] = [
                'user_id' => rand(1, 13),
                'title' => 'Note - ' . $i,
                'description' => 'text test asfaf - ' . $i . ' !!!',
            ];
        }

        DB::table('notes')->insert($notes);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Meme;
use App\Models\User;

class MemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::first();
        for($i = 0; $i < 4; $i++){
            $meme = new Meme();
            $meme->title = 'Meme name' . $i;
            $meme->description = 'Meme desc';
            $meme->general = 'general';
            $meme->privacy = 'privacy';
            $meme->user_id = $user->id;
            $meme->meme = 'memes/8ilAulKPi1019ZCFgxZljDAzdg6j02v0YtO8ij37.gif';
            $meme->created_at = new \DateTime();
            $meme->updated_at = new \DateTime();
            $meme->save();
        }
        for($i = 0; $i < 4; $i++){
            $meme = new Meme();
            $meme->title = 'Meme name' . $i;
            $meme->description = 'Meme desc';
            $meme->general = 'general';
            $meme->privacy = 'privacy';
            $meme->user_id = $user->id;
            $meme->meme = 'memes/GoPPdhdOAWFoyzGz0Gwsif7uPSxyeiVG8Ix1GhOk.png';
            $meme->created_at = new \DateTime();
            $meme->updated_at = new \DateTime();
            $meme->save();
        }
        for($i = 0; $i < 4; $i++){
            $meme = new Meme();
            $meme->title = 'Meme name' . $i;
            $meme->description = 'Meme desc';
            $meme->general = 'general';
            $meme->privacy = 'privacy';
            $meme->user_id = $user->id;
            $meme->meme = 'memes/MkVVOJ3qLOP7sF16PspkaOpYZZhVjrgxQrAOnk7B.png';
            $meme->created_at = new \DateTime();
            $meme->updated_at = new \DateTime();
            $meme->save();
        }
        for($i = 0; $i < 4; $i++){
            $meme = new Meme();
            $meme->title = 'Meme name' . $i;
            $meme->description = 'Meme desc';
            $meme->general = 'general';
            $meme->privacy = 'privacy';
            $meme->user_id = $user->id;
            $meme->meme = 'memes/Z9grV7ngniqJgwzT4qqNUbai9snkpjYrP2TMjPfZ.png';
            $meme->created_at = new \DateTime();
            $meme->updated_at = new \DateTime();
            $meme->save();
        }
    }
}

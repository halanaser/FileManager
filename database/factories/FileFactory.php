<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\File;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()

    {
        
        return [
            'folder_name' => $this->faker->unique()->name(),
            'file_name' => $this->faker->file(),
            'file_path' => $this->faker-> filePath(),
            'file_size' => $this->faker->bothify('megabit '),
            'file_type' =>$this->faker->FileExtension() ,
            'parent_id'=> File::factory(),
            'user_id'=>User::factory(),
            'type'=>$this->faker->randomDigitNotNull(),
            'trash'=>$this->faker->randomDigitNotNull(),
            'favarout'=>$this->faker->randomDigitNotNull(),

        ];
    }
}

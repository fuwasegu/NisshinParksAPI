<?php

namespace Database\Seeders;

use Goodby\CSV\Import\Standard\Lexer;
use Goodby\CSV\Import\Standard\Interpreter;
use Goodby\CSV\Import\Standard\LexerConfig;
use Illuminate\Database\Seeder;
use App\Models\Park;

class ParksTableSeeder extends Seeder
{
    //appからの相対path
    const CSV_FILE_PATH = './../database/seeders/csv/park_nisshin_open_data.csv';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('[Start] import data');

        $config = new LexerConfig();
        $config->setDelimiter(',');
        $config->setIgnoreHeaderLine(true);
        $lexer = new Lexer($config);
        $interpeter = new Interpreter($lexer);
        $interpeter->unstrict();
        $interpeter->addObserver(function(array $row) {
            $park = Park::create([
                'national_local_government_code' => $row[0],
                'type_value' => $row[1],
                'type' => $row[2],
                'name' => $row[3],
                'address' => $row[4],
                'postal_code' => $row[5],
                'longitude' => $row[6],
                'latitude' => $row[7],
                'area' => $row[8]
            ]);
        });

        $lexer->parse(app_path().self::CSV_FILE_PATH, $interpeter);

        $this->command->info('[End] import data');
    }
}

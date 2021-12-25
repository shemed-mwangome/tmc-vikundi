<?php

namespace Database\Seeders;

use App\Models\Street;
use Illuminate\Database\Seeder;

class StreetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $streets = [
            ['name' => "Mtongani", 'ward_id' => 1],
            ['name' => "Tambukareli", 'ward_id' => 1],
            ['name' => "Mtoni  Unguja", 'ward_id' => 1],
            ['name' => "Azimio Kaskazini", 'ward_id' => 1],
            ['name' => "Mbuyuni", 'ward_id' => 1],
            ['name' => "Azimio Kusini", 'ward_id' => 1],
            ['name' => "Kichangani", 'ward_id' => 1],
            ['name' => "Mji Mpya", 'ward_id' => 1],

            ['name' => "Toroli", 'ward_id' => 2],
            ['name' => "Bora", 'ward_id' => 2],
            ['name' => "Chang'ombe A", 'ward_id' => 2],
            ['name' => "Chang'ombe B", 'ward_id' => 2],

            ['name' => "Keko Magurumbasi A", 'ward_id' => 3],
            ['name' => "Keko Magurumbasi B", 'ward_id' => 3],
            ['name' => "Keko Mwanga", 'ward_id' => 3],
            ['name' => "Keko B", 'ward_id' => 3],
            ['name' => "Keko Mwanga A ", 'ward_id' => 3],

            ['name' => "Shimo la Udongo", 'ward_id' => 4],
            ['name' => "Kurasini", 'ward_id' => 4],
            ['name' => "Mivinjeni", 'ward_id' => 4],
            ['name' => "Kiungani", 'ward_id' => 4],
            ['name' => "Minazini", 'ward_id' => 4],

            ['name' => "Miburani", 'ward_id' => 5],
            ['name' => "Wailes", 'ward_id' => 5],
            ['name' => "Uwanja wa Taifa", 'ward_id' => 5],
            ['name' => "Keko Machungwa", 'ward_id' => 5],
            ['name' => "Keko Juu", 'ward_id' => 5],


            ['name' => "Bustani", 'ward_id' => 6],
            ['name' => "Mtoni", 'ward_id' => 6],
            ['name' => "Chaurembo", 'ward_id' => 6],
            ['name' => "Bokorani", 'ward_id' => 6],
            ['name' => "Relini", 'ward_id' => 6],
            ['name' => "Sabasaba", 'ward_id' => 6],

            ['name' => "Mamboleo A", 'ward_id' => 7],
            ['name' => "Mamboleo B", 'ward_id' => 7],
            ['name' => "Mwembeladu", 'ward_id' => 7],
            ['name' => "Mpogo", 'ward_id' => 7],
            ['name' => "Sandali", 'ward_id' => 7],
            ['name' => "Tindwa", 'ward_id' => 7],
            ['name' => "Mkwinda", 'ward_id' => 7],
            ['name' => "Veterinary (Biashara)", 'ward_id' => 7],
            ['name' => "Usalama", 'ward_id' => 7],
            ['name' => "Kimbunga", 'ward_id' => 7],
            ['name' => "Mwembemnofu", 'ward_id' => 7],
            ['name' => "Kisiwani", 'ward_id' => 7],


            ['name' => "Matumbi", 'ward_id' => 8],
            ['name' => "Njaro", 'ward_id' => 8],
            ['name' => "Temeke", 'ward_id' => 8],
            ['name' => "Maganga", 'ward_id' => 8],

            ['name' => "Maguruwe", 'ward_id' => 9],
            ['name' => "Nyambwera", 'ward_id' => 9],
            ['name' => "Tandika", 'ward_id' => 9],
            ['name' => "Kilimahewa", 'ward_id' => 9],
            ['name' => "Mabatini", 'ward_id' => 9],
            ['name' => "Tamla", 'ward_id' => 9],

            ['name' => "Dovya", 'ward_id' => 10],
            ['name' => "Makangarawe", 'ward_id' => 10],
            ['name' => "Msakala", 'ward_id' => 10],
            ['name' => "Mbonde", 'ward_id' => 10],
            ['name' => "Mbonde", 'ward_id' => 10],
            ['name' => "Uwazi", 'ward_id' => 10],

            ['name' => "Sigara", 'ward_id' => 11],
            ['name' => "Machimbo", 'ward_id' => 11],
            ['name' => "Magogoni", 'ward_id' => 11],
            ['name' => "Mzambarauni", 'ward_id' => 11],
            ['name' => "Vituka", 'ward_id' => 11],

            ['name' => "Mashine ya Maji", 'ward_id' => 12],
            ['name' => "Buza", 'ward_id' => 12],
            ['name' => "Mji Mpya", 'ward_id' => 12],
            ['name' => "Kidagaa", 'ward_id' => 12],
            ['name' => "Magogoni", 'ward_id' => 12],

            ['name' => "Kiembesamaki", 'ward_id' => 13],
            ['name' => "Barabara ya Mwinyi", 'ward_id' => 13],
            ['name' => "Kilakala", 'ward_id' => 13],
            ['name' => "Kigunga", 'ward_id' => 13],
            ['name' => "Yombo Reli", 'ward_id' => 13],

            ['name' => "Msufini", 'ward_id' => 14],
            ['name' => "Vigoa", 'ward_id' => 14],
            ['name' => "Dovya", 'ward_id' => 14],
            ['name' => "Mkondogwa", 'ward_id' => 14],
            ['name' => "Magengeni", 'ward_id' => 14],
            ['name' => "Rufu", 'ward_id' => 14],
            ['name' => "Kisewe", 'ward_id' => 14],
            ['name' => "Kiponza", 'ward_id' => 14],
            ['name' => "Mwembebamia", 'ward_id' => 14],


            ['name' => "Kilungule", 'ward_id' => 15],
            ['name' => "Nzasa A", 'ward_id' => 15],
            ['name' => "Majimatatu B", 'ward_id' => 15],
            ['name' => "Kwa Mzungu", 'ward_id' => 15],
            ['name' => "Uzombokoni", 'ward_id' => 15],

            ['name' => "Mangaya", 'ward_id' => 16],
            ['name' => "Serenge", 'ward_id' => 16],
            ['name' => "Moringe", 'ward_id' => 16],
            ['name' => "Mbagala", 'ward_id' => 16],
            ['name' => "Kizinga", 'ward_id' => 16],
            ['name' => "Bughidadi", 'ward_id' => 16],

            ['name' => "Makuka Kaskazini", 'ward_id' => 17],
            ['name' => "Makuka Kusini", 'ward_id' => 17],
            ['name' => "Kichemchem", 'ward_id' => 17],
            ['name' => "Jeshi la Wokovu", 'ward_id' => 17],
            ['name' => "Mbagalakuu Mashariki", 'ward_id' => 17],
            ['name' => "Mbagalakuu Magharibi", 'ward_id' => 17],
            ['name' => "Mbagalakuu Kaskazini", 'ward_id' => 17],
            ['name' => "Kizuiani", 'ward_id' => 17],
            ['name' => "Mpakani", 'ward_id' => 17],
            ['name' => "Kibondemaji B", 'ward_id' => 17],


            ['name' => "Mponda", 'ward_id' => 18],
            ['name' => "Majimatitu A", 'ward_id' => 18],
            ['name' => "Machinjioni", 'ward_id' => 18],
            ['name' => "Mianzini", 'ward_id' => 18],

            ['name' => "Majimatitu C", 'ward_id' => 19],
            ['name' => "Kibondemaji A", 'ward_id' => 19],
            ['name' => "Mchikichini", 'ward_id' => 19],
            ['name' => "Kimbangulile", 'ward_id' => 19],

            ['name' => "Mwanamtoti", 'ward_id' => 20],
            ['name' => "Mtoni Kijichi", 'ward_id' => 20],
            ['name' => "Misheni", 'ward_id' => 20],
            ['name' => "Butiama", 'ward_id' => 20],
            ['name' => "Mgeninani", 'ward_id' => 20],

            ['name' => "Kiburugwa", 'ward_id' => 21],
            ['name' => "Kiburugwa 3", 'ward_id' => 21],
            ['name' => "Barabara ya Mwinyi", 'ward_id' => 21],
            ['name' => "Juhudi", 'ward_id' => 21],
            ['name' => "Kingugi", 'ward_id' => 21],
            ['name' => "Kwanyoka", 'ward_id' => 21],

            ['name' => "Kongowe", 'ward_id' => 22],
            ['name' => "Ponde", 'ward_id' => 21],
            ['name' => "Changanyikeni", 'ward_id' => 22],
            ['name' => "Masaki", 'ward_id' => 22],
            ['name' => "Goroka A", 'ward_id' => 22],
            ['name' => "Goroka B", 'ward_id' => 22],
            ['name' => "Vikunai", 'ward_id' => 22],
            ['name' => "Masuliza", 'ward_id' => 22],
            ['name' => "Mwapemba", 'ward_id' => 22],
            ['name' => "Malela", 'ward_id' => 22],
            ['name' => "Mzinga A", 'ward_id' => 22],
            ['name' => "Mzinga B", 'ward_id' => 22],
            ['name' => "Toangoma", 'ward_id' => 22],
            ['name' => "Mikwambe", 'ward_id' => 22],

            ['name' => "Kurasini Mjimpya", 'ward_id' => 23],
            ['name' => "Rangitatu", 'ward_id' => 23],
            ['name' => "Nzasa B", 'ward_id' => 23],
            ['name' => "Machinjioni A", 'ward_id' => 23],


        ];
        Street::insert($streets);
    }
}

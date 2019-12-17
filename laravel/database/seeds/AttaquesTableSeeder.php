<?php

use Illuminate\Database\Seeder;

class AttaquesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attaques')->delete();
        
        \DB::table('attaques')->insert(array (
            0 => 
            array (
                'id' => 1,
                'libelle' => 'Abîme',
                'type_id' => 13,
                'pp' => 5,
                'puissance' => NULL,
                'precision' => 30,
            ),
            1 => 
            array (
                'id' => 2,
                'libelle' => 'Acid\'armure',
                'type_id' => 10,
                'pp' => 40,
                'puissance' => NULL,
                'precision' => 100,
            ),
            2 => 
            array (
                'id' => 3,
                'libelle' => 'Acide',
                'type_id' => 10,
                'pp' => 30,
                'puissance' => 40,
                'precision' => 100,
            ),
            3 => 
            array (
                'id' => 4,
                'libelle' => 'Adaptation',
                'type_id' => 8,
                'pp' => 40,
                'puissance' => NULL,
                'precision' => 100,
            ),
            4 => 
            array (
                'id' => 5,
                'libelle' => 'Affûtage',
                'type_id' => 8,
                'pp' => 30,
                'puissance' => NULL,
                'precision' => 100,
            ),
            5 => 
            array (
                'id' => 6,
                'libelle' => 'Amnésie',
                'type_id' => 11,
                'pp' => 20,
                'puissance' => NULL,
                'precision' => 100,
            ),
            6 => 
            array (
                'id' => 7,
                'libelle' => 'Armure',
                'type_id' => 8,
                'pp' => 30,
                'puissance' => NULL,
                'precision' => 100,
            ),
            7 => 
            array (
                'id' => 8,
                'libelle' => 'Balayage',
                'type_id' => 1,
                'pp' => 20,
                'puissance' => 50,
                'precision' => 90,
            ),
            8 => 
            array (
                'id' => 9,
                'libelle' => 'Bec Vrille',
                'type_id' => 15,
                'pp' => 20,
                'puissance' => 80,
                'precision' => 100,
            ),
            9 => 
            array (
                'id' => 10,
                'libelle' => 'Bélier',
                'type_id' => 8,
                'pp' => 20,
                'puissance' => 90,
                'precision' => 85,
            ),
            10 => 
            array (
                'id' => 11,
                'libelle' => 'Berceuse',
                'type_id' => 8,
                'pp' => 15,
                'puissance' => NULL,
                'precision' => 55,
            ),
            11 => 
            array (
                'id' => 12,
                'libelle' => 'Blizzard',
                'type_id' => 6,
                'pp' => 5,
                'puissance' => 120,
                'precision' => 90,
            ),
            12 => 
            array (
                'id' => 13,
                'libelle' => 'Bomb\'oeuf',
                'type_id' => 8,
                'pp' => 10,
                'puissance' => 100,
                'precision' => 75,
            ),
            13 => 
            array (
                'id' => 14,
                'libelle' => 'Bouclier',
                'type_id' => 11,
                'pp' => 30,
                'puissance' => NULL,
                'precision' => 100,
            ),
            14 => 
            array (
                'id' => 15,
                'libelle' => 'Boul\'armure',
                'type_id' => 8,
                'pp' => 20,
                'puissance' => NULL,
                'precision' => 100,
            ),
            15 => 
            array (
                'id' => 16,
                'libelle' => 'Brouillard',
                'type_id' => 8,
                'pp' => 20,
                'puissance' => NULL,
                'precision' => 100,
            ),
            16 => 
            array (
                'id' => 17,
                'libelle' => 'Brume',
                'type_id' => 6,
                'pp' => 30,
                'puissance' => NULL,
                'precision' => 100,
            ),
            17 => 
            array (
                'id' => 18,
                'libelle' => 'Buée noire',
                'type_id' => 6,
                'pp' => 30,
                'puissance' => NULL,
                'precision' => 100,
            ),
            18 => 
            array (
                'id' => 19,
                'libelle' => 'Bulles d\'O',
                'type_id' => 3,
                'pp' => 20,
                'puissance' => 65,
                'precision' => 100,
            ),
            19 => 
            array (
                'id' => 20,
                'libelle' => 'Cage éclair',
                'type_id' => 4,
                'pp' => 20,
                'puissance' => NULL,
                'precision' => 100,
            ),
            20 => 
            array (
                'id' => 21,
                'libelle' => 'Cascade',
                'type_id' => 3,
                'pp' => 15,
                'puissance' => 80,
                'precision' => 100,
            ),
            21 => 
            array (
                'id' => 22,
                'libelle' => 'Charge',
                'type_id' => 8,
                'pp' => 35,
                'puissance' => 35,
                'precision' => 85,
            ),
            22 => 
            array (
                'id' => 23,
                'libelle' => 'Choc mental',
                'type_id' => 11,
                'pp' => 25,
                'puissance' => 50,
                'precision' => 100,
            ),
            23 => 
            array (
                'id' => 24,
                'libelle' => 'Claquoir',
                'type_id' => 3,
                'pp' => 10,
                'puissance' => 35,
                'precision' => 75,
            ),
            24 => 
            array (
                'id' => 25,
                'libelle' => 'Clonage',
                'type_id' => 8,
                'pp' => 10,
                'puissance' => NULL,
                'precision' => 100,
            ),
            25 => 
            array (
                'id' => 26,
                'libelle' => 'Combo-griffes',
                'type_id' => 8,
                'pp' => 15,
                'puissance' => 20,
                'precision' => 80,
            ),
            26 => 
            array (
                'id' => 27,
                'libelle' => 'Constriction',
                'type_id' => 8,
                'pp' => 35,
                'puissance' => 10,
                'precision' => 100,
            ),
            27 => 
            array (
                'id' => 28,
                'libelle' => 'Copie',
                'type_id' => 8,
                'pp' => 10,
                'puissance' => NULL,
                'precision' => 100,
            ),
            28 => 
            array (
                'id' => 29,
                'libelle' => 'Coud\'boule',
                'type_id' => 8,
                'pp' => 15,
                'puissance' => 70,
                'precision' => 100,
            ),
            29 => 
            array (
                'id' => 30,
                'libelle' => 'Coud\'krâne',
                'type_id' => 8,
                'pp' => 15,
                'puissance' => 100,
                'precision' => 100,
            ),
            30 => 
            array (
                'id' => 31,
                'libelle' => 'Coupe',
                'type_id' => 8,
                'pp' => 30,
                'puissance' => 50,
                'precision' => 95,
            ),
            31 => 
            array (
                'id' => 32,
                'libelle' => 'Coupe-vent',
                'type_id' => 8,
                'pp' => 10,
                'puissance' => 80,
                'precision' => 75,
            ),
            32 => 
            array (
                'id' => 33,
                'libelle' => 'Croc de mort',
                'type_id' => 8,
                'pp' => 15,
                'puissance' => 80,
                'precision' => 70,
            ),
            33 => 
            array (
                'id' => 34,
                'libelle' => 'Croc fatal',
                'type_id' => 8,
                'pp' => 10,
                'puissance' => NULL,
                'precision' => 90,
            ),
            34 => 
            array (
                'id' => 35,
                'libelle' => 'Croissance',
                'type_id' => 8,
                'pp' => 40,
                'puissance' => NULL,
                'precision' => 100,
            ),
            35 => 
            array (
                'id' => 36,
                'libelle' => 'Cru-aile',
                'type_id' => 15,
                'pp' => 35,
                'puissance' => 35,
                'precision' => 100,
            ),
            36 => 
            array (
                'id' => 37,
                'libelle' => 'Cyclone',
                'type_id' => 8,
                'pp' => 20,
                'puissance' => NULL,
                'precision' => 85,
            ),
            37 => 
            array (
                'id' => 38,
                'libelle' => 'Damoclès',
                'type_id' => 8,
                'pp' => 15,
                'puissance' => 15,
                'precision' => 100,
            ),
            38 => 
            array (
                'id' => 39,
                'libelle' => 'Danse-Flamme',
                'type_id' => 5,
                'pp' => 15,
                'puissance' => 15,
                'precision' => 70,
            ),
            39 => 
            array (
                'id' => 40,
                'libelle' => 'Danse-Fleur',
                'type_id' => 9,
                'pp' => 20,
                'puissance' => 70,
                'precision' => 100,
            ),
            40 => 
            array (
                'id' => 41,
                'libelle' => 'Danse-Lames',
                'type_id' => 8,
                'pp' => 30,
                'puissance' => NULL,
                'precision' => 100,
            ),
            41 => 
            array (
                'id' => 42,
                'libelle' => 'Dard-Nuée',
                'type_id' => 7,
                'pp' => 20,
                'puissance' => 14,
                'precision' => 85,
            ),
            42 => 
            array (
                'id' => 43,
                'libelle' => 'Dard-Venin',
                'type_id' => 10,
                'pp' => 35,
                'puissance' => 15,
                'precision' => 100,
            ),
            43 => 
            array (
                'id' => 44,
                'libelle' => 'Déflagration',
                'type_id' => 5,
                'pp' => 5,
                'puissance' => 120,
                'precision' => 85,
            ),
            44 => 
            array (
                'id' => 45,
                'libelle' => 'Destruction',
                'type_id' => 8,
                'pp' => 5,
                'puissance' => 260,
                'precision' => 100,
            ),
            45 => 
            array (
                'id' => 46,
                'libelle' => 'Détitrus',
                'type_id' => 10,
                'pp' => 20,
                'puissance' => 65,
                'precision' => 100,
            ),
            46 => 
            array (
                'id' => 47,
                'libelle' => 'Dévorêve',
                'type_id' => 11,
                'pp' => 15,
                'puissance' => 100,
                'precision' => 100,
            ),
            47 => 
            array (
                'id' => 48,
                'libelle' => 'Double-Dard',
                'type_id' => 7,
                'pp' => 20,
                'puissance' => 25,
                'precision' => 100,
            ),
            48 => 
            array (
                'id' => 49,
                'libelle' => 'Double-Pied',
                'type_id' => 1,
                'pp' => 30,
                'puissance' => 30,
                'precision' => 100,
            ),
            49 => 
            array (
                'id' => 50,
                'libelle' => 'Draco-Rage',
                'type_id' => 2,
                'pp' => 10,
                'puissance' => 40,
                'precision' => 100,
            ),
            50 => 
            array (
                'id' => 51,
                'libelle' => 'Eboulement',
                'type_id' => 12,
                'pp' => 10,
                'puissance' => 80,
                'precision' => 90,
            ),
            51 => 
            array (
                'id' => 52,
                'libelle' => 'Eclair',
                'type_id' => 4,
                'pp' => 30,
                'puissance' => 40,
                'precision' => 100,
            ),
            52 => 
            array (
                'id' => 53,
                'libelle' => 'E-Coque',
                'type_id' => 8,
                'pp' => 10,
                'puissance' => NULL,
                'precision' => 100,
            ),
            53 => 
            array (
                'id' => 54,
                'libelle' => 'Ecrasement',
                'type_id' => 8,
                'pp' => 20,
                'puissance' => 65,
                'precision' => 100,
            ),
            54 => 
            array (
                'id' => 55,
                'libelle' => 'Ecras\'face',
                'type_id' => 8,
                'pp' => 35,
                'puissance' => 40,
                'precision' => 100,
            ),
            55 => 
            array (
                'id' => 56,
                'libelle' => 'Ecume',
                'type_id' => 3,
                'pp' => 30,
                'puissance' => 20,
                'precision' => 100,
            ),
            56 => 
            array (
                'id' => 57,
                'libelle' => 'Empal\'korne',
                'type_id' => 8,
                'pp' => 5,
                'puissance' => NULL,
                'precision' => 30,
            ),
            57 => 
            array (
                'id' => 58,
                'libelle' => 'Entrave',
                'type_id' => 8,
                'pp' => 20,
                'puissance' => NULL,
                'precision' => 55,
            ),
            58 => 
            array (
                'id' => 59,
                'libelle' => 'Etreinte',
                'type_id' => 8,
                'pp' => 20,
                'puissance' => 15,
                'precision' => 75,
            ),
            59 => 
            array (
                'id' => 60,
                'libelle' => 'Explosion',
                'type_id' => 8,
                'pp' => 5,
                'puissance' => 340,
                'precision' => 100,
            ),
            60 => 
            array (
                'id' => 61,
                'libelle' => 'Fatale-Foudre',
                'type_id' => 4,
                'pp' => 10,
                'puissance' => 120,
                'precision' => 70,
            ),
            61 => 
            array (
                'id' => 62,
                'libelle' => 'Flammèches',
                'type_id' => 5,
                'pp' => 25,
                'puissance' => 40,
                'precision' => 100,
            ),
            62 => 
            array (
                'id' => 63,
                'libelle' => 'Flash',
                'type_id' => 8,
                'pp' => 20,
                'puissance' => NULL,
                'precision' => 70,
            ),
            63 => 
            array (
                'id' => 64,
                'libelle' => 'Force',
                'type_id' => 8,
                'pp' => 15,
                'puissance' => 80,
                'precision' => 100,
            ),
            64 => 
            array (
                'id' => 65,
                'libelle' => 'Force-Poigne',
                'type_id' => 8,
                'pp' => 30,
                'puissance' => 55,
                'precision' => 100,
            ),
            65 => 
            array (
                'id' => 66,
                'libelle' => 'Fouet Lianes',
                'type_id' => 9,
                'pp' => 10,
                'puissance' => 35,
                'precision' => 100,
            ),
            66 => 
            array (
                'id' => 67,
                'libelle' => 'Frappe-Atlas',
                'type_id' => 1,
                'pp' => 20,
                'puissance' => 0,
                'precision' => 100,
            ),
            67 => 
            array (
                'id' => 68,
                'libelle' => 'Frénésie',
                'type_id' => 8,
                'pp' => 20,
                'puissance' => 20,
                'precision' => 100,
            ),
            68 => 
            array (
                'id' => 69,
                'libelle' => 'Furie',
                'type_id' => 8,
                'pp' => 20,
                'puissance' => 15,
                'precision' => 85,
            ),
            69 => 
            array (
                'id' => 70,
                'libelle' => 'Gaz Toxik',
                'type_id' => 10,
                'pp' => 40,
                'puissance' => NULL,
                'precision' => 55,
            ),
            70 => 
            array (
                'id' => 71,
                'libelle' => 'Griffe',
                'type_id' => 8,
                'pp' => 35,
                'puissance' => 40,
                'precision' => 100,
            ),
            71 => 
            array (
                'id' => 72,
                'libelle' => 'Grincement',
                'type_id' => 8,
                'pp' => 40,
                'puissance' => NULL,
                'precision' => 85,
            ),
            72 => 
            array (
                'id' => 73,
                'libelle' => 'Grobisou',
                'type_id' => 8,
                'pp' => 10,
                'puissance' => NULL,
                'precision' => 75,
            ),
            73 => 
            array (
                'id' => 74,
                'libelle' => 'Gros\'yeux',
                'type_id' => 8,
                'pp' => 30,
                'puissance' => NULL,
                'precision' => 100,
            ),
            74 => 
            array (
                'id' => 75,
                'libelle' => 'Guillotine',
                'type_id' => 8,
                'pp' => 5,
                'puissance' => NULL,
                'precision' => 30,
            ),
            75 => 
            array (
                'id' => 76,
                'libelle' => 'Hâte',
                'type_id' => 11,
                'pp' => 30,
                'puissance' => NULL,
                'precision' => 100,
            ),
            76 => 
            array (
                'id' => 77,
                'libelle' => 'Hurlement',
                'type_id' => 8,
                'pp' => 20,
                'puissance' => NULL,
                'precision' => 100,
            ),
            77 => 
            array (
                'id' => 78,
                'libelle' => 'Hydrocanon',
                'type_id' => 3,
                'pp' => 5,
                'puissance' => 120,
                'precision' => 80,
            ),
            78 => 
            array (
                'id' => 79,
                'libelle' => 'Hypnose',
                'type_id' => 11,
                'pp' => 20,
                'puissance' => NULL,
                'precision' => 60,
            ),
            79 => 
            array (
                'id' => 80,
                'libelle' => 'Intimidation',
                'type_id' => 8,
                'pp' => 30,
                'puissance' => NULL,
                'precision' => 75,
            ),
            80 => 
            array (
                'id' => 81,
                'libelle' => 'Jackpot',
                'type_id' => 8,
                'pp' => 20,
                'puissance' => 40,
                'precision' => 100,
            ),
            81 => 
            array (
                'id' => 82,
                'libelle' => 'Jet de sable',
                'type_id' => 8,
                'pp' => 15,
                'puissance' => NULL,
                'precision' => 100,
            ),
            82 => 
            array (
                'id' => 83,
                'libelle' => 'Jet de pierres',
                'type_id' => 12,
                'pp' => 15,
                'puissance' => 50,
                'precision' => 75,
            ),
            83 => 
            array (
                'id' => 84,
                'libelle' => 'Koud\'korne',
                'type_id' => 8,
                'pp' => 25,
                'puissance' => 65,
                'precision' => 100,
            ),
            84 => 
            array (
                'id' => 85,
                'libelle' => 'Lance-Flamme',
                'type_id' => 5,
                'pp' => 15,
                'puissance' => 95,
                'precision' => 100,
            ),
            85 => 
            array (
                'id' => 86,
                'libelle' => 'Lance-Soleil',
                'type_id' => 9,
                'pp' => 10,
                'puissance' => 120,
                'precision' => 100,
            ),
            86 => 
            array (
                'id' => 87,
                'libelle' => 'Laser-Glace',
                'type_id' => 6,
                'pp' => 10,
                'puissance' => 95,
                'precision' => 100,
            ),
            87 => 
            array (
                'id' => 88,
                'libelle' => 'Léchouille',
                'type_id' => 14,
                'pp' => 30,
                'puissance' => 20,
                'precision' => 100,
            ),
            88 => 
            array (
                'id' => 89,
                'libelle' => 'Ligotage',
                'type_id' => 8,
                'pp' => 20,
                'puissance' => 15,
                'precision' => 85,
            ),
            89 => 
            array (
                'id' => 90,
                'libelle' => 'Liliput',
                'type_id' => 8,
                'pp' => 20,
                'puissance' => NULL,
                'precision' => 100,
            ),
            90 => 
            array (
                'id' => 91,
                'libelle' => 'Lutte',
                'type_id' => 8,
                'pp' => 1,
                'puissance' => 100,
                'precision' => 100,
            ),
            91 => 
            array (
                'id' => 92,
                'libelle' => 'Mania',
                'type_id' => 8,
                'pp' => 20,
                'puissance' => 90,
                'precision' => 100,
            ),
            92 => 
            array (
                'id' => 93,
                'libelle' => 'Massd\'os',
                'type_id' => 13,
                'pp' => 20,
                'puissance' => 65,
                'precision' => 85,
            ),
            93 => 
            array (
                'id' => 94,
                'libelle' => 'Mawashi Geri',
                'type_id' => 1,
                'pp' => 15,
                'puissance' => 60,
                'precision' => 80,
            ),
            94 => 
            array (
                'id' => 95,
                'libelle' => 'Mega-Sangsue',
                'type_id' => 9,
                'pp' => 10,
                'puissance' => 40,
                'precision' => 100,
            ),
            95 => 
            array (
                'id' => 96,
                'libelle' => 'Météores',
                'type_id' => 8,
                'pp' => 20,
                'puissance' => 60,
                'precision' => 100,
            ),
            96 => 
            array (
                'id' => 97,
                'libelle' => 'Métronome',
                'type_id' => 8,
                'pp' => 10,
                'puissance' => NULL,
                'precision' => 100,
            ),
            97 => 
            array (
                'id' => 98,
                'libelle' => 'Mimique',
                'type_id' => 15,
                'pp' => 20,
                'puissance' => NULL,
                'precision' => 100,
            ),
            98 => 
            array (
                'id' => 99,
                'libelle' => 'Mimi-Queue',
                'type_id' => 8,
                'pp' => 30,
                'puissance' => NULL,
                'precision' => 100,
            ),
            99 => 
            array (
                'id' => 100,
                'libelle' => 'Morphing',
                'type_id' => 8,
                'pp' => 10,
                'puissance' => NULL,
                'precision' => 100,
            ),
            100 => 
            array (
                'id' => 101,
                'libelle' => 'Morsure',
                'type_id' => 8,
                'pp' => 25,
                'puissance' => 60,
                'precision' => 100,
            ),
            101 => 
            array (
                'id' => 102,
                'libelle' => 'Mur Lumière',
                'type_id' => 11,
                'pp' => 30,
                'puissance' => NULL,
                'precision' => 100,
            ),
            102 => 
            array (
                'id' => 103,
                'libelle' => 'Onde Boréale',
                'type_id' => 6,
                'pp' => 20,
                'puissance' => 65,
                'precision' => 100,
            ),
            103 => 
            array (
                'id' => 104,
                'libelle' => 'Onde Folie',
                'type_id' => 14,
                'pp' => 10,
                'puissance' => NULL,
                'precision' => 100,
            ),
            104 => 
            array (
                'id' => 105,
                'libelle' => 'Osmerang',
                'type_id' => 13,
                'pp' => 10,
                'puissance' => 50,
                'precision' => 90,
            ),
            105 => 
            array (
                'id' => 106,
                'libelle' => 'Paraspore',
                'type_id' => 9,
                'pp' => 30,
                'puissance' => NULL,
                'precision' => 75,
            ),
            106 => 
            array (
                'id' => 107,
                'libelle' => 'Patience',
                'type_id' => 8,
                'pp' => 10,
                'puissance' => NULL,
                'precision' => 100,
            ),
            107 => 
            array (
                'id' => 108,
                'libelle' => 'Picanon',
                'type_id' => 8,
                'pp' => 15,
                'puissance' => 20,
                'precision' => 100,
            ),
            108 => 
            array (
                'id' => 109,
                'libelle' => 'Picpic',
                'type_id' => 15,
                'pp' => 35,
                'puissance' => 35,
                'precision' => 100,
            ),
            109 => 
            array (
                'id' => 110,
                'libelle' => 'Pied Sauté',
                'type_id' => 1,
                'pp' => 25,
                'puissance' => 70,
                'precision' => 95,
            ),
            110 => 
            array (
                'id' => 111,
                'libelle' => 'Pied Voltige',
                'type_id' => 1,
                'pp' => 20,
                'puissance' => 85,
                'precision' => 90,
            ),
            111 => 
            array (
                'id' => 112,
                'libelle' => 'Pilonnage',
                'type_id' => 8,
                'pp' => 20,
                'puissance' => 15,
                'precision' => 85,
            ),
            112 => 
            array (
                'id' => 113,
                'libelle' => 'Pince-Masse',
                'type_id' => 3,
                'pp' => 10,
                'puissance' => 90,
                'precision' => 85,
            ),
            113 => 
            array (
                'id' => 114,
                'libelle' => 'Piqué',
                'type_id' => 15,
                'pp' => 5,
                'puissance' => 140,
                'precision' => 90,
            ),
            114 => 
            array (
                'id' => 115,
                'libelle' => 'Pistolet à O',
                'type_id' => 3,
                'pp' => 20,
                'puissance' => 40,
                'precision' => 100,
            ),
            115 => 
            array (
                'id' => 116,
                'libelle' => 'Plaquage',
                'type_id' => 8,
                'pp' => 15,
                'puissance' => 85,
                'precision' => 100,
            ),
            116 => 
            array (
                'id' => 117,
                'libelle' => 'Poing Comète',
                'type_id' => 8,
                'pp' => 15,
                'puissance' => 18,
                'precision' => 85,
            ),
            117 => 
            array (
                'id' => 118,
                'libelle' => 'Poing de Feu',
                'type_id' => 5,
                'pp' => 15,
                'puissance' => 75,
                'precision' => 100,
            ),
            118 => 
            array (
                'id' => 119,
                'libelle' => 'Poing Karaté',
                'type_id' => 1,
                'pp' => 25,
                'puissance' => 50,
                'precision' => 100,
            ),
            119 => 
            array (
                'id' => 120,
                'libelle' => 'Poing Eclair',
                'type_id' => 4,
                'pp' => 15,
                'puissance' => 75,
                'precision' => 100,
            ),
            120 => 
            array (
                'id' => 121,
                'libelle' => 'Poing Glace',
                'type_id' => 6,
                'pp' => 15,
                'puissance' => 75,
                'precision' => 100,
            ),
            121 => 
            array (
                'id' => 122,
                'libelle' => 'Poudre Dodo',
                'type_id' => 9,
                'pp' => 15,
                'puissance' => NULL,
                'precision' => 75,
            ),
            122 => 
            array (
                'id' => 123,
                'libelle' => 'Poudre Toxik',
                'type_id' => 10,
                'pp' => 35,
                'puissance' => NULL,
                'precision' => 75,
            ),
            123 => 
            array (
                'id' => 124,
                'libelle' => 'Protection',
                'type_id' => 11,
                'pp' => 20,
                'puissance' => NULL,
                'precision' => 100,
            ),
            124 => 
            array (
                'id' => 125,
                'libelle' => 'Psyko',
                'type_id' => 11,
                'pp' => 10,
                'puissance' => 90,
                'precision' => 100,
            ),
            125 => 
            array (
                'id' => 126,
                'libelle' => 'Puissance',
                'type_id' => 8,
                'pp' => 30,
                'puissance' => NULL,
                'precision' => 100,
            ),
            126 => 
            array (
                'id' => 127,
                'libelle' => 'Purédpois',
                'type_id' => 10,
                'pp' => 20,
                'puissance' => 20,
                'precision' => 70,
            ),
            127 => 
            array (
                'id' => 128,
                'libelle' => 'Rafale Psy',
                'type_id' => 11,
                'pp' => 20,
                'puissance' => 65,
                'precision' => 100,
            ),
            128 => 
            array (
                'id' => 129,
                'libelle' => 'Reflet',
                'type_id' => 8,
                'pp' => 15,
                'puissance' => NULL,
                'precision' => 100,
            ),
            129 => 
            array (
                'id' => 130,
                'libelle' => 'Repli',
                'type_id' => 3,
                'pp' => 40,
                'puissance' => NULL,
                'precision' => 100,
            ),
            130 => 
            array (
                'id' => 131,
                'libelle' => 'Repos',
                'type_id' => 11,
                'pp' => 10,
                'puissance' => NULL,
                'precision' => 100,
            ),
            131 => 
            array (
                'id' => 132,
                'libelle' => 'Riposte',
                'type_id' => 1,
                'pp' => 20,
                'puissance' => NULL,
                'precision' => 100,
            ),
            132 => 
            array (
                'id' => 133,
                'libelle' => 'Rugissement',
                'type_id' => 8,
                'pp' => 10,
                'puissance' => NULL,
                'precision' => 100,
            ),
            133 => 
            array (
                'id' => 134,
                'libelle' => 'Sacrifice',
                'type_id' => 1,
                'pp' => 25,
                'puissance' => 80,
                'precision' => 80,
            ),
            134 => 
            array (
                'id' => 135,
                'libelle' => 'Sécrétion',
                'type_id' => 7,
                'pp' => 40,
                'puissance' => NULL,
                'precision' => 95,
            ),
            135 => 
            array (
                'id' => 136,
                'libelle' => 'Séisme',
                'type_id' => 13,
                'pp' => 10,
                'puissance' => 100,
                'precision' => 100,
            ),
            136 => 
            array (
                'id' => 137,
                'libelle' => 'Soin',
                'type_id' => 8,
                'pp' => 10,
                'puissance' => NULL,
                'precision' => 100,
            ),
            137 => 
            array (
                'id' => 138,
                'libelle' => 'Sonicboom',
                'type_id' => 8,
                'pp' => 20,
                'puissance' => 20,
                'precision' => 100,
            ),
            138 => 
            array (
                'id' => 139,
                'libelle' => 'Souplesse',
                'type_id' => 8,
                'pp' => 20,
                'puissance' => 80,
                'precision' => 75,
            ),
            139 => 
            array (
                'id' => 140,
                'libelle' => 'Spore',
                'type_id' => 9,
                'pp' => 15,
                'puissance' => NULL,
                'precision' => 100,
            ),
            140 => 
            array (
                'id' => 141,
                'libelle' => 'Surf',
                'type_id' => 3,
                'pp' => 15,
                'puissance' => 95,
                'precision' => 100,
            ),
            141 => 
            array (
                'id' => 142,
                'libelle' => 'Télékinésie',
                'type_id' => 11,
                'pp' => 15,
                'puissance' => NULL,
                'precision' => 75,
            ),
            142 => 
            array (
                'id' => 143,
                'libelle' => 'Téléport',
                'type_id' => 11,
                'pp' => 20,
                'puissance' => NULL,
                'precision' => 100,
            ),
            143 => 
            array (
                'id' => 144,
                'libelle' => 'Ténèbres',
                'type_id' => 14,
                'pp' => 15,
                'puissance' => 0,
                'precision' => 100,
            ),
            144 => 
            array (
                'id' => 145,
                'libelle' => 'Tonnerre',
                'type_id' => 4,
                'pp' => 15,
                'puissance' => 95,
                'precision' => 100,
            ),
            145 => 
            array (
                'id' => 146,
                'libelle' => 'Torgnoles',
                'type_id' => 8,
                'pp' => 10,
                'puissance' => 15,
                'precision' => 85,
            ),
            146 => 
            array (
                'id' => 147,
                'libelle' => 'Tornade',
                'type_id' => 15,
                'pp' => 35,
                'puissance' => 40,
                'precision' => 100,
            ),
            147 => 
            array (
                'id' => 148,
                'libelle' => 'Toxik',
                'type_id' => 10,
                'pp' => 10,
                'puissance' => NULL,
                'precision' => 85,
            ),
            148 => 
            array (
                'id' => 149,
                'libelle' => 'Tranche',
                'type_id' => 8,
                'pp' => 20,
                'puissance' => 70,
                'precision' => 100,
            ),
            149 => 
            array (
                'id' => 150,
                'libelle' => 'Tranch\'herbe',
                'type_id' => 9,
                'pp' => 25,
                'puissance' => 55,
                'precision' => 95,
            ),
            150 => 
            array (
                'id' => 151,
                'libelle' => 'Trempette',
                'type_id' => 3,
                'pp' => 40,
                'puissance' => NULL,
                'precision' => 100,
            ),
            151 => 
            array (
                'id' => 152,
                'libelle' => 'Triplattaque',
                'type_id' => 8,
                'pp' => 10,
                'puissance' => 80,
                'precision' => 100,
            ),
            152 => 
            array (
                'id' => 153,
                'libelle' => 'Tunnel',
                'type_id' => 13,
                'pp' => 10,
                'puissance' => 100,
                'precision' => 100,
            ),
            153 => 
            array (
                'id' => 154,
                'libelle' => 'Ultimapoing',
                'type_id' => 8,
                'pp' => 20,
                'puissance' => 80,
                'precision' => 85,
            ),
            154 => 
            array (
                'id' => 155,
                'libelle' => 'Ultimawashi',
                'type_id' => 8,
                'pp' => 5,
                'puissance' => 120,
                'precision' => 75,
            ),
            155 => 
            array (
                'id' => 156,
                'libelle' => 'Ultralaser',
                'type_id' => 8,
                'pp' => 5,
                'puissance' => 120,
                'precision' => 90,
            ),
            156 => 
            array (
                'id' => 157,
                'libelle' => 'Ultrason',
                'type_id' => 8,
                'pp' => 20,
                'puissance' => NULL,
                'precision' => 55,
            ),
            157 => 
            array (
                'id' => 158,
                'libelle' => 'Uppercut',
                'type_id' => 8,
                'pp' => 10,
                'puissance' => 70,
                'precision' => 100,
            ),
            158 => 
            array (
                'id' => 159,
                'libelle' => 'Vague Psy',
                'type_id' => 11,
                'pp' => 15,
                'puissance' => NULL,
                'precision' => 80,
            ),
            159 => 
            array (
                'id' => 160,
                'libelle' => 'Vampigraine',
                'type_id' => 9,
                'pp' => 10,
                'puissance' => NULL,
                'precision' => 90,
            ),
            160 => 
            array (
                'id' => 161,
                'libelle' => 'Vampirisme',
                'type_id' => 7,
                'pp' => 15,
                'puissance' => 20,
                'precision' => 100,
            ),
            161 => 
            array (
                'id' => 162,
                'libelle' => 'Vive Attaque',
                'type_id' => 8,
                'pp' => 30,
                'puissance' => 40,
                'precision' => 100,
            ),
            162 => 
            array (
                'id' => 163,
                'libelle' => 'Vol',
                'type_id' => 15,
                'pp' => 15,
                'puissance' => 70,
                'precision' => 95,
            ),
            163 => 
            array (
                'id' => 164,
                'libelle' => 'Vol-vie',
                'type_id' => 9,
                'pp' => 20,
                'puissance' => 20,
                'precision' => 100,
            ),
            164 => 
            array (
                'id' => 165,
                'libelle' => 'Yoga',
                'type_id' => 11,
                'pp' => 40,
                'puissance' => NULL,
                'precision' => 100,
            ),
        ));
        
        
    }
}
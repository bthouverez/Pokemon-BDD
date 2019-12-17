<?php

use Illuminate\Database\Seeder;

class PokemonsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pokemons')->delete();
        
        \DB::table('pokemons')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nom' => 'Bulbizarre',
            ),
            1 => 
            array (
                'id' => 2,
                'nom' => 'Herbizarre',
            ),
            2 => 
            array (
                'id' => 3,
                'nom' => 'Florizarre',
            ),
            3 => 
            array (
                'id' => 4,
                'nom' => 'Salameche',
            ),
            4 => 
            array (
                'id' => 5,
                'nom' => 'Reptincel',
            ),
            5 => 
            array (
                'id' => 6,
                'nom' => 'Dracaufeu',
            ),
            6 => 
            array (
                'id' => 7,
                'nom' => 'Carapuce',
            ),
            7 => 
            array (
                'id' => 8,
                'nom' => 'Carabaffe',
            ),
            8 => 
            array (
                'id' => 9,
                'nom' => 'Tortank',
            ),
            9 => 
            array (
                'id' => 10,
                'nom' => 'Chenipan',
            ),
            10 => 
            array (
                'id' => 11,
                'nom' => 'Chrysacier',
            ),
            11 => 
            array (
                'id' => 12,
                'nom' => 'Papilusion',
            ),
            12 => 
            array (
                'id' => 13,
                'nom' => 'Aspicot',
            ),
            13 => 
            array (
                'id' => 14,
                'nom' => 'Coconfort',
            ),
            14 => 
            array (
                'id' => 15,
                'nom' => 'Dardargnan',
            ),
            15 => 
            array (
                'id' => 16,
                'nom' => 'Roucool',
            ),
            16 => 
            array (
                'id' => 17,
                'nom' => 'Roucoups',
            ),
            17 => 
            array (
                'id' => 18,
                'nom' => 'Roucarnage',
            ),
            18 => 
            array (
                'id' => 19,
                'nom' => 'Rattata',
            ),
            19 => 
            array (
                'id' => 20,
                'nom' => 'Rattatac',
            ),
            20 => 
            array (
                'id' => 21,
                'nom' => 'Piafabec',
            ),
            21 => 
            array (
                'id' => 22,
                'nom' => 'Rapasdepic',
            ),
            22 => 
            array (
                'id' => 23,
                'nom' => 'Abo',
            ),
            23 => 
            array (
                'id' => 24,
                'nom' => 'Arbok',
            ),
            24 => 
            array (
                'id' => 25,
                'nom' => 'Pikachu',
            ),
            25 => 
            array (
                'id' => 26,
                'nom' => 'Raichu',
            ),
            26 => 
            array (
                'id' => 27,
                'nom' => 'Sabelette',
            ),
            27 => 
            array (
                'id' => 28,
                'nom' => 'Sablaireau',
            ),
            28 => 
            array (
                'id' => 29,
                'nom' => 'NidoranF',
            ),
            29 => 
            array (
                'id' => 30,
                'nom' => 'Nidorina',
            ),
            30 => 
            array (
                'id' => 31,
                'nom' => 'Nidoqueen',
            ),
            31 => 
            array (
                'id' => 32,
                'nom' => 'NidoranM',
            ),
            32 => 
            array (
                'id' => 33,
                'nom' => 'Nidorino',
            ),
            33 => 
            array (
                'id' => 34,
                'nom' => 'Nidoking',
            ),
            34 => 
            array (
                'id' => 35,
                'nom' => 'Melofee',
            ),
            35 => 
            array (
                'id' => 36,
                'nom' => 'Melodelfe',
            ),
            36 => 
            array (
                'id' => 37,
                'nom' => 'Goupix',
            ),
            37 => 
            array (
                'id' => 38,
                'nom' => 'Feunard',
            ),
            38 => 
            array (
                'id' => 39,
                'nom' => 'Rondoudou',
            ),
            39 => 
            array (
                'id' => 40,
                'nom' => 'Grodoudou',
            ),
            40 => 
            array (
                'id' => 41,
                'nom' => 'Nosferapti',
            ),
            41 => 
            array (
                'id' => 42,
                'nom' => 'Nosferalto',
            ),
            42 => 
            array (
                'id' => 43,
                'nom' => 'Mystherbe',
            ),
            43 => 
            array (
                'id' => 44,
                'nom' => 'Ortide',
            ),
            44 => 
            array (
                'id' => 45,
                'nom' => 'Rafflesia',
            ),
            45 => 
            array (
                'id' => 46,
                'nom' => 'Paras',
            ),
            46 => 
            array (
                'id' => 47,
                'nom' => 'Parasect',
            ),
            47 => 
            array (
                'id' => 48,
                'nom' => 'Mimitoss',
            ),
            48 => 
            array (
                'id' => 49,
                'nom' => 'Aeromite',
            ),
            49 => 
            array (
                'id' => 50,
                'nom' => 'Taupiqueur',
            ),
            50 => 
            array (
                'id' => 51,
                'nom' => 'Triopikeur',
            ),
            51 => 
            array (
                'id' => 52,
                'nom' => 'Miaouss',
            ),
            52 => 
            array (
                'id' => 53,
                'nom' => 'Persian',
            ),
            53 => 
            array (
                'id' => 54,
                'nom' => 'Psykokwak',
            ),
            54 => 
            array (
                'id' => 55,
                'nom' => 'Akwakwak',
            ),
            55 => 
            array (
                'id' => 56,
                'nom' => 'Ferosinge',
            ),
            56 => 
            array (
                'id' => 57,
                'nom' => 'Colossinge',
            ),
            57 => 
            array (
                'id' => 58,
                'nom' => 'Caninos',
            ),
            58 => 
            array (
                'id' => 59,
                'nom' => 'Arcanin',
            ),
            59 => 
            array (
                'id' => 60,
                'nom' => 'Ptitard',
            ),
            60 => 
            array (
                'id' => 61,
                'nom' => 'Tetarte',
            ),
            61 => 
            array (
                'id' => 62,
                'nom' => 'Tartard',
            ),
            62 => 
            array (
                'id' => 63,
                'nom' => 'Abra',
            ),
            63 => 
            array (
                'id' => 64,
                'nom' => 'Kadabra',
            ),
            64 => 
            array (
                'id' => 65,
                'nom' => 'Alakazam',
            ),
            65 => 
            array (
                'id' => 66,
                'nom' => 'Machoc',
            ),
            66 => 
            array (
                'id' => 67,
                'nom' => 'Machopeur',
            ),
            67 => 
            array (
                'id' => 68,
                'nom' => 'Mackogneur',
            ),
            68 => 
            array (
                'id' => 69,
                'nom' => 'Chetiflor',
            ),
            69 => 
            array (
                'id' => 70,
                'nom' => 'Boustiflor',
            ),
            70 => 
            array (
                'id' => 71,
                'nom' => 'Empiflor',
            ),
            71 => 
            array (
                'id' => 72,
                'nom' => 'Tentacool',
            ),
            72 => 
            array (
                'id' => 73,
                'nom' => 'Tentacruel',
            ),
            73 => 
            array (
                'id' => 74,
                'nom' => 'Racaillou',
            ),
            74 => 
            array (
                'id' => 75,
                'nom' => 'Gravalanch',
            ),
            75 => 
            array (
                'id' => 76,
                'nom' => 'Grolem',
            ),
            76 => 
            array (
                'id' => 77,
                'nom' => 'Ponyta',
            ),
            77 => 
            array (
                'id' => 78,
                'nom' => 'Galopa',
            ),
            78 => 
            array (
                'id' => 79,
                'nom' => 'Ramoloss',
            ),
            79 => 
            array (
                'id' => 80,
                'nom' => 'Flagadoss',
            ),
            80 => 
            array (
                'id' => 81,
                'nom' => 'Magneti',
            ),
            81 => 
            array (
                'id' => 82,
                'nom' => 'Magneton',
            ),
            82 => 
            array (
                'id' => 83,
                'nom' => 'Canarticho',
            ),
            83 => 
            array (
                'id' => 84,
                'nom' => 'Doduo',
            ),
            84 => 
            array (
                'id' => 85,
                'nom' => 'Dodrio',
            ),
            85 => 
            array (
                'id' => 86,
                'nom' => 'Otaria',
            ),
            86 => 
            array (
                'id' => 87,
                'nom' => 'Lamantine',
            ),
            87 => 
            array (
                'id' => 88,
                'nom' => 'Tadmorv',
            ),
            88 => 
            array (
                'id' => 89,
                'nom' => 'Grotadmorv',
            ),
            89 => 
            array (
                'id' => 90,
                'nom' => 'Kokiyas',
            ),
            90 => 
            array (
                'id' => 91,
                'nom' => 'Crustabri',
            ),
            91 => 
            array (
                'id' => 92,
                'nom' => 'Fantominus',
            ),
            92 => 
            array (
                'id' => 93,
                'nom' => 'Spectrum',
            ),
            93 => 
            array (
                'id' => 94,
                'nom' => 'Ectoplasma',
            ),
            94 => 
            array (
                'id' => 95,
                'nom' => 'Onix',
            ),
            95 => 
            array (
                'id' => 96,
                'nom' => 'Soporifik',
            ),
            96 => 
            array (
                'id' => 97,
                'nom' => 'Hypnomade',
            ),
            97 => 
            array (
                'id' => 98,
                'nom' => 'Krabby',
            ),
            98 => 
            array (
                'id' => 99,
                'nom' => 'Krabboss',
            ),
            99 => 
            array (
                'id' => 100,
                'nom' => 'Voltorbe',
            ),
            100 => 
            array (
                'id' => 101,
                'nom' => 'Electrode',
            ),
            101 => 
            array (
                'id' => 102,
                'nom' => 'Noeunoeuf',
            ),
            102 => 
            array (
                'id' => 103,
                'nom' => 'Noadkoko',
            ),
            103 => 
            array (
                'id' => 104,
                'nom' => 'Osselait',
            ),
            104 => 
            array (
                'id' => 105,
                'nom' => 'Ossatueur',
            ),
            105 => 
            array (
                'id' => 106,
                'nom' => 'Kicklee',
            ),
            106 => 
            array (
                'id' => 107,
                'nom' => 'Tygnon',
            ),
            107 => 
            array (
                'id' => 108,
                'nom' => 'Excelangue',
            ),
            108 => 
            array (
                'id' => 109,
                'nom' => 'Smogo',
            ),
            109 => 
            array (
                'id' => 110,
                'nom' => 'Smogogo',
            ),
            110 => 
            array (
                'id' => 111,
                'nom' => 'Rhinocorne',
            ),
            111 => 
            array (
                'id' => 112,
                'nom' => 'Rhinoferos',
            ),
            112 => 
            array (
                'id' => 113,
                'nom' => 'Leveinard',
            ),
            113 => 
            array (
                'id' => 114,
                'nom' => 'Saquedeneu',
            ),
            114 => 
            array (
                'id' => 115,
                'nom' => 'Kangourex',
            ),
            115 => 
            array (
                'id' => 116,
                'nom' => 'Hypotrempe',
            ),
            116 => 
            array (
                'id' => 117,
                'nom' => 'Hypocean',
            ),
            117 => 
            array (
                'id' => 118,
                'nom' => 'Poissirene',
            ),
            118 => 
            array (
                'id' => 119,
                'nom' => 'Poissoroy',
            ),
            119 => 
            array (
                'id' => 120,
                'nom' => 'Stari',
            ),
            120 => 
            array (
                'id' => 121,
                'nom' => 'Staross',
            ),
            121 => 
            array (
                'id' => 122,
                'nom' => 'M. Mime',
            ),
            122 => 
            array (
                'id' => 123,
                'nom' => 'Insecateur',
            ),
            123 => 
            array (
                'id' => 124,
                'nom' => 'Lippoutou',
            ),
            124 => 
            array (
                'id' => 125,
                'nom' => 'Elektek',
            ),
            125 => 
            array (
                'id' => 126,
                'nom' => 'Magmar',
            ),
            126 => 
            array (
                'id' => 127,
                'nom' => 'Scarabrute',
            ),
            127 => 
            array (
                'id' => 128,
                'nom' => 'Tauros',
            ),
            128 => 
            array (
                'id' => 129,
                'nom' => 'Magicarpe',
            ),
            129 => 
            array (
                'id' => 130,
                'nom' => 'Leviator',
            ),
            130 => 
            array (
                'id' => 131,
                'nom' => 'Lokhlass',
            ),
            131 => 
            array (
                'id' => 132,
                'nom' => 'Metamorph',
            ),
            132 => 
            array (
                'id' => 133,
                'nom' => 'Evoli',
            ),
            133 => 
            array (
                'id' => 134,
                'nom' => 'Aquali',
            ),
            134 => 
            array (
                'id' => 135,
                'nom' => 'Voltali',
            ),
            135 => 
            array (
                'id' => 136,
                'nom' => 'Pyroli',
            ),
            136 => 
            array (
                'id' => 137,
                'nom' => 'Porygon',
            ),
            137 => 
            array (
                'id' => 138,
                'nom' => 'Amonita',
            ),
            138 => 
            array (
                'id' => 139,
                'nom' => 'Amonistar',
            ),
            139 => 
            array (
                'id' => 140,
                'nom' => 'Kabuto',
            ),
            140 => 
            array (
                'id' => 141,
                'nom' => 'Kabutops',
            ),
            141 => 
            array (
                'id' => 142,
                'nom' => 'Ptera',
            ),
            142 => 
            array (
                'id' => 143,
                'nom' => 'Ronflex',
            ),
            143 => 
            array (
                'id' => 144,
                'nom' => 'Artikodin',
            ),
            144 => 
            array (
                'id' => 145,
                'nom' => 'Electhor',
            ),
            145 => 
            array (
                'id' => 146,
                'nom' => 'Sulfura',
            ),
            146 => 
            array (
                'id' => 147,
                'nom' => 'Minidraco',
            ),
            147 => 
            array (
                'id' => 148,
                'nom' => 'Draco',
            ),
            148 => 
            array (
                'id' => 149,
                'nom' => 'Dracolosse',
            ),
            149 => 
            array (
                'id' => 150,
                'nom' => 'Mewtwo',
            ),
            150 => 
            array (
                'id' => 151,
                'nom' => 'Mew',
            ),
        ));
        
        
    }
}
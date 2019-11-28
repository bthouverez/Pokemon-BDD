<?php

use Illuminate\Database\Seeder;

class PokemonTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pokemon')->delete();
        
        \DB::table('pokemon')->insert(array (
            0 => 
            array (
                'id_pok' => 1,
                'nom_pok' => 'Bulbizarre',
            ),
            1 => 
            array (
                'id_pok' => 2,
                'nom_pok' => 'Herbizarre',
            ),
            2 => 
            array (
                'id_pok' => 3,
                'nom_pok' => 'Florizarre',
            ),
            3 => 
            array (
                'id_pok' => 4,
                'nom_pok' => 'Salameche',
            ),
            4 => 
            array (
                'id_pok' => 5,
                'nom_pok' => 'Reptincel',
            ),
            5 => 
            array (
                'id_pok' => 6,
                'nom_pok' => 'Dracaufeu',
            ),
            6 => 
            array (
                'id_pok' => 7,
                'nom_pok' => 'Carapuce',
            ),
            7 => 
            array (
                'id_pok' => 8,
                'nom_pok' => 'Carabaffe',
            ),
            8 => 
            array (
                'id_pok' => 9,
                'nom_pok' => 'Tortank',
            ),
            9 => 
            array (
                'id_pok' => 10,
                'nom_pok' => 'Chenipan',
            ),
            10 => 
            array (
                'id_pok' => 11,
                'nom_pok' => 'Chrysacier',
            ),
            11 => 
            array (
                'id_pok' => 12,
                'nom_pok' => 'Papilusion',
            ),
            12 => 
            array (
                'id_pok' => 13,
                'nom_pok' => 'Aspicot',
            ),
            13 => 
            array (
                'id_pok' => 14,
                'nom_pok' => 'Coconfort',
            ),
            14 => 
            array (
                'id_pok' => 15,
                'nom_pok' => 'Dardargnan',
            ),
            15 => 
            array (
                'id_pok' => 16,
                'nom_pok' => 'Roucool',
            ),
            16 => 
            array (
                'id_pok' => 17,
                'nom_pok' => 'Roucoups',
            ),
            17 => 
            array (
                'id_pok' => 18,
                'nom_pok' => 'Roucarnage',
            ),
            18 => 
            array (
                'id_pok' => 19,
                'nom_pok' => 'Rattata',
            ),
            19 => 
            array (
                'id_pok' => 20,
                'nom_pok' => 'Rattatac',
            ),
            20 => 
            array (
                'id_pok' => 21,
                'nom_pok' => 'Piafabec',
            ),
            21 => 
            array (
                'id_pok' => 22,
                'nom_pok' => 'Rapasdepic',
            ),
            22 => 
            array (
                'id_pok' => 23,
                'nom_pok' => 'Abo',
            ),
            23 => 
            array (
                'id_pok' => 24,
                'nom_pok' => 'Arbok',
            ),
            24 => 
            array (
                'id_pok' => 25,
                'nom_pok' => 'Pikachu',
            ),
            25 => 
            array (
                'id_pok' => 26,
                'nom_pok' => 'Raichu',
            ),
            26 => 
            array (
                'id_pok' => 27,
                'nom_pok' => 'Sabelette',
            ),
            27 => 
            array (
                'id_pok' => 28,
                'nom_pok' => 'Sablaireau',
            ),
            28 => 
            array (
                'id_pok' => 29,
                'nom_pok' => 'NidoranF',
            ),
            29 => 
            array (
                'id_pok' => 30,
                'nom_pok' => 'Nidorina',
            ),
            30 => 
            array (
                'id_pok' => 31,
                'nom_pok' => 'Nidoqueen',
            ),
            31 => 
            array (
                'id_pok' => 32,
                'nom_pok' => 'NidoranM',
            ),
            32 => 
            array (
                'id_pok' => 33,
                'nom_pok' => 'Nidorino',
            ),
            33 => 
            array (
                'id_pok' => 34,
                'nom_pok' => 'Nidoking',
            ),
            34 => 
            array (
                'id_pok' => 35,
                'nom_pok' => 'Melofee',
            ),
            35 => 
            array (
                'id_pok' => 36,
                'nom_pok' => 'Melodelfe',
            ),
            36 => 
            array (
                'id_pok' => 37,
                'nom_pok' => 'Goupix',
            ),
            37 => 
            array (
                'id_pok' => 38,
                'nom_pok' => 'Feunard',
            ),
            38 => 
            array (
                'id_pok' => 39,
                'nom_pok' => 'Rondoudou',
            ),
            39 => 
            array (
                'id_pok' => 40,
                'nom_pok' => 'Grodoudou',
            ),
            40 => 
            array (
                'id_pok' => 41,
                'nom_pok' => 'Nosferapti',
            ),
            41 => 
            array (
                'id_pok' => 42,
                'nom_pok' => 'Nosferalto',
            ),
            42 => 
            array (
                'id_pok' => 43,
                'nom_pok' => 'Mystherbe',
            ),
            43 => 
            array (
                'id_pok' => 44,
                'nom_pok' => 'Ortide',
            ),
            44 => 
            array (
                'id_pok' => 45,
                'nom_pok' => 'Rafflesia',
            ),
            45 => 
            array (
                'id_pok' => 46,
                'nom_pok' => 'Paras',
            ),
            46 => 
            array (
                'id_pok' => 47,
                'nom_pok' => 'Parasect',
            ),
            47 => 
            array (
                'id_pok' => 48,
                'nom_pok' => 'Mimitoss',
            ),
            48 => 
            array (
                'id_pok' => 49,
                'nom_pok' => 'Aeromite',
            ),
            49 => 
            array (
                'id_pok' => 50,
                'nom_pok' => 'Taupiqueur',
            ),
            50 => 
            array (
                'id_pok' => 51,
                'nom_pok' => 'Triopikeur',
            ),
            51 => 
            array (
                'id_pok' => 52,
                'nom_pok' => 'Miaouss',
            ),
            52 => 
            array (
                'id_pok' => 53,
                'nom_pok' => 'Persian',
            ),
            53 => 
            array (
                'id_pok' => 54,
                'nom_pok' => 'Psykokwak',
            ),
            54 => 
            array (
                'id_pok' => 55,
                'nom_pok' => 'Akwakwak',
            ),
            55 => 
            array (
                'id_pok' => 56,
                'nom_pok' => 'Ferosinge',
            ),
            56 => 
            array (
                'id_pok' => 57,
                'nom_pok' => 'Colossinge',
            ),
            57 => 
            array (
                'id_pok' => 58,
                'nom_pok' => 'Caninos',
            ),
            58 => 
            array (
                'id_pok' => 59,
                'nom_pok' => 'Arcanin',
            ),
            59 => 
            array (
                'id_pok' => 60,
                'nom_pok' => 'Ptitard',
            ),
            60 => 
            array (
                'id_pok' => 61,
                'nom_pok' => 'Tetarte',
            ),
            61 => 
            array (
                'id_pok' => 62,
                'nom_pok' => 'Tartard',
            ),
            62 => 
            array (
                'id_pok' => 63,
                'nom_pok' => 'Abra',
            ),
            63 => 
            array (
                'id_pok' => 64,
                'nom_pok' => 'Kadabra',
            ),
            64 => 
            array (
                'id_pok' => 65,
                'nom_pok' => 'Alakazam',
            ),
            65 => 
            array (
                'id_pok' => 66,
                'nom_pok' => 'Machoc',
            ),
            66 => 
            array (
                'id_pok' => 67,
                'nom_pok' => 'Machopeur',
            ),
            67 => 
            array (
                'id_pok' => 68,
                'nom_pok' => 'Mackogneur',
            ),
            68 => 
            array (
                'id_pok' => 69,
                'nom_pok' => 'Chetiflor',
            ),
            69 => 
            array (
                'id_pok' => 70,
                'nom_pok' => 'Boustiflor',
            ),
            70 => 
            array (
                'id_pok' => 71,
                'nom_pok' => 'Empiflor',
            ),
            71 => 
            array (
                'id_pok' => 72,
                'nom_pok' => 'Tentacool',
            ),
            72 => 
            array (
                'id_pok' => 73,
                'nom_pok' => 'Tentacruel',
            ),
            73 => 
            array (
                'id_pok' => 74,
                'nom_pok' => 'Racaillou',
            ),
            74 => 
            array (
                'id_pok' => 75,
                'nom_pok' => 'Gravalanch',
            ),
            75 => 
            array (
                'id_pok' => 76,
                'nom_pok' => 'Grolem',
            ),
            76 => 
            array (
                'id_pok' => 77,
                'nom_pok' => 'Ponyta',
            ),
            77 => 
            array (
                'id_pok' => 78,
                'nom_pok' => 'Galopa',
            ),
            78 => 
            array (
                'id_pok' => 79,
                'nom_pok' => 'Ramoloss',
            ),
            79 => 
            array (
                'id_pok' => 80,
                'nom_pok' => 'Flagadoss',
            ),
            80 => 
            array (
                'id_pok' => 81,
                'nom_pok' => 'Magneti',
            ),
            81 => 
            array (
                'id_pok' => 82,
                'nom_pok' => 'Magneton',
            ),
            82 => 
            array (
                'id_pok' => 83,
                'nom_pok' => 'Canarticho',
            ),
            83 => 
            array (
                'id_pok' => 84,
                'nom_pok' => 'Doduo',
            ),
            84 => 
            array (
                'id_pok' => 85,
                'nom_pok' => 'Dodrio',
            ),
            85 => 
            array (
                'id_pok' => 86,
                'nom_pok' => 'Otaria',
            ),
            86 => 
            array (
                'id_pok' => 87,
                'nom_pok' => 'Lamantine',
            ),
            87 => 
            array (
                'id_pok' => 88,
                'nom_pok' => 'Tadmorv',
            ),
            88 => 
            array (
                'id_pok' => 89,
                'nom_pok' => 'Grotadmorv',
            ),
            89 => 
            array (
                'id_pok' => 90,
                'nom_pok' => 'Kokiyas',
            ),
            90 => 
            array (
                'id_pok' => 91,
                'nom_pok' => 'Crustabri',
            ),
            91 => 
            array (
                'id_pok' => 92,
                'nom_pok' => 'Fantominus',
            ),
            92 => 
            array (
                'id_pok' => 93,
                'nom_pok' => 'Spectrum',
            ),
            93 => 
            array (
                'id_pok' => 94,
                'nom_pok' => 'Ectoplasma',
            ),
            94 => 
            array (
                'id_pok' => 95,
                'nom_pok' => 'Onix',
            ),
            95 => 
            array (
                'id_pok' => 96,
                'nom_pok' => 'Soporifik',
            ),
            96 => 
            array (
                'id_pok' => 97,
                'nom_pok' => 'Hypnomade',
            ),
            97 => 
            array (
                'id_pok' => 98,
                'nom_pok' => 'Krabby',
            ),
            98 => 
            array (
                'id_pok' => 99,
                'nom_pok' => 'Krabboss',
            ),
            99 => 
            array (
                'id_pok' => 100,
                'nom_pok' => 'Voltorbe',
            ),
            100 => 
            array (
                'id_pok' => 101,
                'nom_pok' => 'Electrode',
            ),
            101 => 
            array (
                'id_pok' => 102,
                'nom_pok' => 'Noeunoeuf',
            ),
            102 => 
            array (
                'id_pok' => 103,
                'nom_pok' => 'Noadkoko',
            ),
            103 => 
            array (
                'id_pok' => 104,
                'nom_pok' => 'Osselait',
            ),
            104 => 
            array (
                'id_pok' => 105,
                'nom_pok' => 'Ossatueur',
            ),
            105 => 
            array (
                'id_pok' => 106,
                'nom_pok' => 'Kicklee',
            ),
            106 => 
            array (
                'id_pok' => 107,
                'nom_pok' => 'Tygnon',
            ),
            107 => 
            array (
                'id_pok' => 108,
                'nom_pok' => 'Excelangue',
            ),
            108 => 
            array (
                'id_pok' => 109,
                'nom_pok' => 'Smogo',
            ),
            109 => 
            array (
                'id_pok' => 110,
                'nom_pok' => 'Smogogo',
            ),
            110 => 
            array (
                'id_pok' => 111,
                'nom_pok' => 'Rhinocorne',
            ),
            111 => 
            array (
                'id_pok' => 112,
                'nom_pok' => 'Rhinoferos',
            ),
            112 => 
            array (
                'id_pok' => 113,
                'nom_pok' => 'Leveinard',
            ),
            113 => 
            array (
                'id_pok' => 114,
                'nom_pok' => 'Saquedeneu',
            ),
            114 => 
            array (
                'id_pok' => 115,
                'nom_pok' => 'Kangourex',
            ),
            115 => 
            array (
                'id_pok' => 116,
                'nom_pok' => 'Hypotrempe',
            ),
            116 => 
            array (
                'id_pok' => 117,
                'nom_pok' => 'Hypocean',
            ),
            117 => 
            array (
                'id_pok' => 118,
                'nom_pok' => 'Poissirene',
            ),
            118 => 
            array (
                'id_pok' => 119,
                'nom_pok' => 'Poissoroy',
            ),
            119 => 
            array (
                'id_pok' => 120,
                'nom_pok' => 'Stari',
            ),
            120 => 
            array (
                'id_pok' => 121,
                'nom_pok' => 'Staross',
            ),
            121 => 
            array (
                'id_pok' => 122,
                'nom_pok' => 'M. Mime',
            ),
            122 => 
            array (
                'id_pok' => 123,
                'nom_pok' => 'Insecateur',
            ),
            123 => 
            array (
                'id_pok' => 124,
                'nom_pok' => 'Lippoutou',
            ),
            124 => 
            array (
                'id_pok' => 125,
                'nom_pok' => 'Elektek',
            ),
            125 => 
            array (
                'id_pok' => 126,
                'nom_pok' => 'Magmar',
            ),
            126 => 
            array (
                'id_pok' => 127,
                'nom_pok' => 'Scarabrute',
            ),
            127 => 
            array (
                'id_pok' => 128,
                'nom_pok' => 'Tauros',
            ),
            128 => 
            array (
                'id_pok' => 129,
                'nom_pok' => 'Magicarpe',
            ),
            129 => 
            array (
                'id_pok' => 130,
                'nom_pok' => 'Leviator',
            ),
            130 => 
            array (
                'id_pok' => 131,
                'nom_pok' => 'Lokhlass',
            ),
            131 => 
            array (
                'id_pok' => 132,
                'nom_pok' => 'Metamorph',
            ),
            132 => 
            array (
                'id_pok' => 133,
                'nom_pok' => 'Evoli',
            ),
            133 => 
            array (
                'id_pok' => 134,
                'nom_pok' => 'Aquali',
            ),
            134 => 
            array (
                'id_pok' => 135,
                'nom_pok' => 'Voltali',
            ),
            135 => 
            array (
                'id_pok' => 136,
                'nom_pok' => 'Pyroli',
            ),
            136 => 
            array (
                'id_pok' => 137,
                'nom_pok' => 'Porygon',
            ),
            137 => 
            array (
                'id_pok' => 138,
                'nom_pok' => 'Amonita',
            ),
            138 => 
            array (
                'id_pok' => 139,
                'nom_pok' => 'Amonistar',
            ),
            139 => 
            array (
                'id_pok' => 140,
                'nom_pok' => 'Kabuto',
            ),
            140 => 
            array (
                'id_pok' => 141,
                'nom_pok' => 'Kabutops',
            ),
            141 => 
            array (
                'id_pok' => 142,
                'nom_pok' => 'Ptera',
            ),
            142 => 
            array (
                'id_pok' => 143,
                'nom_pok' => 'Ronflex',
            ),
            143 => 
            array (
                'id_pok' => 144,
                'nom_pok' => 'Artikodin',
            ),
            144 => 
            array (
                'id_pok' => 145,
                'nom_pok' => 'Electhor',
            ),
            145 => 
            array (
                'id_pok' => 146,
                'nom_pok' => 'Sulfura',
            ),
            146 => 
            array (
                'id_pok' => 147,
                'nom_pok' => 'Minidraco',
            ),
            147 => 
            array (
                'id_pok' => 148,
                'nom_pok' => 'Draco',
            ),
            148 => 
            array (
                'id_pok' => 149,
                'nom_pok' => 'Dracolosse',
            ),
            149 => 
            array (
                'id_pok' => 150,
                'nom_pok' => 'Mewtwo',
            ),
            150 => 
            array (
                'id_pok' => 151,
                'nom_pok' => 'Mew',
            ),
        ));
        
        
    }
}
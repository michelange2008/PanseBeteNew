<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SaisiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('saisies')->delete();
        
        \DB::table('saisies')->insert(array (
            0 => 
            array (
                'id' => 104,
                'user_id' => 2,
                'elevage_id' => 34,
                'espece_id' => 1,
                'created_at' => '2018-10-21 10:18:39',
                'updated_at' => '2019-03-31 09:06:57',
            ),
            1 => 
            array (
                'id' => 105,
                'user_id' => 5,
                'elevage_id' => 35,
                'espece_id' => 1,
                'created_at' => '2018-10-21 11:07:49',
                'updated_at' => '2018-10-21 11:07:49',
            ),
            2 => 
            array (
                'id' => 108,
                'user_id' => 2,
                'elevage_id' => 38,
                'espece_id' => 1,
                'created_at' => '2019-03-31 06:28:12',
                'updated_at' => '2019-03-31 16:27:46',
            ),
            3 => 
            array (
                'id' => 110,
                'user_id' => 2,
                'elevage_id' => 37,
                'espece_id' => 1,
                'created_at' => '2019-03-31 06:55:46',
                'updated_at' => '2019-03-31 16:27:46',
            ),
            4 => 
            array (
                'id' => 112,
                'user_id' => 3,
                'elevage_id' => 36,
                'espece_id' => 4,
                'created_at' => '2018-12-06 10:11:05',
                'updated_at' => '2019-04-06 10:11:05',
            ),
            5 => 
            array (
                'id' => 114,
                'user_id' => 3,
                'elevage_id' => 36,
                'espece_id' => 1,
                'created_at' => '2019-04-06 17:27:54',
                'updated_at' => '2019-04-06 17:27:54',
            ),
            6 => 
            array (
                'id' => 117,
                'user_id' => 3,
                'elevage_id' => 41,
                'espece_id' => 3,
                'created_at' => '2019-04-07 11:31:22',
                'updated_at' => '2019-04-07 11:31:22',
            ),
            7 => 
            array (
                'id' => 119,
                'user_id' => 4,
                'elevage_id' => 43,
                'espece_id' => 1,
                'created_at' => '2019-04-23 16:30:27',
                'updated_at' => '2019-04-23 16:30:27',
            ),
            8 => 
            array (
                'id' => 120,
                'user_id' => 4,
                'elevage_id' => 43,
                'espece_id' => 1,
                'created_at' => '2019-04-23 16:53:14',
                'updated_at' => '2019-04-23 16:53:14',
            ),
            9 => 
            array (
                'id' => 123,
                'user_id' => 3,
                'elevage_id' => 46,
                'espece_id' => 2,
                'created_at' => '2019-05-02 05:22:52',
                'updated_at' => '2019-05-02 05:22:52',
            ),
            10 => 
            array (
                'id' => 127,
                'user_id' => 76,
                'elevage_id' => 50,
                'espece_id' => 1,
                'created_at' => '2019-05-03 17:40:18',
                'updated_at' => '2019-05-03 17:40:18',
            ),
            11 => 
            array (
                'id' => 132,
                'user_id' => 4,
                'elevage_id' => 54,
                'espece_id' => 3,
                'created_at' => '2019-05-06 07:20:26',
                'updated_at' => '2019-05-06 07:20:26',
            ),
            12 => 
            array (
                'id' => 134,
                'user_id' => 79,
                'elevage_id' => 56,
                'espece_id' => 3,
                'created_at' => '2019-05-07 14:47:00',
                'updated_at' => '2019-05-07 14:47:00',
            ),
            13 => 
            array (
                'id' => 135,
                'user_id' => 4,
                'elevage_id' => 57,
                'espece_id' => 1,
                'created_at' => '2019-05-08 17:14:42',
                'updated_at' => '2019-05-08 17:14:42',
            ),
            14 => 
            array (
                'id' => 137,
                'user_id' => 82,
                'elevage_id' => 58,
                'espece_id' => 2,
                'created_at' => '2019-05-14 09:08:49',
                'updated_at' => '2019-05-14 09:08:49',
            ),
            15 => 
            array (
                'id' => 138,
                'user_id' => 81,
                'elevage_id' => 59,
                'espece_id' => 4,
                'created_at' => '2019-05-14 09:10:21',
                'updated_at' => '2019-05-14 09:10:21',
            ),
            16 => 
            array (
                'id' => 139,
                'user_id' => 82,
                'elevage_id' => 58,
                'espece_id' => 4,
                'created_at' => '2019-05-14 10:13:13',
                'updated_at' => '2019-05-14 10:13:13',
            ),
            17 => 
            array (
                'id' => 140,
                'user_id' => 82,
                'elevage_id' => 58,
                'espece_id' => 3,
                'created_at' => '2019-05-14 14:45:02',
                'updated_at' => '2019-05-14 14:45:02',
            ),
            18 => 
            array (
                'id' => 141,
                'user_id' => 83,
                'elevage_id' => 60,
                'espece_id' => 2,
                'created_at' => '2019-05-15 11:46:23',
                'updated_at' => '2019-05-15 11:46:23',
            ),
            19 => 
            array (
                'id' => 142,
                'user_id' => 88,
                'elevage_id' => 61,
                'espece_id' => 1,
                'created_at' => '2019-05-16 11:28:55',
                'updated_at' => '2019-05-16 11:28:55',
            ),
            20 => 
            array (
                'id' => 143,
                'user_id' => 88,
                'elevage_id' => 61,
                'espece_id' => 1,
                'created_at' => '2019-05-16 11:34:47',
                'updated_at' => '2019-05-16 11:34:47',
            ),
            21 => 
            array (
                'id' => 144,
                'user_id' => 90,
                'elevage_id' => 62,
                'espece_id' => 1,
                'created_at' => '2019-05-20 07:54:31',
                'updated_at' => '2019-05-20 07:54:31',
            ),
            22 => 
            array (
                'id' => 145,
                'user_id' => 92,
                'elevage_id' => 63,
                'espece_id' => 3,
                'created_at' => '2019-05-22 05:17:19',
                'updated_at' => '2019-05-22 05:17:19',
            ),
            23 => 
            array (
                'id' => 146,
                'user_id' => 2,
                'elevage_id' => 64,
                'espece_id' => 2,
                'created_at' => '2019-06-04 09:18:43',
                'updated_at' => '2019-06-04 09:18:43',
            ),
            24 => 
            array (
                'id' => 147,
                'user_id' => 98,
                'elevage_id' => 65,
                'espece_id' => 2,
                'created_at' => '2019-06-04 09:19:11',
                'updated_at' => '2019-06-04 09:19:11',
            ),
            25 => 
            array (
                'id' => 148,
                'user_id' => 96,
                'elevage_id' => 66,
                'espece_id' => 4,
                'created_at' => '2019-06-04 09:20:00',
                'updated_at' => '2019-06-04 09:20:00',
            ),
            26 => 
            array (
                'id' => 149,
                'user_id' => 105,
                'elevage_id' => 67,
                'espece_id' => 2,
                'created_at' => '2019-06-04 09:20:13',
                'updated_at' => '2019-06-04 09:20:13',
            ),
            27 => 
            array (
                'id' => 150,
                'user_id' => 100,
                'elevage_id' => 68,
                'espece_id' => 2,
                'created_at' => '2019-06-04 09:20:16',
                'updated_at' => '2019-06-04 09:20:16',
            ),
            28 => 
            array (
                'id' => 151,
                'user_id' => 112,
                'elevage_id' => 69,
                'espece_id' => 2,
                'created_at' => '2019-06-04 09:21:03',
                'updated_at' => '2019-06-04 09:21:03',
            ),
            29 => 
            array (
                'id' => 152,
                'user_id' => 111,
                'elevage_id' => 70,
                'espece_id' => 2,
                'created_at' => '2019-06-04 09:21:27',
                'updated_at' => '2019-06-04 09:21:27',
            ),
            30 => 
            array (
                'id' => 153,
                'user_id' => 109,
                'elevage_id' => 71,
                'espece_id' => 3,
                'created_at' => '2019-06-04 09:21:51',
                'updated_at' => '2019-06-04 09:21:51',
            ),
            31 => 
            array (
                'id' => 154,
                'user_id' => 102,
                'elevage_id' => 72,
                'espece_id' => 2,
                'created_at' => '2019-06-04 09:21:54',
                'updated_at' => '2019-06-04 09:21:54',
            ),
            32 => 
            array (
                'id' => 155,
                'user_id' => 110,
                'elevage_id' => 73,
                'espece_id' => 2,
                'created_at' => '2019-06-04 09:22:13',
                'updated_at' => '2019-06-04 09:22:13',
            ),
            33 => 
            array (
                'id' => 157,
                'user_id' => 94,
                'elevage_id' => 75,
                'espece_id' => 2,
                'created_at' => '2019-06-04 09:23:18',
                'updated_at' => '2019-06-04 09:23:18',
            ),
            34 => 
            array (
                'id' => 158,
                'user_id' => 98,
                'elevage_id' => 65,
                'espece_id' => 2,
                'created_at' => '2019-06-04 09:26:30',
                'updated_at' => '2019-06-04 09:26:30',
            ),
            35 => 
            array (
                'id' => 159,
                'user_id' => 98,
                'elevage_id' => 65,
                'espece_id' => 2,
                'created_at' => '2019-06-04 09:33:17',
                'updated_at' => '2019-06-04 09:33:17',
            ),
            36 => 
            array (
                'id' => 160,
                'user_id' => 116,
                'elevage_id' => 76,
                'espece_id' => 2,
                'created_at' => '2019-06-04 09:39:56',
                'updated_at' => '2019-06-04 09:39:56',
            ),
            37 => 
            array (
                'id' => 161,
                'user_id' => 115,
                'elevage_id' => 77,
                'espece_id' => 2,
                'created_at' => '2019-06-04 09:40:03',
                'updated_at' => '2019-06-04 09:40:03',
            ),
            38 => 
            array (
                'id' => 162,
                'user_id' => 117,
                'elevage_id' => 78,
                'espece_id' => 2,
                'created_at' => '2019-06-04 09:57:00',
                'updated_at' => '2019-06-04 09:57:00',
            ),
            39 => 
            array (
                'id' => 163,
                'user_id' => 117,
                'elevage_id' => 79,
                'espece_id' => 4,
                'created_at' => '2019-06-04 09:58:22',
                'updated_at' => '2019-06-04 09:58:22',
            ),
            40 => 
            array (
                'id' => 164,
                'user_id' => 119,
                'elevage_id' => 80,
                'espece_id' => 2,
                'created_at' => '2019-06-04 10:09:43',
                'updated_at' => '2019-06-04 10:09:43',
            ),
            41 => 
            array (
                'id' => 165,
                'user_id' => 118,
                'elevage_id' => 81,
                'espece_id' => 2,
                'created_at' => '2019-06-04 10:18:02',
                'updated_at' => '2019-06-04 10:18:02',
            ),
            42 => 
            array (
                'id' => 166,
                'user_id' => 111,
                'elevage_id' => 70,
                'espece_id' => 2,
                'created_at' => '2019-06-04 13:13:48',
                'updated_at' => '2019-06-04 13:13:48',
            ),
            43 => 
            array (
                'id' => 167,
                'user_id' => 103,
                'elevage_id' => 82,
                'espece_id' => 2,
                'created_at' => '2019-06-04 14:18:31',
                'updated_at' => '2019-06-04 14:18:31',
            ),
            44 => 
            array (
                'id' => 168,
                'user_id' => 99,
                'elevage_id' => 83,
                'espece_id' => 2,
                'created_at' => '2019-06-05 09:53:29',
                'updated_at' => '2019-06-05 09:53:29',
            ),
            45 => 
            array (
                'id' => 169,
                'user_id' => 115,
                'elevage_id' => 77,
                'espece_id' => 2,
                'created_at' => '2019-06-05 14:00:56',
                'updated_at' => '2019-06-05 14:00:56',
            ),
            46 => 
            array (
                'id' => 173,
                'user_id' => 122,
                'elevage_id' => 87,
                'espece_id' => 2,
                'created_at' => '2019-06-11 08:00:31',
                'updated_at' => '2019-06-11 08:00:31',
            ),
            47 => 
            array (
                'id' => 174,
                'user_id' => 125,
                'elevage_id' => 88,
                'espece_id' => 5,
                'created_at' => '2019-06-11 09:30:25',
                'updated_at' => '2019-06-11 09:30:25',
            ),
            48 => 
            array (
                'id' => 175,
                'user_id' => 130,
                'elevage_id' => 89,
                'espece_id' => 1,
                'created_at' => '2019-06-18 06:47:14',
                'updated_at' => '2019-06-18 06:47:14',
            ),
            49 => 
            array (
                'id' => 176,
                'user_id' => 132,
                'elevage_id' => 90,
                'espece_id' => 1,
                'created_at' => '2019-06-18 09:08:46',
                'updated_at' => '2019-06-18 09:08:46',
            ),
            50 => 
            array (
                'id' => 178,
                'user_id' => 112,
                'elevage_id' => 69,
                'espece_id' => 2,
                'created_at' => '2019-06-19 08:34:30',
                'updated_at' => '2019-06-19 08:34:30',
            ),
            51 => 
            array (
                'id' => 179,
                'user_id' => 112,
                'elevage_id' => 69,
                'espece_id' => 2,
                'created_at' => '2019-06-19 10:29:33',
                'updated_at' => '2019-06-19 10:29:33',
            ),
            52 => 
            array (
                'id' => 180,
                'user_id' => 112,
                'elevage_id' => 69,
                'espece_id' => 2,
                'created_at' => '2019-06-19 10:34:01',
                'updated_at' => '2019-06-19 10:34:01',
            ),
            53 => 
            array (
                'id' => 181,
                'user_id' => 80,
                'elevage_id' => 92,
                'espece_id' => 2,
                'created_at' => '2019-06-25 10:01:13',
                'updated_at' => '2019-06-25 10:01:13',
            ),
            54 => 
            array (
                'id' => 182,
                'user_id' => 88,
                'elevage_id' => 61,
                'espece_id' => 1,
                'created_at' => '2019-07-01 08:12:35',
                'updated_at' => '2019-07-01 08:12:35',
            ),
            55 => 
            array (
                'id' => 183,
                'user_id' => 107,
                'elevage_id' => 93,
                'espece_id' => 1,
                'created_at' => '2019-07-01 08:22:24',
                'updated_at' => '2019-07-01 08:22:24',
            ),
            56 => 
            array (
                'id' => 184,
                'user_id' => 138,
                'elevage_id' => 94,
                'espece_id' => 2,
                'created_at' => '2019-07-08 06:34:01',
                'updated_at' => '2019-07-08 06:34:01',
            ),
            57 => 
            array (
                'id' => 185,
                'user_id' => 149,
                'elevage_id' => 95,
                'espece_id' => 2,
                'created_at' => '2019-07-08 09:58:46',
                'updated_at' => '2019-07-08 09:58:46',
            ),
            58 => 
            array (
                'id' => 186,
                'user_id' => 148,
                'elevage_id' => 96,
                'espece_id' => 4,
                'created_at' => '2019-07-08 18:27:55',
                'updated_at' => '2019-07-08 18:27:55',
            ),
            59 => 
            array (
                'id' => 187,
                'user_id' => 139,
                'elevage_id' => 97,
                'espece_id' => 2,
                'created_at' => '2019-07-09 07:01:39',
                'updated_at' => '2019-07-09 07:01:39',
            ),
            60 => 
            array (
                'id' => 189,
                'user_id' => 97,
                'elevage_id' => 98,
                'espece_id' => 2,
                'created_at' => '2019-07-15 09:24:52',
                'updated_at' => '2019-07-15 09:24:52',
            ),
            61 => 
            array (
                'id' => 190,
                'user_id' => 142,
                'elevage_id' => 99,
                'espece_id' => 1,
                'created_at' => '2019-07-17 12:38:05',
                'updated_at' => '2019-07-17 12:38:05',
            ),
            62 => 
            array (
                'id' => 191,
                'user_id' => 152,
                'elevage_id' => 100,
                'espece_id' => 2,
                'created_at' => '2019-07-17 14:33:25',
                'updated_at' => '2019-07-17 14:33:25',
            ),
            63 => 
            array (
                'id' => 192,
                'user_id' => 150,
                'elevage_id' => 101,
                'espece_id' => 1,
                'created_at' => '2019-07-17 18:15:48',
                'updated_at' => '2019-07-17 18:15:48',
            ),
            64 => 
            array (
                'id' => 194,
                'user_id' => 98,
                'elevage_id' => 65,
                'espece_id' => 2,
                'created_at' => '2019-07-18 11:41:59',
                'updated_at' => '2019-07-18 11:41:59',
            ),
            65 => 
            array (
                'id' => 195,
                'user_id' => 154,
                'elevage_id' => 103,
                'espece_id' => 2,
                'created_at' => '2019-07-18 15:20:30',
                'updated_at' => '2019-07-18 15:20:30',
            ),
            66 => 
            array (
                'id' => 196,
                'user_id' => 146,
                'elevage_id' => 104,
                'espece_id' => 4,
                'created_at' => '2019-07-26 12:21:01',
                'updated_at' => '2019-07-26 12:21:01',
            ),
            67 => 
            array (
                'id' => 200,
                'user_id' => 166,
                'elevage_id' => 107,
                'espece_id' => 1,
                'created_at' => '2019-08-19 13:58:01',
                'updated_at' => '2019-08-19 13:58:01',
            ),
            68 => 
            array (
                'id' => 201,
                'user_id' => 166,
                'elevage_id' => 107,
                'espece_id' => 1,
                'created_at' => '2019-08-19 13:58:20',
                'updated_at' => '2019-08-19 13:58:20',
            ),
            69 => 
            array (
                'id' => 202,
                'user_id' => 166,
                'elevage_id' => 107,
                'espece_id' => 1,
                'created_at' => '2019-08-19 13:58:46',
                'updated_at' => '2019-08-19 13:58:46',
            ),
            70 => 
            array (
                'id' => 205,
                'user_id' => 169,
                'elevage_id' => 110,
                'espece_id' => 4,
                'created_at' => '2019-08-27 14:33:47',
                'updated_at' => '2019-08-27 14:33:47',
            ),
            71 => 
            array (
                'id' => 206,
                'user_id' => 170,
                'elevage_id' => 111,
                'espece_id' => 1,
                'created_at' => '2019-08-27 14:41:24',
                'updated_at' => '2019-08-27 14:41:24',
            ),
            72 => 
            array (
                'id' => 207,
                'user_id' => 168,
                'elevage_id' => 112,
                'espece_id' => 1,
                'created_at' => '2019-08-27 16:24:10',
                'updated_at' => '2019-08-27 16:24:10',
            ),
            73 => 
            array (
                'id' => 208,
                'user_id' => 172,
                'elevage_id' => 113,
                'espece_id' => 1,
                'created_at' => '2019-08-30 08:28:39',
                'updated_at' => '2019-08-30 08:28:39',
            ),
            74 => 
            array (
                'id' => 211,
                'user_id' => 173,
                'elevage_id' => 116,
                'espece_id' => 1,
                'created_at' => '2019-09-04 09:11:54',
                'updated_at' => '2019-09-04 09:11:54',
            ),
            75 => 
            array (
                'id' => 213,
                'user_id' => 173,
                'elevage_id' => 118,
                'espece_id' => 2,
                'created_at' => '2019-09-04 15:52:23',
                'updated_at' => '2019-09-04 15:52:23',
            ),
            76 => 
            array (
                'id' => 217,
                'user_id' => 177,
                'elevage_id' => 122,
                'espece_id' => 5,
                'created_at' => '2019-09-06 06:42:48',
                'updated_at' => '2019-09-06 06:42:48',
            ),
            77 => 
            array (
                'id' => 219,
                'user_id' => 181,
                'elevage_id' => 124,
                'espece_id' => 2,
                'created_at' => '2019-09-06 12:58:53',
                'updated_at' => '2019-09-06 12:58:53',
            ),
            78 => 
            array (
                'id' => 220,
                'user_id' => 181,
                'elevage_id' => 124,
                'espece_id' => 2,
                'created_at' => '2019-09-06 13:46:05',
                'updated_at' => '2019-09-06 13:46:05',
            ),
            79 => 
            array (
                'id' => 221,
                'user_id' => 184,
                'elevage_id' => 125,
                'espece_id' => 3,
                'created_at' => '2019-09-09 12:43:31',
                'updated_at' => '2019-09-09 12:43:31',
            ),
            80 => 
            array (
                'id' => 222,
                'user_id' => 179,
                'elevage_id' => 126,
                'espece_id' => 4,
                'created_at' => '2019-09-09 14:06:11',
                'updated_at' => '2019-09-09 14:06:11',
            ),
            81 => 
            array (
                'id' => 223,
                'user_id' => 182,
                'elevage_id' => 127,
                'espece_id' => 4,
                'created_at' => '2019-09-10 13:49:57',
                'updated_at' => '2019-09-10 13:49:57',
            ),
            82 => 
            array (
                'id' => 224,
                'user_id' => 182,
                'elevage_id' => 128,
                'espece_id' => 4,
                'created_at' => '2019-09-10 13:54:36',
                'updated_at' => '2019-09-10 13:54:36',
            ),
            83 => 
            array (
                'id' => 225,
                'user_id' => 161,
                'elevage_id' => 129,
                'espece_id' => 2,
                'created_at' => '2019-09-13 07:14:23',
                'updated_at' => '2019-09-13 07:14:23',
            ),
            84 => 
            array (
                'id' => 226,
                'user_id' => 185,
                'elevage_id' => 130,
                'espece_id' => 2,
                'created_at' => '2019-09-13 08:21:48',
                'updated_at' => '2019-09-13 08:21:48',
            ),
            85 => 
            array (
                'id' => 232,
                'user_id' => 111,
                'elevage_id' => 70,
                'espece_id' => 2,
                'created_at' => '2019-09-18 08:06:56',
                'updated_at' => '2019-09-18 08:06:56',
            ),
            86 => 
            array (
                'id' => 235,
                'user_id' => 174,
                'elevage_id' => 138,
                'espece_id' => 4,
                'created_at' => '2019-09-19 08:50:07',
                'updated_at' => '2019-09-19 08:50:07',
            ),
            87 => 
            array (
                'id' => 236,
                'user_id' => 174,
                'elevage_id' => 139,
                'espece_id' => 2,
                'created_at' => '2019-09-19 08:58:36',
                'updated_at' => '2019-09-19 08:58:36',
            ),
            88 => 
            array (
                'id' => 237,
                'user_id' => 145,
                'elevage_id' => 140,
                'espece_id' => 2,
                'created_at' => '2019-09-19 09:12:55',
                'updated_at' => '2019-09-19 09:12:55',
            ),
            89 => 
            array (
                'id' => 239,
                'user_id' => 189,
                'elevage_id' => 142,
                'espece_id' => 1,
                'created_at' => '2019-09-20 07:22:32',
                'updated_at' => '2019-09-20 07:22:32',
            ),
            90 => 
            array (
                'id' => 240,
                'user_id' => 188,
                'elevage_id' => 143,
                'espece_id' => 3,
                'created_at' => '2019-09-20 11:37:54',
                'updated_at' => '2019-09-20 11:37:54',
            ),
            91 => 
            array (
                'id' => 241,
                'user_id' => 185,
                'elevage_id' => 144,
                'espece_id' => 2,
                'created_at' => '2019-09-24 08:21:05',
                'updated_at' => '2019-09-24 08:21:05',
            ),
            92 => 
            array (
                'id' => 242,
                'user_id' => 196,
                'elevage_id' => 145,
                'espece_id' => 2,
                'created_at' => '2019-09-26 17:50:30',
                'updated_at' => '2019-09-26 17:50:30',
            ),
            93 => 
            array (
                'id' => 243,
                'user_id' => 195,
                'elevage_id' => 146,
                'espece_id' => 2,
                'created_at' => '2019-09-27 10:32:25',
                'updated_at' => '2019-09-27 10:32:25',
            ),
            94 => 
            array (
                'id' => 245,
                'user_id' => 197,
                'elevage_id' => 148,
                'espece_id' => 2,
                'created_at' => '2019-09-30 15:24:52',
                'updated_at' => '2019-09-30 15:24:52',
            ),
            95 => 
            array (
                'id' => 246,
                'user_id' => 161,
                'elevage_id' => 149,
                'espece_id' => 2,
                'created_at' => '2019-10-01 07:34:14',
                'updated_at' => '2019-10-01 07:34:14',
            ),
            96 => 
            array (
                'id' => 250,
                'user_id' => 200,
                'elevage_id' => 152,
                'espece_id' => 5,
                'created_at' => '2019-10-03 11:21:10',
                'updated_at' => '2019-10-03 11:21:10',
            ),
            97 => 
            array (
                'id' => 251,
                'user_id' => 205,
                'elevage_id' => 153,
                'espece_id' => 4,
                'created_at' => '2019-10-04 07:06:45',
                'updated_at' => '2019-10-04 07:06:45',
            ),
            98 => 
            array (
                'id' => 252,
                'user_id' => 193,
                'elevage_id' => 154,
                'espece_id' => 3,
                'created_at' => '2019-10-05 10:43:41',
                'updated_at' => '2019-10-05 10:43:41',
            ),
            99 => 
            array (
                'id' => 253,
                'user_id' => 140,
                'elevage_id' => 155,
                'espece_id' => 3,
                'created_at' => '2019-10-08 09:30:19',
                'updated_at' => '2019-10-08 09:30:19',
            ),
            100 => 
            array (
                'id' => 254,
                'user_id' => 191,
                'elevage_id' => 156,
                'espece_id' => 3,
                'created_at' => '2019-10-08 13:26:13',
                'updated_at' => '2019-10-08 13:26:13',
            ),
            101 => 
            array (
                'id' => 255,
                'user_id' => 140,
                'elevage_id' => 157,
                'espece_id' => 3,
                'created_at' => '2019-10-08 15:48:52',
                'updated_at' => '2019-10-08 15:48:52',
            ),
            102 => 
            array (
                'id' => 256,
                'user_id' => 140,
                'elevage_id' => 158,
                'espece_id' => 3,
                'created_at' => '2019-10-09 12:19:23',
                'updated_at' => '2019-10-09 12:19:23',
            ),
            103 => 
            array (
                'id' => 257,
                'user_id' => 140,
                'elevage_id' => 159,
                'espece_id' => 4,
                'created_at' => '2019-10-14 17:04:47',
                'updated_at' => '2019-10-14 17:04:47',
            ),
            104 => 
            array (
                'id' => 259,
                'user_id' => 187,
                'elevage_id' => 161,
                'espece_id' => 4,
                'created_at' => '2019-10-17 07:11:35',
                'updated_at' => '2019-10-17 07:11:35',
            ),
            105 => 
            array (
                'id' => 260,
                'user_id' => 187,
                'elevage_id' => 161,
                'espece_id' => 4,
                'created_at' => '2019-10-17 07:44:29',
                'updated_at' => '2019-10-17 07:44:29',
            ),
            106 => 
            array (
                'id' => 261,
                'user_id' => 213,
                'elevage_id' => 162,
                'espece_id' => 4,
                'created_at' => '2019-10-17 12:23:11',
                'updated_at' => '2019-10-17 12:23:11',
            ),
            107 => 
            array (
                'id' => 262,
                'user_id' => 213,
                'elevage_id' => 163,
                'espece_id' => 2,
                'created_at' => '2019-10-17 13:01:47',
                'updated_at' => '2019-10-17 13:01:47',
            ),
            108 => 
            array (
                'id' => 263,
                'user_id' => 213,
                'elevage_id' => 164,
                'espece_id' => 2,
                'created_at' => '2019-10-17 13:04:50',
                'updated_at' => '2019-10-17 13:04:50',
            ),
            109 => 
            array (
                'id' => 264,
                'user_id' => 210,
                'elevage_id' => 165,
                'espece_id' => 4,
                'created_at' => '2019-10-18 07:53:03',
                'updated_at' => '2019-10-18 07:53:03',
            ),
            110 => 
            array (
                'id' => 265,
                'user_id' => 210,
                'elevage_id' => 165,
                'espece_id' => 4,
                'created_at' => '2019-10-18 07:59:03',
                'updated_at' => '2019-10-18 07:59:03',
            ),
            111 => 
            array (
                'id' => 267,
                'user_id' => 211,
                'elevage_id' => 167,
                'espece_id' => 3,
                'created_at' => '2019-10-18 11:29:01',
                'updated_at' => '2019-10-18 11:29:01',
            ),
            112 => 
            array (
                'id' => 268,
                'user_id' => 140,
                'elevage_id' => 168,
                'espece_id' => 5,
                'created_at' => '2019-10-21 11:56:37',
                'updated_at' => '2019-10-21 11:56:37',
            ),
            113 => 
            array (
                'id' => 270,
                'user_id' => 217,
                'elevage_id' => 170,
                'espece_id' => 1,
                'created_at' => '2019-10-30 15:46:14',
                'updated_at' => '2019-10-30 15:46:14',
            ),
            114 => 
            array (
                'id' => 271,
                'user_id' => 216,
                'elevage_id' => 171,
                'espece_id' => 3,
                'created_at' => '2019-10-30 16:40:57',
                'updated_at' => '2019-10-30 16:40:57',
            ),
            115 => 
            array (
                'id' => 272,
                'user_id' => 216,
                'elevage_id' => 171,
                'espece_id' => 1,
                'created_at' => '2019-10-30 16:43:37',
                'updated_at' => '2019-10-30 16:43:37',
            ),
            116 => 
            array (
                'id' => 273,
                'user_id' => 194,
                'elevage_id' => 172,
                'espece_id' => 2,
                'created_at' => '2019-11-05 08:49:38',
                'updated_at' => '2019-11-05 08:49:38',
            ),
            117 => 
            array (
                'id' => 274,
                'user_id' => 194,
                'elevage_id' => 172,
                'espece_id' => 2,
                'created_at' => '2019-11-05 08:50:15',
                'updated_at' => '2019-11-05 08:50:15',
            ),
            118 => 
            array (
                'id' => 276,
                'user_id' => 228,
                'elevage_id' => 174,
                'espece_id' => 5,
                'created_at' => '2019-11-13 09:56:02',
                'updated_at' => '2019-11-13 09:56:02',
            ),
            119 => 
            array (
                'id' => 277,
                'user_id' => 227,
                'elevage_id' => 175,
                'espece_id' => 5,
                'created_at' => '2019-11-13 09:56:21',
                'updated_at' => '2019-11-13 09:56:21',
            ),
            120 => 
            array (
                'id' => 278,
                'user_id' => 230,
                'elevage_id' => 176,
                'espece_id' => 5,
                'created_at' => '2019-11-13 09:56:23',
                'updated_at' => '2019-11-13 09:56:23',
            ),
            121 => 
            array (
                'id' => 279,
                'user_id' => 231,
                'elevage_id' => 177,
                'espece_id' => 5,
                'created_at' => '2019-11-13 09:56:45',
                'updated_at' => '2019-11-13 09:56:45',
            ),
            122 => 
            array (
                'id' => 280,
                'user_id' => 226,
                'elevage_id' => 178,
                'espece_id' => 5,
                'created_at' => '2019-11-13 09:57:21',
                'updated_at' => '2019-11-13 09:57:21',
            ),
            123 => 
            array (
                'id' => 281,
                'user_id' => 234,
                'elevage_id' => 179,
                'espece_id' => 5,
                'created_at' => '2019-11-13 09:58:24',
                'updated_at' => '2019-11-13 09:58:24',
            ),
            124 => 
            array (
                'id' => 282,
                'user_id' => 234,
                'elevage_id' => 179,
                'espece_id' => 5,
                'created_at' => '2019-11-13 09:58:43',
                'updated_at' => '2019-11-13 09:58:43',
            ),
            125 => 
            array (
                'id' => 283,
                'user_id' => 232,
                'elevage_id' => 180,
                'espece_id' => 5,
                'created_at' => '2019-11-13 09:59:00',
                'updated_at' => '2019-11-13 09:59:00',
            ),
            126 => 
            array (
                'id' => 285,
                'user_id' => 241,
                'elevage_id' => 182,
                'espece_id' => 5,
                'created_at' => '2019-11-13 10:19:36',
                'updated_at' => '2019-11-13 10:19:36',
            ),
            127 => 
            array (
                'id' => 286,
                'user_id' => 224,
                'elevage_id' => 183,
                'espece_id' => 5,
                'created_at' => '2019-11-13 10:21:15',
                'updated_at' => '2019-11-13 10:21:15',
            ),
            128 => 
            array (
                'id' => 288,
                'user_id' => 239,
                'elevage_id' => 185,
                'espece_id' => 5,
                'created_at' => '2019-11-13 10:25:04',
                'updated_at' => '2019-11-13 10:25:04',
            ),
            129 => 
            array (
                'id' => 289,
                'user_id' => 224,
                'elevage_id' => 183,
                'espece_id' => 5,
                'created_at' => '2019-11-13 10:26:04',
                'updated_at' => '2019-11-13 10:26:04',
            ),
            130 => 
            array (
                'id' => 290,
                'user_id' => 237,
                'elevage_id' => 186,
                'espece_id' => 5,
                'created_at' => '2019-11-13 13:17:02',
                'updated_at' => '2019-11-13 13:17:02',
            ),
            131 => 
            array (
                'id' => 291,
                'user_id' => 225,
                'elevage_id' => 187,
                'espece_id' => 5,
                'created_at' => '2019-11-13 13:22:16',
                'updated_at' => '2019-11-13 13:22:16',
            ),
            132 => 
            array (
                'id' => 294,
                'user_id' => 179,
                'elevage_id' => 189,
                'espece_id' => 4,
                'created_at' => '2019-11-26 14:42:58',
                'updated_at' => '2019-11-26 14:42:58',
            ),
            133 => 
            array (
                'id' => 295,
                'user_id' => 218,
                'elevage_id' => 190,
                'espece_id' => 1,
                'created_at' => '2019-12-03 23:41:04',
                'updated_at' => '2019-12-03 23:41:04',
            ),
            134 => 
            array (
                'id' => 296,
                'user_id' => 140,
                'elevage_id' => 191,
                'espece_id' => 5,
                'created_at' => '2019-12-04 08:07:31',
                'updated_at' => '2019-12-04 08:07:31',
            ),
            135 => 
            array (
                'id' => 297,
                'user_id' => 140,
                'elevage_id' => 192,
                'espece_id' => 5,
                'created_at' => '2019-12-04 08:08:13',
                'updated_at' => '2019-12-04 08:08:13',
            ),
            136 => 
            array (
                'id' => 299,
                'user_id' => 140,
                'elevage_id' => 193,
                'espece_id' => 4,
                'created_at' => '2019-12-05 16:59:04',
                'updated_at' => '2019-12-05 16:59:04',
            ),
            137 => 
            array (
                'id' => 302,
                'user_id' => 92,
                'elevage_id' => 63,
                'espece_id' => 4,
                'created_at' => '2019-12-10 06:14:05',
                'updated_at' => '2019-12-10 06:14:05',
            ),
            138 => 
            array (
                'id' => 303,
                'user_id' => 92,
                'elevage_id' => 196,
                'espece_id' => 3,
                'created_at' => '2019-12-10 06:16:32',
                'updated_at' => '2019-12-10 06:16:32',
            ),
            139 => 
            array (
                'id' => 304,
                'user_id' => 140,
                'elevage_id' => 197,
                'espece_id' => 5,
                'created_at' => '2019-12-10 13:33:21',
                'updated_at' => '2019-12-10 13:33:21',
            ),
            140 => 
            array (
                'id' => 305,
                'user_id' => 211,
                'elevage_id' => 198,
                'espece_id' => 1,
                'created_at' => '2019-12-13 15:20:14',
                'updated_at' => '2019-12-13 15:20:14',
            ),
            141 => 
            array (
                'id' => 306,
                'user_id' => 140,
                'elevage_id' => 199,
                'espece_id' => 3,
                'created_at' => '2019-12-27 09:27:51',
                'updated_at' => '2019-12-27 09:27:51',
            ),
            142 => 
            array (
                'id' => 307,
                'user_id' => 140,
                'elevage_id' => 200,
                'espece_id' => 3,
                'created_at' => '2019-12-27 09:34:17',
                'updated_at' => '2019-12-27 09:34:17',
            ),
            143 => 
            array (
                'id' => 308,
                'user_id' => 140,
                'elevage_id' => 201,
                'espece_id' => 5,
                'created_at' => '2019-12-27 09:42:03',
                'updated_at' => '2019-12-27 09:42:03',
            ),
            144 => 
            array (
                'id' => 309,
                'user_id' => 140,
                'elevage_id' => 202,
                'espece_id' => 5,
                'created_at' => '2019-12-27 09:52:03',
                'updated_at' => '2019-12-27 09:52:03',
            ),
            145 => 
            array (
                'id' => 310,
                'user_id' => 140,
                'elevage_id' => 203,
                'espece_id' => 5,
                'created_at' => '2019-12-30 08:31:46',
                'updated_at' => '2019-12-30 08:31:46',
            ),
            146 => 
            array (
                'id' => 311,
                'user_id' => 149,
                'elevage_id' => 95,
                'espece_id' => 1,
                'created_at' => '2020-01-03 08:16:25',
                'updated_at' => '2020-01-03 08:16:25',
            ),
            147 => 
            array (
                'id' => 312,
                'user_id' => 222,
                'elevage_id' => 204,
                'espece_id' => 1,
                'created_at' => '2020-01-07 09:55:05',
                'updated_at' => '2020-01-07 09:55:05',
            ),
            148 => 
            array (
                'id' => 313,
                'user_id' => 222,
                'elevage_id' => 204,
                'espece_id' => 1,
                'created_at' => '2020-01-07 14:04:41',
                'updated_at' => '2020-01-07 14:04:41',
            ),
            149 => 
            array (
                'id' => 314,
                'user_id' => 222,
                'elevage_id' => 204,
                'espece_id' => 1,
                'created_at' => '2020-01-07 14:07:31',
                'updated_at' => '2020-01-07 14:07:31',
            ),
            150 => 
            array (
                'id' => 315,
                'user_id' => 222,
                'elevage_id' => 204,
                'espece_id' => 3,
                'created_at' => '2020-01-08 15:29:55',
                'updated_at' => '2020-01-08 15:29:55',
            ),
            151 => 
            array (
                'id' => 316,
                'user_id' => 3,
                'elevage_id' => 205,
                'espece_id' => 2,
                'created_at' => '2020-01-08 16:01:53',
                'updated_at' => '2020-01-08 16:01:53',
            ),
            152 => 
            array (
                'id' => 317,
                'user_id' => 275,
                'elevage_id' => 206,
                'espece_id' => 4,
                'created_at' => '2020-01-14 15:00:40',
                'updated_at' => '2020-01-14 15:00:40',
            ),
            153 => 
            array (
                'id' => 318,
                'user_id' => 271,
                'elevage_id' => 207,
                'espece_id' => 2,
                'created_at' => '2020-01-14 16:06:08',
                'updated_at' => '2020-01-14 16:06:08',
            ),
            154 => 
            array (
                'id' => 319,
                'user_id' => 266,
                'elevage_id' => 208,
                'espece_id' => 1,
                'created_at' => '2020-01-14 16:43:31',
                'updated_at' => '2020-01-14 16:43:31',
            ),
            155 => 
            array (
                'id' => 320,
                'user_id' => 262,
                'elevage_id' => 209,
                'espece_id' => 1,
                'created_at' => '2020-01-14 18:21:54',
                'updated_at' => '2020-01-14 18:21:54',
            ),
            156 => 
            array (
                'id' => 321,
                'user_id' => 262,
                'elevage_id' => 209,
                'espece_id' => 1,
                'created_at' => '2020-01-14 18:22:33',
                'updated_at' => '2020-01-14 18:22:33',
            ),
            157 => 
            array (
                'id' => 322,
                'user_id' => 269,
                'elevage_id' => 210,
                'espece_id' => 2,
                'created_at' => '2020-01-14 20:10:38',
                'updated_at' => '2020-01-14 20:10:38',
            ),
            158 => 
            array (
                'id' => 323,
                'user_id' => 140,
                'elevage_id' => 211,
                'espece_id' => 3,
                'created_at' => '2020-01-15 08:14:22',
                'updated_at' => '2020-01-15 08:14:22',
            ),
            159 => 
            array (
                'id' => 324,
                'user_id' => 251,
                'elevage_id' => 212,
                'espece_id' => 3,
                'created_at' => '2020-01-19 17:34:41',
                'updated_at' => '2020-01-19 17:34:41',
            ),
            160 => 
            array (
                'id' => 325,
                'user_id' => 277,
                'elevage_id' => 213,
                'espece_id' => 1,
                'created_at' => '2020-01-23 06:51:12',
                'updated_at' => '2020-01-23 06:51:12',
            ),
            161 => 
            array (
                'id' => 326,
                'user_id' => 285,
                'elevage_id' => 214,
                'espece_id' => 5,
                'created_at' => '2020-01-23 10:24:12',
                'updated_at' => '2020-01-23 10:24:12',
            ),
            162 => 
            array (
                'id' => 327,
                'user_id' => 285,
                'elevage_id' => 215,
                'espece_id' => 2,
                'created_at' => '2020-01-23 10:38:46',
                'updated_at' => '2020-01-23 10:38:46',
            ),
            163 => 
            array (
                'id' => 329,
                'user_id' => 288,
                'elevage_id' => 56,
                'espece_id' => 1,
                'created_at' => '2020-01-23 14:13:25',
                'updated_at' => '2020-01-23 14:13:25',
            ),
            164 => 
            array (
                'id' => 331,
                'user_id' => 284,
                'elevage_id' => 217,
                'espece_id' => 2,
                'created_at' => '2020-01-23 16:17:20',
                'updated_at' => '2020-01-23 16:17:20',
            ),
            165 => 
            array (
                'id' => 333,
                'user_id' => 281,
                'elevage_id' => 219,
                'espece_id' => 1,
                'created_at' => '2020-01-24 04:28:32',
                'updated_at' => '2020-01-24 04:28:32',
            ),
            166 => 
            array (
                'id' => 335,
                'user_id' => 163,
                'elevage_id' => 220,
                'espece_id' => 5,
                'created_at' => '2020-01-28 08:24:24',
                'updated_at' => '2020-01-28 08:24:24',
            ),
            167 => 
            array (
                'id' => 336,
                'user_id' => 288,
                'elevage_id' => 56,
                'espece_id' => 2,
                'created_at' => '2020-01-29 07:47:51',
                'updated_at' => '2020-01-29 07:47:51',
            ),
            168 => 
            array (
                'id' => 339,
                'user_id' => 103,
                'elevage_id' => 82,
                'espece_id' => 4,
                'created_at' => '2020-01-29 10:14:59',
                'updated_at' => '2020-01-29 10:14:59',
            ),
            169 => 
            array (
                'id' => 340,
                'user_id' => 3,
                'elevage_id' => 205,
                'espece_id' => 2,
                'created_at' => '2020-01-30 13:12:42',
                'updated_at' => '2020-01-30 13:12:42',
            ),
            170 => 
            array (
                'id' => 341,
                'user_id' => 291,
                'elevage_id' => 221,
                'espece_id' => 2,
                'created_at' => '2020-01-30 20:13:33',
                'updated_at' => '2020-01-30 20:13:33',
            ),
            171 => 
            array (
                'id' => 342,
                'user_id' => 287,
                'elevage_id' => 222,
                'espece_id' => 1,
                'created_at' => '2020-01-30 21:31:57',
                'updated_at' => '2020-01-30 21:31:57',
            ),
            172 => 
            array (
                'id' => 343,
                'user_id' => 292,
                'elevage_id' => 223,
                'espece_id' => 2,
                'created_at' => '2020-01-31 07:44:57',
                'updated_at' => '2020-01-31 07:44:57',
            ),
            173 => 
            array (
                'id' => 344,
                'user_id' => 270,
                'elevage_id' => 224,
                'espece_id' => 4,
                'created_at' => '2020-02-06 10:45:23',
                'updated_at' => '2020-02-06 10:45:23',
            ),
            174 => 
            array (
                'id' => 345,
                'user_id' => 263,
                'elevage_id' => 225,
                'espece_id' => 1,
                'created_at' => '2020-02-16 18:29:22',
                'updated_at' => '2020-02-16 18:29:22',
            ),
            175 => 
            array (
                'id' => 346,
                'user_id' => 298,
                'elevage_id' => 226,
                'espece_id' => 1,
                'created_at' => '2020-02-20 10:07:56',
                'updated_at' => '2020-02-20 10:07:56',
            ),
            176 => 
            array (
                'id' => 347,
                'user_id' => 163,
                'elevage_id' => 227,
                'espece_id' => 5,
                'created_at' => '2020-02-20 15:16:16',
                'updated_at' => '2020-02-20 15:16:16',
            ),
            177 => 
            array (
                'id' => 348,
                'user_id' => 301,
                'elevage_id' => 228,
                'espece_id' => 2,
                'created_at' => '2020-02-25 09:00:37',
                'updated_at' => '2020-02-25 09:00:37',
            ),
            178 => 
            array (
                'id' => 349,
                'user_id' => 300,
                'elevage_id' => 229,
                'espece_id' => 3,
                'created_at' => '2020-02-28 15:38:43',
                'updated_at' => '2020-02-28 15:38:43',
            ),
            179 => 
            array (
                'id' => 352,
                'user_id' => 306,
                'elevage_id' => 231,
                'espece_id' => 5,
                'created_at' => '2020-04-01 07:08:53',
                'updated_at' => '2020-04-01 07:08:53',
            ),
            180 => 
            array (
                'id' => 353,
                'user_id' => 306,
                'elevage_id' => 231,
                'espece_id' => 2,
                'created_at' => '2020-04-01 07:09:14',
                'updated_at' => '2020-04-01 07:09:14',
            ),
            181 => 
            array (
                'id' => 354,
                'user_id' => 305,
                'elevage_id' => 232,
                'espece_id' => 2,
                'created_at' => '2020-04-01 07:14:42',
                'updated_at' => '2020-04-01 07:14:42',
            ),
            182 => 
            array (
                'id' => 355,
                'user_id' => 210,
                'elevage_id' => 165,
                'espece_id' => 4,
                'created_at' => '2020-04-02 07:37:11',
                'updated_at' => '2020-04-02 07:37:11',
            ),
            183 => 
            array (
                'id' => 356,
                'user_id' => 303,
                'elevage_id' => 233,
                'espece_id' => 1,
                'created_at' => '2020-04-02 19:03:09',
                'updated_at' => '2020-04-02 19:03:09',
            ),
            184 => 
            array (
                'id' => 357,
                'user_id' => 139,
                'elevage_id' => 97,
                'espece_id' => 2,
                'created_at' => '2020-04-11 17:55:15',
                'updated_at' => '2020-04-11 17:55:15',
            ),
            185 => 
            array (
                'id' => 358,
                'user_id' => 318,
                'elevage_id' => 234,
                'espece_id' => 2,
                'created_at' => '2020-04-15 06:31:17',
                'updated_at' => '2020-04-15 06:31:17',
            ),
            186 => 
            array (
                'id' => 359,
                'user_id' => 314,
                'elevage_id' => 235,
                'espece_id' => 2,
                'created_at' => '2020-04-15 06:33:45',
                'updated_at' => '2020-04-15 06:33:45',
            ),
            187 => 
            array (
                'id' => 360,
                'user_id' => 312,
                'elevage_id' => 236,
                'espece_id' => 1,
                'created_at' => '2020-04-15 10:31:28',
                'updated_at' => '2020-04-15 10:31:28',
            ),
            188 => 
            array (
                'id' => 361,
                'user_id' => 309,
                'elevage_id' => 237,
                'espece_id' => 4,
                'created_at' => '2020-04-15 12:06:24',
                'updated_at' => '2020-04-15 12:06:24',
            ),
            189 => 
            array (
                'id' => 366,
                'user_id' => 315,
                'elevage_id' => 242,
                'espece_id' => 2,
                'created_at' => '2020-04-15 17:23:00',
                'updated_at' => '2020-04-15 17:23:00',
            ),
            190 => 
            array (
                'id' => 367,
                'user_id' => 184,
                'elevage_id' => 243,
                'espece_id' => 2,
                'created_at' => '2020-04-17 14:39:49',
                'updated_at' => '2020-04-17 14:39:49',
            ),
            191 => 
            array (
                'id' => 368,
                'user_id' => 171,
                'elevage_id' => 244,
                'espece_id' => 3,
                'created_at' => '2020-04-22 09:27:16',
                'updated_at' => '2020-04-22 09:27:16',
            ),
            192 => 
            array (
                'id' => 369,
                'user_id' => 336,
                'elevage_id' => 245,
                'espece_id' => 2,
                'created_at' => '2020-05-12 14:48:09',
                'updated_at' => '2020-05-12 14:48:09',
            ),
            193 => 
            array (
                'id' => 370,
                'user_id' => 331,
                'elevage_id' => 246,
                'espece_id' => 2,
                'created_at' => '2020-05-12 14:48:15',
                'updated_at' => '2020-05-12 14:48:15',
            ),
            194 => 
            array (
                'id' => 371,
                'user_id' => 334,
                'elevage_id' => 247,
                'espece_id' => 2,
                'created_at' => '2020-05-12 14:54:41',
                'updated_at' => '2020-05-12 14:54:41',
            ),
            195 => 
            array (
                'id' => 372,
                'user_id' => 338,
                'elevage_id' => 248,
                'espece_id' => 1,
                'created_at' => '2020-05-12 14:57:04',
                'updated_at' => '2020-05-12 14:57:04',
            ),
            196 => 
            array (
                'id' => 373,
                'user_id' => 339,
                'elevage_id' => 249,
                'espece_id' => 1,
                'created_at' => '2020-05-12 14:59:24',
                'updated_at' => '2020-05-12 14:59:24',
            ),
            197 => 
            array (
                'id' => 375,
                'user_id' => 324,
                'elevage_id' => 251,
                'espece_id' => 2,
                'created_at' => '2020-05-12 21:28:22',
                'updated_at' => '2020-05-12 21:28:22',
            ),
            198 => 
            array (
                'id' => 378,
                'user_id' => 348,
                'elevage_id' => 253,
                'espece_id' => 2,
                'created_at' => '2020-05-13 06:34:03',
                'updated_at' => '2020-05-13 06:34:03',
            ),
            199 => 
            array (
                'id' => 379,
                'user_id' => 336,
                'elevage_id' => 254,
                'espece_id' => 2,
                'created_at' => '2020-05-13 15:40:23',
                'updated_at' => '2020-05-13 15:40:23',
            ),
            200 => 
            array (
                'id' => 380,
                'user_id' => 97,
                'elevage_id' => 255,
                'espece_id' => 1,
                'created_at' => '2020-05-14 07:10:23',
                'updated_at' => '2020-05-14 07:10:23',
            ),
            201 => 
            array (
                'id' => 381,
                'user_id' => 97,
                'elevage_id' => 255,
                'espece_id' => 3,
                'created_at' => '2020-05-14 09:40:19',
                'updated_at' => '2020-05-14 09:40:19',
            ),
            202 => 
            array (
                'id' => 382,
                'user_id' => 347,
                'elevage_id' => 256,
                'espece_id' => 2,
                'created_at' => '2020-05-14 15:09:49',
                'updated_at' => '2020-05-14 15:09:49',
            ),
            203 => 
            array (
                'id' => 383,
                'user_id' => 359,
                'elevage_id' => 257,
                'espece_id' => 2,
                'created_at' => '2020-05-15 06:30:11',
                'updated_at' => '2020-05-15 06:30:11',
            ),
            204 => 
            array (
                'id' => 384,
                'user_id' => 357,
                'elevage_id' => 258,
                'espece_id' => 2,
                'created_at' => '2020-05-15 06:35:40',
                'updated_at' => '2020-05-15 06:35:40',
            ),
            205 => 
            array (
                'id' => 385,
                'user_id' => 362,
                'elevage_id' => 259,
                'espece_id' => 1,
                'created_at' => '2020-05-15 07:08:10',
                'updated_at' => '2020-05-15 07:08:10',
            ),
            206 => 
            array (
                'id' => 386,
                'user_id' => 352,
                'elevage_id' => 260,
                'espece_id' => 2,
                'created_at' => '2020-05-15 07:50:27',
                'updated_at' => '2020-05-15 07:50:27',
            ),
            207 => 
            array (
                'id' => 388,
                'user_id' => 351,
                'elevage_id' => 262,
                'espece_id' => 1,
                'created_at' => '2020-05-15 08:12:06',
                'updated_at' => '2020-05-15 08:12:06',
            ),
            208 => 
            array (
                'id' => 389,
                'user_id' => 351,
                'elevage_id' => 262,
                'espece_id' => 4,
                'created_at' => '2020-05-15 08:19:52',
                'updated_at' => '2020-05-15 08:19:52',
            ),
            209 => 
            array (
                'id' => 390,
                'user_id' => 356,
                'elevage_id' => 263,
                'espece_id' => 2,
                'created_at' => '2020-05-15 11:19:38',
                'updated_at' => '2020-05-15 11:19:38',
            ),
            210 => 
            array (
                'id' => 391,
                'user_id' => 371,
                'elevage_id' => 264,
                'espece_id' => 1,
                'created_at' => '2020-05-15 18:52:32',
                'updated_at' => '2020-05-15 18:52:32',
            ),
            211 => 
            array (
                'id' => 392,
                'user_id' => 368,
                'elevage_id' => 265,
                'espece_id' => 2,
                'created_at' => '2020-05-17 19:10:22',
                'updated_at' => '2020-05-17 19:10:22',
            ),
            212 => 
            array (
                'id' => 394,
                'user_id' => 326,
                'elevage_id' => 267,
                'espece_id' => 2,
                'created_at' => '2020-05-18 08:52:44',
                'updated_at' => '2020-05-18 08:52:44',
            ),
            213 => 
            array (
                'id' => 395,
                'user_id' => 341,
                'elevage_id' => 268,
                'espece_id' => 2,
                'created_at' => '2020-05-18 21:55:35',
                'updated_at' => '2020-05-18 21:55:35',
            ),
            214 => 
            array (
                'id' => 396,
                'user_id' => 346,
                'elevage_id' => 269,
                'espece_id' => 2,
                'created_at' => '2020-05-20 03:04:48',
                'updated_at' => '2020-05-20 03:04:48',
            ),
            215 => 
            array (
                'id' => 397,
                'user_id' => 346,
                'elevage_id' => 269,
                'espece_id' => 1,
                'created_at' => '2020-05-20 03:08:15',
                'updated_at' => '2020-05-20 03:08:15',
            ),
            216 => 
            array (
                'id' => 398,
                'user_id' => 363,
                'elevage_id' => 270,
                'espece_id' => 2,
                'created_at' => '2020-05-20 05:51:49',
                'updated_at' => '2020-05-20 05:51:49',
            ),
            217 => 
            array (
                'id' => 399,
                'user_id' => 362,
                'elevage_id' => 259,
                'espece_id' => 2,
                'created_at' => '2020-05-20 06:25:30',
                'updated_at' => '2020-05-20 06:25:30',
            ),
            218 => 
            array (
                'id' => 400,
                'user_id' => 177,
                'elevage_id' => 122,
                'espece_id' => 4,
                'created_at' => '2020-05-20 10:12:27',
                'updated_at' => '2020-05-20 10:12:27',
            ),
            219 => 
            array (
                'id' => 401,
                'user_id' => 346,
                'elevage_id' => 271,
                'espece_id' => 2,
                'created_at' => '2020-05-25 18:53:08',
                'updated_at' => '2020-05-25 18:53:08',
            ),
            220 => 
            array (
                'id' => 402,
                'user_id' => 379,
                'elevage_id' => 272,
                'espece_id' => 2,
                'created_at' => '2020-05-26 13:57:32',
                'updated_at' => '2020-05-26 13:57:32',
            ),
            221 => 
            array (
                'id' => 403,
                'user_id' => 376,
                'elevage_id' => 273,
                'espece_id' => 1,
                'created_at' => '2020-05-26 14:37:54',
                'updated_at' => '2020-05-26 14:37:54',
            ),
            222 => 
            array (
                'id' => 404,
                'user_id' => 375,
                'elevage_id' => 274,
                'espece_id' => 2,
                'created_at' => '2020-05-26 15:11:34',
                'updated_at' => '2020-05-26 15:11:34',
            ),
            223 => 
            array (
                'id' => 405,
                'user_id' => 353,
                'elevage_id' => 275,
                'espece_id' => 2,
                'created_at' => '2020-06-03 05:18:22',
                'updated_at' => '2020-06-03 05:18:22',
            ),
            224 => 
            array (
                'id' => 408,
                'user_id' => 113,
                'elevage_id' => 277,
                'espece_id' => 2,
                'created_at' => '2020-06-10 14:17:51',
                'updated_at' => '2020-06-10 14:17:51',
            ),
            225 => 
            array (
                'id' => 409,
                'user_id' => 217,
                'elevage_id' => 278,
                'espece_id' => 4,
                'created_at' => '2020-06-16 12:19:47',
                'updated_at' => '2020-06-16 12:19:47',
            ),
            226 => 
            array (
                'id' => 410,
                'user_id' => 113,
                'elevage_id' => 279,
                'espece_id' => 2,
                'created_at' => '2020-06-19 09:45:39',
                'updated_at' => '2020-06-19 09:45:39',
            ),
            227 => 
            array (
                'id' => 411,
                'user_id' => 364,
                'elevage_id' => 280,
                'espece_id' => 2,
                'created_at' => '2020-06-21 20:26:56',
                'updated_at' => '2020-06-21 20:26:56',
            ),
            228 => 
            array (
                'id' => 412,
                'user_id' => 113,
                'elevage_id' => 281,
                'espece_id' => 2,
                'created_at' => '2020-06-22 07:28:31',
                'updated_at' => '2020-06-22 07:28:31',
            ),
            229 => 
            array (
                'id' => 413,
                'user_id' => 347,
                'elevage_id' => 256,
                'espece_id' => 2,
                'created_at' => '2020-06-23 07:25:27',
                'updated_at' => '2020-06-23 07:25:27',
            ),
            230 => 
            array (
                'id' => 415,
                'user_id' => 384,
                'elevage_id' => 283,
                'espece_id' => 1,
                'created_at' => '2020-07-09 13:40:37',
                'updated_at' => '2020-07-09 13:40:37',
            ),
            231 => 
            array (
                'id' => 416,
                'user_id' => 346,
                'elevage_id' => 284,
                'espece_id' => 2,
                'created_at' => '2020-07-28 12:46:04',
                'updated_at' => '2020-07-28 12:46:04',
            ),
            232 => 
            array (
                'id' => 417,
                'user_id' => 345,
                'elevage_id' => 285,
                'espece_id' => 1,
                'created_at' => '2020-08-01 15:15:51',
                'updated_at' => '2020-08-01 15:15:51',
            ),
            233 => 
            array (
                'id' => 418,
                'user_id' => 391,
                'elevage_id' => 286,
                'espece_id' => 1,
                'created_at' => '2020-08-25 08:36:20',
                'updated_at' => '2020-08-25 08:36:20',
            ),
            234 => 
            array (
                'id' => 419,
                'user_id' => 369,
                'elevage_id' => 287,
                'espece_id' => 1,
                'created_at' => '2020-08-31 13:59:36',
                'updated_at' => '2020-08-31 13:59:36',
            ),
            235 => 
            array (
                'id' => 420,
                'user_id' => 107,
                'elevage_id' => 93,
                'espece_id' => 4,
                'created_at' => '2020-09-11 09:40:50',
                'updated_at' => '2020-09-11 09:40:50',
            ),
            236 => 
            array (
                'id' => 421,
                'user_id' => 305,
                'elevage_id' => 288,
                'espece_id' => 5,
                'created_at' => '2020-09-12 10:52:54',
                'updated_at' => '2020-09-12 10:52:54',
            ),
            237 => 
            array (
                'id' => 422,
                'user_id' => 396,
                'elevage_id' => 289,
                'espece_id' => 2,
                'created_at' => '2020-09-22 14:14:09',
                'updated_at' => '2020-09-22 14:14:09',
            ),
            238 => 
            array (
                'id' => 424,
                'user_id' => 366,
                'elevage_id' => 290,
                'espece_id' => 3,
                'created_at' => '2020-10-09 06:57:44',
                'updated_at' => '2020-10-09 06:57:44',
            ),
            239 => 
            array (
                'id' => 425,
                'user_id' => 401,
                'elevage_id' => 291,
                'espece_id' => 3,
                'created_at' => '2020-10-16 09:33:26',
                'updated_at' => '2020-10-16 09:33:26',
            ),
            240 => 
            array (
                'id' => 426,
                'user_id' => 200,
                'elevage_id' => 292,
                'espece_id' => 4,
                'created_at' => '2020-11-02 09:29:09',
                'updated_at' => '2020-11-02 09:29:09',
            ),
            241 => 
            array (
                'id' => 427,
                'user_id' => 403,
                'elevage_id' => 293,
                'espece_id' => 2,
                'created_at' => '2020-11-05 08:20:56',
                'updated_at' => '2020-11-05 08:20:56',
            ),
            242 => 
            array (
                'id' => 428,
                'user_id' => 384,
                'elevage_id' => 294,
                'espece_id' => 1,
                'created_at' => '2020-11-05 16:18:04',
                'updated_at' => '2020-11-05 16:18:04',
            ),
            243 => 
            array (
                'id' => 429,
                'user_id' => 404,
                'elevage_id' => 295,
                'espece_id' => 5,
                'created_at' => '2020-11-05 20:20:58',
                'updated_at' => '2020-11-05 20:20:58',
            ),
            244 => 
            array (
                'id' => 430,
                'user_id' => 402,
                'elevage_id' => 296,
                'espece_id' => 2,
                'created_at' => '2020-11-06 12:29:24',
                'updated_at' => '2020-11-06 12:29:24',
            ),
            245 => 
            array (
                'id' => 431,
                'user_id' => 405,
                'elevage_id' => 297,
                'espece_id' => 3,
                'created_at' => '2020-11-11 21:45:04',
                'updated_at' => '2020-11-11 21:45:04',
            ),
            246 => 
            array (
                'id' => 432,
                'user_id' => 92,
                'elevage_id' => 63,
                'espece_id' => 3,
                'created_at' => '2020-11-18 10:11:15',
                'updated_at' => '2020-11-18 10:11:15',
            ),
            247 => 
            array (
                'id' => 433,
                'user_id' => 419,
                'elevage_id' => 298,
                'espece_id' => 1,
                'created_at' => '2020-11-20 19:05:10',
                'updated_at' => '2020-11-20 19:05:10',
            ),
            248 => 
            array (
                'id' => 434,
                'user_id' => 139,
                'elevage_id' => 97,
                'espece_id' => 2,
                'created_at' => '2020-11-24 17:16:51',
                'updated_at' => '2020-11-24 17:16:51',
            ),
            249 => 
            array (
                'id' => 435,
                'user_id' => 139,
                'elevage_id' => 97,
                'espece_id' => 2,
                'created_at' => '2020-11-24 18:40:00',
                'updated_at' => '2020-11-24 18:40:00',
            ),
            250 => 
            array (
                'id' => 436,
                'user_id' => 366,
                'elevage_id' => 299,
                'espece_id' => 2,
                'created_at' => '2020-11-25 13:32:03',
                'updated_at' => '2020-11-25 13:32:03',
            ),
            251 => 
            array (
                'id' => 437,
                'user_id' => 418,
                'elevage_id' => 300,
                'espece_id' => 3,
                'created_at' => '2020-11-26 10:11:27',
                'updated_at' => '2020-11-26 10:11:27',
            ),
            252 => 
            array (
                'id' => 438,
                'user_id' => 412,
                'elevage_id' => 301,
                'espece_id' => 2,
                'created_at' => '2020-12-01 12:47:01',
                'updated_at' => '2020-12-01 12:47:01',
            ),
            253 => 
            array (
                'id' => 439,
                'user_id' => 408,
                'elevage_id' => 302,
                'espece_id' => 2,
                'created_at' => '2020-12-11 21:38:57',
                'updated_at' => '2020-12-11 21:38:57',
            ),
            254 => 
            array (
                'id' => 440,
                'user_id' => 300,
                'elevage_id' => 229,
                'espece_id' => 3,
                'created_at' => '2021-01-04 12:22:26',
                'updated_at' => '2021-01-04 12:22:26',
            ),
            255 => 
            array (
                'id' => 441,
                'user_id' => 161,
                'elevage_id' => 303,
                'espece_id' => 2,
                'created_at' => '2021-02-09 15:23:04',
                'updated_at' => '2021-02-09 15:23:04',
            ),
            256 => 
            array (
                'id' => 442,
                'user_id' => 425,
                'elevage_id' => 304,
                'espece_id' => 3,
                'created_at' => '2021-02-15 08:38:22',
                'updated_at' => '2021-02-15 08:38:22',
            ),
            257 => 
            array (
                'id' => 443,
                'user_id' => 425,
                'elevage_id' => 304,
                'espece_id' => 3,
                'created_at' => '2021-02-15 08:41:39',
                'updated_at' => '2021-02-15 08:41:39',
            ),
            258 => 
            array (
                'id' => 444,
                'user_id' => 426,
                'elevage_id' => 305,
                'espece_id' => 1,
                'created_at' => '2021-02-15 09:25:37',
                'updated_at' => '2021-02-15 09:25:37',
            ),
            259 => 
            array (
                'id' => 445,
                'user_id' => 429,
                'elevage_id' => 306,
                'espece_id' => 2,
                'created_at' => '2021-02-15 09:41:51',
                'updated_at' => '2021-02-15 09:41:51',
            ),
            260 => 
            array (
                'id' => 446,
                'user_id' => 431,
                'elevage_id' => 307,
                'espece_id' => 2,
                'created_at' => '2021-02-15 15:00:14',
                'updated_at' => '2021-02-15 15:00:14',
            ),
            261 => 
            array (
                'id' => 447,
                'user_id' => 431,
                'elevage_id' => 307,
                'espece_id' => 1,
                'created_at' => '2021-02-15 15:01:45',
                'updated_at' => '2021-02-15 15:01:45',
            ),
            262 => 
            array (
                'id' => 449,
                'user_id' => 433,
                'elevage_id' => 309,
                'espece_id' => 2,
                'created_at' => '2021-02-15 21:00:03',
                'updated_at' => '2021-02-15 21:00:03',
            ),
            263 => 
            array (
                'id' => 450,
                'user_id' => 431,
                'elevage_id' => 307,
                'espece_id' => 2,
                'created_at' => '2021-02-19 13:56:55',
                'updated_at' => '2021-02-19 13:56:55',
            ),
            264 => 
            array (
                'id' => 451,
                'user_id' => 427,
                'elevage_id' => 128,
                'espece_id' => 2,
                'created_at' => '2021-02-21 16:09:40',
                'updated_at' => '2021-02-21 16:09:40',
            ),
            265 => 
            array (
                'id' => 452,
                'user_id' => 441,
                'elevage_id' => 310,
                'espece_id' => 4,
                'created_at' => '2021-03-16 10:34:29',
                'updated_at' => '2021-03-16 10:34:29',
            ),
            266 => 
            array (
                'id' => 453,
                'user_id' => 202,
                'elevage_id' => 311,
                'espece_id' => 5,
                'created_at' => '2021-03-16 19:13:01',
                'updated_at' => '2021-03-16 19:13:01',
            ),
            267 => 
            array (
                'id' => 454,
                'user_id' => 215,
                'elevage_id' => 312,
                'espece_id' => 5,
                'created_at' => '2021-03-18 07:58:45',
                'updated_at' => '2021-03-18 07:58:45',
            ),
            268 => 
            array (
                'id' => 455,
                'user_id' => 450,
                'elevage_id' => 313,
                'espece_id' => 4,
                'created_at' => '2021-03-19 11:55:53',
                'updated_at' => '2021-03-19 11:55:53',
            ),
            269 => 
            array (
                'id' => 456,
                'user_id' => 444,
                'elevage_id' => 314,
                'espece_id' => 5,
                'created_at' => '2021-03-21 10:03:22',
                'updated_at' => '2021-03-21 10:03:22',
            ),
            270 => 
            array (
                'id' => 459,
                'user_id' => 440,
                'elevage_id' => 316,
                'espece_id' => 5,
                'created_at' => '2021-03-24 08:37:25',
                'updated_at' => '2021-03-24 08:37:25',
            ),
            271 => 
            array (
                'id' => 460,
                'user_id' => 81,
                'elevage_id' => 317,
                'espece_id' => 4,
                'created_at' => '2021-04-01 11:07:29',
                'updated_at' => '2021-04-01 11:07:29',
            ),
            272 => 
            array (
                'id' => 461,
                'user_id' => 451,
                'elevage_id' => 318,
                'espece_id' => 3,
                'created_at' => '2021-04-07 08:33:37',
                'updated_at' => '2021-04-07 08:33:37',
            ),
            273 => 
            array (
                'id' => 462,
                'user_id' => 458,
                'elevage_id' => 319,
                'espece_id' => 4,
                'created_at' => '2021-05-03 06:44:16',
                'updated_at' => '2021-05-03 06:44:16',
            ),
            274 => 
            array (
                'id' => 463,
                'user_id' => 211,
                'elevage_id' => 320,
                'espece_id' => 3,
                'created_at' => '2021-05-06 14:07:56',
                'updated_at' => '2021-05-06 14:07:56',
            ),
            275 => 
            array (
                'id' => 464,
                'user_id' => 455,
                'elevage_id' => 321,
                'espece_id' => 2,
                'created_at' => '2021-05-16 14:53:08',
                'updated_at' => '2021-05-16 14:53:08',
            ),
            276 => 
            array (
                'id' => 467,
                'user_id' => 460,
                'elevage_id' => 323,
                'espece_id' => 1,
                'created_at' => '2021-05-30 17:58:50',
                'updated_at' => '2021-05-30 17:58:50',
            ),
            277 => 
            array (
                'id' => 468,
                'user_id' => 464,
                'elevage_id' => 287,
                'espece_id' => 2,
                'created_at' => '2021-05-31 16:23:13',
                'updated_at' => '2021-05-31 16:23:13',
            ),
            278 => 
            array (
                'id' => 469,
                'user_id' => 202,
                'elevage_id' => 324,
                'espece_id' => 5,
                'created_at' => '2021-06-02 06:18:37',
                'updated_at' => '2021-06-02 06:18:37',
            ),
            279 => 
            array (
                'id' => 470,
                'user_id' => 125,
                'elevage_id' => 88,
                'espece_id' => 4,
                'created_at' => '2021-06-07 11:37:23',
                'updated_at' => '2021-06-07 11:37:23',
            ),
            280 => 
            array (
                'id' => 471,
                'user_id' => 4,
                'elevage_id' => 43,
                'espece_id' => 4,
                'created_at' => '2021-06-14 12:01:05',
                'updated_at' => '2021-06-14 12:01:05',
            ),
            281 => 
            array (
                'id' => 472,
                'user_id' => 4,
                'elevage_id' => 43,
                'espece_id' => 4,
                'created_at' => '2021-06-16 08:43:09',
                'updated_at' => '2021-06-16 08:43:09',
            ),
            282 => 
            array (
                'id' => 473,
                'user_id' => 4,
                'elevage_id' => 43,
                'espece_id' => 3,
                'created_at' => '2021-06-16 09:46:33',
                'updated_at' => '2021-06-16 09:46:33',
            ),
            283 => 
            array (
                'id' => 474,
                'user_id' => 4,
                'elevage_id' => 43,
                'espece_id' => 3,
                'created_at' => '2021-06-16 09:48:45',
                'updated_at' => '2021-06-16 09:48:45',
            ),
            284 => 
            array (
                'id' => 475,
                'user_id' => 258,
                'elevage_id' => 325,
                'espece_id' => 1,
                'created_at' => '2021-06-17 10:32:08',
                'updated_at' => '2021-06-17 10:32:08',
            ),
            285 => 
            array (
                'id' => 476,
                'user_id' => 469,
                'elevage_id' => 326,
                'espece_id' => 1,
                'created_at' => '2021-06-18 08:39:39',
                'updated_at' => '2021-06-18 08:39:39',
            ),
            286 => 
            array (
                'id' => 477,
                'user_id' => 285,
                'elevage_id' => 327,
                'espece_id' => 3,
                'created_at' => '2021-06-20 12:37:38',
                'updated_at' => '2021-06-20 12:37:38',
            ),
            287 => 
            array (
                'id' => 478,
                'user_id' => 471,
                'elevage_id' => 328,
                'espece_id' => 3,
                'created_at' => '2021-06-29 12:18:53',
                'updated_at' => '2021-06-29 12:18:53',
            ),
            288 => 
            array (
                'id' => 479,
                'user_id' => 475,
                'elevage_id' => 329,
                'espece_id' => 3,
                'created_at' => '2021-08-16 13:37:20',
                'updated_at' => '2021-08-16 13:37:20',
            ),
            289 => 
            array (
                'id' => 480,
                'user_id' => 474,
                'elevage_id' => 330,
                'espece_id' => 3,
                'created_at' => '2021-08-24 16:16:01',
                'updated_at' => '2021-08-24 16:16:01',
            ),
            290 => 
            array (
                'id' => 481,
                'user_id' => 309,
                'elevage_id' => 237,
                'espece_id' => 4,
                'created_at' => '2021-09-16 07:04:56',
                'updated_at' => '2021-09-16 07:04:56',
            ),
            291 => 
            array (
                'id' => 482,
                'user_id' => 476,
                'elevage_id' => 331,
                'espece_id' => 2,
                'created_at' => '2021-09-18 07:26:54',
                'updated_at' => '2021-09-18 07:26:54',
            ),
            292 => 
            array (
                'id' => 483,
                'user_id' => 113,
                'elevage_id' => 332,
                'espece_id' => 2,
                'created_at' => '2021-10-25 15:11:29',
                'updated_at' => '2021-10-25 15:11:29',
            ),
            293 => 
            array (
                'id' => 484,
                'user_id' => 469,
                'elevage_id' => 326,
                'espece_id' => 1,
                'created_at' => '2021-10-26 14:03:09',
                'updated_at' => '2021-10-26 14:03:09',
            ),
            294 => 
            array (
                'id' => 485,
                'user_id' => 113,
                'elevage_id' => 333,
                'espece_id' => 1,
                'created_at' => '2021-11-10 15:05:53',
                'updated_at' => '2021-11-10 15:05:53',
            ),
            295 => 
            array (
                'id' => 486,
                'user_id' => 425,
                'elevage_id' => 304,
                'espece_id' => 3,
                'created_at' => '2021-11-25 15:36:44',
                'updated_at' => '2021-11-25 15:36:44',
            ),
            296 => 
            array (
                'id' => 490,
                'user_id' => 129,
                'elevage_id' => 335,
                'espece_id' => 4,
                'created_at' => '2021-12-01 14:02:16',
                'updated_at' => '2021-12-01 14:02:16',
            ),
            297 => 
            array (
                'id' => 491,
                'user_id' => 129,
                'elevage_id' => 335,
                'espece_id' => 2,
                'created_at' => '2021-12-01 14:27:19',
                'updated_at' => '2021-12-01 14:27:19',
            ),
            298 => 
            array (
                'id' => 492,
                'user_id' => 479,
                'elevage_id' => 336,
                'espece_id' => 2,
                'created_at' => '2021-12-01 14:31:21',
                'updated_at' => '2021-12-01 14:31:21',
            ),
            299 => 
            array (
                'id' => 493,
                'user_id' => 485,
                'elevage_id' => 337,
                'espece_id' => 2,
                'created_at' => '2021-12-02 18:05:24',
                'updated_at' => '2021-12-02 18:05:24',
            ),
            300 => 
            array (
                'id' => 496,
                'user_id' => 483,
                'elevage_id' => 339,
                'espece_id' => 2,
                'created_at' => '2021-12-06 22:20:21',
                'updated_at' => '2021-12-06 22:20:21',
            ),
            301 => 
            array (
                'id' => 497,
                'user_id' => 484,
                'elevage_id' => 340,
                'espece_id' => 2,
                'created_at' => '2021-12-10 13:52:47',
                'updated_at' => '2021-12-10 13:52:47',
            ),
            302 => 
            array (
                'id' => 498,
                'user_id' => 486,
                'elevage_id' => 341,
                'espece_id' => 2,
                'created_at' => '2021-12-20 17:59:11',
                'updated_at' => '2021-12-20 17:59:11',
            ),
            303 => 
            array (
                'id' => 499,
                'user_id' => 4,
                'elevage_id' => 342,
                'espece_id' => 1,
                'created_at' => '2022-01-04 09:55:46',
                'updated_at' => '2022-01-04 09:55:46',
            ),
            304 => 
            array (
                'id' => 500,
                'user_id' => 492,
                'elevage_id' => 341,
                'espece_id' => 2,
                'created_at' => '2022-01-10 15:50:49',
                'updated_at' => '2022-01-10 15:50:49',
            ),
            305 => 
            array (
                'id' => 501,
                'user_id' => 491,
                'elevage_id' => 343,
                'espece_id' => 3,
                'created_at' => '2022-01-11 13:58:12',
                'updated_at' => '2022-01-11 13:58:12',
            ),
            306 => 
            array (
                'id' => 502,
                'user_id' => 183,
                'elevage_id' => 344,
                'espece_id' => 1,
                'created_at' => '2022-01-21 10:59:38',
                'updated_at' => '2022-01-21 10:59:38',
            ),
            307 => 
            array (
                'id' => 503,
                'user_id' => 454,
                'elevage_id' => 345,
                'espece_id' => 2,
                'created_at' => '2022-01-24 20:52:54',
                'updated_at' => '2022-01-24 20:52:54',
            ),
            308 => 
            array (
                'id' => 504,
                'user_id' => 497,
                'elevage_id' => 346,
                'espece_id' => 2,
                'created_at' => '2022-01-26 17:08:42',
                'updated_at' => '2022-01-26 17:08:42',
            ),
            309 => 
            array (
                'id' => 505,
                'user_id' => 491,
                'elevage_id' => 343,
                'espece_id' => 3,
                'created_at' => '2022-02-08 09:24:28',
                'updated_at' => '2022-02-08 09:24:28',
            ),
            310 => 
            array (
                'id' => 508,
                'user_id' => 497,
                'elevage_id' => 346,
                'espece_id' => 2,
                'created_at' => '2022-02-09 14:17:16',
                'updated_at' => '2022-02-09 14:17:16',
            ),
            311 => 
            array (
                'id' => 513,
                'user_id' => 503,
                'elevage_id' => 351,
                'espece_id' => 2,
                'created_at' => '2022-03-02 14:05:40',
                'updated_at' => '2022-03-02 14:05:40',
            ),
            312 => 
            array (
                'id' => 514,
                'user_id' => 113,
                'elevage_id' => 352,
                'espece_id' => 2,
                'created_at' => '2022-03-02 16:23:04',
                'updated_at' => '2022-03-02 16:23:04',
            ),
            313 => 
            array (
                'id' => 515,
                'user_id' => 497,
                'elevage_id' => 346,
                'espece_id' => 2,
                'created_at' => '2022-03-03 12:19:21',
                'updated_at' => '2022-03-03 12:19:21',
            ),
            314 => 
            array (
                'id' => 516,
                'user_id' => 500,
                'elevage_id' => 353,
                'espece_id' => 2,
                'created_at' => '2022-03-03 12:31:01',
                'updated_at' => '2022-03-03 12:31:01',
            ),
            315 => 
            array (
                'id' => 518,
                'user_id' => 504,
                'elevage_id' => 355,
                'espece_id' => 1,
                'created_at' => '2022-03-08 07:29:59',
                'updated_at' => '2022-03-08 07:29:59',
            ),
            316 => 
            array (
                'id' => 519,
                'user_id' => 498,
                'elevage_id' => 356,
                'espece_id' => 1,
                'created_at' => '2022-03-09 09:09:16',
                'updated_at' => '2022-03-09 09:09:16',
            ),
            317 => 
            array (
                'id' => 520,
                'user_id' => 508,
                'elevage_id' => 357,
                'espece_id' => 2,
                'created_at' => '2022-03-09 15:44:27',
                'updated_at' => '2022-03-09 15:44:27',
            ),
            318 => 
            array (
                'id' => 521,
                'user_id' => 183,
                'elevage_id' => 358,
                'espece_id' => 2,
                'created_at' => '2022-03-11 14:39:50',
                'updated_at' => '2022-03-11 14:39:50',
            ),
            319 => 
            array (
                'id' => 525,
                'user_id' => 183,
                'elevage_id' => 361,
                'espece_id' => 1,
                'created_at' => '2022-03-11 14:52:34',
                'updated_at' => '2022-03-11 14:52:34',
            ),
            320 => 
            array (
                'id' => 526,
                'user_id' => 183,
                'elevage_id' => 362,
                'espece_id' => 2,
                'created_at' => '2022-03-11 14:54:28',
                'updated_at' => '2022-03-11 14:54:28',
            ),
            321 => 
            array (
                'id' => 527,
                'user_id' => 183,
                'elevage_id' => 363,
                'espece_id' => 4,
                'created_at' => '2022-03-11 14:57:23',
                'updated_at' => '2022-03-11 14:57:23',
            ),
            322 => 
            array (
                'id' => 528,
                'user_id' => 183,
                'elevage_id' => 364,
                'espece_id' => 4,
                'created_at' => '2022-03-11 14:58:49',
                'updated_at' => '2022-03-11 14:58:49',
            ),
            323 => 
            array (
                'id' => 529,
                'user_id' => 183,
                'elevage_id' => 365,
                'espece_id' => 2,
                'created_at' => '2022-03-11 14:59:35',
                'updated_at' => '2022-03-11 14:59:35',
            ),
            324 => 
            array (
                'id' => 531,
                'user_id' => 498,
                'elevage_id' => 366,
                'espece_id' => 2,
                'created_at' => '2022-03-14 08:59:13',
                'updated_at' => '2022-03-14 08:59:13',
            ),
            325 => 
            array (
                'id' => 532,
                'user_id' => 113,
                'elevage_id' => 367,
                'espece_id' => 2,
                'created_at' => '2022-03-16 09:00:28',
                'updated_at' => '2022-03-16 09:00:28',
            ),
            326 => 
            array (
                'id' => 533,
                'user_id' => 107,
                'elevage_id' => 93,
                'espece_id' => 2,
                'created_at' => '2022-03-16 09:21:20',
                'updated_at' => '2022-03-16 09:21:20',
            ),
            327 => 
            array (
                'id' => 534,
                'user_id' => 107,
                'elevage_id' => 93,
                'espece_id' => 3,
                'created_at' => '2022-03-16 09:47:40',
                'updated_at' => '2022-03-16 09:47:40',
            ),
            328 => 
            array (
                'id' => 535,
                'user_id' => 107,
                'elevage_id' => 93,
                'espece_id' => 5,
                'created_at' => '2022-03-16 10:09:35',
                'updated_at' => '2022-03-16 10:09:35',
            ),
            329 => 
            array (
                'id' => 536,
                'user_id' => 509,
                'elevage_id' => 368,
                'espece_id' => 4,
                'created_at' => '2022-03-17 13:09:58',
                'updated_at' => '2022-03-17 13:09:58',
            ),
            330 => 
            array (
                'id' => 537,
                'user_id' => 509,
                'elevage_id' => 368,
                'espece_id' => 4,
                'created_at' => '2022-03-17 18:03:35',
                'updated_at' => '2022-03-17 18:03:35',
            ),
            331 => 
            array (
                'id' => 538,
                'user_id' => 509,
                'elevage_id' => 368,
                'espece_id' => 4,
                'created_at' => '2022-03-17 18:04:28',
                'updated_at' => '2022-03-17 18:04:28',
            ),
            332 => 
            array (
                'id' => 539,
                'user_id' => 113,
                'elevage_id' => 369,
                'espece_id' => 2,
                'created_at' => '2022-03-17 18:11:46',
                'updated_at' => '2022-03-17 18:11:46',
            ),
            333 => 
            array (
                'id' => 540,
                'user_id' => 113,
                'elevage_id' => 353,
                'espece_id' => 2,
                'created_at' => '2022-03-17 18:33:21',
                'updated_at' => '2022-03-17 18:33:21',
            ),
            334 => 
            array (
                'id' => 541,
                'user_id' => 512,
                'elevage_id' => 370,
                'espece_id' => 2,
                'created_at' => '2022-03-18 09:36:20',
                'updated_at' => '2022-03-18 09:36:20',
            ),
            335 => 
            array (
                'id' => 542,
                'user_id' => 511,
                'elevage_id' => 371,
                'espece_id' => 2,
                'created_at' => '2022-03-20 16:46:02',
                'updated_at' => '2022-03-20 16:46:02',
            ),
            336 => 
            array (
                'id' => 545,
                'user_id' => 179,
                'elevage_id' => 126,
                'espece_id' => 4,
                'created_at' => '2022-03-31 13:48:51',
                'updated_at' => '2022-03-31 13:48:51',
            ),
            337 => 
            array (
                'id' => 554,
                'user_id' => 515,
                'elevage_id' => 377,
                'espece_id' => 2,
                'created_at' => '2022-04-04 07:23:01',
                'updated_at' => '2022-04-04 07:23:01',
            ),
            338 => 
            array (
                'id' => 556,
                'user_id' => 515,
                'elevage_id' => 377,
                'espece_id' => 2,
                'created_at' => '2022-04-04 07:45:55',
                'updated_at' => '2022-04-04 07:45:55',
            ),
            339 => 
            array (
                'id' => 559,
                'user_id' => 519,
                'elevage_id' => 73,
                'espece_id' => 1,
                'created_at' => '2022-04-21 15:00:06',
                'updated_at' => '2022-04-21 15:00:06',
            ),
        ));
        
        
    }
}
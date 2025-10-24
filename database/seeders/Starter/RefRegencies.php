<?php

namespace Database\Seeders\Starter;

use Illuminate\Database\Seeder;

class RefRegencies extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('ref_regencies')->delete();

        \DB::table('ref_regencies')->insert(array (
            0 =>
            array (
                'id' => '9a2e956b-1ffc-46a7-868e-68d91b0c72f3',
                'province_id' => '9a2e954b-288a-4bf3-bd00-dc2315a70b3f',
                'type' => 'Kabupaten',
                'name' => 'Aceh Selatan',
                'created_at' => '2023-09-21 05:24:19',
                'updated_at' => '2023-09-21 05:24:19',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => '9a2e956b-2282-4293-a63d-0a04bc5efbc6',
                'province_id' => '9a2e954b-288a-4bf3-bd00-dc2315a70b3f',
                'type' => 'Kabupaten',
                'name' => 'Aceh Tenggara',
                'created_at' => '2023-09-21 05:24:19',
                'updated_at' => '2023-09-21 05:24:19',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => '9a2e956b-23a5-41c5-96f3-2d8848b45260',
                'province_id' => '9a2e954b-288a-4bf3-bd00-dc2315a70b3f',
                'type' => 'Kabupaten',
                'name' => 'Aceh Timur',
                'created_at' => '2023-09-21 05:24:19',
                'updated_at' => '2023-09-21 05:24:19',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => '9a2e956b-24d2-46af-a225-e720bfe92df1',
                'province_id' => '9a2e954b-288a-4bf3-bd00-dc2315a70b3f',
                'type' => 'Kabupaten',
                'name' => 'Aceh Tengah',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => '9a2e956b-25e6-4e8c-b7e8-7569c0cc3597',
                'province_id' => '9a2e954b-288a-4bf3-bd00-dc2315a70b3f',
                'type' => 'Kabupaten',
                'name' => 'Aceh Barat',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-27 02:56:26',
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => '9a2e956b-26f7-4c45-9949-f73df799909f',
                'province_id' => '9a2e954b-288a-4bf3-bd00-dc2315a70b3f',
                'type' => 'Kabupaten',
                'name' => 'Aceh Besar',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'id' => '9a2e956b-2826-46db-95c0-21f6e8386a06',
                'province_id' => '9a2e954b-288a-4bf3-bd00-dc2315a70b3f',
                'type' => 'Kabupaten',
                'name' => 'Pidie',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            7 =>
            array (
                'id' => '9a2e956b-2963-4b08-bb20-9b3681f0bf40',
                'province_id' => '9a2e954b-288a-4bf3-bd00-dc2315a70b3f',
                'type' => 'Kabupaten',
                'name' => 'Aceh Utara',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            8 =>
            array (
                'id' => '9a2e956b-2aaf-484e-b5c7-203ed9d57531',
                'province_id' => '9a2e954b-288a-4bf3-bd00-dc2315a70b3f',
                'type' => 'Kabupaten',
                'name' => 'Simeulue',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            9 =>
            array (
                'id' => '9a2e956b-2bad-4734-a6c6-965be26bd7d6',
                'province_id' => '9a2e954b-288a-4bf3-bd00-dc2315a70b3f',
                'type' => 'Kabupaten',
                'name' => 'Aceh Singkil',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            10 =>
            array (
                'id' => '9a2e956b-2d11-4582-a6dc-273d90464f8f',
                'province_id' => '9a2e954b-288a-4bf3-bd00-dc2315a70b3f',
                'type' => 'Kabupaten',
                'name' => 'Bireuen',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            11 =>
            array (
                'id' => '9a2e956b-2e4b-46da-98cc-826295464430',
                'province_id' => '9a2e954b-288a-4bf3-bd00-dc2315a70b3f',
                'type' => 'Kabupaten',
                'name' => 'Aceh Barat Daya',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            12 =>
            array (
                'id' => '9a2e956b-2f4b-458f-bab2-d90755c40f11',
                'province_id' => '9a2e954b-288a-4bf3-bd00-dc2315a70b3f',
                'type' => 'Kabupaten',
                'name' => 'Gayo Lues',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            13 =>
            array (
                'id' => '9a2e956b-304c-4f9a-bc37-c1089a231936',
                'province_id' => '9a2e954b-288a-4bf3-bd00-dc2315a70b3f',
                'type' => 'Kabupaten',
                'name' => 'Aceh Jaya',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            14 =>
            array (
                'id' => '9a2e956b-3152-458b-acef-4033ee10fefa',
                'province_id' => '9a2e954b-288a-4bf3-bd00-dc2315a70b3f',
                'type' => 'Kabupaten',
                'name' => 'Nagan Raya',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            15 =>
            array (
                'id' => '9a2e956b-325d-488e-ae6c-81f10055aa99',
                'province_id' => '9a2e954b-288a-4bf3-bd00-dc2315a70b3f',
                'type' => 'Kabupaten',
                'name' => 'Aceh Tamiang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            16 =>
            array (
                'id' => '9a2e956b-337c-46bf-ac75-c21b01f132dd',
                'province_id' => '9a2e954b-288a-4bf3-bd00-dc2315a70b3f',
                'type' => 'Kabupaten',
                'name' => 'Bener Meriah',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            17 =>
            array (
                'id' => '9a2e956b-349b-4cf6-8e7a-e25253890ceb',
                'province_id' => '9a2e954b-288a-4bf3-bd00-dc2315a70b3f',
                'type' => 'Kabupaten',
                'name' => 'Pidie Jaya',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            18 =>
            array (
                'id' => '9a2e956b-3aca-4560-9930-2485379fb36a',
                'province_id' => '9a2e954b-288a-4bf3-bd00-dc2315a70b3f',
                'type' => 'Kota',
                'name' => 'Banda Aceh',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            19 =>
            array (
                'id' => '9a2e956b-3c66-42c6-b08f-3c923a814ac0',
                'province_id' => '9a2e954b-288a-4bf3-bd00-dc2315a70b3f',
                'type' => 'Kota',
                'name' => 'Sabang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            20 =>
            array (
                'id' => '9a2e956b-3dd2-4cf0-a5d5-f3086e23f433',
                'province_id' => '9a2e954b-288a-4bf3-bd00-dc2315a70b3f',
                'type' => 'Kota',
                'name' => 'Lhokseumawe',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            21 =>
            array (
                'id' => '9a2e956b-3f39-4fe3-a654-fd648bf994e3',
                'province_id' => '9a2e954b-288a-4bf3-bd00-dc2315a70b3f',
                'type' => 'Kota',
                'name' => 'Langsa',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            22 =>
            array (
                'id' => '9a2e956b-408b-4c02-928d-95e629d5e2f2',
                'province_id' => '9a2e954b-288a-4bf3-bd00-dc2315a70b3f',
                'type' => 'Kota',
                'name' => 'Subulussalam',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            23 =>
            array (
                'id' => '9a2e956b-41b6-4ce5-a27f-7ec805d3b5b2',
                'province_id' => '9a2e954b-2d8e-4576-90cb-d718cdfe5b16',
                'type' => 'Kabupaten',
                'name' => 'Tapanuli Tengah',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            24 =>
            array (
                'id' => '9a2e956b-42bd-4a84-948c-eb2b4862cac3',
                'province_id' => '9a2e954b-2d8e-4576-90cb-d718cdfe5b16',
                'type' => 'Kabupaten',
                'name' => 'Tapanuli Utara',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            25 =>
            array (
                'id' => '9a2e956b-43c7-4b49-b6dd-5722a539a376',
                'province_id' => '9a2e954b-2d8e-4576-90cb-d718cdfe5b16',
                'type' => 'Kabupaten',
                'name' => 'Tapanuli Selatan',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            26 =>
            array (
                'id' => '9a2e956b-44cb-4d4f-835a-d9ce59a0e0bd',
                'province_id' => '9a2e954b-2d8e-4576-90cb-d718cdfe5b16',
                'type' => 'Kabupaten',
                'name' => 'Nias',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            27 =>
            array (
                'id' => '9a2e956b-45ca-41d6-9a3c-9236d295ff1e',
                'province_id' => '9a2e954b-2d8e-4576-90cb-d718cdfe5b16',
                'type' => 'Kabupaten',
                'name' => 'Langkat',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            28 =>
            array (
                'id' => '9a2e956b-46ef-47f3-87ec-61c6037916d9',
                'province_id' => '9a2e954b-2d8e-4576-90cb-d718cdfe5b16',
                'type' => 'Kabupaten',
                'name' => 'Karo',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            29 =>
            array (
                'id' => '9a2e956b-480e-4e5f-b7ac-4dfc15934ef2',
                'province_id' => '9a2e954b-2d8e-4576-90cb-d718cdfe5b16',
                'type' => 'Kabupaten',
                'name' => 'Deli Serdang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            30 =>
            array (
                'id' => '9a2e956b-4939-45eb-9365-867cdbb130e4',
                'province_id' => '9a2e954b-2d8e-4576-90cb-d718cdfe5b16',
                'type' => 'Kabupaten',
                'name' => 'Simalungun',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            31 =>
            array (
                'id' => '9a2e956b-4a74-44d4-aa25-b44c578a78f1',
                'province_id' => '9a2e954b-2d8e-4576-90cb-d718cdfe5b16',
                'type' => 'Kabupaten',
                'name' => 'Asahan',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            32 =>
            array (
                'id' => '9a2e956b-4b8f-4cbb-b323-2907411ac092',
                'province_id' => '9a2e954b-2d8e-4576-90cb-d718cdfe5b16',
                'type' => 'Kabupaten',
                'name' => 'Labuhan Batu',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            33 =>
            array (
                'id' => '9a2e956b-4d15-4172-ae98-b3bf6809be68',
                'province_id' => '9a2e954b-2d8e-4576-90cb-d718cdfe5b16',
                'type' => 'Kabupaten',
                'name' => 'Dairi',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            34 =>
            array (
                'id' => '9a2e956b-4eb3-424c-bed7-946d45c94b44',
                'province_id' => '9a2e954b-2d8e-4576-90cb-d718cdfe5b16',
                'type' => 'Kabupaten',
                'name' => 'Toba',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            35 =>
            array (
                'id' => '9a2e956b-505f-49b1-b706-67638ec21e5c',
                'province_id' => '9a2e954b-2d8e-4576-90cb-d718cdfe5b16',
                'type' => 'Kabupaten',
                'name' => 'Mandailing Natal',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            36 =>
            array (
                'id' => '9a2e956b-5230-4a38-beea-38ac817d56df',
                'province_id' => '9a2e954b-2d8e-4576-90cb-d718cdfe5b16',
                'type' => 'Kabupaten',
                'name' => 'Nias Selatan',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            37 =>
            array (
                'id' => '9a2e956b-5413-48f2-9458-fa89aa702783',
                'province_id' => '9a2e954b-2d8e-4576-90cb-d718cdfe5b16',
                'type' => 'Kabupaten',
                'name' => 'Pakpak Bharat',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            38 =>
            array (
                'id' => '9a2e956b-559f-4739-841c-82821c85e388',
                'province_id' => '9a2e954b-2d8e-4576-90cb-d718cdfe5b16',
                'type' => 'Kabupaten',
                'name' => 'Humbang Hasundutan',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            39 =>
            array (
                'id' => '9a2e956b-574f-4674-a76e-3d999a742b4a',
                'province_id' => '9a2e954b-2d8e-4576-90cb-d718cdfe5b16',
                'type' => 'Kabupaten',
                'name' => 'Samosir',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            40 =>
            array (
                'id' => '9a2e956b-58f5-4960-9ef8-9f0bf4e9f6f3',
                'province_id' => '9a2e954b-2d8e-4576-90cb-d718cdfe5b16',
                'type' => 'Kabupaten',
                'name' => 'Serdang Bedagai',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            41 =>
            array (
                'id' => '9a2e956b-5abf-414e-8f59-201cca38ef63',
                'province_id' => '9a2e954b-2d8e-4576-90cb-d718cdfe5b16',
                'type' => 'Kabupaten',
                'name' => 'Batu Bara',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            42 =>
            array (
                'id' => '9a2e956b-5c5f-4c7c-bb4b-0584ba99615f',
                'province_id' => '9a2e954b-2d8e-4576-90cb-d718cdfe5b16',
                'type' => 'Kabupaten',
                'name' => 'Padang Lawas Utara',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            43 =>
            array (
                'id' => '9a2e956b-5dc7-4f24-a4f1-73ad2b92e121',
                'province_id' => '9a2e954b-2d8e-4576-90cb-d718cdfe5b16',
                'type' => 'Kabupaten',
                'name' => 'Padang Lawas',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            44 =>
            array (
                'id' => '9a2e956b-5ee1-4794-be74-cfd308821cb8',
                'province_id' => '9a2e954b-2d8e-4576-90cb-d718cdfe5b16',
                'type' => 'Kabupaten',
                'name' => 'Labuhan Batu Selatan',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            45 =>
            array (
                'id' => '9a2e956b-5fd4-4e97-9288-a9892bda30c8',
                'province_id' => '9a2e954b-2d8e-4576-90cb-d718cdfe5b16',
                'type' => 'Kabupaten',
                'name' => 'Labuhan Batu Utara',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            46 =>
            array (
                'id' => '9a2e956b-60ef-4e98-a326-5d67c1723d94',
                'province_id' => '9a2e954b-2d8e-4576-90cb-d718cdfe5b16',
                'type' => 'Kabupaten',
                'name' => 'Nias Utara',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            47 =>
            array (
                'id' => '9a2e956b-6203-4581-bf9c-cd55c11a4e4d',
                'province_id' => '9a2e954b-2d8e-4576-90cb-d718cdfe5b16',
                'type' => 'Kabupaten',
                'name' => 'Nias Barat',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            48 =>
            array (
                'id' => '9a2e956b-631f-4802-a343-c333848ec728',
                'province_id' => '9a2e954b-2d8e-4576-90cb-d718cdfe5b16',
                'type' => 'Kota',
                'name' => 'Medan',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            49 =>
            array (
                'id' => '9a2e956b-643d-44de-a57a-a2ed6ecdf203',
                'province_id' => '9a2e954b-2d8e-4576-90cb-d718cdfe5b16',
                'type' => 'Kota',
                'name' => 'Pematang Siantar',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            50 =>
            array (
                'id' => '9a2e956b-654c-4896-9d6e-15907b02f999',
                'province_id' => '9a2e954b-2d8e-4576-90cb-d718cdfe5b16',
                'type' => 'Kota',
                'name' => 'Sibolga',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            51 =>
            array (
                'id' => '9a2e956b-6653-415f-85bc-a1b02684576e',
                'province_id' => '9a2e954b-2d8e-4576-90cb-d718cdfe5b16',
                'type' => 'Kota',
                'name' => 'Tanjung Balai',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            52 =>
            array (
                'id' => '9a2e956b-6761-466e-ac64-dc2193ba9a93',
                'province_id' => '9a2e954b-2d8e-4576-90cb-d718cdfe5b16',
                'type' => 'Kota',
                'name' => 'Binjai',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            53 =>
            array (
                'id' => '9a2e956b-686b-45c6-aaad-40f0931fc1de',
                'province_id' => '9a2e954b-2d8e-4576-90cb-d718cdfe5b16',
                'type' => 'Kota',
                'name' => 'Tebing Tinggi',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            54 =>
            array (
                'id' => '9a2e956b-6976-40cf-a15e-18f94a6b1699',
                'province_id' => '9a2e954b-2d8e-4576-90cb-d718cdfe5b16',
                'type' => 'Kota',
                'name' => 'Padang Sidimpuan',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            55 =>
            array (
                'id' => '9a2e956b-6aa5-4103-b4ae-a3bc512eb2c5',
                'province_id' => '9a2e954b-2d8e-4576-90cb-d718cdfe5b16',
                'type' => 'Kota',
                'name' => 'Gunung Sitoli',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            56 =>
            array (
                'id' => '9a2e956b-6bb9-49e4-968d-ec7296f362d3',
                'province_id' => '9a2e954b-3411-4da2-b06d-08c30a2c412a',
                'type' => 'Kabupaten',
                'name' => 'Pesisir Selatan',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            57 =>
            array (
                'id' => '9a2e956b-6cd2-4cae-9a75-f0e1faa9c995',
                'province_id' => '9a2e954b-3411-4da2-b06d-08c30a2c412a',
                'type' => 'Kabupaten',
                'name' => 'Solok',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            58 =>
            array (
                'id' => '9a2e956b-6deb-4c2c-b23c-60d5a845659a',
                'province_id' => '9a2e954b-3411-4da2-b06d-08c30a2c412a',
                'type' => 'Kabupaten',
                'name' => 'Sijunjung',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            59 =>
            array (
                'id' => '9a2e956b-6efe-4f69-b992-e2886657bf3a',
                'province_id' => '9a2e954b-3411-4da2-b06d-08c30a2c412a',
                'type' => 'Kabupaten',
                'name' => 'Tanah Datar',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            60 =>
            array (
                'id' => '9a2e956b-700d-41fd-94ef-096ed4af1215',
                'province_id' => '9a2e954b-3411-4da2-b06d-08c30a2c412a',
                'type' => 'Kabupaten',
                'name' => 'Padang Pariaman',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            61 =>
            array (
                'id' => '9a2e956b-7120-4729-8c8c-bd5747c06d72',
                'province_id' => '9a2e954b-3411-4da2-b06d-08c30a2c412a',
                'type' => 'Kabupaten',
                'name' => 'Agam',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            62 =>
            array (
                'id' => '9a2e956b-7230-4d3e-925f-10f39712dc34',
                'province_id' => '9a2e954b-3411-4da2-b06d-08c30a2c412a',
                'type' => 'Kabupaten',
                'name' => 'Lima Puluh Kota',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            63 =>
            array (
                'id' => '9a2e956b-733d-402b-a43c-eaa5bd5908c3',
                'province_id' => '9a2e954b-3411-4da2-b06d-08c30a2c412a',
                'type' => 'Kabupaten',
                'name' => 'Pasaman',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            64 =>
            array (
                'id' => '9a2e956b-7447-40aa-af15-677f11bc08fc',
                'province_id' => '9a2e954b-3411-4da2-b06d-08c30a2c412a',
                'type' => 'Kabupaten',
                'name' => 'Kepulauan Mentawai',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            65 =>
            array (
                'id' => '9a2e956b-7552-449e-9f3a-47b68fc3d888',
                'province_id' => '9a2e954b-3411-4da2-b06d-08c30a2c412a',
                'type' => 'Kabupaten',
                'name' => 'Dharmasraya',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            66 =>
            array (
                'id' => '9a2e956b-76e1-4c3c-a8d6-207de60992fe',
                'province_id' => '9a2e954b-3411-4da2-b06d-08c30a2c412a',
                'type' => 'Kabupaten',
                'name' => 'Solok Selatan',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            67 =>
            array (
                'id' => '9a2e956b-77ea-4eb1-b19f-028553c72240',
                'province_id' => '9a2e954b-3411-4da2-b06d-08c30a2c412a',
                'type' => 'Kabupaten',
                'name' => 'Pasaman Barat',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            68 =>
            array (
                'id' => '9a2e956b-78f1-4759-bb26-07e2bf1929de',
                'province_id' => '9a2e954b-3411-4da2-b06d-08c30a2c412a',
                'type' => 'Kota',
                'name' => 'Padang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            69 =>
            array (
                'id' => '9a2e956b-79e5-4dcd-a3f0-60e84ada997b',
                'province_id' => '9a2e954b-3411-4da2-b06d-08c30a2c412a',
                'type' => 'Kota',
                'name' => 'Solok',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            70 =>
            array (
                'id' => '9a2e956b-7b60-42b7-8dbd-af61afaf5edd',
                'province_id' => '9a2e954b-3411-4da2-b06d-08c30a2c412a',
                'type' => 'Kota',
                'name' => 'Sawahlunto',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            71 =>
            array (
                'id' => '9a2e956b-7c98-4962-8065-a1beed47c188',
                'province_id' => '9a2e954b-3411-4da2-b06d-08c30a2c412a',
                'type' => 'Kota',
                'name' => 'Padang Panjang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            72 =>
            array (
                'id' => '9a2e956b-7dc8-460a-891d-8bb9f3df7e5e',
                'province_id' => '9a2e954b-3411-4da2-b06d-08c30a2c412a',
                'type' => 'Kota',
                'name' => 'Bukittinggi',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            73 =>
            array (
                'id' => '9a2e956b-7efa-4c35-bc12-452f71d2a8d9',
                'province_id' => '9a2e954b-3411-4da2-b06d-08c30a2c412a',
                'type' => 'Kota',
                'name' => 'Payakumbuh',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            74 =>
            array (
                'id' => '9a2e956b-802d-4731-83ea-0185ac57f430',
                'province_id' => '9a2e954b-3411-4da2-b06d-08c30a2c412a',
                'type' => 'Kota',
                'name' => 'Pariaman',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            75 =>
            array (
                'id' => '9a2e956b-8168-41aa-9f46-d95013725996',
                'province_id' => '9a2e954b-35a0-4673-8b22-c874dc332325',
                'type' => 'Kabupaten',
                'name' => 'Kampar',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            76 =>
            array (
                'id' => '9a2e956b-82bf-4353-92cc-8f8750460e78',
                'province_id' => '9a2e954b-35a0-4673-8b22-c874dc332325',
                'type' => 'Kabupaten',
                'name' => 'Indragiri Hulu',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            77 =>
            array (
                'id' => '9a2e956b-8417-4ce4-a2ad-5d18e4ed16b1',
                'province_id' => '9a2e954b-35a0-4673-8b22-c874dc332325',
                'type' => 'Kabupaten',
                'name' => 'Bengkalis',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            78 =>
            array (
                'id' => '9a2e956b-8563-4ba6-9507-efc24999dbc9',
                'province_id' => '9a2e954b-35a0-4673-8b22-c874dc332325',
                'type' => 'Kabupaten',
                'name' => 'Indragiri Hilir',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            79 =>
            array (
                'id' => '9a2e956b-8670-44cd-8871-e51bf6fd608c',
                'province_id' => '9a2e954b-35a0-4673-8b22-c874dc332325',
                'type' => 'Kabupaten',
                'name' => 'Pelalawan',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            80 =>
            array (
                'id' => '9a2e956b-876a-415b-8a64-157901f7be98',
                'province_id' => '9a2e954b-35a0-4673-8b22-c874dc332325',
                'type' => 'Kabupaten',
                'name' => 'Rokan Hulu',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            81 =>
            array (
                'id' => '9a2e956b-8866-4be6-aabf-bf3b41f3f517',
                'province_id' => '9a2e954b-35a0-4673-8b22-c874dc332325',
                'type' => 'Kabupaten',
                'name' => 'Rokan Hilir',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            82 =>
            array (
                'id' => '9a2e956b-897a-407c-aaec-fffb43d72adf',
                'province_id' => '9a2e954b-35a0-4673-8b22-c874dc332325',
                'type' => 'Kabupaten',
                'name' => 'Siak',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            83 =>
            array (
                'id' => '9a2e956b-8a8f-451b-ba9d-ca40d994a6ca',
                'province_id' => '9a2e954b-35a0-4673-8b22-c874dc332325',
                'type' => 'Kabupaten',
                'name' => 'Kuantan Singingi',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            84 =>
            array (
                'id' => '9a2e956b-8bc4-4ed7-8af1-d9458e2d9eca',
                'province_id' => '9a2e954b-35a0-4673-8b22-c874dc332325',
                'type' => 'Kabupaten',
                'name' => 'Kepulauan Meranti',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            85 =>
            array (
                'id' => '9a2e956b-8ccd-4127-a533-7f9d17cf9c88',
                'province_id' => '9a2e954b-35a0-4673-8b22-c874dc332325',
                'type' => 'Kota',
                'name' => 'Pekanbaru',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            86 =>
            array (
                'id' => '9a2e956b-8de1-4ad4-8b6c-bc7815c308b8',
                'province_id' => '9a2e954b-35a0-4673-8b22-c874dc332325',
                'type' => 'Kota',
                'name' => 'Dumai',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            87 =>
            array (
                'id' => '9a2e956b-8ee8-4af2-b0e0-7dab8f8ee18d',
                'province_id' => '9a2e954b-3733-4997-a22b-fa15f5ea5cfa',
                'type' => 'Kabupaten',
                'name' => 'Kerinci',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            88 =>
            array (
                'id' => '9a2e956b-9005-44ad-93b8-9e619fb38adc',
                'province_id' => '9a2e954b-3733-4997-a22b-fa15f5ea5cfa',
                'type' => 'Kabupaten',
                'name' => 'Merangin',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            89 =>
            array (
                'id' => '9a2e956b-911a-47fd-a1d9-89353db82ff1',
                'province_id' => '9a2e954b-3733-4997-a22b-fa15f5ea5cfa',
                'type' => 'Kabupaten',
                'name' => 'Sarolangun',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            90 =>
            array (
                'id' => '9a2e956b-921a-4f6d-b9d7-e2adfc8d5924',
                'province_id' => '9a2e954b-3733-4997-a22b-fa15f5ea5cfa',
                'type' => 'Kabupaten',
                'name' => 'Batanghari',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            91 =>
            array (
                'id' => '9a2e956b-932f-4403-a13d-2281decd480f',
                'province_id' => '9a2e954b-3733-4997-a22b-fa15f5ea5cfa',
                'type' => 'Kabupaten',
                'name' => 'Muaro Jambi',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            92 =>
            array (
                'id' => '9a2e956b-9451-41bc-91a4-152aa03f4e7a',
                'province_id' => '9a2e954b-3733-4997-a22b-fa15f5ea5cfa',
                'type' => 'Kabupaten',
                'name' => 'Tanjung Jabung Barat',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            93 =>
            array (
                'id' => '9a2e956b-955e-4853-a341-d433f189f7e3',
                'province_id' => '9a2e954b-3733-4997-a22b-fa15f5ea5cfa',
                'type' => 'Kabupaten',
                'name' => 'Tanjung Jabung Timur',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            94 =>
            array (
                'id' => '9a2e956b-9681-476e-a700-c5ae5c01b6a2',
                'province_id' => '9a2e954b-3733-4997-a22b-fa15f5ea5cfa',
                'type' => 'Kabupaten',
                'name' => 'Bungo',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            95 =>
            array (
                'id' => '9a2e956b-997c-4201-8c97-aca80290f0ca',
                'province_id' => '9a2e954b-3733-4997-a22b-fa15f5ea5cfa',
                'type' => 'Kabupaten',
                'name' => 'Tebo',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            96 =>
            array (
                'id' => '9a2e956b-9a7b-490f-8bd3-d1c0e4baff69',
                'province_id' => '9a2e954b-3733-4997-a22b-fa15f5ea5cfa',
                'type' => 'Kota',
                'name' => 'Jambi',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            97 =>
            array (
                'id' => '9a2e956b-9b6e-4d82-8b4c-f7a57b25a9ea',
                'province_id' => '9a2e954b-3733-4997-a22b-fa15f5ea5cfa',
                'type' => 'Kota',
                'name' => 'Sungai Penuh',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            98 =>
            array (
                'id' => '9a2e956b-9c60-4a5a-867e-e980d74cb45a',
                'province_id' => '9a2e954b-38a2-455d-bd7d-a8cbfbf6e862',
                'type' => 'Kabupaten',
                'name' => 'Ogan Komering Ulu',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            99 =>
            array (
                'id' => '9a2e956b-9d5c-47be-80f2-1d3b39cd238c',
                'province_id' => '9a2e954b-38a2-455d-bd7d-a8cbfbf6e862',
                'type' => 'Kabupaten',
                'name' => 'Ogan Komering Ilir',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            100 =>
            array (
                'id' => '9a2e956b-9e6c-4729-894f-934c406d6f52',
                'province_id' => '9a2e954b-38a2-455d-bd7d-a8cbfbf6e862',
                'type' => 'Kabupaten',
                'name' => 'Muara Enim',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            101 =>
            array (
                'id' => '9a2e956b-9f86-4b78-9dc5-ea1414d64469',
                'province_id' => '9a2e954b-38a2-455d-bd7d-a8cbfbf6e862',
                'type' => 'Kabupaten',
                'name' => 'Lahat',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            102 =>
            array (
                'id' => '9a2e956b-a115-4755-8abb-62561fa2d738',
                'province_id' => '9a2e954b-38a2-455d-bd7d-a8cbfbf6e862',
                'type' => 'Kabupaten',
                'name' => 'Musi Rawas',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            103 =>
            array (
                'id' => '9a2e956b-a21b-46eb-9ee1-f9ee14429acb',
                'province_id' => '9a2e954b-38a2-455d-bd7d-a8cbfbf6e862',
                'type' => 'Kabupaten',
                'name' => 'Musi Banyuasin',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            104 =>
            array (
                'id' => '9a2e956b-a32a-47fe-9d29-7be1b0e8c051',
                'province_id' => '9a2e954b-38a2-455d-bd7d-a8cbfbf6e862',
                'type' => 'Kabupaten',
                'name' => 'Banyuasin',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            105 =>
            array (
                'id' => '9a2e956b-a43e-4cde-8063-116cc4545ba7',
                'province_id' => '9a2e954b-38a2-455d-bd7d-a8cbfbf6e862',
                'type' => 'Kabupaten',
                'name' => 'Ogan Komering Ulu Timur',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            106 =>
            array (
                'id' => '9a2e956b-a54e-4551-aaf1-f5001c10acfd',
                'province_id' => '9a2e954b-38a2-455d-bd7d-a8cbfbf6e862',
                'type' => 'Kabupaten',
                'name' => 'Ogan Komering Ulu Selatan',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            107 =>
            array (
                'id' => '9a2e956b-a668-4caf-96c3-01bb3bfef93d',
                'province_id' => '9a2e954b-38a2-455d-bd7d-a8cbfbf6e862',
                'type' => 'Kabupaten',
                'name' => 'Ogan Ilir',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            108 =>
            array (
                'id' => '9a2e956b-a785-4d71-b7f1-87fa947fd2ad',
                'province_id' => '9a2e954b-38a2-455d-bd7d-a8cbfbf6e862',
                'type' => 'Kabupaten',
                'name' => 'Empat Lawang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            109 =>
            array (
                'id' => '9a2e956b-a895-4421-9d50-430c56dd31b8',
                'province_id' => '9a2e954b-38a2-455d-bd7d-a8cbfbf6e862',
                'type' => 'Kabupaten',
                'name' => 'Penukal Abab Lematang Ilir',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            110 =>
            array (
                'id' => '9a2e956b-a9a9-47da-a58c-412c373d6b2f',
                'province_id' => '9a2e954b-38a2-455d-bd7d-a8cbfbf6e862',
                'type' => 'Kabupaten',
                'name' => 'Musi Rawas Utara',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            111 =>
            array (
                'id' => '9a2e956b-aaa5-4fd5-86cc-34db82418f5b',
                'province_id' => '9a2e954b-38a2-455d-bd7d-a8cbfbf6e862',
                'type' => 'Kota',
                'name' => 'Palembang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            112 =>
            array (
                'id' => '9a2e956b-aba2-4632-8329-4135d6fd49f2',
                'province_id' => '9a2e954b-38a2-455d-bd7d-a8cbfbf6e862',
                'type' => 'Kota',
                'name' => 'Pagar Alam',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            113 =>
            array (
                'id' => '9a2e956b-acad-4512-9026-d67a4098d6c1',
                'province_id' => '9a2e954b-38a2-455d-bd7d-a8cbfbf6e862',
                'type' => 'Kota',
                'name' => 'Lubuk Linggau',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            114 =>
            array (
                'id' => '9a2e956b-ae4b-4509-82dd-961ba6178969',
                'province_id' => '9a2e954b-38a2-455d-bd7d-a8cbfbf6e862',
                'type' => 'Kota',
                'name' => 'Prabumulih',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            115 =>
            array (
                'id' => '9a2e956b-af42-4903-b09a-945c58c33acd',
                'province_id' => '9a2e954b-3acf-4928-bf4f-c492a885c550',
                'type' => 'Kabupaten',
                'name' => 'Bengkulu Selatan',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            116 =>
            array (
                'id' => '9a2e956b-b043-4bde-a6c5-7fcc4a756615',
                'province_id' => '9a2e954b-3acf-4928-bf4f-c492a885c550',
                'type' => 'Kabupaten',
                'name' => 'Rejang Lebong',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            117 =>
            array (
                'id' => '9a2e956b-b141-4a1f-9567-df843fa1e7b9',
                'province_id' => '9a2e954b-3acf-4928-bf4f-c492a885c550',
                'type' => 'Kabupaten',
                'name' => 'Bengkulu Utara',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            118 =>
            array (
                'id' => '9a2e956b-b24f-4637-b1fd-b170996bc54a',
                'province_id' => '9a2e954b-3acf-4928-bf4f-c492a885c550',
                'type' => 'Kabupaten',
                'name' => 'Kaur',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            119 =>
            array (
                'id' => '9a2e956b-b353-42de-a688-7135321e09eb',
                'province_id' => '9a2e954b-3acf-4928-bf4f-c492a885c550',
                'type' => 'Kabupaten',
                'name' => 'Seluma',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            120 =>
            array (
                'id' => '9a2e956b-b45d-4daa-9aef-9b60dae9aaa2',
                'province_id' => '9a2e954b-3acf-4928-bf4f-c492a885c550',
                'type' => 'Kabupaten',
                'name' => 'Muko Muko',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            121 =>
            array (
                'id' => '9a2e956b-b555-4274-929b-ee101b7ae573',
                'province_id' => '9a2e954b-3acf-4928-bf4f-c492a885c550',
                'type' => 'Kabupaten',
                'name' => 'Lebong',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            122 =>
            array (
                'id' => '9a2e956b-b646-46a6-86b3-2ba27b99f9e7',
                'province_id' => '9a2e954b-3acf-4928-bf4f-c492a885c550',
                'type' => 'Kabupaten',
                'name' => 'Kepahiang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            123 =>
            array (
                'id' => '9a2e956b-b740-48b3-8d60-83de8a8afe77',
                'province_id' => '9a2e954b-3acf-4928-bf4f-c492a885c550',
                'type' => 'Kabupaten',
                'name' => 'Bengkulu Tengah',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            124 =>
            array (
                'id' => '9a2e956b-b841-4388-8e3c-1f235f384f7e',
                'province_id' => '9a2e954b-3acf-4928-bf4f-c492a885c550',
                'type' => 'Kota',
                'name' => 'Bengkulu',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            125 =>
            array (
                'id' => '9a2e956b-b935-4012-80b4-79b23f9a9ef2',
                'province_id' => '9a2e954b-3c3e-4afb-ba3c-2f046d28c625',
                'type' => 'Kabupaten',
                'name' => 'Lampung Selatan',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            126 =>
            array (
                'id' => '9a2e956b-ba3a-45ae-8a80-4d18f9687e87',
                'province_id' => '9a2e954b-3c3e-4afb-ba3c-2f046d28c625',
                'type' => 'Kabupaten',
                'name' => 'Lampung Tengah',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            127 =>
            array (
                'id' => '9a2e956b-bb48-4c60-a115-a11a570d101e',
                'province_id' => '9a2e954b-3c3e-4afb-ba3c-2f046d28c625',
                'type' => 'Kabupaten',
                'name' => 'Lampung Utara',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            128 =>
            array (
                'id' => '9a2e956b-bc66-4655-885f-41255a299750',
                'province_id' => '9a2e954b-3c3e-4afb-ba3c-2f046d28c625',
                'type' => 'Kabupaten',
                'name' => 'Lampung Barat',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            129 =>
            array (
                'id' => '9a2e956b-bd61-4630-9158-1311a46d7c49',
                'province_id' => '9a2e954b-3c3e-4afb-ba3c-2f046d28c625',
                'type' => 'Kabupaten',
                'name' => 'Tulang Bawang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            130 =>
            array (
                'id' => '9a2e956b-be5f-4c2e-b82a-21b194a08325',
                'province_id' => '9a2e954b-3c3e-4afb-ba3c-2f046d28c625',
                'type' => 'Kabupaten',
                'name' => 'Tanggamus',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            131 =>
            array (
                'id' => '9a2e956b-bf6a-4862-b54f-fb19cb01cf2e',
                'province_id' => '9a2e954b-3c3e-4afb-ba3c-2f046d28c625',
                'type' => 'Kabupaten',
                'name' => 'Lampung Timur',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            132 =>
            array (
                'id' => '9a2e956b-c076-4ee7-8fbb-fed00c94b73c',
                'province_id' => '9a2e954b-3c3e-4afb-ba3c-2f046d28c625',
                'type' => 'Kabupaten',
                'name' => 'Way Kanan',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            133 =>
            array (
                'id' => '9a2e956b-c185-43d7-93a2-4909647ee109',
                'province_id' => '9a2e954b-3c3e-4afb-ba3c-2f046d28c625',
                'type' => 'Kabupaten',
                'name' => 'Pesawaran',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            134 =>
            array (
                'id' => '9a2e956b-c286-4c46-8cbe-e3e701882c4d',
                'province_id' => '9a2e954b-3c3e-4afb-ba3c-2f046d28c625',
                'type' => 'Kabupaten',
                'name' => 'Pringsewu',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            135 =>
            array (
                'id' => '9a2e956b-c382-4000-a878-65d50cf232f1',
                'province_id' => '9a2e954b-3c3e-4afb-ba3c-2f046d28c625',
                'type' => 'Kabupaten',
                'name' => 'Mesuji',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            136 =>
            array (
                'id' => '9a2e956b-c47d-49d8-b3bc-e1218113fda6',
                'province_id' => '9a2e954b-3c3e-4afb-ba3c-2f046d28c625',
                'type' => 'Kabupaten',
                'name' => 'Tulang Bawang Barat',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            137 =>
            array (
                'id' => '9a2e956b-c5fd-46d1-b141-403fa0e0c88a',
                'province_id' => '9a2e954b-3c3e-4afb-ba3c-2f046d28c625',
                'type' => 'Kabupaten',
                'name' => 'Pesisir Barat',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            138 =>
            array (
                'id' => '9a2e956b-c791-4bf2-8d0b-b1167c9ff93b',
                'province_id' => '9a2e954b-3c3e-4afb-ba3c-2f046d28c625',
                'type' => 'Kota',
                'name' => 'Bandar Lampung',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            139 =>
            array (
                'id' => '9a2e956b-c934-4a60-b943-6715bfb02113',
                'province_id' => '9a2e954b-3c3e-4afb-ba3c-2f046d28c625',
                'type' => 'Kota',
                'name' => 'Metro',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            140 =>
            array (
                'id' => '9a2e956b-cab9-4123-85fd-70a29ccc4ef4',
                'province_id' => '9a2e954b-3e25-47e6-9d31-4d69f9fb77df',
                'type' => 'Kabupaten',
                'name' => 'Bangka',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            141 =>
            array (
                'id' => '9a2e956b-cc3f-414c-b9a1-46f21e195651',
                'province_id' => '9a2e954b-3e25-47e6-9d31-4d69f9fb77df',
                'type' => 'Kabupaten',
                'name' => 'Belitung',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            142 =>
            array (
                'id' => '9a2e956b-cea2-4355-a45e-85530d93e276',
                'province_id' => '9a2e954b-3e25-47e6-9d31-4d69f9fb77df',
                'type' => 'Kabupaten',
                'name' => 'Bangka Selatan',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            143 =>
            array (
                'id' => '9a2e956b-cfea-4ddc-bf40-32ce739e4ff2',
                'province_id' => '9a2e954b-3e25-47e6-9d31-4d69f9fb77df',
                'type' => 'Kabupaten',
                'name' => 'Bangka Tengah',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            144 =>
            array (
                'id' => '9a2e956b-d0ed-4dc0-8d43-491617696812',
                'province_id' => '9a2e954b-3e25-47e6-9d31-4d69f9fb77df',
                'type' => 'Kabupaten',
                'name' => 'Bangka Barat',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            145 =>
            array (
                'id' => '9a2e956b-d1e2-43d7-ae20-e3cb0fd8f0f6',
                'province_id' => '9a2e954b-3e25-47e6-9d31-4d69f9fb77df',
                'type' => 'Kabupaten',
                'name' => 'Belitung Timur',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            146 =>
            array (
                'id' => '9a2e956b-d2d5-43f0-8d46-ab744f60ffc5',
                'province_id' => '9a2e954b-3e25-47e6-9d31-4d69f9fb77df',
                'type' => 'Kota',
                'name' => 'Pangkal Pinang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            147 =>
            array (
                'id' => '9a2e956b-d3c8-4e77-8482-fa46cbec8ffd',
                'province_id' => '9a2e954b-3f76-49b3-af9a-254744169d10',
                'type' => 'Kabupaten',
                'name' => 'Bintan',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            148 =>
            array (
                'id' => '9a2e956b-d4c1-4547-bef6-82bc766031fb',
                'province_id' => '9a2e954b-3f76-49b3-af9a-254744169d10',
                'type' => 'Kabupaten',
                'name' => 'Karimun',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            149 =>
            array (
                'id' => '9a2e956b-d5bd-4bad-8120-ade617530c0c',
                'province_id' => '9a2e954b-3f76-49b3-af9a-254744169d10',
                'type' => 'Kabupaten',
                'name' => 'Natuna',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            150 =>
            array (
                'id' => '9a2e956b-d6b9-406d-912c-25c2f38b5ca8',
                'province_id' => '9a2e954b-3f76-49b3-af9a-254744169d10',
                'type' => 'Kabupaten',
                'name' => 'Lingga',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            151 =>
            array (
                'id' => '9a2e956b-d7b9-4b55-b4a3-deef8dc2b438',
                'province_id' => '9a2e954b-3f76-49b3-af9a-254744169d10',
                'type' => 'Kabupaten',
                'name' => 'Kepulauan Anambas',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            152 =>
            array (
                'id' => '9a2e956b-d8b0-42b1-9344-4806014f57b3',
                'province_id' => '9a2e954b-3f76-49b3-af9a-254744169d10',
                'type' => 'Kota',
                'name' => 'Batam',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            153 =>
            array (
                'id' => '9a2e956b-d9a9-49b4-ae2d-eb851f110b13',
                'province_id' => '9a2e954b-3f76-49b3-af9a-254744169d10',
                'type' => 'Kota',
                'name' => 'Tanjung Pinang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            154 =>
            array (
                'id' => '9a2e956b-da9b-424b-8fee-edff290e3e2e',
                'province_id' => '9a2e954b-4064-408d-b764-a320efb4c980',
                'type' => 'Kabupaten',
                'name' => 'Adm. Kep. Seribu',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            155 =>
            array (
                'id' => '9a2e956b-dba4-4b18-8ea9-19bbe25e9d48',
                'province_id' => '9a2e954b-4064-408d-b764-a320efb4c980',
                'type' => 'Kota',
                'name' => 'Adm. Jakarta Pusat',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            156 =>
            array (
                'id' => '9a2e956b-dc98-4fd0-b661-3143ce28a68a',
                'province_id' => '9a2e954b-4064-408d-b764-a320efb4c980',
                'type' => 'Kota',
                'name' => 'Adm. Jakarta Utara',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            157 =>
            array (
                'id' => '9a2e956b-dd89-4d3c-8696-9a3f72457bd1',
                'province_id' => '9a2e954b-4064-408d-b764-a320efb4c980',
                'type' => 'Kota',
                'name' => 'Adm. Jakarta Barat',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            158 =>
            array (
                'id' => '9a2e956b-de7e-4826-b348-9316ae60265e',
                'province_id' => '9a2e954b-4064-408d-b764-a320efb4c980',
                'type' => 'Kota',
                'name' => 'Adm. Jakarta Selatan',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            159 =>
            array (
                'id' => '9a2e956b-df78-4e70-94d1-26d7dba76839',
                'province_id' => '9a2e954b-4064-408d-b764-a320efb4c980',
                'type' => 'Kota',
                'name' => 'Adm. Jakarta Timur',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            160 =>
            array (
                'id' => '9a2e956b-e0e5-45a3-95f4-114ebe0aa972',
                'province_id' => '9a2e954b-413f-495e-a6cb-40fb5cb48ef0',
                'type' => 'Kabupaten',
                'name' => 'Bogor',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            161 =>
            array (
                'id' => '9a2e956b-e2c5-41d9-ad0f-5d7a5bb278c4',
                'province_id' => '9a2e954b-413f-495e-a6cb-40fb5cb48ef0',
                'type' => 'Kabupaten',
                'name' => 'Sukabumi',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            162 =>
            array (
                'id' => '9a2e956b-e49b-48ba-8f02-c2cc6113855e',
                'province_id' => '9a2e954b-413f-495e-a6cb-40fb5cb48ef0',
                'type' => 'Kabupaten',
                'name' => 'Cianjur',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            163 =>
            array (
                'id' => '9a2e956b-e663-494e-8a65-f37440a4ed48',
                'province_id' => '9a2e954b-413f-495e-a6cb-40fb5cb48ef0',
                'type' => 'Kabupaten',
                'name' => 'Bandung',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            164 =>
            array (
                'id' => '9a2e956b-e81e-4bbc-9bac-5ecaaf329481',
                'province_id' => '9a2e954b-413f-495e-a6cb-40fb5cb48ef0',
                'type' => 'Kabupaten',
                'name' => 'Garut',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            165 =>
            array (
                'id' => '9a2e956b-eab0-4b68-b95d-7bdcbe1b0f28',
                'province_id' => '9a2e954b-413f-495e-a6cb-40fb5cb48ef0',
                'type' => 'Kabupaten',
                'name' => 'Tasikmalaya',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            166 =>
            array (
                'id' => '9a2e956b-ebc9-4ed1-a3c5-edcc0b1e967d',
                'province_id' => '9a2e954b-413f-495e-a6cb-40fb5cb48ef0',
                'type' => 'Kabupaten',
                'name' => 'Ciamis',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            167 =>
            array (
                'id' => '9a2e956b-ecd9-4e6c-a519-2fc22fcfb6c2',
                'province_id' => '9a2e954b-413f-495e-a6cb-40fb5cb48ef0',
                'type' => 'Kabupaten',
                'name' => 'Kuningan',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            168 =>
            array (
                'id' => '9a2e956b-edfc-4f78-8092-d0c62923f9da',
                'province_id' => '9a2e954b-413f-495e-a6cb-40fb5cb48ef0',
                'type' => 'Kabupaten',
                'name' => 'Cirebon',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            169 =>
            array (
                'id' => '9a2e956b-ef1c-47b9-ad8e-dc80f4b1f379',
                'province_id' => '9a2e954b-413f-495e-a6cb-40fb5cb48ef0',
                'type' => 'Kabupaten',
                'name' => 'Majalengka',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            170 =>
            array (
                'id' => '9a2e956b-f02f-4da2-b746-d68739887e52',
                'province_id' => '9a2e954b-413f-495e-a6cb-40fb5cb48ef0',
                'type' => 'Kabupaten',
                'name' => 'Sumedang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            171 =>
            array (
                'id' => '9a2e956b-f13c-4f06-9070-1a37e6be0af9',
                'province_id' => '9a2e954b-413f-495e-a6cb-40fb5cb48ef0',
                'type' => 'Kabupaten',
                'name' => 'Indramayu',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            172 =>
            array (
                'id' => '9a2e956b-f24c-4dd2-8d4f-74d78b1b0300',
                'province_id' => '9a2e954b-413f-495e-a6cb-40fb5cb48ef0',
                'type' => 'Kabupaten',
                'name' => 'Subang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            173 =>
            array (
                'id' => '9a2e956b-f355-4b1d-8794-83ff4cccd203',
                'province_id' => '9a2e954b-413f-495e-a6cb-40fb5cb48ef0',
                'type' => 'Kabupaten',
                'name' => 'Purwakarta',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            174 =>
            array (
                'id' => '9a2e956b-f450-43ef-8247-5b0832e13ddc',
                'province_id' => '9a2e954b-413f-495e-a6cb-40fb5cb48ef0',
                'type' => 'Kabupaten',
                'name' => 'Karawang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            175 =>
            array (
                'id' => '9a2e956b-f55e-4642-a2b2-181e96d7eeef',
                'province_id' => '9a2e954b-413f-495e-a6cb-40fb5cb48ef0',
                'type' => 'Kabupaten',
                'name' => 'Bekasi',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            176 =>
            array (
                'id' => '9a2e956b-f661-4005-ba49-0db25abd3494',
                'province_id' => '9a2e954b-413f-495e-a6cb-40fb5cb48ef0',
                'type' => 'Kabupaten',
                'name' => 'Bandung Barat',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            177 =>
            array (
                'id' => '9a2e956b-f75d-4bab-a49c-e8bd631a6b1d',
                'province_id' => '9a2e954b-413f-495e-a6cb-40fb5cb48ef0',
                'type' => 'Kabupaten',
                'name' => 'Pangandaran',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            178 =>
            array (
                'id' => '9a2e956b-f84d-4ae5-ad8e-00c688632db8',
                'province_id' => '9a2e954b-413f-495e-a6cb-40fb5cb48ef0',
                'type' => 'Kota',
                'name' => 'Bogor',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            179 =>
            array (
                'id' => '9a2e956b-f949-4cc2-a141-3c821d2ca25f',
                'province_id' => '9a2e954b-413f-495e-a6cb-40fb5cb48ef0',
                'type' => 'Kota',
                'name' => 'Sukabumi',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            180 =>
            array (
                'id' => '9a2e956b-fa46-42bb-967e-477ca362722e',
                'province_id' => '9a2e954b-413f-495e-a6cb-40fb5cb48ef0',
                'type' => 'Kota',
                'name' => 'Bandung',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            181 =>
            array (
                'id' => '9a2e956b-fb5b-4326-9529-691c89cfa8d0',
                'province_id' => '9a2e954b-413f-495e-a6cb-40fb5cb48ef0',
                'type' => 'Kota',
                'name' => 'Cirebon',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            182 =>
            array (
                'id' => '9a2e956b-fc5e-4543-8bb2-5cf10b655b8c',
                'province_id' => '9a2e954b-413f-495e-a6cb-40fb5cb48ef0',
                'type' => 'Kota',
                'name' => 'Bekasi',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            183 =>
            array (
                'id' => '9a2e956b-fd67-4140-afa8-01fa59e042ee',
                'province_id' => '9a2e954b-413f-495e-a6cb-40fb5cb48ef0',
                'type' => 'Kota',
                'name' => 'Depok',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            184 =>
            array (
                'id' => '9a2e956b-fe6e-421b-ac1e-3ca15a26338d',
                'province_id' => '9a2e954b-413f-495e-a6cb-40fb5cb48ef0',
                'type' => 'Kota',
                'name' => 'Cimahi',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            185 =>
            array (
                'id' => '9a2e956b-ff6f-415b-82bd-c2d7ba412e1e',
                'province_id' => '9a2e954b-413f-495e-a6cb-40fb5cb48ef0',
                'type' => 'Kota',
                'name' => 'Tasikmalaya',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            186 =>
            array (
                'id' => '9a2e956c-0074-4f9f-9e78-9f1efc691410',
                'province_id' => '9a2e954b-413f-495e-a6cb-40fb5cb48ef0',
                'type' => 'Kota',
                'name' => 'Banjar',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            187 =>
            array (
                'id' => '9a2e956c-0175-4385-9f58-7c457c692bc2',
                'province_id' => '9a2e954b-44a1-4bd3-8a7c-cf8c732f54f4',
                'type' => 'Kabupaten',
                'name' => 'Cilacap',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            188 =>
            array (
                'id' => '9a2e956c-029e-4e0d-a2e2-b97928145489',
                'province_id' => '9a2e954b-44a1-4bd3-8a7c-cf8c732f54f4',
                'type' => 'Kabupaten',
                'name' => 'Banyumas',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            189 =>
            array (
                'id' => '9a2e956c-03d0-4aa6-ba3c-e24c9c73bb83',
                'province_id' => '9a2e954b-44a1-4bd3-8a7c-cf8c732f54f4',
                'type' => 'Kabupaten',
                'name' => 'Purbalingga',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            190 =>
            array (
                'id' => '9a2e956c-04eb-4b43-97f2-c7f1dfd75df3',
                'province_id' => '9a2e954b-44a1-4bd3-8a7c-cf8c732f54f4',
                'type' => 'Kabupaten',
                'name' => 'Banjarnegara',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            191 =>
            array (
                'id' => '9a2e956c-061f-4b4a-97a4-a64812d8b147',
                'province_id' => '9a2e954b-44a1-4bd3-8a7c-cf8c732f54f4',
                'type' => 'Kabupaten',
                'name' => 'Kebumen',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            192 =>
            array (
                'id' => '9a2e956c-0759-4d74-8216-dbaf2ccb4b31',
                'province_id' => '9a2e954b-44a1-4bd3-8a7c-cf8c732f54f4',
                'type' => 'Kabupaten',
                'name' => 'Purworejo',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            193 =>
            array (
                'id' => '9a2e956c-088d-41d1-8b16-62e612e1aefa',
                'province_id' => '9a2e954b-44a1-4bd3-8a7c-cf8c732f54f4',
                'type' => 'Kabupaten',
                'name' => 'Wonosobo',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            194 =>
            array (
                'id' => '9a2e956c-09b1-47bb-9264-a97799f03fbf',
                'province_id' => '9a2e954b-44a1-4bd3-8a7c-cf8c732f54f4',
                'type' => 'Kabupaten',
                'name' => 'Magelang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            195 =>
            array (
                'id' => '9a2e956c-0ac5-417c-aa1e-2ad622750b48',
                'province_id' => '9a2e954b-44a1-4bd3-8a7c-cf8c732f54f4',
                'type' => 'Kabupaten',
                'name' => 'Boyolali',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            196 =>
            array (
                'id' => '9a2e956c-0bcb-4316-ac95-3575029863f4',
                'province_id' => '9a2e954b-44a1-4bd3-8a7c-cf8c732f54f4',
                'type' => 'Kabupaten',
                'name' => 'Klaten',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            197 =>
            array (
                'id' => '9a2e956c-0cf8-470f-8bca-540d8687b1e5',
                'province_id' => '9a2e954b-44a1-4bd3-8a7c-cf8c732f54f4',
                'type' => 'Kabupaten',
                'name' => 'Sukoharjo',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            198 =>
            array (
                'id' => '9a2e956c-0e9c-44e3-800d-d4431bc3f52f',
                'province_id' => '9a2e954b-44a1-4bd3-8a7c-cf8c732f54f4',
                'type' => 'Kabupaten',
                'name' => 'Wonogiri',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            199 =>
            array (
                'id' => '9a2e956c-0fad-4ac1-99a5-f780f29ea2bb',
                'province_id' => '9a2e954b-44a1-4bd3-8a7c-cf8c732f54f4',
                'type' => 'Kabupaten',
                'name' => 'Karanganyar',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            200 =>
            array (
                'id' => '9a2e956c-10b3-42c4-aa82-64b41a3b6eb5',
                'province_id' => '9a2e954b-44a1-4bd3-8a7c-cf8c732f54f4',
                'type' => 'Kabupaten',
                'name' => 'Sragen',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            201 =>
            array (
                'id' => '9a2e956c-11d7-4024-b564-9441cfc2d9f6',
                'province_id' => '9a2e954b-44a1-4bd3-8a7c-cf8c732f54f4',
                'type' => 'Kabupaten',
                'name' => 'Grobogan',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            202 =>
            array (
                'id' => '9a2e956c-12e7-440f-adb9-49de01609080',
                'province_id' => '9a2e954b-44a1-4bd3-8a7c-cf8c732f54f4',
                'type' => 'Kabupaten',
                'name' => 'Blora',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            203 =>
            array (
                'id' => '9a2e956c-13f9-4dcf-a93e-4f4425471280',
                'province_id' => '9a2e954b-44a1-4bd3-8a7c-cf8c732f54f4',
                'type' => 'Kabupaten',
                'name' => 'Rembang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            204 =>
            array (
                'id' => '9a2e956c-1508-4504-9910-1b5349f7daf4',
                'province_id' => '9a2e954b-44a1-4bd3-8a7c-cf8c732f54f4',
                'type' => 'Kabupaten',
                'name' => 'Pati',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            205 =>
            array (
                'id' => '9a2e956c-1629-4f9d-b58a-f08ba1b6dc2d',
                'province_id' => '9a2e954b-44a1-4bd3-8a7c-cf8c732f54f4',
                'type' => 'Kabupaten',
                'name' => 'Kudus',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            206 =>
            array (
                'id' => '9a2e956c-1774-48ea-8ac5-5fc43aaa3dd4',
                'province_id' => '9a2e954b-44a1-4bd3-8a7c-cf8c732f54f4',
                'type' => 'Kabupaten',
                'name' => 'Jepara',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            207 =>
            array (
                'id' => '9a2e956c-1880-49d0-a124-e8da74414a78',
                'province_id' => '9a2e954b-44a1-4bd3-8a7c-cf8c732f54f4',
                'type' => 'Kabupaten',
                'name' => 'Demak',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            208 =>
            array (
                'id' => '9a2e956c-1989-43d6-9ce2-478aa78a1ac9',
                'province_id' => '9a2e954b-44a1-4bd3-8a7c-cf8c732f54f4',
                'type' => 'Kabupaten',
                'name' => 'Semarang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            209 =>
            array (
                'id' => '9a2e956c-1a94-482c-8d24-cc8a59a594a7',
                'province_id' => '9a2e954b-44a1-4bd3-8a7c-cf8c732f54f4',
                'type' => 'Kabupaten',
                'name' => 'Temanggung',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            210 =>
            array (
                'id' => '9a2e956c-1ba4-4932-acfc-9232532c9805',
                'province_id' => '9a2e954b-44a1-4bd3-8a7c-cf8c732f54f4',
                'type' => 'Kabupaten',
                'name' => 'Kendal',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            211 =>
            array (
                'id' => '9a2e956c-1cb3-4a10-8c51-e04823ad966c',
                'province_id' => '9a2e954b-44a1-4bd3-8a7c-cf8c732f54f4',
                'type' => 'Kabupaten',
                'name' => 'Batang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            212 =>
            array (
                'id' => '9a2e956c-1dbe-42ca-b18a-d40a41051665',
                'province_id' => '9a2e954b-44a1-4bd3-8a7c-cf8c732f54f4',
                'type' => 'Kabupaten',
                'name' => 'Pekalongan',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            213 =>
            array (
                'id' => '9a2e956c-1ed0-4a89-93be-95d31fe24193',
                'province_id' => '9a2e954b-44a1-4bd3-8a7c-cf8c732f54f4',
                'type' => 'Kabupaten',
                'name' => 'Pemalang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            214 =>
            array (
                'id' => '9a2e956c-1fe0-4796-865d-ef88ccfa6a9e',
                'province_id' => '9a2e954b-44a1-4bd3-8a7c-cf8c732f54f4',
                'type' => 'Kabupaten',
                'name' => 'Tegal',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            215 =>
            array (
                'id' => '9a2e956c-20ee-4dac-bedf-83f8ea4b7b46',
                'province_id' => '9a2e954b-44a1-4bd3-8a7c-cf8c732f54f4',
                'type' => 'Kabupaten',
                'name' => 'Brebes',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            216 =>
            array (
                'id' => '9a2e956c-2203-4ecf-a0db-d5e246437c4b',
                'province_id' => '9a2e954b-44a1-4bd3-8a7c-cf8c732f54f4',
                'type' => 'Kota',
                'name' => 'Magelang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            217 =>
            array (
                'id' => '9a2e956c-22fb-43d0-801b-a57b099b3390',
                'province_id' => '9a2e954b-44a1-4bd3-8a7c-cf8c732f54f4',
                'type' => 'Kota',
                'name' => 'Surakarta',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            218 =>
            array (
                'id' => '9a2e956c-23ef-4ed1-ba45-6ecd5bdffa3f',
                'province_id' => '9a2e954b-44a1-4bd3-8a7c-cf8c732f54f4',
                'type' => 'Kota',
                'name' => 'Salatiga',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            219 =>
            array (
                'id' => '9a2e956c-24dc-4a21-bdd0-39d146a981ab',
                'province_id' => '9a2e954b-44a1-4bd3-8a7c-cf8c732f54f4',
                'type' => 'Kota',
                'name' => 'Semarang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            220 =>
            array (
                'id' => '9a2e956c-25d8-4536-9858-6e7a54d12383',
                'province_id' => '9a2e954b-44a1-4bd3-8a7c-cf8c732f54f4',
                'type' => 'Kota',
                'name' => 'Pekalongan',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            221 =>
            array (
                'id' => '9a2e956c-26d7-404d-b7d4-e38a4643c8b0',
                'province_id' => '9a2e954b-44a1-4bd3-8a7c-cf8c732f54f4',
                'type' => 'Kota',
                'name' => 'Tegal',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            222 =>
            array (
                'id' => '9a2e956c-27cd-4f02-87ca-9ec69c5cdb70',
                'province_id' => '9a2e954b-492b-4d9a-bf76-9d218dac38f1',
                'type' => 'Kabupaten',
                'name' => 'Kulon Progo',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            223 =>
            array (
                'id' => '9a2e956c-28c0-4c63-a474-48b40faa3cf7',
                'province_id' => '9a2e954b-492b-4d9a-bf76-9d218dac38f1',
                'type' => 'Kabupaten',
                'name' => 'Bantul',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            224 =>
            array (
                'id' => '9a2e956c-29b5-4667-9b27-c368e301b61d',
                'province_id' => '9a2e954b-492b-4d9a-bf76-9d218dac38f1',
                'type' => 'Kabupaten',
                'name' => 'Gunungkidul',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            225 =>
            array (
                'id' => '9a2e956c-2ab5-40bc-b520-3445d4915df2',
                'province_id' => '9a2e954b-492b-4d9a-bf76-9d218dac38f1',
                'type' => 'Kabupaten',
                'name' => 'Sleman',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            226 =>
            array (
                'id' => '9a2e956c-2ba8-4b35-b463-d352868bebfc',
                'province_id' => '9a2e954b-492b-4d9a-bf76-9d218dac38f1',
                'type' => 'Kota',
                'name' => 'Yogyakarta',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            227 =>
            array (
                'id' => '9a2e956c-2c9a-4cd6-9e03-6ba886bf4184',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kabupaten',
                'name' => 'Pacitan',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            228 =>
            array (
                'id' => '9a2e956c-2d9a-4f95-9f3a-a5cb0491e3d3',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kabupaten',
                'name' => 'Ponorogo',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            229 =>
            array (
                'id' => '9a2e956c-2ea7-4c35-8e11-bf9b1c81a6ad',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kabupaten',
                'name' => 'Trenggalek',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            230 =>
            array (
                'id' => '9a2e956c-2fa8-43ea-bc88-331daaeb3973',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kabupaten',
                'name' => 'Tulungagung',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            231 =>
            array (
                'id' => '9a2e956c-30b9-41ce-9d91-33d22c3d4584',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kabupaten',
                'name' => 'Blitar',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            232 =>
            array (
                'id' => '9a2e956c-31be-48ec-be7b-aad8960d6285',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kabupaten',
                'name' => 'Kediri',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            233 =>
            array (
                'id' => '9a2e956c-32ce-4bcf-9bc5-d3204b1972bf',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kabupaten',
                'name' => 'Malang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            234 =>
            array (
                'id' => '9a2e956c-33e7-4b56-866d-68c95856b800',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kabupaten',
                'name' => 'Lumajang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            235 =>
            array (
                'id' => '9a2e956c-3501-4b39-b611-101ae633c5d0',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kabupaten',
                'name' => 'Jember',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            236 =>
            array (
                'id' => '9a2e956c-36cb-4f0f-a2c7-ee87e8c51cd5',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kabupaten',
                'name' => 'Banyuwangi',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            237 =>
            array (
                'id' => '9a2e956c-387a-4635-93ce-d0a060ded384',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kabupaten',
                'name' => 'Bondowoso',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            238 =>
            array (
                'id' => '9a2e956c-3980-4585-a5e9-6508032f1467',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kabupaten',
                'name' => 'Situbondo',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            239 =>
            array (
                'id' => '9a2e956c-3a7c-469a-b253-b5c1ab585bcb',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kabupaten',
                'name' => 'Probolinggo',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            240 =>
            array (
                'id' => '9a2e956c-3b8c-4b9e-834d-4a5069b5e42f',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kabupaten',
                'name' => 'Pasuruan',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            241 =>
            array (
                'id' => '9a2e956c-3c9c-4268-ab41-8810aacfc102',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kabupaten',
                'name' => 'Sidoarjo',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            242 =>
            array (
                'id' => '9a2e956c-3dab-4d9d-aa1d-8f53942777f3',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kabupaten',
                'name' => 'Mojokerto',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            243 =>
            array (
                'id' => '9a2e956c-3eb3-4c2a-9fbf-14f6e4214582',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kabupaten',
                'name' => 'Jombang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            244 =>
            array (
                'id' => '9a2e956c-3fbc-4fd9-b7f7-ffe41eace0bb',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kabupaten',
                'name' => 'Nganjuk',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            245 =>
            array (
                'id' => '9a2e956c-40cf-40c7-beda-2afa2ff38c95',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kabupaten',
                'name' => 'Madiun',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            246 =>
            array (
                'id' => '9a2e956c-41e4-4e5d-9b20-b7d05afa8fb9',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kabupaten',
                'name' => 'Magetan',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            247 =>
            array (
                'id' => '9a2e956c-435b-4bf3-8502-780559c705ba',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kabupaten',
                'name' => 'Ngawi',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            248 =>
            array (
                'id' => '9a2e956c-4491-4c27-ba5f-3754834694ca',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kabupaten',
                'name' => 'Bojonegoro',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            249 =>
            array (
                'id' => '9a2e956c-45ce-4ce3-b522-c94cb7a0baf5',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kabupaten',
                'name' => 'Tuban',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            250 =>
            array (
                'id' => '9a2e956c-4708-45b5-a4e1-27604967a13e',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kabupaten',
                'name' => 'Lamongan',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            251 =>
            array (
                'id' => '9a2e956c-484e-46d0-91f9-28afe66f09f4',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kabupaten',
                'name' => 'Gresik',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            252 =>
            array (
                'id' => '9a2e956c-498a-409c-b8c3-7a7214bf2921',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kabupaten',
                'name' => 'Bangkalan',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            253 =>
            array (
                'id' => '9a2e956c-4ab8-4cd2-a33d-f7f469ab0c77',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kabupaten',
                'name' => 'Sampang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            254 =>
            array (
                'id' => '9a2e956c-4bdf-4540-8eb8-9e7541003427',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kabupaten',
                'name' => 'Pamekasan',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            255 =>
            array (
                'id' => '9a2e956c-4d01-4b8e-b490-0cc23f40b1e5',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kabupaten',
                'name' => 'Sumenep',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            256 =>
            array (
                'id' => '9a2e956c-4e32-4ad0-b9f1-e504df0653b4',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kota',
                'name' => 'Kediri',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            257 =>
            array (
                'id' => '9a2e956c-4f49-4856-b926-7312f7edbd2b',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kota',
                'name' => 'Blitar',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            258 =>
            array (
                'id' => '9a2e956c-5057-4e45-9ac1-c69ace4341a1',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kota',
                'name' => 'Malang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            259 =>
            array (
                'id' => '9a2e956c-516a-4c5f-ab3e-3358771a54cf',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kota',
                'name' => 'Probolinggo',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            260 =>
            array (
                'id' => '9a2e956c-527a-4c96-87be-7f0fc8bf3b40',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kota',
                'name' => 'Pasuruan',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            261 =>
            array (
                'id' => '9a2e956c-5384-4f28-b1fe-307ae3ccd62c',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kota',
                'name' => 'Mojokerto',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            262 =>
            array (
                'id' => '9a2e956c-548d-4c6a-9b49-34811ba71c0f',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kota',
                'name' => 'Madiun',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            263 =>
            array (
                'id' => '9a2e956c-5599-43f5-a099-70fe30e907b5',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kota',
                'name' => 'Surabaya',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            264 =>
            array (
                'id' => '9a2e956c-56c0-44a6-868b-1ec3b5c982c7',
                'province_id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'type' => 'Kota',
                'name' => 'Batu',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            265 =>
            array (
                'id' => '9a2e956c-57ca-4138-9539-032c566d759c',
                'province_id' => '9a2e954b-51f0-436b-a12b-7bd484cc0471',
                'type' => 'Kabupaten',
                'name' => 'Pandeglang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            266 =>
            array (
                'id' => '9a2e956c-58f9-444a-820f-52bd614e2020',
                'province_id' => '9a2e954b-51f0-436b-a12b-7bd484cc0471',
                'type' => 'Kabupaten',
                'name' => 'Lebak',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            267 =>
            array (
                'id' => '9a2e956c-5a35-4c39-9679-70b4bc603f52',
                'province_id' => '9a2e954b-51f0-436b-a12b-7bd484cc0471',
                'type' => 'Kabupaten',
                'name' => 'Tangerang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            268 =>
            array (
                'id' => '9a2e956c-5b70-4908-b66b-3d2d472d9418',
                'province_id' => '9a2e954b-51f0-436b-a12b-7bd484cc0471',
                'type' => 'Kabupaten',
                'name' => 'Serang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            269 =>
            array (
                'id' => '9a2e956c-5ca0-4fb1-99d6-e7082af23c91',
                'province_id' => '9a2e954b-51f0-436b-a12b-7bd484cc0471',
                'type' => 'Kota',
                'name' => 'Tangerang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            270 =>
            array (
                'id' => '9a2e956c-5dba-4653-af6d-5b293caaf0c6',
                'province_id' => '9a2e954b-51f0-436b-a12b-7bd484cc0471',
                'type' => 'Kota',
                'name' => 'Cilegon',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            271 =>
            array (
                'id' => '9a2e956c-5fa3-4be4-9549-f5f30c8e2165',
                'province_id' => '9a2e954b-51f0-436b-a12b-7bd484cc0471',
                'type' => 'Kota',
                'name' => 'Serang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            272 =>
            array (
                'id' => '9a2e956c-60d1-4931-89d6-f5596d5d21b3',
                'province_id' => '9a2e954b-51f0-436b-a12b-7bd484cc0471',
                'type' => 'Kota',
                'name' => 'Tangerang Selatan',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            273 =>
            array (
                'id' => '9a2e956c-61e5-4314-9121-f3f1c8416b34',
                'province_id' => '9a2e954b-5384-4d1e-bb80-bc2db471c162',
                'type' => 'Kabupaten',
                'name' => 'Jembrana',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            274 =>
            array (
                'id' => '9a2e956c-62ee-4b08-be1e-de366df6e21e',
                'province_id' => '9a2e954b-5384-4d1e-bb80-bc2db471c162',
                'type' => 'Kabupaten',
                'name' => 'Tabanan',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            275 =>
            array (
                'id' => '9a2e956c-6403-4a20-920e-9e80de42452a',
                'province_id' => '9a2e954b-5384-4d1e-bb80-bc2db471c162',
                'type' => 'Kabupaten',
                'name' => 'Badung',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            276 =>
            array (
                'id' => '9a2e956c-654f-4005-9c5b-d0c33a7a234a',
                'province_id' => '9a2e954b-5384-4d1e-bb80-bc2db471c162',
                'type' => 'Kabupaten',
                'name' => 'Gianyar',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            277 =>
            array (
                'id' => '9a2e956c-6696-4d3b-85bf-636f696a6da2',
                'province_id' => '9a2e954b-5384-4d1e-bb80-bc2db471c162',
                'type' => 'Kabupaten',
                'name' => 'Klungkung',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            278 =>
            array (
                'id' => '9a2e956c-67a9-4e28-a5db-b18651809848',
                'province_id' => '9a2e954b-5384-4d1e-bb80-bc2db471c162',
                'type' => 'Kabupaten',
                'name' => 'Bangli',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            279 =>
            array (
                'id' => '9a2e956c-68ba-4e80-9e97-bcd09d7ed3be',
                'province_id' => '9a2e954b-5384-4d1e-bb80-bc2db471c162',
                'type' => 'Kabupaten',
                'name' => 'Karangasem',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            280 =>
            array (
                'id' => '9a2e956c-69b7-4435-a933-bbbc1a2400e2',
                'province_id' => '9a2e954b-5384-4d1e-bb80-bc2db471c162',
                'type' => 'Kabupaten',
                'name' => 'Buleleng',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            281 =>
            array (
                'id' => '9a2e956c-6ab6-4e9f-8e98-4efa7cf93e05',
                'province_id' => '9a2e954b-5384-4d1e-bb80-bc2db471c162',
                'type' => 'Kota',
                'name' => 'Denpasar',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            282 =>
            array (
                'id' => '9a2e956c-6ba7-4166-b760-bc8bfad5b65f',
                'province_id' => '9a2e954b-548f-4ad5-8641-a1e248fcacc4',
                'type' => 'Kabupaten',
                'name' => 'Lombok Barat',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            283 =>
            array (
                'id' => '9a2e956c-6c9e-48f2-b686-c65056d3cda0',
                'province_id' => '9a2e954b-548f-4ad5-8641-a1e248fcacc4',
                'type' => 'Kabupaten',
                'name' => 'Lombok Tengah',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            284 =>
            array (
                'id' => '9a2e956c-6d99-4005-8f94-ca72c68bd0d0',
                'province_id' => '9a2e954b-548f-4ad5-8641-a1e248fcacc4',
                'type' => 'Kabupaten',
                'name' => 'Lombok Timur',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            285 =>
            array (
                'id' => '9a2e956c-6e9f-4ede-9294-04104b1f80ce',
                'province_id' => '9a2e954b-548f-4ad5-8641-a1e248fcacc4',
                'type' => 'Kabupaten',
                'name' => 'Sumbawa',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            286 =>
            array (
                'id' => '9a2e956c-6f9b-46c8-90a0-5206e97d89d1',
                'province_id' => '9a2e954b-548f-4ad5-8641-a1e248fcacc4',
                'type' => 'Kabupaten',
                'name' => 'Dompu',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            287 =>
            array (
                'id' => '9a2e956c-7090-44ce-a7a4-4a8ca7e7a4c7',
                'province_id' => '9a2e954b-548f-4ad5-8641-a1e248fcacc4',
                'type' => 'Kabupaten',
                'name' => 'Bima',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            288 =>
            array (
                'id' => '9a2e956c-7191-49b6-a8c2-96ca9d27e6b4',
                'province_id' => '9a2e954b-548f-4ad5-8641-a1e248fcacc4',
                'type' => 'Kabupaten',
                'name' => 'Sumbawa Barat',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            289 =>
            array (
                'id' => '9a2e956c-729c-4e1c-8e9a-02f96fca23c0',
                'province_id' => '9a2e954b-548f-4ad5-8641-a1e248fcacc4',
                'type' => 'Kabupaten',
                'name' => 'Lombok Utara',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            290 =>
            array (
                'id' => '9a2e956c-73a7-447a-9ff9-34755655ea51',
                'province_id' => '9a2e954b-548f-4ad5-8641-a1e248fcacc4',
                'type' => 'Kota',
                'name' => 'Mataram',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            291 =>
            array (
                'id' => '9a2e956c-74b4-40b2-81d2-9ec73740f25b',
                'province_id' => '9a2e954b-548f-4ad5-8641-a1e248fcacc4',
                'type' => 'Kota',
                'name' => 'Bima',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            292 =>
            array (
                'id' => '9a2e956c-75c0-4459-9af3-2595bc5b2845',
                'province_id' => '9a2e954b-567a-4b8a-87c1-23af06304b44',
                'type' => 'Kabupaten',
                'name' => 'Kupang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            293 =>
            array (
                'id' => '9a2e956c-76eb-4049-88e6-a67f20521ca0',
                'province_id' => '9a2e954b-567a-4b8a-87c1-23af06304b44',
                'type' => 'Kabupaten',
                'name' => 'Kab Timor Tengah Selatan',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            294 =>
            array (
                'id' => '9a2e956c-7814-4c16-b1ae-1024a0568007',
                'province_id' => '9a2e954b-567a-4b8a-87c1-23af06304b44',
                'type' => 'Kabupaten',
                'name' => 'Timor Tengah Utara',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            295 =>
            array (
                'id' => '9a2e956c-7933-462f-bf32-3d6728b84f3e',
                'province_id' => '9a2e954b-567a-4b8a-87c1-23af06304b44',
                'type' => 'Kabupaten',
                'name' => 'Belu',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            296 =>
            array (
                'id' => '9a2e956c-7a49-484a-8388-2e562b46d330',
                'province_id' => '9a2e954b-567a-4b8a-87c1-23af06304b44',
                'type' => 'Kabupaten',
                'name' => 'Alor',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            297 =>
            array (
                'id' => '9a2e956c-7b62-4987-9c40-0c5558217f9f',
                'province_id' => '9a2e954b-567a-4b8a-87c1-23af06304b44',
                'type' => 'Kabupaten',
                'name' => 'Flores Timur',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            298 =>
            array (
                'id' => '9a2e956c-7c87-43a0-a13f-8a35db8c3f37',
                'province_id' => '9a2e954b-567a-4b8a-87c1-23af06304b44',
                'type' => 'Kabupaten',
                'name' => 'Sikka',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            299 =>
            array (
                'id' => '9a2e956c-7da5-474c-924e-73c23ae86bf3',
                'province_id' => '9a2e954b-567a-4b8a-87c1-23af06304b44',
                'type' => 'Kabupaten',
                'name' => 'Ende',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            300 =>
            array (
                'id' => '9a2e956c-7eca-4eef-b2ff-471ce370cec0',
                'province_id' => '9a2e954b-567a-4b8a-87c1-23af06304b44',
                'type' => 'Kabupaten',
                'name' => 'Ngada',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            301 =>
            array (
                'id' => '9a2e956c-7fd1-47c7-a980-e2ec7ec9bc89',
                'province_id' => '9a2e954b-567a-4b8a-87c1-23af06304b44',
                'type' => 'Kabupaten',
                'name' => 'Manggarai',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            302 =>
            array (
                'id' => '9a2e956c-80cc-4810-8285-e6910cfa4456',
                'province_id' => '9a2e954b-567a-4b8a-87c1-23af06304b44',
                'type' => 'Kabupaten',
                'name' => 'Sumba Timur',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            303 =>
            array (
                'id' => '9a2e956c-81ea-45b1-9d36-e61a5ff2b9b3',
                'province_id' => '9a2e954b-567a-4b8a-87c1-23af06304b44',
                'type' => 'Kabupaten',
                'name' => 'Sumba Barat',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            304 =>
            array (
                'id' => '9a2e956c-8314-40ee-a417-3d492e63f356',
                'province_id' => '9a2e954b-567a-4b8a-87c1-23af06304b44',
                'type' => 'Kabupaten',
                'name' => 'Lembata',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            305 =>
            array (
                'id' => '9a2e956c-8428-438a-b7c3-4a3b9858961a',
                'province_id' => '9a2e954b-567a-4b8a-87c1-23af06304b44',
                'type' => 'Kabupaten',
                'name' => 'Rote Ndao',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            306 =>
            array (
                'id' => '9a2e956c-853d-4d7a-bacd-9e03a7036d3c',
                'province_id' => '9a2e954b-567a-4b8a-87c1-23af06304b44',
                'type' => 'Kabupaten',
                'name' => 'Manggarai Barat',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            307 =>
            array (
                'id' => '9a2e956c-863b-41c4-b3b4-cc2368b6ea1a',
                'province_id' => '9a2e954b-567a-4b8a-87c1-23af06304b44',
                'type' => 'Kabupaten',
                'name' => 'Nagekeo',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            308 =>
            array (
                'id' => '9a2e956c-8733-4bd5-a4ed-1e2ede17bd52',
                'province_id' => '9a2e954b-567a-4b8a-87c1-23af06304b44',
                'type' => 'Kabupaten',
                'name' => 'Sumba Tengah',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            309 =>
            array (
                'id' => '9a2e956c-8824-47bc-a1f9-9379585e4b4e',
                'province_id' => '9a2e954b-567a-4b8a-87c1-23af06304b44',
                'type' => 'Kabupaten',
                'name' => 'Sumba Barat Daya',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            310 =>
            array (
                'id' => '9a2e956c-8920-4822-a809-033aec3b2300',
                'province_id' => '9a2e954b-567a-4b8a-87c1-23af06304b44',
                'type' => 'Kabupaten',
                'name' => 'Manggarai Timur',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            311 =>
            array (
                'id' => '9a2e956c-8a21-435e-ae8f-32fc001357ac',
                'province_id' => '9a2e954b-567a-4b8a-87c1-23af06304b44',
                'type' => 'Kabupaten',
                'name' => 'Sabu Raijua',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            312 =>
            array (
                'id' => '9a2e956c-8b12-429a-8e85-46e9ac9c6745',
                'province_id' => '9a2e954b-567a-4b8a-87c1-23af06304b44',
                'type' => 'Kabupaten',
                'name' => 'Malaka',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            313 =>
            array (
                'id' => '9a2e956c-8c0b-4db8-adc6-59395697a263',
                'province_id' => '9a2e954b-567a-4b8a-87c1-23af06304b44',
                'type' => 'Kota',
                'name' => 'Kupang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            314 =>
            array (
                'id' => '9a2e956c-8cfc-4588-9f61-17bfd07f2146',
                'province_id' => '9a2e954b-58ba-4af1-a41e-b704d9f92764',
                'type' => 'Kabupaten',
                'name' => 'Sambas',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            315 =>
            array (
                'id' => '9a2e956c-8dfa-473b-9120-e57ee0e305dd',
                'province_id' => '9a2e954b-58ba-4af1-a41e-b704d9f92764',
                'type' => 'Kabupaten',
                'name' => 'Mempawah',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            316 =>
            array (
                'id' => '9a2e956c-8ee9-4734-8b3a-b892f1a8a00b',
                'province_id' => '9a2e954b-58ba-4af1-a41e-b704d9f92764',
                'type' => 'Kabupaten',
                'name' => 'Sanggau',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            317 =>
            array (
                'id' => '9a2e956c-8fec-47ae-9d92-f011d60a9097',
                'province_id' => '9a2e954b-58ba-4af1-a41e-b704d9f92764',
                'type' => 'Kabupaten',
                'name' => 'Ketapang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            318 =>
            array (
                'id' => '9a2e956c-90f9-40e3-9cdc-002edaa1d3e8',
                'province_id' => '9a2e954b-58ba-4af1-a41e-b704d9f92764',
                'type' => 'Kabupaten',
                'name' => 'Sintang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            319 =>
            array (
                'id' => '9a2e956c-920f-40ba-8b8a-7d1a415e2ffa',
                'province_id' => '9a2e954b-58ba-4af1-a41e-b704d9f92764',
                'type' => 'Kabupaten',
                'name' => 'Kapuas Hulu',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            320 =>
            array (
                'id' => '9a2e956c-931e-4c94-a5ef-9812f06f1d64',
                'province_id' => '9a2e954b-58ba-4af1-a41e-b704d9f92764',
                'type' => 'Kabupaten',
                'name' => 'Bengkayang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            321 =>
            array (
                'id' => '9a2e956c-9450-4e6f-bb5e-3c89aee7374e',
                'province_id' => '9a2e954b-58ba-4af1-a41e-b704d9f92764',
                'type' => 'Kabupaten',
                'name' => 'Landak',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            322 =>
            array (
                'id' => '9a2e956c-966d-4e5c-b437-18d004526703',
                'province_id' => '9a2e954b-58ba-4af1-a41e-b704d9f92764',
                'type' => 'Kabupaten',
                'name' => 'Sekadau',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            323 =>
            array (
                'id' => '9a2e956c-9773-42a6-94cf-475aec29f6ef',
                'province_id' => '9a2e954b-58ba-4af1-a41e-b704d9f92764',
                'type' => 'Kabupaten',
                'name' => 'Melawi',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            324 =>
            array (
                'id' => '9a2e956c-9879-4e0e-a2d1-1c9c8baa563c',
                'province_id' => '9a2e954b-58ba-4af1-a41e-b704d9f92764',
                'type' => 'Kabupaten',
                'name' => 'Kayong Utara',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            325 =>
            array (
                'id' => '9a2e956c-9979-4f35-b1ad-60465382b6c7',
                'province_id' => '9a2e954b-58ba-4af1-a41e-b704d9f92764',
                'type' => 'Kabupaten',
                'name' => 'Kubu Raya',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            326 =>
            array (
                'id' => '9a2e956c-9ea4-449b-98ca-7cccb0551141',
                'province_id' => '9a2e954b-58ba-4af1-a41e-b704d9f92764',
                'type' => 'Kota',
                'name' => 'Pontianak',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            327 =>
            array (
                'id' => '9a2e956c-9f9d-44dc-bdaf-0be66888442b',
                'province_id' => '9a2e954b-58ba-4af1-a41e-b704d9f92764',
                'type' => 'Kota',
                'name' => 'Singkawang',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            328 =>
            array (
                'id' => '9a2e956c-a0ab-4974-9bd1-8a5d681f4962',
                'province_id' => '9a2e954b-5a60-43f8-bc34-40b9249cd065',
                'type' => 'Kabupaten',
                'name' => 'Kotawaringin Barat',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            329 =>
            array (
                'id' => '9a2e956c-a1cb-450c-8891-14e2af5a2800',
                'province_id' => '9a2e954b-5a60-43f8-bc34-40b9249cd065',
                'type' => 'Kabupaten',
                'name' => 'Kotawaringin Timur',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            330 =>
            array (
                'id' => '9a2e956c-a2e5-4649-b3db-953b3e3e440a',
                'province_id' => '9a2e954b-5a60-43f8-bc34-40b9249cd065',
                'type' => 'Kabupaten',
                'name' => 'Kapuas',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            331 =>
            array (
                'id' => '9a2e956c-a403-4208-877f-51b136a5271e',
                'province_id' => '9a2e954b-5a60-43f8-bc34-40b9249cd065',
                'type' => 'Kabupaten',
                'name' => 'Barito Selatan',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            332 =>
            array (
                'id' => '9a2e956c-a5e3-448a-99a2-4c1614db7659',
                'province_id' => '9a2e954b-5a60-43f8-bc34-40b9249cd065',
                'type' => 'Kabupaten',
                'name' => 'Barito Utara',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            333 =>
            array (
                'id' => '9a2e956c-a6f3-4032-aaba-cc1f0906c051',
                'province_id' => '9a2e954b-5a60-43f8-bc34-40b9249cd065',
                'type' => 'Kabupaten',
                'name' => 'Katingan',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            334 =>
            array (
                'id' => '9a2e956c-a80c-4168-90f0-c01c8d67abc7',
                'province_id' => '9a2e954b-5a60-43f8-bc34-40b9249cd065',
                'type' => 'Kabupaten',
                'name' => 'Seruyan',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            335 =>
            array (
                'id' => '9a2e956c-a91b-403b-8946-11367290f233',
                'province_id' => '9a2e954b-5a60-43f8-bc34-40b9249cd065',
                'type' => 'Kabupaten',
                'name' => 'Sukamara',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            336 =>
            array (
                'id' => '9a2e956c-aa2e-45a6-b419-fe065b73e7e8',
                'province_id' => '9a2e954b-5a60-43f8-bc34-40b9249cd065',
                'type' => 'Kabupaten',
                'name' => 'Lamandau',
                'created_at' => '2023-09-21 05:24:20',
                'updated_at' => '2023-09-21 05:24:20',
                'deleted_at' => NULL,
            ),
            337 =>
            array (
                'id' => '9a2e956c-ab49-4f2e-b621-1dc9ee2b3444',
                'province_id' => '9a2e954b-5a60-43f8-bc34-40b9249cd065',
                'type' => 'Kabupaten',
                'name' => 'Gunung Mas',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            338 =>
            array (
                'id' => '9a2e956c-ac5a-46ce-96e2-b2ed323416f7',
                'province_id' => '9a2e954b-5a60-43f8-bc34-40b9249cd065',
                'type' => 'Kabupaten',
                'name' => 'Pulang Pisau',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            339 =>
            array (
                'id' => '9a2e956c-ad5c-4437-8986-08e6277b4bc1',
                'province_id' => '9a2e954b-5a60-43f8-bc34-40b9249cd065',
                'type' => 'Kabupaten',
                'name' => 'Murung Raya',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            340 =>
            array (
                'id' => '9a2e956c-ae72-4546-9050-4bae1cff3586',
                'province_id' => '9a2e954b-5a60-43f8-bc34-40b9249cd065',
                'type' => 'Kabupaten',
                'name' => 'Barito Timur',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            341 =>
            array (
                'id' => '9a2e956c-af82-4f5e-add7-f3d2b8493052',
                'province_id' => '9a2e954b-5a60-43f8-bc34-40b9249cd065',
                'type' => 'Kota',
                'name' => 'Palangkaraya',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            342 =>
            array (
                'id' => '9a2e956c-b08b-4254-a4c6-2d04631fa64d',
                'province_id' => '9a2e954b-5bcc-4448-b014-5d501c211bd5',
                'type' => 'Kabupaten',
                'name' => 'Tanah Laut',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            343 =>
            array (
                'id' => '9a2e956c-b1cc-4869-9cf7-7f8149af2e97',
                'province_id' => '9a2e954b-5bcc-4448-b014-5d501c211bd5',
                'type' => 'Kabupaten',
                'name' => 'Kotabaru',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            344 =>
            array (
                'id' => '9a2e956c-b37e-4b49-8fd3-65d0e34ed600',
                'province_id' => '9a2e954b-5bcc-4448-b014-5d501c211bd5',
                'type' => 'Kabupaten',
                'name' => 'Banjar',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            345 =>
            array (
                'id' => '9a2e956c-b4ed-49ee-8795-eb4b9b6ce5dc',
                'province_id' => '9a2e954b-5bcc-4448-b014-5d501c211bd5',
                'type' => 'Kabupaten',
                'name' => 'Barito Kuala',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            346 =>
            array (
                'id' => '9a2e956c-b62a-4c68-b931-9a1b5e0287ad',
                'province_id' => '9a2e954b-5bcc-4448-b014-5d501c211bd5',
                'type' => 'Kabupaten',
                'name' => 'Tapin',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            347 =>
            array (
                'id' => '9a2e956c-b79a-410e-b78b-0aae6886c3c8',
                'province_id' => '9a2e954b-5bcc-4448-b014-5d501c211bd5',
                'type' => 'Kabupaten',
                'name' => 'Hulu Sungai Selatan',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            348 =>
            array (
                'id' => '9a2e956c-b91d-4c9a-8489-b7bd856c6284',
                'province_id' => '9a2e954b-5bcc-4448-b014-5d501c211bd5',
                'type' => 'Kabupaten',
                'name' => 'Hulu Sungai Tengah',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            349 =>
            array (
                'id' => '9a2e956c-ba44-40aa-a9fe-5480043845d5',
                'province_id' => '9a2e954b-5bcc-4448-b014-5d501c211bd5',
                'type' => 'Kabupaten',
                'name' => 'Hulu Sungai Utara',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            350 =>
            array (
                'id' => '9a2e956c-bb51-4e37-b7ad-bec3e76e965d',
                'province_id' => '9a2e954b-5bcc-4448-b014-5d501c211bd5',
                'type' => 'Kabupaten',
                'name' => 'Tabalong',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            351 =>
            array (
                'id' => '9a2e956c-bc56-4a6d-ae46-e7888501c375',
                'province_id' => '9a2e954b-5bcc-4448-b014-5d501c211bd5',
                'type' => 'Kabupaten',
                'name' => 'Tanah Bumbu',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            352 =>
            array (
                'id' => '9a2e956c-bd5c-4d5e-8224-9d34bda88d80',
                'province_id' => '9a2e954b-5bcc-4448-b014-5d501c211bd5',
                'type' => 'Kabupaten',
                'name' => 'Balangan',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            353 =>
            array (
                'id' => '9a2e956c-be5f-4ade-a2d9-85d52a8a0ddc',
                'province_id' => '9a2e954b-5bcc-4448-b014-5d501c211bd5',
                'type' => 'Kota',
                'name' => 'Banjarmasin',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            354 =>
            array (
                'id' => '9a2e956c-bf5c-4fa7-9f70-cf0ce8d7e2e3',
                'province_id' => '9a2e954b-5bcc-4448-b014-5d501c211bd5',
                'type' => 'Kota',
                'name' => 'Banjarbaru',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            355 =>
            array (
                'id' => '9a2e956c-c04d-426a-af00-b695a78740e8',
                'province_id' => '9a2e954b-5d66-4f59-b1c5-eaf9a4c37a36',
                'type' => 'Kabupaten',
                'name' => 'Paser',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            356 =>
            array (
                'id' => '9a2e956c-c15b-4883-8188-172261174d93',
                'province_id' => '9a2e954b-5d66-4f59-b1c5-eaf9a4c37a36',
                'type' => 'Kabupaten',
                'name' => 'Kutai Kartanegara',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            357 =>
            array (
                'id' => '9a2e956c-c267-4bb2-808b-87dffcec1ac9',
                'province_id' => '9a2e954b-5d66-4f59-b1c5-eaf9a4c37a36',
                'type' => 'Kabupaten',
                'name' => 'Berau',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            358 =>
            array (
                'id' => '9a2e956c-c360-485e-bf14-c3d0b9b3b09d',
                'province_id' => '9a2e954b-5d66-4f59-b1c5-eaf9a4c37a36',
                'type' => 'Kabupaten',
                'name' => 'Kutai Barat',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            359 =>
            array (
                'id' => '9a2e956c-c468-4339-a146-7ea43c9f1c9a',
                'province_id' => '9a2e954b-5d66-4f59-b1c5-eaf9a4c37a36',
                'type' => 'Kabupaten',
                'name' => 'Kutai Timur',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            360 =>
            array (
                'id' => '9a2e956c-c56b-48bc-959f-1b195347e313',
                'province_id' => '9a2e954b-5d66-4f59-b1c5-eaf9a4c37a36',
                'type' => 'Kabupaten',
                'name' => 'Penajam Paser Utara',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            361 =>
            array (
                'id' => '9a2e956c-c663-4879-b9ba-3470b6039fc7',
                'province_id' => '9a2e954b-5d66-4f59-b1c5-eaf9a4c37a36',
                'type' => 'Kabupaten',
                'name' => 'Mahakam Ulu',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            362 =>
            array (
                'id' => '9a2e956c-c767-4212-8a88-085c9fb0acf9',
                'province_id' => '9a2e954b-5d66-4f59-b1c5-eaf9a4c37a36',
                'type' => 'Kota',
                'name' => 'Balikpapan',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            363 =>
            array (
                'id' => '9a2e956c-c868-46da-91a3-a2032f8dccf3',
                'province_id' => '9a2e954b-5d66-4f59-b1c5-eaf9a4c37a36',
                'type' => 'Kota',
                'name' => 'Samarinda',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            364 =>
            array (
                'id' => '9a2e956c-c95d-4b96-b1c8-6a649282af87',
                'province_id' => '9a2e954b-5d66-4f59-b1c5-eaf9a4c37a36',
                'type' => 'Kota',
                'name' => 'Bontang',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            365 =>
            array (
                'id' => '9a2e956c-ca4b-4070-9f1f-4f37a820860d',
                'province_id' => '9a2e954b-5e92-47e6-af31-0312997cbafe',
                'type' => 'Kabupaten',
                'name' => 'Bulungan',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            366 =>
            array (
                'id' => '9a2e956c-cb3e-4d00-b872-d7c038e139e8',
                'province_id' => '9a2e954b-5e92-47e6-af31-0312997cbafe',
                'type' => 'Kabupaten',
                'name' => 'Malinau',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            367 =>
            array (
                'id' => '9a2e956c-cc39-4c4a-81c1-ca1844b237b9',
                'province_id' => '9a2e954b-5e92-47e6-af31-0312997cbafe',
                'type' => 'Kabupaten',
                'name' => 'Nunukan',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            368 =>
            array (
                'id' => '9a2e956c-cd40-4a50-b6ed-e2e96960ad39',
                'province_id' => '9a2e954b-5e92-47e6-af31-0312997cbafe',
                'type' => 'Kabupaten',
                'name' => 'Tana Tidung',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            369 =>
            array (
                'id' => '9a2e956c-ce32-443b-af3e-317088a17848',
                'province_id' => '9a2e954b-5e92-47e6-af31-0312997cbafe',
                'type' => 'Kota',
                'name' => 'Tarakan',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            370 =>
            array (
                'id' => '9a2e956c-cf21-4592-a8a2-518929481477',
                'province_id' => '9a2e954b-5f7d-4e8d-89f6-3ffc573f2ee6',
                'type' => 'Kabupaten',
                'name' => 'Bolaang Mongondow',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            371 =>
            array (
                'id' => '9a2e956c-d028-4e87-9467-f4b930d60d6a',
                'province_id' => '9a2e954b-5f7d-4e8d-89f6-3ffc573f2ee6',
                'type' => 'Kabupaten',
                'name' => 'Minahasa',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            372 =>
            array (
                'id' => '9a2e956c-d13f-40c3-a28a-6efb8d20624e',
                'province_id' => '9a2e954b-5f7d-4e8d-89f6-3ffc573f2ee6',
                'type' => 'Kabupaten',
                'name' => 'Kepulauan Sangihe',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            373 =>
            array (
                'id' => '9a2e956c-d267-480e-bbca-10749c4ecb81',
                'province_id' => '9a2e954b-5f7d-4e8d-89f6-3ffc573f2ee6',
                'type' => 'Kabupaten',
                'name' => 'Kepulauan Talaud',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            374 =>
            array (
                'id' => '9a2e956c-d386-417e-a5ef-c59a30dec382',
                'province_id' => '9a2e954b-5f7d-4e8d-89f6-3ffc573f2ee6',
                'type' => 'Kabupaten',
                'name' => 'Minahasa Selatan',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            375 =>
            array (
                'id' => '9a2e956c-d4ce-4fc0-86b3-ce964b2224ec',
                'province_id' => '9a2e954b-5f7d-4e8d-89f6-3ffc573f2ee6',
                'type' => 'Kabupaten',
                'name' => 'Minahasa Utara',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            376 =>
            array (
                'id' => '9a2e956c-d623-41c1-bfbb-78997070cfe4',
                'province_id' => '9a2e954b-5f7d-4e8d-89f6-3ffc573f2ee6',
                'type' => 'Kabupaten',
                'name' => 'Minahasa Tenggara',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            377 =>
            array (
                'id' => '9a2e956c-d73d-421f-9134-dae63e32f40d',
                'province_id' => '9a2e954b-5f7d-4e8d-89f6-3ffc573f2ee6',
                'type' => 'Kabupaten',
                'name' => 'Bolaang Mongondow Utara',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            378 =>
            array (
                'id' => '9a2e956c-d9bd-4308-94c6-290ed43821ae',
                'province_id' => '9a2e954b-5f7d-4e8d-89f6-3ffc573f2ee6',
                'type' => 'Kabupaten',
                'name' => 'Kep. Siau Tagulandang Biaro',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            379 =>
            array (
                'id' => '9a2e956c-dae7-402c-838b-33500ce2c248',
                'province_id' => '9a2e954b-5f7d-4e8d-89f6-3ffc573f2ee6',
                'type' => 'Kabupaten',
                'name' => 'Bolaang Mongondow Timur',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            380 =>
            array (
                'id' => '9a2e956c-dbf6-4c4e-9b7a-4d9fce591e58',
                'province_id' => '9a2e954b-5f7d-4e8d-89f6-3ffc573f2ee6',
                'type' => 'Kabupaten',
                'name' => 'Bolaang Mongondow Selatan',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            381 =>
            array (
                'id' => '9a2e956c-dd0c-4492-a2bd-3f2ffdcbd863',
                'province_id' => '9a2e954b-5f7d-4e8d-89f6-3ffc573f2ee6',
                'type' => 'Kota',
                'name' => 'Manado',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            382 =>
            array (
                'id' => '9a2e956c-de2c-40f6-9304-a2eef0c54c3f',
                'province_id' => '9a2e954b-5f7d-4e8d-89f6-3ffc573f2ee6',
                'type' => 'Kota',
                'name' => 'Bitung',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            383 =>
            array (
                'id' => '9a2e956c-df37-46fa-b427-56c1cef1188a',
                'province_id' => '9a2e954b-5f7d-4e8d-89f6-3ffc573f2ee6',
                'type' => 'Kota',
                'name' => 'Tomohon',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            384 =>
            array (
                'id' => '9a2e956c-e03d-4cd1-9447-e4d3103cd153',
                'province_id' => '9a2e954b-5f7d-4e8d-89f6-3ffc573f2ee6',
                'type' => 'Kota',
                'name' => 'Kotamobagu',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            385 =>
            array (
                'id' => '9a2e956c-e13b-474e-8fc4-49a34d714a7c',
                'province_id' => '9a2e954b-60ff-4fc5-af26-05c17a9e340e',
                'type' => 'Kabupaten',
                'name' => 'Banggai',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            386 =>
            array (
                'id' => '9a2e956c-e28a-4554-9b10-b326bd63109a',
                'province_id' => '9a2e954b-60ff-4fc5-af26-05c17a9e340e',
                'type' => 'Kabupaten',
                'name' => 'Poso',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            387 =>
            array (
                'id' => '9a2e956c-e3e6-4732-aea3-81695d8683be',
                'province_id' => '9a2e954b-60ff-4fc5-af26-05c17a9e340e',
                'type' => 'Kabupaten',
                'name' => 'Donggala',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            388 =>
            array (
                'id' => '9a2e956c-e50a-4d1a-9d9d-e04e6e2d7502',
                'province_id' => '9a2e954b-60ff-4fc5-af26-05c17a9e340e',
                'type' => 'Kabupaten',
                'name' => 'Toli Toli',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            389 =>
            array (
                'id' => '9a2e956c-e605-4cdf-a77f-98eb5e77c33f',
                'province_id' => '9a2e954b-60ff-4fc5-af26-05c17a9e340e',
                'type' => 'Kabupaten',
                'name' => 'Buol',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            390 =>
            array (
                'id' => '9a2e956c-e6f9-4bc4-8180-a845194b9025',
                'province_id' => '9a2e954b-60ff-4fc5-af26-05c17a9e340e',
                'type' => 'Kabupaten',
                'name' => 'Morowali',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            391 =>
            array (
                'id' => '9a2e956c-e7f3-49e3-b570-39742fe78b1e',
                'province_id' => '9a2e954b-60ff-4fc5-af26-05c17a9e340e',
                'type' => 'Kabupaten',
                'name' => 'Banggai Kepulauan',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            392 =>
            array (
                'id' => '9a2e956c-e8eb-4d22-9539-1953e4fed03a',
                'province_id' => '9a2e954b-60ff-4fc5-af26-05c17a9e340e',
                'type' => 'Kabupaten',
                'name' => 'Parigi Moutong',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            393 =>
            array (
                'id' => '9a2e956c-e9f5-4972-b66c-643f2293200d',
                'province_id' => '9a2e954b-60ff-4fc5-af26-05c17a9e340e',
                'type' => 'Kabupaten',
                'name' => 'Tojo Una Una',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            394 =>
            array (
                'id' => '9a2e956c-eaf2-40f0-82aa-4c7365cdcfb5',
                'province_id' => '9a2e954b-60ff-4fc5-af26-05c17a9e340e',
                'type' => 'Kabupaten',
                'name' => 'Sigi',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            395 =>
            array (
                'id' => '9a2e956c-ebf2-4c6a-846e-916151f419ed',
                'province_id' => '9a2e954b-60ff-4fc5-af26-05c17a9e340e',
                'type' => 'Kabupaten',
                'name' => 'Banggai Laut',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            396 =>
            array (
                'id' => '9a2e956c-ed01-4710-b55e-a8079f1e5e81',
                'province_id' => '9a2e954b-60ff-4fc5-af26-05c17a9e340e',
                'type' => 'Kabupaten',
                'name' => 'Morowali Utara',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            397 =>
            array (
                'id' => '9a2e956c-ee18-4d20-9863-64fde19afbdd',
                'province_id' => '9a2e954b-60ff-4fc5-af26-05c17a9e340e',
                'type' => 'Kota',
                'name' => 'Palu',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            398 =>
            array (
                'id' => '9a2e956c-ef20-4ca5-bca9-b1e0f06beab2',
                'province_id' => '9a2e954b-62a2-40a3-8ed7-99db401cbf96',
                'type' => 'Kabupaten',
                'name' => 'Kepulauan Selayar',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            399 =>
            array (
                'id' => '9a2e956c-f02d-40ea-807c-517df39a73cc',
                'province_id' => '9a2e954b-62a2-40a3-8ed7-99db401cbf96',
                'type' => 'Kabupaten',
                'name' => 'Bulukumba',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            400 =>
            array (
                'id' => '9a2e956c-f145-43a4-8924-34fbf1e33d04',
                'province_id' => '9a2e954b-62a2-40a3-8ed7-99db401cbf96',
                'type' => 'Kabupaten',
                'name' => 'Bantaeng',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            401 =>
            array (
                'id' => '9a2e956c-f24d-4eb8-96ae-cc7f4db3d4c1',
                'province_id' => '9a2e954b-62a2-40a3-8ed7-99db401cbf96',
                'type' => 'Kabupaten',
                'name' => 'Jeneponto',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            402 =>
            array (
                'id' => '9a2e956c-f360-46dc-81c1-759b5433dfbb',
                'province_id' => '9a2e954b-62a2-40a3-8ed7-99db401cbf96',
                'type' => 'Kabupaten',
                'name' => 'Takalar',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            403 =>
            array (
                'id' => '9a2e956c-f47c-45e5-abd0-02e041639360',
                'province_id' => '9a2e954b-62a2-40a3-8ed7-99db401cbf96',
                'type' => 'Kabupaten',
                'name' => 'Gowa',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            404 =>
            array (
                'id' => '9a2e956c-f596-4e5d-8248-2ac08656bda2',
                'province_id' => '9a2e954b-62a2-40a3-8ed7-99db401cbf96',
                'type' => 'Kabupaten',
                'name' => 'Sinjai',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            405 =>
            array (
                'id' => '9a2e956c-f6ac-447c-9db0-ed79ab65b837',
                'province_id' => '9a2e954b-62a2-40a3-8ed7-99db401cbf96',
                'type' => 'Kabupaten',
                'name' => 'Bone',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            406 =>
            array (
                'id' => '9a2e956c-f7de-4530-b889-109c17429f43',
                'province_id' => '9a2e954b-62a2-40a3-8ed7-99db401cbf96',
                'type' => 'Kabupaten',
                'name' => 'Maros',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            407 =>
            array (
                'id' => '9a2e956c-f8f1-4ab5-a6f4-14f3b845f151',
                'province_id' => '9a2e954b-62a2-40a3-8ed7-99db401cbf96',
                'type' => 'Kabupaten',
                'name' => 'Pangkajene Kepulauan',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            408 =>
            array (
                'id' => '9a2e956c-fa15-4cbe-aba4-51ea49bcdbb3',
                'province_id' => '9a2e954b-62a2-40a3-8ed7-99db401cbf96',
                'type' => 'Kabupaten',
                'name' => 'Barru',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            409 =>
            array (
                'id' => '9a2e956c-fb2a-422d-87ea-0bc34c1a2de9',
                'province_id' => '9a2e954b-62a2-40a3-8ed7-99db401cbf96',
                'type' => 'Kabupaten',
                'name' => 'Soppeng',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            410 =>
            array (
                'id' => '9a2e956c-fc39-45b7-b4f6-800ee7a9ebf5',
                'province_id' => '9a2e954b-62a2-40a3-8ed7-99db401cbf96',
                'type' => 'Kabupaten',
                'name' => 'Wajo',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            411 =>
            array (
                'id' => '9a2e956c-fd5d-431f-b7b1-233b24d8218e',
                'province_id' => '9a2e954b-62a2-40a3-8ed7-99db401cbf96',
                'type' => 'Kabupaten',
                'name' => 'Sidenreng Rappang',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            412 =>
            array (
                'id' => '9a2e956c-fe89-4627-a301-070d59bafec4',
                'province_id' => '9a2e954b-62a2-40a3-8ed7-99db401cbf96',
                'type' => 'Kabupaten',
                'name' => 'Pinrang',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            413 =>
            array (
                'id' => '9a2e956c-ff9d-4d7d-b787-c4a4bdecef73',
                'province_id' => '9a2e954b-62a2-40a3-8ed7-99db401cbf96',
                'type' => 'Kabupaten',
                'name' => 'Enrekang',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            414 =>
            array (
                'id' => '9a2e956d-009d-40a5-b573-a5ba8bb5c58a',
                'province_id' => '9a2e954b-62a2-40a3-8ed7-99db401cbf96',
                'type' => 'Kabupaten',
                'name' => 'Luwu',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            415 =>
            array (
                'id' => '9a2e956d-01a5-4c27-b807-c8164139c40d',
                'province_id' => '9a2e954b-62a2-40a3-8ed7-99db401cbf96',
                'type' => 'Kabupaten',
                'name' => 'Tana Toraja',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            416 =>
            array (
                'id' => '9a2e956d-02a3-4845-ab2b-120fbdb29454',
                'province_id' => '9a2e954b-62a2-40a3-8ed7-99db401cbf96',
                'type' => 'Kabupaten',
                'name' => 'Luwu Utara',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            417 =>
            array (
                'id' => '9a2e956d-03a4-4882-b5d4-be40dbbe334a',
                'province_id' => '9a2e954b-62a2-40a3-8ed7-99db401cbf96',
                'type' => 'Kabupaten',
                'name' => 'Luwu Timur',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            418 =>
            array (
                'id' => '9a2e956d-04bb-4f18-9a7d-b4104e4b063f',
                'province_id' => '9a2e954b-62a2-40a3-8ed7-99db401cbf96',
                'type' => 'Kabupaten',
                'name' => 'Toraja Utara',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            419 =>
            array (
                'id' => '9a2e956d-05d7-46f0-8d13-ed193583c3fd',
                'province_id' => '9a2e954b-62a2-40a3-8ed7-99db401cbf96',
                'type' => 'Kota',
                'name' => 'Makassar',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            420 =>
            array (
                'id' => '9a2e956d-06e7-42be-b119-81f4bc0e6fe5',
                'province_id' => '9a2e954b-62a2-40a3-8ed7-99db401cbf96',
                'type' => 'Kota',
                'name' => 'Pare Pare',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            421 =>
            array (
                'id' => '9a2e956d-07e8-478f-a72d-7fec81b762d3',
                'province_id' => '9a2e954b-62a2-40a3-8ed7-99db401cbf96',
                'type' => 'Kota',
                'name' => 'Palopo',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            422 =>
            array (
                'id' => '9a2e956d-0905-4385-a630-170a893c7228',
                'province_id' => '9a2e954b-64cf-4a62-9b82-c44e55c3d567',
                'type' => 'Kabupaten',
                'name' => 'Kolaka',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            423 =>
            array (
                'id' => '9a2e956d-0a26-4300-9e03-04bf41915ae0',
                'province_id' => '9a2e954b-64cf-4a62-9b82-c44e55c3d567',
                'type' => 'Kabupaten',
                'name' => 'Konawe',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            424 =>
            array (
                'id' => '9a2e956d-0b67-4680-b081-607cc918e003',
                'province_id' => '9a2e954b-64cf-4a62-9b82-c44e55c3d567',
                'type' => 'Kabupaten',
                'name' => 'Muna',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            425 =>
            array (
                'id' => '9a2e956d-0c83-4332-b372-042a60b120e9',
                'province_id' => '9a2e954b-64cf-4a62-9b82-c44e55c3d567',
                'type' => 'Kabupaten',
                'name' => 'Buton',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            426 =>
            array (
                'id' => '9a2e956d-0e74-44a3-8bc8-4f8933cf504d',
                'province_id' => '9a2e954b-64cf-4a62-9b82-c44e55c3d567',
                'type' => 'Kabupaten',
                'name' => 'Konawe Selatan',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            427 =>
            array (
                'id' => '9a2e956d-0f8e-417b-9200-ffaab53904ff',
                'province_id' => '9a2e954b-64cf-4a62-9b82-c44e55c3d567',
                'type' => 'Kabupaten',
                'name' => 'Bombana',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            428 =>
            array (
                'id' => '9a2e956d-1093-4ea4-b6db-fcea37166fd9',
                'province_id' => '9a2e954b-64cf-4a62-9b82-c44e55c3d567',
                'type' => 'Kabupaten',
                'name' => 'Wakatobi',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            429 =>
            array (
                'id' => '9a2e956d-1190-4c08-ae71-2aa9578f63b4',
                'province_id' => '9a2e954b-64cf-4a62-9b82-c44e55c3d567',
                'type' => 'Kabupaten',
                'name' => 'Kolaka Utara',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            430 =>
            array (
                'id' => '9a2e956d-141c-4dc1-923f-b0b398e8d544',
                'province_id' => '9a2e954b-64cf-4a62-9b82-c44e55c3d567',
                'type' => 'Kabupaten',
                'name' => 'Konawe Utara',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            431 =>
            array (
                'id' => '9a2e956d-1569-4759-a2dd-11eb0e0e87a1',
                'province_id' => '9a2e954b-64cf-4a62-9b82-c44e55c3d567',
                'type' => 'Kabupaten',
                'name' => 'Buton Utara',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            432 =>
            array (
                'id' => '9a2e956d-1689-4fcf-b1fb-ed53f78ffbe9',
                'province_id' => '9a2e954b-64cf-4a62-9b82-c44e55c3d567',
                'type' => 'Kabupaten',
                'name' => 'Kolaka Timur',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            433 =>
            array (
                'id' => '9a2e956d-17a6-4c69-831e-4db5555b83bd',
                'province_id' => '9a2e954b-64cf-4a62-9b82-c44e55c3d567',
                'type' => 'Kabupaten',
                'name' => 'Konawe Kepulauan',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            434 =>
            array (
                'id' => '9a2e956d-18bb-463f-997c-b3ea2c85ce2d',
                'province_id' => '9a2e954b-64cf-4a62-9b82-c44e55c3d567',
                'type' => 'Kabupaten',
                'name' => 'Muna Barat',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            435 =>
            array (
                'id' => '9a2e956d-19d3-4cee-9cd4-32197f2ce5f2',
                'province_id' => '9a2e954b-64cf-4a62-9b82-c44e55c3d567',
                'type' => 'Kabupaten',
                'name' => 'Buton Tengah',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            436 =>
            array (
                'id' => '9a2e956d-1ae6-4f8f-a1db-82c7d945268f',
                'province_id' => '9a2e954b-64cf-4a62-9b82-c44e55c3d567',
                'type' => 'Kabupaten',
                'name' => 'Buton Selatan',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            437 =>
            array (
                'id' => '9a2e956d-1bfa-43e1-a8fe-b9489d76d56a',
                'province_id' => '9a2e954b-64cf-4a62-9b82-c44e55c3d567',
                'type' => 'Kota',
                'name' => 'Kendari',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            438 =>
            array (
                'id' => '9a2e956d-1d0e-4f70-ad51-4f6eff2d41ea',
                'province_id' => '9a2e954b-64cf-4a62-9b82-c44e55c3d567',
                'type' => 'Kota',
                'name' => 'Bau Bau',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            439 =>
            array (
                'id' => '9a2e956d-1e1d-4f48-bcb8-6c38a4341635',
                'province_id' => '9a2e954b-677f-4dfc-abb0-51ed5919dcf1',
                'type' => 'Kabupaten',
                'name' => 'Gorontalo',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            440 =>
            array (
                'id' => '9a2e956d-1f3a-48aa-83ca-e1b0b3bba4ef',
                'province_id' => '9a2e954b-677f-4dfc-abb0-51ed5919dcf1',
                'type' => 'Kabupaten',
                'name' => 'Boalemo',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            441 =>
            array (
                'id' => '9a2e956d-204f-4c5f-b22f-6d5968693b54',
                'province_id' => '9a2e954b-677f-4dfc-abb0-51ed5919dcf1',
                'type' => 'Kabupaten',
                'name' => 'Bone Bolango',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            442 =>
            array (
                'id' => '9a2e956d-2173-4a62-a0b2-78544ae53d2b',
                'province_id' => '9a2e954b-677f-4dfc-abb0-51ed5919dcf1',
                'type' => 'Kabupaten',
                'name' => 'Pahuwato',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            443 =>
            array (
                'id' => '9a2e956d-228e-4707-9fff-8d61e58c7dd0',
                'province_id' => '9a2e954b-677f-4dfc-abb0-51ed5919dcf1',
                'type' => 'Kabupaten',
                'name' => 'Gorontalo Utara',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            444 =>
            array (
                'id' => '9a2e956d-23a4-4f69-9913-924d46c17cac',
                'province_id' => '9a2e954b-677f-4dfc-abb0-51ed5919dcf1',
                'type' => 'Kota',
                'name' => 'Gorontalo',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            445 =>
            array (
                'id' => '9a2e956d-24b0-4f7f-b95c-8544c119d6f7',
                'province_id' => '9a2e954b-693a-4763-b697-a8d7b5fa8f1d',
                'type' => 'Kabupaten',
                'name' => 'Pasangkayu',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            446 =>
            array (
                'id' => '9a2e956d-25be-498e-af94-cc74331b0628',
                'province_id' => '9a2e954b-693a-4763-b697-a8d7b5fa8f1d',
                'type' => 'Kabupaten',
                'name' => 'Mamuju',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            447 =>
            array (
                'id' => '9a2e956d-2725-4839-b804-92117893e210',
                'province_id' => '9a2e954b-693a-4763-b697-a8d7b5fa8f1d',
                'type' => 'Kabupaten',
                'name' => 'Mamasa',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            448 =>
            array (
                'id' => '9a2e956d-286d-4a29-8267-284532d9093f',
                'province_id' => '9a2e954b-693a-4763-b697-a8d7b5fa8f1d',
                'type' => 'Kabupaten',
                'name' => 'Polewali Mandar',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            449 =>
            array (
                'id' => '9a2e956d-2974-4e6e-92f9-3bae55289588',
                'province_id' => '9a2e954b-693a-4763-b697-a8d7b5fa8f1d',
                'type' => 'Kabupaten',
                'name' => 'Majene',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            450 =>
            array (
                'id' => '9a2e956d-2a79-4703-986c-ff5b0e3fcc55',
                'province_id' => '9a2e954b-693a-4763-b697-a8d7b5fa8f1d',
                'type' => 'Kabupaten',
                'name' => 'Mamuju Tengah',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            451 =>
            array (
                'id' => '9a2e956d-2b8e-461e-97ac-6d0f5683c458',
                'province_id' => '9a2e954b-6add-4da4-b0c2-b332b8a2f969',
                'type' => 'Kabupaten',
                'name' => 'Maluku Tengah',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            452 =>
            array (
                'id' => '9a2e956d-2cac-42cf-894f-aac599734758',
                'province_id' => '9a2e954b-6add-4da4-b0c2-b332b8a2f969',
                'type' => 'Kabupaten',
                'name' => 'Maluku Tenggara',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            453 =>
            array (
                'id' => '9a2e956d-2dcc-4911-8908-ca1752638d30',
                'province_id' => '9a2e954b-6add-4da4-b0c2-b332b8a2f969',
                'type' => 'Kabupaten',
                'name' => 'Kepulauan Tanimbar',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            454 =>
            array (
                'id' => '9a2e956d-2ed7-42f4-b138-59dc516e1c7a',
                'province_id' => '9a2e954b-6add-4da4-b0c2-b332b8a2f969',
                'type' => 'Kabupaten',
                'name' => 'Buru',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            455 =>
            array (
                'id' => '9a2e956d-2fe3-4f49-a087-095443e870e7',
                'province_id' => '9a2e954b-6add-4da4-b0c2-b332b8a2f969',
                'type' => 'Kabupaten',
                'name' => 'Seram Bagian Timur',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            456 =>
            array (
                'id' => '9a2e956d-30fd-4d7c-8f46-4b4466b096c8',
                'province_id' => '9a2e954b-6add-4da4-b0c2-b332b8a2f969',
                'type' => 'Kabupaten',
                'name' => 'Seram Bagian Barat',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            457 =>
            array (
                'id' => '9a2e956d-320f-474d-8dba-fb2ca6dd9412',
                'province_id' => '9a2e954b-6add-4da4-b0c2-b332b8a2f969',
                'type' => 'Kabupaten',
                'name' => 'Kepulauan Aru',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            458 =>
            array (
                'id' => '9a2e956d-3320-4d8f-85aa-3fbc9b5d24a5',
                'province_id' => '9a2e954b-6add-4da4-b0c2-b332b8a2f969',
                'type' => 'Kabupaten',
                'name' => 'Maluku Barat Daya',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            459 =>
            array (
                'id' => '9a2e956d-3433-4d41-9930-ea9f0583db15',
                'province_id' => '9a2e954b-6add-4da4-b0c2-b332b8a2f969',
                'type' => 'Kabupaten',
                'name' => 'Buru Selatan',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            460 =>
            array (
                'id' => '9a2e956d-354e-41f1-a589-11ac6436b8b5',
                'province_id' => '9a2e954b-6add-4da4-b0c2-b332b8a2f969',
                'type' => 'Kota',
                'name' => 'Ambon',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            461 =>
            array (
                'id' => '9a2e956d-3659-4eca-97dc-d38af36b1290',
                'province_id' => '9a2e954b-6add-4da4-b0c2-b332b8a2f969',
                'type' => 'Kota',
                'name' => 'Tual',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            462 =>
            array (
                'id' => '9a2e956d-375d-4957-b673-4f23d14c623d',
                'province_id' => '9a2e954b-6c63-4484-9871-ece58438a765',
                'type' => 'Kabupaten',
                'name' => 'Halmahera Barat',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            463 =>
            array (
                'id' => '9a2e956d-3876-4e88-97f4-57e57732b95c',
                'province_id' => '9a2e954b-6c63-4484-9871-ece58438a765',
                'type' => 'Kabupaten',
                'name' => 'Halmahera Tengah',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            464 =>
            array (
                'id' => '9a2e956d-397f-4a87-8a83-b161084866d0',
                'province_id' => '9a2e954b-6c63-4484-9871-ece58438a765',
                'type' => 'Kabupaten',
                'name' => 'Halmahera Utara',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            465 =>
            array (
                'id' => '9a2e956d-3a95-4b17-a3e3-6c46036ddd39',
                'province_id' => '9a2e954b-6c63-4484-9871-ece58438a765',
                'type' => 'Kabupaten',
                'name' => 'Halmahera Selatan',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            466 =>
            array (
                'id' => '9a2e956d-3bb7-4dd1-ab71-ff9674a32d51',
                'province_id' => '9a2e954b-6c63-4484-9871-ece58438a765',
                'type' => 'Kabupaten',
                'name' => 'Kepulauan Sula',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            467 =>
            array (
                'id' => '9a2e956d-3cc0-4e9b-a5ea-4127c73f97d9',
                'province_id' => '9a2e954b-6c63-4484-9871-ece58438a765',
                'type' => 'Kabupaten',
                'name' => 'Halmahera Timur',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            468 =>
            array (
                'id' => '9a2e956d-3dcc-43c9-b36c-3e3f1f8ef8ae',
                'province_id' => '9a2e954b-6c63-4484-9871-ece58438a765',
                'type' => 'Kabupaten',
                'name' => 'Pulau Morotai',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            469 =>
            array (
                'id' => '9a2e956d-3ed7-4082-bded-96e294b0d422',
                'province_id' => '9a2e954b-6c63-4484-9871-ece58438a765',
                'type' => 'Kabupaten',
                'name' => 'Pulau Taliabu',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            470 =>
            array (
                'id' => '9a2e956d-3fe3-4215-9930-e3b787a0ee34',
                'province_id' => '9a2e954b-6c63-4484-9871-ece58438a765',
                'type' => 'Kota',
                'name' => 'Ternate',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            471 =>
            array (
                'id' => '9a2e956d-40ee-4b37-8540-5a26d64f8cc7',
                'province_id' => '9a2e954b-6c63-4484-9871-ece58438a765',
                'type' => 'Kota',
                'name' => 'Tidore Kepulauan',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            472 =>
            array (
                'id' => '9a2e956d-41fc-46ab-ac1f-ac866b285e39',
                'province_id' => '9a2e954b-6db2-4907-a4e1-21b7d2366538',
                'type' => 'Kabupaten',
                'name' => 'Jayapura',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            473 =>
            array (
                'id' => '9a2e956d-4312-4b9f-95a8-ddf69a4aa169',
                'province_id' => '9a2e954b-6db2-4907-a4e1-21b7d2366538',
                'type' => 'Kabupaten',
                'name' => 'Kepulauan Yapen',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            474 =>
            array (
                'id' => '9a2e956d-4418-42d9-b2b1-f5c4fc034400',
                'province_id' => '9a2e954b-6db2-4907-a4e1-21b7d2366538',
                'type' => 'Kabupaten',
                'name' => 'Biak Numfor',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            475 =>
            array (
                'id' => '9a2e956d-4522-4297-9e38-90cf288cc58a',
                'province_id' => '9a2e954b-6db2-4907-a4e1-21b7d2366538',
                'type' => 'Kabupaten',
                'name' => 'Sarmi',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            476 =>
            array (
                'id' => '9a2e956d-461c-4422-b08b-ca85779de19d',
                'province_id' => '9a2e954b-6db2-4907-a4e1-21b7d2366538',
                'type' => 'Kabupaten',
                'name' => 'Keerom',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            477 =>
            array (
                'id' => '9a2e956d-471b-459a-91e9-809bb0f4d313',
                'province_id' => '9a2e954b-6db2-4907-a4e1-21b7d2366538',
                'type' => 'Kabupaten',
                'name' => 'Waropen',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            478 =>
            array (
                'id' => '9a2e956d-481c-484a-885f-436e0abe44c7',
                'province_id' => '9a2e954b-6db2-4907-a4e1-21b7d2366538',
                'type' => 'Kabupaten',
                'name' => 'Supiori',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            479 =>
            array (
                'id' => '9a2e956d-4939-4d78-9514-4fce8a9e74a8',
                'province_id' => '9a2e954b-6db2-4907-a4e1-21b7d2366538',
                'type' => 'Kabupaten',
                'name' => 'Mamberamo Raya',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            480 =>
            array (
                'id' => '9a2e956d-4aa8-4127-bf02-1ade07618759',
                'province_id' => '9a2e954b-6db2-4907-a4e1-21b7d2366538',
                'type' => 'Kota',
                'name' => 'Jayapura',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            481 =>
            array (
                'id' => '9a2e956d-4bbd-4838-b907-96c8e2450ef2',
                'province_id' => '9a2e954b-6edd-41eb-ba31-75dec7455b07',
                'type' => 'Kabupaten',
                'name' => 'Sorong',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            482 =>
            array (
                'id' => '9a2e956d-4cda-4e65-b6da-9e35733a6f58',
                'province_id' => '9a2e954b-6edd-41eb-ba31-75dec7455b07',
                'type' => 'Kabupaten',
                'name' => 'Manokwari',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            483 =>
            array (
                'id' => '9a2e956d-4ded-49f9-935b-defa1b0a2155',
                'province_id' => '9a2e954b-6edd-41eb-ba31-75dec7455b07',
                'type' => 'Kabupaten',
                'name' => 'Fak Fak',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            484 =>
            array (
                'id' => '9a2e956d-4ef6-4413-a1b6-22e9e8d023de',
                'province_id' => '9a2e954b-6edd-41eb-ba31-75dec7455b07',
                'type' => 'Kabupaten',
                'name' => 'Sorong Selatan',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            485 =>
            array (
                'id' => '9a2e956d-4ffb-4016-87a5-28ac8c4c20c0',
                'province_id' => '9a2e954b-6edd-41eb-ba31-75dec7455b07',
                'type' => 'Kabupaten',
                'name' => 'Raja Ampat',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            486 =>
            array (
                'id' => '9a2e956d-511b-4b1f-8b7f-395df1eece39',
                'province_id' => '9a2e954b-6edd-41eb-ba31-75dec7455b07',
                'type' => 'Kabupaten',
                'name' => 'Teluk Bintuni',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            487 =>
            array (
                'id' => '9a2e956d-5265-4e19-8ead-e96af5c16946',
                'province_id' => '9a2e954b-6edd-41eb-ba31-75dec7455b07',
                'type' => 'Kabupaten',
                'name' => 'Teluk Wondama',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            488 =>
            array (
                'id' => '9a2e956d-53ce-4686-b46b-9922178a2676',
                'province_id' => '9a2e954b-6edd-41eb-ba31-75dec7455b07',
                'type' => 'Kabupaten',
                'name' => 'Kaimana',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            489 =>
            array (
                'id' => '9a2e956d-584f-4f61-8404-e9fcbf48ca7c',
                'province_id' => '9a2e954b-6edd-41eb-ba31-75dec7455b07',
                'type' => 'Kabupaten',
                'name' => 'Tambrauw',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            490 =>
            array (
                'id' => '9a2e956d-5a1d-448e-bd5f-5702c8ae69c1',
                'province_id' => '9a2e954b-6edd-41eb-ba31-75dec7455b07',
                'type' => 'Kabupaten',
                'name' => 'Maybrat',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            491 =>
            array (
                'id' => '9a2e956d-5bdd-4892-b6e8-25768ee2cb9b',
                'province_id' => '9a2e954b-6edd-41eb-ba31-75dec7455b07',
                'type' => 'Kabupaten',
                'name' => 'Manokwari Selatan',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            492 =>
            array (
                'id' => '9a2e956d-5d6a-440d-9fb9-903be73ff93a',
                'province_id' => '9a2e954b-6edd-41eb-ba31-75dec7455b07',
                'type' => 'Kabupaten',
                'name' => 'Pegunungan Arfak',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            493 =>
            array (
                'id' => '9a2e956d-5ee9-4e3c-87d9-95bfe1e694fa',
                'province_id' => '9a2e954b-6edd-41eb-ba31-75dec7455b07',
                'type' => 'Kota',
                'name' => 'Sorong',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            494 =>
            array (
                'id' => '9a2e956d-5fec-4aba-b9ae-f8c9f5df97c0',
                'province_id' => '9a2e954b-7066-4553-b1f2-ece641d8d01d',
                'type' => 'Kabupaten',
                'name' => 'Merauke',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            495 =>
            array (
                'id' => '9a2e956d-60f9-4ba5-9922-4735ee611dcc',
                'province_id' => '9a2e954b-7066-4553-b1f2-ece641d8d01d',
                'type' => 'Kabupaten',
                'name' => 'Boven Digoel',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            496 =>
            array (
                'id' => '9a2e956d-6201-4779-8670-a593966c0fab',
                'province_id' => '9a2e954b-7066-4553-b1f2-ece641d8d01d',
                'type' => 'Kabupaten',
                'name' => 'Mappi',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            497 =>
            array (
                'id' => '9a2e956d-6309-4967-8abc-24bc17eac99d',
                'province_id' => '9a2e954b-7066-4553-b1f2-ece641d8d01d',
                'type' => 'Kabupaten',
                'name' => 'Asmat',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            498 =>
            array (
                'id' => '9a2e956d-6417-4b6f-a268-e8495791cd53',
                'province_id' => '9a2e954b-7210-4e2a-bea9-f2293828d660',
                'type' => 'Kabupaten',
                'name' => 'Nabire',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            499 =>
            array (
                'id' => '9a2e956d-651a-43e2-8038-91a8104425b0',
                'province_id' => '9a2e954b-7210-4e2a-bea9-f2293828d660',
                'type' => 'Kabupaten',
                'name' => 'Puncak Jaya',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
        ));
        \DB::table('ref_regencies')->insert(array (
            0 =>
            array (
                'id' => '9a2e956d-6630-4e3e-9593-30f03d64cb6f',
                'province_id' => '9a2e954b-7210-4e2a-bea9-f2293828d660',
                'type' => 'Kabupaten',
                'name' => 'Paniai',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => '9a2e956d-6734-4c98-9ad7-6d238f3a89a9',
                'province_id' => '9a2e954b-7210-4e2a-bea9-f2293828d660',
                'type' => 'Kabupaten',
                'name' => 'Mimika',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => '9a2e956d-683f-4a6a-ad28-878b0447ebf4',
                'province_id' => '9a2e954b-7210-4e2a-bea9-f2293828d660',
                'type' => 'Kabupaten',
                'name' => 'Puncak',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => '9a2e956d-694a-471f-9c72-b1bf25021bc2',
                'province_id' => '9a2e954b-7210-4e2a-bea9-f2293828d660',
                'type' => 'Kabupaten',
                'name' => 'Dogiyai',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => '9a2e956d-6a4d-4f8a-9829-33292899ea1b',
                'province_id' => '9a2e954b-7210-4e2a-bea9-f2293828d660',
                'type' => 'Kabupaten',
                'name' => 'Intan Jaya',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => '9a2e956d-6b55-4c80-92d9-ed742fcdada6',
                'province_id' => '9a2e954b-7210-4e2a-bea9-f2293828d660',
                'type' => 'Kabupaten',
                'name' => 'Deiyai',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'id' => '9a2e956d-6c50-4aea-a6b0-077af58809b1',
                'province_id' => '9a2e954b-743a-45d8-96a1-7bf4cf3f795a',
                'type' => 'Kabupaten',
                'name' => 'Jayawijaya',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            7 =>
            array (
                'id' => '9a2e956d-6d69-44c5-92ef-133bb55dd02d',
                'province_id' => '9a2e954b-743a-45d8-96a1-7bf4cf3f795a',
                'type' => 'Kabupaten',
                'name' => 'Pegunungan Bintang',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            8 =>
            array (
                'id' => '9a2e956d-6e82-4fb4-ace5-fef1609eb1b8',
                'province_id' => '9a2e954b-743a-45d8-96a1-7bf4cf3f795a',
                'type' => 'Kabupaten',
                'name' => 'Yahukimo',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            9 =>
            array (
                'id' => '9a2e956d-6faf-49c1-98cd-6bbac89a89ec',
                'province_id' => '9a2e954b-743a-45d8-96a1-7bf4cf3f795a',
                'type' => 'Kabupaten',
                'name' => 'Tolikara',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            10 =>
            array (
                'id' => '9a2e956d-70de-4910-83d8-85ae0ac9a3a4',
                'province_id' => '9a2e954b-743a-45d8-96a1-7bf4cf3f795a',
                'type' => 'Kabupaten',
                'name' => 'Mamberamo Tengah',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            11 =>
            array (
                'id' => '9a2e956d-71fc-40ea-abf2-7ace4bbd7d72',
                'province_id' => '9a2e954b-743a-45d8-96a1-7bf4cf3f795a',
                'type' => 'Kabupaten',
                'name' => 'Yalimo',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            12 =>
            array (
                'id' => '9a2e956d-7329-4f4f-8226-7c4512c12ca8',
                'province_id' => '9a2e954b-743a-45d8-96a1-7bf4cf3f795a',
                'type' => 'Kabupaten',
                'name' => 'Lanny Jaya',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
            13 =>
            array (
                'id' => '9a2e956d-745e-4f4c-875d-277abb5c59cc',
                'province_id' => '9a2e954b-743a-45d8-96a1-7bf4cf3f795a',
                'type' => 'Kabupaten',
                'name' => 'Nduga',
                'created_at' => '2023-09-21 05:24:21',
                'updated_at' => '2023-09-21 05:24:21',
                'deleted_at' => NULL,
            ),
        ));


    }
}

<?php

namespace Database\Seeders\Starter;

use Illuminate\Database\Seeder;

class RefProvinces extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('ref_provinces')->delete();

        \DB::table('ref_provinces')->insert(array (
            0 =>
            array (
                'id' => '9a2e954b-288a-4bf3-bd00-dc2315a70b3f',
                'name' => 'Aceh',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => '9a2e954b-2d8e-4576-90cb-d718cdfe5b16',
                'name' => 'Sumatera Utara',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => '9a2e954b-3411-4da2-b06d-08c30a2c412a',
                'name' => 'Sumatera Barat',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => '9a2e954b-35a0-4673-8b22-c874dc332325',
                'name' => 'Riau',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => '9a2e954b-3733-4997-a22b-fa15f5ea5cfa',
                'name' => 'Jambi',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => '9a2e954b-38a2-455d-bd7d-a8cbfbf6e862',
                'name' => 'Sumatera Selatan',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'id' => '9a2e954b-3acf-4928-bf4f-c492a885c550',
                'name' => 'Bengkulu',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
            7 =>
            array (
                'id' => '9a2e954b-3c3e-4afb-ba3c-2f046d28c625',
                'name' => 'Lampung',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
            8 =>
            array (
                'id' => '9a2e954b-3e25-47e6-9d31-4d69f9fb77df',
                'name' => 'Kepulauan Bangka Belitung',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
            9 =>
            array (
                'id' => '9a2e954b-3f76-49b3-af9a-254744169d10',
                'name' => 'Kepulauan Riau',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
            10 =>
            array (
                'id' => '9a2e954b-4064-408d-b764-a320efb4c980',
                'name' => 'Dki Jakarta',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
            11 =>
            array (
                'id' => '9a2e954b-413f-495e-a6cb-40fb5cb48ef0',
                'name' => 'Jawa Barat',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
            12 =>
            array (
                'id' => '9a2e954b-44a1-4bd3-8a7c-cf8c732f54f4',
                'name' => 'Jawa Tengah',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
            13 =>
            array (
                'id' => '9a2e954b-492b-4d9a-bf76-9d218dac38f1',
                'name' => 'Daerah Istimewa Yogyakarta',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
            14 =>
            array (
                'id' => '9a2e954b-4a88-434a-b354-fa1e26b715f3',
                'name' => 'Jawa Timur',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
            15 =>
            array (
                'id' => '9a2e954b-51f0-436b-a12b-7bd484cc0471',
                'name' => 'Banten',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
            16 =>
            array (
                'id' => '9a2e954b-5384-4d1e-bb80-bc2db471c162',
                'name' => 'Bali',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
            17 =>
            array (
                'id' => '9a2e954b-548f-4ad5-8641-a1e248fcacc4',
                'name' => 'Nusa Tenggara Barat',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
            18 =>
            array (
                'id' => '9a2e954b-567a-4b8a-87c1-23af06304b44',
                'name' => 'Nusa Tenggara Timur',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
            19 =>
            array (
                'id' => '9a2e954b-58ba-4af1-a41e-b704d9f92764',
                'name' => 'Kalimantan Barat',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
            20 =>
            array (
                'id' => '9a2e954b-5a60-43f8-bc34-40b9249cd065',
                'name' => 'Kalimantan Tengah',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
            21 =>
            array (
                'id' => '9a2e954b-5bcc-4448-b014-5d501c211bd5',
                'name' => 'Kalimantan Selatan',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
            22 =>
            array (
                'id' => '9a2e954b-5d66-4f59-b1c5-eaf9a4c37a36',
                'name' => 'Kalimantan Timur',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
            23 =>
            array (
                'id' => '9a2e954b-5e92-47e6-af31-0312997cbafe',
                'name' => 'Kalimantan Utara',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
            24 =>
            array (
                'id' => '9a2e954b-5f7d-4e8d-89f6-3ffc573f2ee6',
                'name' => 'Sulawesi Utara',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
            25 =>
            array (
                'id' => '9a2e954b-60ff-4fc5-af26-05c17a9e340e',
                'name' => 'Sulawesi Tengah',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
            26 =>
            array (
                'id' => '9a2e954b-62a2-40a3-8ed7-99db401cbf96',
                'name' => 'Sulawesi Selatan',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
            27 =>
            array (
                'id' => '9a2e954b-64cf-4a62-9b82-c44e55c3d567',
                'name' => 'Sulawesi Tenggara',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
            28 =>
            array (
                'id' => '9a2e954b-677f-4dfc-abb0-51ed5919dcf1',
                'name' => 'Gorontalo',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
            29 =>
            array (
                'id' => '9a2e954b-693a-4763-b697-a8d7b5fa8f1d',
                'name' => 'Sulawesi Barat',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
            30 =>
            array (
                'id' => '9a2e954b-6add-4da4-b0c2-b332b8a2f969',
                'name' => 'Maluku',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
            31 =>
            array (
                'id' => '9a2e954b-6c63-4484-9871-ece58438a765',
                'name' => 'Maluku Utara',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
            32 =>
            array (
                'id' => '9a2e954b-6db2-4907-a4e1-21b7d2366538',
                'name' => 'Papua',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
            33 =>
            array (
                'id' => '9a2e954b-6edd-41eb-ba31-75dec7455b07',
                'name' => 'Papua Barat',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
            34 =>
            array (
                'id' => '9a2e954b-7066-4553-b1f2-ece641d8d01d',
                'name' => 'Papua Selatan',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
            35 =>
            array (
                'id' => '9a2e954b-7210-4e2a-bea9-f2293828d660',
                'name' => 'Papua Tengah',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
            36 =>
            array (
                'id' => '9a2e954b-743a-45d8-96a1-7bf4cf3f795a',
                'name' => 'Papua Pegunungan',
                'created_at' => '2023-09-21 05:23:59',
                'updated_at' => '2023-09-21 05:23:59',
                'deleted_at' => NULL,
            ),
        ));


    }
}

<?php

namespace Database\Seeders;


use App\Models\Models\Lookups\Opportunity;
use App\Models\Models\Lookups\OpportunityDetail;
use Illuminate\Database\Seeder;

class OpportunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        Opportunity::factory(300)->create()->each(
            function ($opportunity){
                $opportunity->detail()->save(OpportunityDetail::factory()->make());
            }
        );
    }
}

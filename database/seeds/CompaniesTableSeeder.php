<?php
use App\Company;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class CompaniesTableSeeder extends Seeder
{

  protected $company;
  protected $faker;
  public function __construct(Company $company, Faker $faker)
  {
    $this->company = $company;
    $this->faker = $faker;
  }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        $faker =$this->faker->create();
        for ($i=0; $i < 10 ; $i++) {
          $this->company->create([
            'name' => $faker->word(),
            'description'=>$faker->word(),
            'country'=> $faker->word(),
            'adress'=>$faker->word()
          ]);
      }
    }
}

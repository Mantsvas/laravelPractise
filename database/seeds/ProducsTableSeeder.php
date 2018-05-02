<?php
use App\Product;
use App\Category;
use App\Company;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ProducsTableSeeder extends Seeder
{
  protected $product;
  protected $faker;
  protected $category;
  protected $company;
  protected $cat_id;
  protected $com_id;
  public function __construct(Product $product, Faker $faker, Company $company,Category $category )
  {
    $this->product = $product;
    $this->faker = $faker;
    $this->category = $category;
    $this->company =$company;

  }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker =$this->faker->create();
      $cat_id = $this->category->pluck('id');
      $com_id = $this->company->pluck('id');


      for ($i=0; $i < 10; $i++) {
        $this->product->create([
          'name'=> $faker->word,
          'description' => $faker->word,
          'price'=> $faker->buildingNumber,
          'quantity'=> $faker->buildingNumber,
          'category_id'=> $cat_id->random(),
          'manufacturer_id'=>$com_id->random()

        ]);
      }
    }
}

<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Company;

class AddCompanyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */ 
    protected $signature = 'contact:company';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Adds New Company';


    public function handle()
    {
        $name = $this->ask('What is your campany Name??');
        $phone = $this->ask('What the Company\'s Pgone numeber');

        $this->info($phone);

        if($this->confirm('Are you ready to inser '.$name.' company ')){

        $company = Company::create(
            [
            'name'=>$name,
            'phone'=> $phone,
            ]);

            return  $this->info($company->name.' company created');  
        }

        $this->warn('No new Comapny added');

       
        
    }
}

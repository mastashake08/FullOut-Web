<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class AddAccessTokens extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'token:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Access Tokens For All Accounts';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $users = \App\User::all();
        $users->each(function($item,$key){
          // Creating a token without scopes...
          $token = $item->createToken('personal')->accessToken;
          $item->save();
          dd($item);
        });
    }
}

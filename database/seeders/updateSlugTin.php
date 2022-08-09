<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class updateSlugTin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tin = DB::table('tin')->select('id','tieuDe')->get();
        foreach($tin as $val){
            $slugLink = Str::slug($val->tieuDe);
            DB::table('tin')->where('id',$val->id)->update(['slug' =>$slugLink]);
        }       
    }
}

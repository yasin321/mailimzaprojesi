<?php
use Illuminate\Support\Facades\DB;

function personel_count_dondur($firma_id){


        return DB::table("personels")->where("personel_firma_id", "=", $firma_id)->get()->count();


}

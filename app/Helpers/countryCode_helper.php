<?php
use App\Models\WorldModel;
function select(){
    
    $world = new WorldModel($db);
    $data = $world->distinct()->findColumn('CountryCode');
    return $data;
}

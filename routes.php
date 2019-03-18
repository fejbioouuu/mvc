<?php
/**
 * Created by PhpStorm.
 * User: Fejbioouuu
 * Date: 25.02.2019
 * Time: 11:26
 */

Route::set('index.php', function(){
    Index::CreateView('Index');
});

Route::set('absence', function(){
     absence::CreateView('absence');

});


Route::set('absenceType', function(){
    absenceType::CreateView('absenceType');
});



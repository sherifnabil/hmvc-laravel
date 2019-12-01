<?php


Route::get('all', 'Customers@index')->middleware('customer');

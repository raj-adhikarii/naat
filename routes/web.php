<?php

Auth::routes();

Route::prefix('admin')->group(function () {
   Route::middleware('guest')->group(function () {
        Route::get('/login', 'Auth\LoginController@showLoginForm');
        Route::post('/login', 'Auth\LoginController@login');
   });

   Route::middleware('auth')->group(function () {
        Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

        Route::get('/profile', 'Back\UserController@getProfile')->name('profile');
        Route::put('/change-password', 'Back\UserController@changePassword')->name('update.password');

        Route::get('/', 'Back\HomeController@index')->name('admin.home');

        Route::resource('/contactqueries', 'Back\ContactqueriesController');

        Route::resource('/testimonials', 'Back\TestimonialController');

        Route::resource('/events', 'Back\EventController');

        Route::resource('/teams', 'Back\TeamController');

        Route::resource('/stories', 'Back\SuccessStoryController');

        Route::resource('/albums', 'Back\AlbumController');
        Route::get('album/{album_id}/upload/image', [
            'uses' => 'Back\GalleryController@addImages',
            'as' => 'album.upload.images'
        ]);
        Route::post('album/{album_id}/update/gallery', [
            'uses' => 'Back\GalleryController@updateGallery',
            'as' => 'update.album.gallery'
        ]);
        Route::post('album/{album_id}/upload/image', [
            'uses' => 'Back\GalleryController@uploadAlbumImage',
            'as' => 'upload.album.image'
        ]);
        Route::post('ajax-removeDropzoneAlbumImage', [
            'uses' => 'Back\GalleryController@ajaxDeleteDropzoneAlbumImage',
            'as' => 'ajax-removeDropzoneAlbumImage'
        ]);
        Route::post('ajax-removeAlbumImage', [
            'uses' => 'Back\GalleryController@ajaxDeleteAlbumImage',
            'as' => 'ajax-removeAlbumImage'
        ]);

        Route::get('/online/applications', [
            'uses' => 'Back\OnlineApplicationController@index',
            'as' => 'online_applications'    
        ]);
        Route::patch('/online/applications/{application}', [
            'uses' => 'Back\OnlineApplicationController@toggleApplicationFollow',
            'as' => 'toggle.online_application_status'    
        ]);
        Route::delete('/online/applications/{application}', [
            'uses' => 'Back\OnlineApplicationController@destroy',
            'as' => 'delete.online_application'    
        ]);
   });
});

Route::get('/','Front\HomeController@index');

Route::post('/apply/online','Front\OnlineApplicationController@store')->name('apply.online');

Route::get('/gallery','Front\HomeController@albums')->name('front.albums');
Route::get('/gallery/{album}/images','Front\HomeController@albumImages')->name('front.album.images');

Route::get('/contact-us', 'Front\HomeController@contactdetails')->name('front.contact');
Route::post('/contact-us','Front\HomeController@store')->name('contact.store');

Route::get('/why-we','Front\HomeController@whywe')->name('about');
Route::get('/who-are-we','Front\HomeController@who')->name('about.who');
Route::get('/mission-and-vision','Front\HomeController@mission')->name('about.mission');
Route::get('/message-from-managing-director','Front\HomeController@message')->name('about.message');
Route::get('/our-team','Front\HomeController@ourTeam')->name('about.our_team');
Route::get('/certificates','Front\HomeController@certificates')->name('about.certificates');
Route::get('/success-stories','Front\HomeController@successStories')->name('about.successStories');
Route::get('/learning-facilities','Front\HomeController@learningFacilities')->name('about.learningFacilities');

Route::get('/testimonials','Front\TestimonialController@index')->name('testimonials');

Route::get('training/diploma-in-cabin-crew','Front\HomeController@diplomacrew')->name('diplomacrew');
Route::get('training/diploma-in-airport-ground-handling','Front\HomeController@groundhandling')->name('groundhandling');
Route::get('training/level-2-diploma-in-international-tourism','Front\HomeController@internationaltourism')->name('internationaltourism');
Route::get('training/level-3-advanced-diploma-in-international-tourism','Front\HomeController@advancedinternationaltourism')->name('advancedinternationaltourism');
Route::get('training/consultation-on-aircraft-maintenance-engineering','Front\HomeController@aircraftmaintenance')->name('aircraftmaintenance');
Route::get('training/consultation-on-pilot-training-program-for-canada','Front\HomeController@trainingcanada')->name('trainingcanada');

Route::get('training/passenger-ground-services','Front\HomeController@groundservices')->name('groundservices');
Route::get('training/airport-ramp-services','Front\HomeController@airportramp')->name('airportramp');
Route::get('training/ground-operations-management','Front\HomeController@groundoperation')->name('groundoperation');
Route::get('training/airline-cabin-crew-training','Front\HomeController@airlinecrew')->name('airlinecrew');
Route::get('training/dengerous-goods-regulation-(dgr)-initial-category-3','Front\HomeController@regulationinitialcat')->name('regulationinitialcat');
Route::get('training/dengerous-goods-regulation-(dgr)-recurrent-category-3','Front\HomeController@regulationrecurrentcat')->name('regulationrecurrentcat');
Route::get('training/modular-courses-and-examination','Front\HomeController@easamodular')->name('easamodular');

Route::get('training/cabin-crew-training','Front\HomeController@cabincrew')->name('cabincrew');
Route::get('training/airport-ground-handling','Front\HomeController@airport')->name('airport');
Route::get('training/pilot-training','Front\HomeController@pilot')->name('pilot');
Route::get('training/aircraft-maintenance-ngineering','Front\HomeController@aircraft')->name('aircraft');

Route::get('/news-and-notice', 'Front\HomeController@show')->name('events');

Route::get('/event/{slug}', 'Front\HomeController@eventDetail')->name('detailEvents');

Route::get('/faq', 'Front\HomeController@faq')->name('faq');

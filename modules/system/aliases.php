<?php

return [

    /*
     * Laravel aliases
     */
    'App'       => Illuminate\Support\Facades\App::class,
    'Artisan'   => Illuminate\Support\Facades\Artisan::class,
    'Bus'       => Illuminate\Support\Facades\Bus::class,
    'Cache'     => Illuminate\Support\Facades\Cache::class,
    'Cookie'    => Illuminate\Support\Facades\Cookie::class,
    'Crypt'     => Illuminate\Support\Facades\Crypt::class,
    'Db'        => Illuminate\Support\Facades\DB::class, // Preferred
    'DB'        => Illuminate\Support\Facades\DB::class,
    'Eloquent'  => Illuminate\Database\Eloquent\Model::class,
    'Event'     => Illuminate\Support\Facades\Event::class,
    'Hash'      => Illuminate\Support\Facades\Hash::class,
    'Input'     => Illuminate\Support\Facades\Input::class,
    'Lang'      => Illuminate\Support\Facades\Lang::class,
    'Log'       => Illuminate\Support\Facades\Log::class,
    'Mail'      => Illuminate\Support\Facades\Mail::class,
    'Queue'     => Illuminate\Support\Facades\Queue::class,
    'Redirect'  => Illuminate\Support\Facades\Redirect::class,
    'Redis'     => Illuminate\Support\Facades\Redis::class,
    'Request'   => Illuminate\Support\Facades\Request::class,
    'Response'  => Illuminate\Support\Facades\Response::class,
    'Route'     => Illuminate\Support\Facades\Route::class,
    'Session'   => Illuminate\Support\Facades\Session::class,
    'Storage'   => Illuminate\Support\Facades\Storage::class,
    'Url'       => Illuminate\Support\Facades\URL::class, // Preferred
    'URL'       => Illuminate\Support\Facades\URL::class,
    'Validator' => Illuminate\Support\Facades\Validator::class,
    'View'      => Illuminate\Support\Facades\View::class,

    /*
     * Winter aliases
     */
    'Model'           => Winter\Storm\Database\Model::class,
    'Block'           => Winter\Storm\Support\Facades\Block::class,
    'File'            => Winter\Storm\Support\Facades\File::class,
    'Config'          => Winter\Storm\Support\Facades\Config::class,
    'Seeder'          => Winter\Storm\Database\Updates\Seeder::class,
    'Flash'           => Winter\Storm\Support\Facades\Flash::class,
    'Form'            => Winter\Storm\Support\Facades\Form::class,
    'Html'            => Winter\Storm\Support\Facades\Html::class,
    'Http'            => Winter\Storm\Support\Facades\Http::class,
    'Str'             => Winter\Storm\Support\Facades\Str::class,
    'Markdown'        => Winter\Storm\Support\Facades\Markdown::class,
    'Yaml'            => Winter\Storm\Support\Facades\Yaml::class,
    'Ini'             => Winter\Storm\Support\Facades\Ini::class,
    'Twig'            => Winter\Storm\Support\Facades\Twig::class,
    'DbDongle'        => Winter\Storm\Support\Facades\DbDongle::class,
    'Schema'          => Winter\Storm\Support\Facades\Schema::class,
    'Cms'             => Cms\Facades\Cms::class,
    'Backend'         => Backend\Facades\Backend::class,
    'BackendMenu'     => Backend\Facades\BackendMenu::class,
    'BackendAuth'     => Backend\Facades\BackendAuth::class,
    'AjaxException'        => Winter\Storm\Exception\AjaxException::class,
    'SystemException'      => Winter\Storm\Exception\SystemException::class,
    'ApplicationException' => Winter\Storm\Exception\ApplicationException::class,
    'ValidationException'  => Winter\Storm\Exception\ValidationException::class,
];

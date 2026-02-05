<?php

require __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

echo "<h1>Limpando Caches...</h1>";

try {
    Illuminate\Support\Facades\Artisan::call('config:clear');
    echo "<p style='color:green'>Config cache cleared!</p>";

    Illuminate\Support\Facades\Artisan::call('cache:clear');
    echo "<p style='color:green'>Application cache cleared!</p>";

    Illuminate\Support\Facades\Artisan::call('route:clear');
    echo "<p style='color:green'>Route cache cleared!</p>";

    Illuminate\Support\Facades\Artisan::call('view:clear');
    echo "<p style='color:green'>View cache cleared!</p>";

    echo "<h2>Tudo pronto! Tente acessar o site novamente.</h2>";
} catch (\Exception $e) {
    echo "<p style='color:red'>Erro: " . $e->getMessage() . "</p>";
}

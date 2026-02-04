<?php
/**
 * Script de diagnóstico para erros 500 no Laravel
 */

echo "<h1>Diagnóstico de Ambiente - Star Piscinas</h1>";

// 1. Versão do PHP
echo "<h2>1. Versão do PHP</h2>";
echo "Versão Atual: " . PHP_VERSION . "<br>";
echo "Requerido: PHP 8.2 ou superior<br>";
if (version_compare(PHP_VERSION, '8.2.0', '<')) {
    echo "<span style='color:red;'>[ERRO] Sua versão do PHP é inferior à requerida pelo projeto (8.2).</span>";
} else {
    echo "<span style='color:green;'>[OK] Versão do PHP compatível.</span>";
}

// 2. Extensões Necessárias
echo "<h2>2. Extensões PHP</h2>";
$extensions = ['bcmath', 'ctype', 'fileinfo', 'json', 'mbstring', 'openssl', 'pdo', 'tokenizer', 'xml', 'curl'];
foreach ($extensions as $ext) {
    if (extension_loaded($ext)) {
        echo "<span style='color:green;'>[OK] $ext</span><br>";
    } else {
        echo "<span style='color:red;'>[FALTA] $ext</span><br>";
    }
}

// 3. Verificação de Arquivos Críticos
echo "<h2>3. Arquivos Críticos</h2>";
$files = [
    '.env' => 'Configurações de ambiente',
    'vendor/autoload.php' => 'Dependências do Composer',
    'bootstrap/app.php' => 'Inicialização do Laravel',
    'public/index.php' => 'Front Controller'
];

foreach ($files as $file => $desc) {
    if (file_exists($file)) {
        echo "<span style='color:green;'>[OK] $file ($desc)</span><br>";
    } else {
        echo "<span style='color:red;'>[NÃO ENCONTRADO] $file ($desc)</span><br>";
    }
}

// 4. Permissões de Pasta
echo "<h2>4. Permissões de Escrita</h2>";
$dirs = ['storage', 'storage/logs', 'storage/framework', 'bootstrap/cache'];
foreach ($dirs as $dir) {
    if (is_writable($dir)) {
        echo "<span style='color:green;'>[OK] $dir é gravável</span><br>";
    } else {
        echo "<span style='color:red;'>[ERRO] $dir NÃO tem permissão de escrita</span><br>";
    }
}

echo "<h2>Dica:</h2>";
echo "<p>Se tudo acima estiver OK, edite seu arquivo <b>.env</b> no servidor e altere <code>APP_DEBUG=false</code> para <code>APP_DEBUG=true</code> para ver o erro detalhado do Laravel.</p>";

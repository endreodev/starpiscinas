<?php

/**
 * Script de extração para deploys via ZIP
 * Star Piscinas - 2026
 */

$zipFile = 'deploy.zip';
$extractTo = './';

// Segurança: Permite execução apenas se o arquivo ZIP existir
if (!file_exists($zipFile)) {
    die("Arquivo $zipFile não encontrado. O upload pode ter falhado.");
}

$zip = new ZipArchive;
if ($zip->open($zipFile) === TRUE) {
    if ($zip->extractTo($extractTo)) {
        $zip->close();

        // Remove arquivos temporários após sucesso
        unlink($zipFile);

        echo "<h1>Sucesso!</h1>";
        echo "<p>Projeto extraído com sucesso em $extractTo</p>";
        echo "<p><strong>Removendo script de extração por segurança...</strong></p>";

        // Auto-deleção
        unlink(__FILE__);
    } else {
        die("Erro ao extrair o arquivo.");
    }
} else {
    die("Erro ao abrir o arquivo ZIP.");
}

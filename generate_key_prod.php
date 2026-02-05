<?php

echo "<h1>Gerador de APP_KEY - Produção</h1>";

// Caminho do .env
$envFile = __DIR__ . '/.env';

if (!file_exists($envFile)) {
    // Tenta copiar do .env.example
    if (file_exists(__DIR__ . '/.env.example')) {
        copy(__DIR__ . '/.env.example', $envFile);
        echo "<p>Arquivo .env criado a partir do exemplo.</p>";
    } else {
        die("<p style='color:red'>Erro: Arquivo .env não encontrado e sem exemplo para copiar.</p>");
    }
}

// Ler conteúdo atual
$content = file_get_contents($envFile);

// Verificar se já tem key
if (preg_match('/^APP_KEY=(.+)/m', $content, $matches)) {
    if (!empty($matches[1])) {
        echo "<p style='color:orange'>Atenção: APP_KEY já existe no arquivo (.env).</p>";
        echo "<p>Key atual: " . htmlspecialchars($matches[1]) . "</p>";
        // Descomente abaixo se quiser forçar a troca
        // die("Apague a key manualmente se quiser gerar outra.");
    }
}

// Gerar nova key
// Simulação do 'php artisan key:generate'
$key = 'base64:' . base64_encode(random_bytes(32));

echo "<p>Nova Key Gerada: <strong>$key</strong></p>";

// Atualizar ou Adicionar no arquivo
if (strpos($content, 'APP_KEY=') !== false) {
    if (preg_match('/^APP_KEY=$/m', $content)) {
        // Chave vazia, preencher
        $content = preg_replace('/^APP_KEY=$/m', 'APP_KEY=' . $key, $content);
        $updated = true;
    } else {
        // Chave com valor, substituir (opcional, aqui vou apenas preencher se vazio ou substituir se for o padrão "base64:...")
        // Vamos forçar a atualização para garantir
        $content = preg_replace('/^APP_KEY=.*/m', 'APP_KEY=' . $key, $content);
        $updated = true;
    }
} else {
    // Não existe a linha, adicionar
    $content .= "\nAPP_KEY=" . $key . "\n";
    $updated = true;
}

if ($updated) {
    file_put_contents($envFile, $content);
    echo "<p style='color:green'>Sucesso: Arquivo .env atualizado com a nova chave.</p>";
} else {
    echo "<p>Nenhuma alteração feita.</p>";
}

// Tentar limpar cache
echo "<h3>Limpando cache de configuração...</h3>";
if (file_exists(__DIR__ . '/bootstrap/cache/config.php')) {
    unlink(__DIR__ . '/bootstrap/cache/config.php');
    echo "<p>Cache de configuração removido.</p>";
}

echo "<hr><p>Agora acesse <a href='/'>sua página inicial</a>.</p>";
echo "<p><em>Por segurança, delete este arquivo (generate_key_prod.php) após o uso.</em></p>";

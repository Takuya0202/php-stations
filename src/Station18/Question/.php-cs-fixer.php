<?php

$finder = PhpCsFixer\Finder::create()->in(__DIR__);

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR2' => true,
        'no_useless_else' => true, // 使用しないelseの削除
        'array_syntax' => ['syntax' => 'short'],
        'ordered_class_elements' => [ // メソッドの順番
            'order' => [
                'method_public',
                'method_protected',
                'method_private',
            ]
        ]
    ])
    ->setUsingCache(false)
    ->setFinder($finder);

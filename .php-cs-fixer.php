<?php

$finder = (new PhpCsFixer\Finder())
    ->files()
    ->name('*.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true)
    ->in(__DIR__ . '/library/')
    ->in(__DIR__ . '/tests/');

return (new PhpCsFixer\Config())
    ->setUsingCache(true)
    ->setCacheFile(__DIR__ . '/.php-cs-fixer.cache')
    ->setRules([
        '@PSR2' => true,
        '@Symfony' => true,
        '@DoctrineAnnotation' => true,
        '@PHP74Migration' => true,
        'align_multiline_comment' => ['comment_type' => 'phpdocs_like'],
        'concat_space' => ['spacing' => 'one'],
        'echo_tag_syntax' => ['format' => 'long'],
        'linebreak_after_opening_tag' => true,
        'no_alternative_syntax' => false,
        'no_superfluous_elseif' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'nullable_type_declaration_for_default_null_value' => true,
        'phpdoc_align' => ['align' => 'left'],
        'phpdoc_order' => true,
        'phpdoc_separation' => false,
        'ternary_to_null_coalescing' => true,
    ])
    ->setFinder($finder);


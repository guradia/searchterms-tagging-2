<?php

return PhpCsFixer\Config::create()
    // ->setUsingCache(false)
    ->setRules([
        '@Symfony'               => true,
        'array_syntax'           => ['syntax' => 'short'],
        'concat_space'           => ['spacing' => 'one'],
        'binary_operator_spaces' => [
            'align_equals'       => true,
            'align_double_arrow' => true,
        ],
        'align_multiline_comment' => [
            'comment_type' => 'all_multiline',
        ],
    ])
    ->setFinder(PhpCsFixer\Finder::create()
        ->exclude('vendor')
        ->in(__DIR__)
    );

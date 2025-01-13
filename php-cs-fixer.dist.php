<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

use PhpCsFixer\Config;
use PhpCsFixer\Finder;
use PhpCsFixer\Runner\Parallel\ParallelConfigFactory;

$header = <<<'HEADER'
This file is part of the API Platform project.

(c) Kévin Dunglas <dunglas@gmail.com>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
HEADER;

$finder = (new Finder())
    ->in(__DIR__)
    ->exclude([
        'tools',
        'resources',
        'database',
        'vendor',
        'node_modules',
        'public',
        'storage',
        'bootstrap/cache',
    ])
;

return (new Config())
    ->setParallelConfig(ParallelConfigFactory::detect())
    ->setRules([
        '@DoctrineAnnotation' => true,
        '@PER-CS2.0' => true,
        '@PHP71Migration' => true,
        '@Symfony' => true,
        '@PER-CS2.0:risky' => true,
        '@PHP71Migration:risky' => true,
        '@PHPUnit60Migration:risky' => true,
        '@Symfony:risky' => true,
        'no_superfluous_elseif' => true,
        'no_superfluous_phpdoc_tags' => [
            'allow_mixed' => false,
            'allow_unused_params' => true,
        ],
        'no_unset_cast' => true,
        'no_unset_on_property' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'php_unit_method_casing' => [
            'case' => 'snake_case',
        ],
        'php_unit_set_up_tear_down_visibility' => true,
        'php_unit_test_annotation' => [
            'style' => 'prefix',
        ],
        'php_unit_test_case_static_method_calls' => ['call_type' => 'self'],
        'phpdoc_add_missing_param_annotation' => [
            'only_untyped' => true,
        ],
        'phpdoc_trim_consecutive_blank_line_separation' => true,
        'phpdoc_var_annotation_correct_order' => true,
        'return_assignment' => true,
        'strict_param' => true,
        'strict_comparison' => true,
        'header_comment' => [
            'header' => $header,
            'location' => 'after_open',
        ],
        'explicit_indirect_variable' => true,
        'fully_qualified_strict_types' => ['import_symbols' => true],
        'align_multiline_comment' => [
            'comment_type' => 'phpdocs_like',
        ],
        'single_line_empty_body' => true,
        'date_time_immutable' => true,
    ])
    ->setRiskyAllowed(true)
    ->setUsingCache(true)

    ->setFinder($finder)
;

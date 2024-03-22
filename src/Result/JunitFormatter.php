<?php declare(strict_types = 1);

namespace ShipMonk\ComposerDependencyAnalyser\Result;

use ShipMonk\ComposerDependencyAnalyser\CliOptions;
use ShipMonk\ComposerDependencyAnalyser\Config\Configuration;

class JunitFormatter implements FormatterInterface
{

    public function format(
        AnalysisResult $result,
        CliOptions $options,
        Configuration $configuration
    ): int
    {
        return 1;
    }

}
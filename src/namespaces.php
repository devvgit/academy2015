<?php

// Global namespace
class ProblemSolver {};
$solver = new ProblemSolver();

// Also global namespace
$now = new DateTime();

// The same classes separated by namespaces
$binaryProgrammers = new Binary\Repositories\ProgrammersRepository();
$otherProgrammers = new OtherVendor\ProgrammersRepository();

// In order to get current namespace
echo __NAMESPACE__;
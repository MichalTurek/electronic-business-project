<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1B7qDGY\appAppKernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1B7qDGY/appAppKernelDevDebugContainer.php') {
    touch(__DIR__.'/Container1B7qDGY.legacy');

    return;
}

if (!\class_exists(appAppKernelDevDebugContainer::class, false)) {
    \class_alias(\Container1B7qDGY\appAppKernelDevDebugContainer::class, appAppKernelDevDebugContainer::class, false);
}

return new \Container1B7qDGY\appAppKernelDevDebugContainer([
    'container.build_hash' => '1B7qDGY',
    'container.build_id' => 'c48fe44d',
    'container.build_time' => 1671568797,
], __DIR__.\DIRECTORY_SEPARATOR.'Container1B7qDGY');

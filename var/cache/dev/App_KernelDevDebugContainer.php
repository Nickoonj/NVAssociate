<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLUarT5A\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLUarT5A/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLUarT5A.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLUarT5A\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLUarT5A\App_KernelDevDebugContainer([
    'container.build_hash' => 'LUarT5A',
    'container.build_id' => '391de295',
    'container.build_time' => 1678430844,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLUarT5A');

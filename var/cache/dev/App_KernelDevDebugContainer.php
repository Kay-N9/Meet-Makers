<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGHkvhcP\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGHkvhcP/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGHkvhcP.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGHkvhcP\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerGHkvhcP\App_KernelDevDebugContainer([
    'container.build_hash' => 'GHkvhcP',
    'container.build_id' => '9d23606e',
    'container.build_time' => 1648130678,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGHkvhcP');

<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGX9HXSt\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGX9HXSt/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGX9HXSt.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGX9HXSt\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerGX9HXSt\App_KernelDevDebugContainer([
    'container.build_hash' => 'GX9HXSt',
    'container.build_id' => '4c13a67a',
    'container.build_time' => 1641933440,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGX9HXSt');

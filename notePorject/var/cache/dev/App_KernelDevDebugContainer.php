<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerB7Jsil2\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerB7Jsil2/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerB7Jsil2.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerB7Jsil2\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerB7Jsil2\App_KernelDevDebugContainer([
    'container.build_hash' => 'B7Jsil2',
    'container.build_id' => 'cc9f95ab',
    'container.build_time' => 1604672658,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerB7Jsil2');

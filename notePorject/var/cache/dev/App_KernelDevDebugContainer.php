<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHZV9lOG\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHZV9lOG/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHZV9lOG.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHZV9lOG\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHZV9lOG\App_KernelDevDebugContainer([
    'container.build_hash' => 'HZV9lOG',
    'container.build_id' => '4f7db85f',
    'container.build_time' => 1604522166,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHZV9lOG');

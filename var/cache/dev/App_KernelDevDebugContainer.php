<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLxqtUER\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLxqtUER/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLxqtUER.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLxqtUER\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLxqtUER\App_KernelDevDebugContainer([
    'container.build_hash' => 'LxqtUER',
    'container.build_id' => 'b5b75af4',
    'container.build_time' => 1716376474,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLxqtUER');
<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerH9Uikds\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerH9Uikds/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerH9Uikds.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerH9Uikds\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerH9Uikds\App_KernelDevDebugContainer([
    'container.build_hash' => 'H9Uikds',
    'container.build_id' => 'b6ed1b71',
    'container.build_time' => 1582149642,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerH9Uikds');

<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSyeRVDN\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSyeRVDN/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSyeRVDN.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSyeRVDN\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerSyeRVDN\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'SyeRVDN',
    'container.build_id' => 'f5e9d616',
    'container.build_time' => 1574751798,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSyeRVDN');

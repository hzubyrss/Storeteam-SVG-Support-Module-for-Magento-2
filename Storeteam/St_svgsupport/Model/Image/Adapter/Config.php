<?php
namespace Storeteam\St_svgsupport\Model\Image\Adapter;

class Config implements \Magento\Framework\Image\Adapter\ConfigInterface
{
    public function getSupportedImageTypes()
    {
        return ['jpg', 'jpeg', 'gif', 'png', 'svg'];
    }

    public function isMimeTypeSupported($mimeType)
    {
        return in_array($mimeType, $this->getSupportedMimeTypes());
    }

    public function getSupportedMimeTypes()
    {
        return ['image/jpeg', 'image/gif', 'image/png', 'image/svg+xml'];
    }

    public function isShared()
    {
        return false;
    }

    public function getAdapterAlias()
    {
        // You may return a proper alias here if needed
        return '';
    }

    public function getAdapters()
    {
        // Return an array of configured adapters
        return [
            'GD2' => \Magento\Framework\Image\Adapter\Gd2::class,
            'IMAGEMAGICK' => \Magento\Framework\Image\Adapter\ImageMagick::class
        ];
    }
}

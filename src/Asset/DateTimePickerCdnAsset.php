<?php

declare(strict_types=1);

namespace Yii2\Extensions\DateTimePicker\Asset;

use Yii2\Asset\PopperCdnAsset;
use yii\web\AssetBundle;

/**
 * Eonasdan DateTimePicker asset bundle for CDN.
 */
final class DateTimePickerCdnAsset extends AssetBundle
{
    /**
     * @phpstan-var array<array-key, mixed>
     */
    public $depends = [
        PopperCdnAsset::class,
    ];

    public function init(): void
    {
        parent::init();

        $this->css = ['https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.38.0/css/tempusdominus-bootstrap-4.min.css'];
        $this->cssOptions = [
            'crossorigin' => 'anonymous',
            'rel' => 'stylesheet',
        ];
        $this->js = [
            [
                'https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.38.0/js/tempusdominus-bootstrap-4.min.js',
                'crossorigin' => 'anonymous',
            ],
        ];
    }
}

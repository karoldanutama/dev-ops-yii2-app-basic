<?php
/**
 * Application configuration shared by all test types
 */
return yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../../../config/common.php'),
    require(__DIR__ . '/../../../config/common-role.php'),
    require(__DIR__ . '/../../../config/web.php'),
    require(__DIR__ . '/../../../config/web-role.php')
);

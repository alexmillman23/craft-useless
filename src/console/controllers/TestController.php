<?php

namespace alexmillman\craftuseless\console\controllers;

use Craft;
use craft\console\Controller;
use yii\console\ExitCode;

/**
 * Test controller
 */
class TestController extends Controller
{
    public $defaultAction = 'index';


    /**
     * useless/test command
     */
    public function actionIndex()
    {
        echo "Hello \n";
    }
}

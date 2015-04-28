<?php
namespace backend\modules\translate\controllers\Word;

use backend\ext\Grid\Crud\DeleteAction;
use backend\modules\translate\models\Word\BWordSave;

class WordDeleteAction extends DeleteAction
{
    protected function initConfig()
    {
        parent::initConfig();
        $this->modelClass = BWordSave::className();
    }

    public function run()
    {
        return $this->runCustom();
    }
}

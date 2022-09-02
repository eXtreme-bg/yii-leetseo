<?php

/**
 * @author Bogdan Kovachev (https://1337.bg)
 */
class LeetSeoSearchEnginesTagsWidget extends CWidget {

    /**
     * {@inheritDoc}
     */
    public function init() {
        // Render
        $this->render('searchenginestags', [
            'se' => Yii::app()->leetSeo
        ]);
    }
}

<?php

/**
 * @author Bogdan Kovachev (https://1337.bg)
 */
class LeetSeoOpenGraphTagsWidget extends CWidget  {

    /**
     * {@inheritDoc}
     */
    public function init() {
        // Render
        $this->render('opengraphtags', [
            'og' => Yii::app()->leetOpenGraph
        ]);
    }

}

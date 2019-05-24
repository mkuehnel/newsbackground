<?php

namespace GeorgRinger\Eventnews\Domain\Model;

/**
 * News
 */
class News extends \GeorgRinger\News\Domain\Model\News {

        /**
         * @var string
         */
        protected $background;

        /**
         * @return string
         */
        public function getBackground() {
                return $this->background;
        }

        /**
         * @param string $background
         */
        public function setBackground($background) {
                $this->background = $background;
        }

}
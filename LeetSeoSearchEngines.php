<?php

/**
 * @author Bogdan Kovachev (https://1337.bg)
 */
class LeetSeoSearchEngines extends CApplicationComponent {

    /**
     * The value used for <title> tag
     *
     * The propery is mandatory.
     *
     * @var string
     */
    public $title;

    /**
     * The value used for <meta name="description" /> tag
     *
     * The propery is mandatory.
     *
     * @var string
     */
    public $description;

    /**
     * The value used for <meta name="keywords" /> tag
     *
     * The propery is optional.
     *
     * @var string|null
     */
    public $keywords;

    /**
     * The value used for <meta name="robots"> tag
     *
     * The propery is optional.
     *
     * @var string|null
     */
    public $robots;

    /**
     * Set title, description, keywords and robots
     *
     * @param string|null $title
     * @param string|null $description
     * @param string|null $keywords
     * @param string|null $robots
     * @throws CException
     */
    public function setTags(string $title = null, string $description = null, string $keywords = null, string $robots = null) : void {
        if (!empty($title)) {
            $this->setTitle($title);
        }

        if (!empty($description)) {
            $this->setDescription($description);
        }

        if (!empty($keywords)) {
            $this->setKeywords($keywords);
        }

        if (!empty($robots)) {
            $this->setRobots($robots);
        }
    }

    /**
     * Set title
     *
     * @param string $title
     * @throws CException
     */
    public function setTitle(string $title) : void {
        if (!is_string($title)) {
            throw new CException('The type for variable `title` is wrong.');
        }

        $this->title = $title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @throws CException
     */
    public function setDescription(string $description) : void {
        if (!is_string($description)) {
            throw new CException('The type for variable `description` is wrong.');
        }

        $this->description = $description;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     * @throws CException
     */
    public function setKeywords(string $keywords) : void {
        if (!is_string($keywords)) {
            throw new CException('The type for variable `keywords` is wrong.');
        }

        $this->keywords = $keywords;
    }

    /**
     * Set robots
     *
     * @param string $robots
     * @throws CException
     */
    public function setRobots(string $robots) : void {
        if (!is_string($robots)) {
            throw new CException('The type for variable `robots` is wrong.');
        }

        $this->robots = $robots;
    }

}

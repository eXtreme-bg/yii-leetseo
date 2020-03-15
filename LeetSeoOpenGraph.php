<?php

/**
 * @author Bogdan Kovachev (https://1337.bg)
 */
class LeetSeoOpenGraph extends CApplicationComponent {

    /**
     * The title of your object as it should appear within the graph, e.g., "The Rock".
     *
     * The propery is mandatory.
     *
     * @var string
     */
    public $title;

    /**
     * The type of your object, e.g., "video.movie". Depending on the type you specify, other properties may also be required.
     *
     * The propery is mandatory.
     *
     * @var string
     */
    public $type;

    /**
     * The canonical URL of your object that will be used as its permanent ID in the graph, e.g., "http://www.imdb.com/title/tt0117500/".
     *
     * The propery is mandatory.
     *
     * @var string
     */
    public $url;

    /**
     * An image URL which should represent your object within the graph.
     *
     * The propery is mandatory.
     *
     * @var string
     */
    public $image;

    /**
     * Identical to og:image.
     *
     * The propery is optional.
     *
     * @var string|null
     */
    public $imageUrl;

    /**
     * An alternate url to use if the webpage requires HTTPS.
     *
     * The propery is optional.
     *
     * @var string|null
     */
    public $imageSecureUrl;

    /**
     * A MIME type for this image.
     *
     * The propery is optional.
     *
     * @var string|null
     */
    public $imageType;

    /**
     * The number of pixels wide.
     *
     * The propery is optional.
     *
     * @var int|null
     */
    public $imageWidth;

    /**
     * The number of pixels high.
     *
     * The propery is optional.
     *
     * @var int|null
     */
    public $imageHeight;

    /**
     * A description of what is in the image (not a caption). If the page specifies an og:image it should specify og:image:alt.
     *
     * The propery is optional.
     *
     * @var string|null
     */
    public $imageAlt;

    /**
     * A URL to an audio file to accompany this object.
     *
     * The propery is optional.
     *
     * @var string|null
     */
    public $audio;

    /**
     * Identical to og:audio.
     *
     * The propery is optional.
     *
     * @var string|null
     */
    public $audioUrl;

    /**
     * An alternate url to use if the webpage requires HTTPS.
     *
     * The propery is optional.
     *
     * @var string|null
     */
    public $audioSecureUrl;

    /**
     * A MIME type for this audio.
     *
     * The propery is optional.
     *
     * @var string|null
     */
    public $audioType;

    /**
     * A one to two sentence description of your object.
     *
     * The propery is optional.
     *
     * @var string|null
     */
    public $description;

    /**
     * The word that appears before this object's title in a sentence. An enum of (a, an, the, "", auto). If auto is chosen, the consumer of your data should chose between "a" or "an". Default is "" (blank).
     *
     * The propery is optional.
     *
     * @var string|null
     */
    public $determiner;

    /**
     * The locale these tags are marked up in. Of the format language_TERRITORY. Default is en_US.
     *
     * The propery is optional.
     *
     * @var string|null
     */
    public $locale;

    /**
     * An array of other locales this page is available in.
     *
     * The propery is optional.
     *
     * @var string|null
     */
    public $localeAleternate;

    /**
     * If your object is part of a larger web site, the name which should be displayed for the overall site. e.g., "IMDb".
     *
     * The propery is optional.
     *
     * @var string|null
     */
    public $siteName;

    /**
     * A URL to a video file that complements this object.
     *
     * The propery is optional.
     *
     * @var string|null
     */
    public $video;

    /**
     * Identical to og:video.
     *
     * The propery is optional.
     *
     * @var string|null
     */
    public $videoUrl;

    /**
     * An alternate url to use if the webpage requires HTTPS.
     *
     * The propery is optional.
     *
     * @var string|null
     */
    public $videoSecureUrl;

    /**
     * A MIME type for this video.
     *
     * The propery is optional.
     *
     * @var string|null
     */
    public $videoType;

    /**
     * The number of pixels wide.
     *
     * The propery is optional.
     *
     * @var int|null
     */
    public $videoWidth;

    /**
     * The number of pixels high.
     *
     * The propery is optional.
     *
     * @var int|null
     */
    public $videoHeight;

    /**
     * A description of what is in the video. If the page specifies an og:video it should specify og:video:alt.
     *
     * The propery is optional.
     *
     * @var string|null
     */
    public $videoAlt;

    /**
     * Namespace URI
     *
     * @var string
     */
    public $htmlTagPrefix = 'og: http://ogp.me/ns#';

    /**
     * {@inheritDoc}
     */
    public function init() {
        //
        $this->url = Yii::app()->createAbsoluteUrl(Yii::app()->request->url);

        return parent::init();
    }

    /**
     * @param string|null $title
     * @param string|null $description
     * @param string|null $image
     * @param string|null $url
     * @throws CException
     */
    public function setTags(string $title = null, string $description = null, string $image = null, string $url = null) : void {
        if (!empty($title)) {
            $this->setTitle($title);
        }

        if (!empty($description)) {
            $this->setDescription($description);
        }

        if (!empty($image)) {
            $this->setImage($image);
        }

        if (!empty($url)) {
            $this->setUrl($url);
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
     * Set image
     *
     * @param string $image
     * @throws CException
     */
    public function setImage(string $image) : void {
        if (!is_string($image)) {
            throw new CException('The type for variable `image` is wrong.');
        }

        if (!filter_var($image, FILTER_VALIDATE_URL)) {
            throw new CException('The value for variable `image` must be valid URL.');
        }

        $this->image = $image;

        if (substr($image, 0, 8) == 'https://') {
            $this->imageSecureUrl = $image;
        } else {
            $this->imageSecureUrl = null;
        }
    }

    /**
     * Set URL
     *
     * @param string $url
     * @throws CException
     */
    public function setUrl(string $url) : void {
        if (!is_string($url)) {
            throw new CException('The type for variable `url` is wrong.');
        }

        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            throw new CException('The value for variable `url` must be valid URL.');
        }

        $this->url = $url;
    }

}

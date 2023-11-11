<?php

namespace Hilalahmad\DesignSocialShare;

class DesignSocialShare
{
    private $styles = [];
    private $js = "";

    /**
     * Constructor to initialize default styles.
     */
    public function __construct()
    {
        $this->setDefaultStyles();
    }

    /**
     * Set a CSS style property and value.
     *
     * @param string $property
     * @param string $value
     */
    public function setStyle($property, $value)
    {
        $this->styles[$property] = $value;
    }

    public function getJavascript($url)
    {
        $js = "function copyToClipboard() {
            var copyText = '{$url}'
            var textarea = document.createElement('textarea');
            textarea.value = copyText;
            document.body.appendChild(textarea);
            textarea.select();
            document.execCommand('copy');
            document.body.removeChild(textarea);

            alert('Copied to clipboard: ' + copyText);
        }";
        return $js;
    }

    /**
     * Add a CSS class to the styles.
     *
     * @param string $class
     */
    public function addClass($class)
    {
        $this->styles['class'] = $class;
    }

    /**
     * Get the current styles as an array.
     *
     * @return array
     */
    public function getStyles()
    {
        return $this->styles;
    }

    /**
     * Apply the styles to a CSS selector and return the CSS rule.
     *
     * @param string $selector
     * @return string
     */
    public function applyStyles()
    {
        $styleString = '';
        foreach ($this->styles as $property => $value) {
            $styleString .= "$property: $value; ";
        }

        return "$styleString";
    }

    /**
     * Reset the styles to the default settings.
     */
    public function resetStyles()
    {
        $this->setDefaultStyles();
    }

    /**
     * Set default styles.
     */
    private function setDefaultStyles()
    {
        $this->styles = [
            'display' => 'flex',
            'padding' => '10px 20px',
            'border-radius' => '8px',
            'font-size' => '16px',
            'align-items' => 'center',
            'justify-content' => 'center',
            'text-decoration'=>'none'
        ];
    }
}


class SocialShareConstants
{
    const FACEBOOK_COLOR = '#4267B2';
    const WHATSAPP_COLOR = '#25d366';
    const EMAIL_COLOR = '#7d7d7d';
    const SMS_COLOR = '#ffbd00';
    const LINKEDIN_COLOR = 'rgb(0, 119, 181)';
    const PINTEREST_COLOR = 'rgb(203, 32, 39)';
    const REDDIT_COLOR = 'rgb(255, 69, 0)';
    const TUMBLR_COLOR = 'rgb(50, 80, 109)';
    const OUTLOOK_COLOR = 'rgb(48, 112, 203)';
    const MESSENGER_COLOR = 'rgb(0, 119, 181)';
    const TWITTER_COLOR = '#000000';
}

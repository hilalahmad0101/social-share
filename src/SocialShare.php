<?php

namespace Hilalahmad\SocialShare;

use Hilalahmad\DesignSocialShare\DesignSocialShare;
use Hilalahmad\DesignSocialShare\SocialShareConstants;

/**
 * Class SocialShare
 * 
 * A class for generating social share links and associated styles.
 */
class SocialShare
{
    /** @var DesignSocialShare $design The design settings for social share links. */
    protected $design;

    /**
     * Initialize the SocialShare class with the default design settings.
     */
    public function __construct()
    {
        $this->design = new DesignSocialShare();
        $this->setDefaultStyles();
    }

    /**
     * Generate social share links and associated styles for Facebook.
     *
     * @param string $url The URL to be shared.
     *
     * @return array An array containing style, icon, and Facebook share link.
     */
    public function facebook($url)
    {
        $this->design->setStyle('background-color', SocialShareConstants::FACEBOOK_COLOR);
        $encodedUrl = urlencode($url);
        $facebookUrl = "https://www.facebook.com/sharer/sharer.php?u={$encodedUrl}";
        $icon = '<i class="fab fa-facebook-f" style="color:white"></i>';
        $facebookUrl = "<a href='{$facebookUrl}' style='{$this->design->applyStyles()}'>{$icon}</a>";
        return $facebookUrl;
    }

    /**
     * Generate social share links and associated styles for WhatsApp.
     *
     * @param string $url The URL to be shared.
     *
     * @return array An array containing style, icon, and WhatsApp share link.
     */
    public function whatsapp($url)
    {
        $this->design->setStyle('background-color', SocialShareConstants::WHATSAPP_COLOR);
        $encodedUrl = urlencode($url);
        $whatsappUrl = "https://api.whatsapp.com/send?text={$encodedUrl}";
        $icon = '<i class="fab fa-whatsapp" style="color:white"></i>';
        $whatsappUrl = "<a href='{$whatsappUrl}' style='{$this->design->applyStyles()}'>{$icon}</a>";
        return $whatsappUrl;
    }

    /**
     * Generate social share links and associated styles for email.
     *
     * @param string $url The URL to be shared via email.
     *
     * @return array An array containing style, icon, and email share link.
     */
    public function email($url)
    {
        $this->design->setStyle('background-color', SocialShareConstants::EMAIL_COLOR);
        $encodedUrl = urlencode($url);
        $emailUrl = "mailto:?subject=Check out this link&body={$encodedUrl}";
        $icon = '<i class="fas fa-envelope" style="color:white"></i>';
        $emailUrl = "<a href='{$emailUrl}' style='{$this->design->applyStyles()}'>{$icon}</a>";
        return $emailUrl;
    }

    /**
     * Generate social share links and associated styles for SMS.
     *
     * @param string $phoneNumber The phone number to send SMS to.
     * @param string $message The message to be sent via SMS.
     *
     * @return array An array containing style, icon, and SMS share link.
     */
    public function sms($phoneNumber, $message)
    {
        $this->design->setStyle('background-color', SocialShareConstants::SMS_COLOR);
        $encodedPhoneNumber = urlencode($phoneNumber);
        $encodedMessage = urlencode($message);
        $smsUrl = "sms:{$encodedPhoneNumber}?body={$encodedMessage}";
        $icon = '<i class="fas fa-comment-sms" style="color:white"></i>';
        $smsUrl = "<a href='{$smsUrl}' style='{$this->design->applyStyles()}'>{$icon}</a>";
        return $smsUrl;
    }

    /**
     * Generate social share links and associated styles for LinkedIn.
     *
     * @param string $url The URL to be shared via LinkedIn.
     *
     * @return array An array containing style, icon, and LinkedIn share link.
     */
    public function linkedin($url)
    {
        $this->design->setStyle('background-color', SocialShareConstants::LINKEDIN_COLOR);
        $encodedUrl = urlencode($url);
        $linkedinUrl = "https://www.linkedin.com/sharing/share-offsite/?url={$encodedUrl}";
        $icon = '<i class="fab fa-linkedin" style="color:white"></i>';
        $linkedin = "<a href='{$linkedinUrl}' style='{$this->design->applyStyles()}'>{$icon}</a>";
        return $linkedin;
    }

    /**
     * Generate social share links and associated styles for Pinterest.
     *
     * @param string $url The URL to be shared via Pinterest.
     * @param string $imageUrl The URL of the image to be pinned.
     * @param string $content The description of the pin.
     *
     * @return array An array containing style, icon, and Pinterest share link.
     */
    public function pinterest($url, $imageUrl, $content)
    {
        $this->design->setStyle('background-color', SocialShareConstants::PINTEREST_COLOR);
        $encodedUrl = urlencode($url);
        $encodedImageUrl = urlencode($imageUrl);
        $encodedContent = urlencode($content);
        $pinterestUrl = 'https://www.pinterest.com/pin/create/button/?url=' . $encodedUrl . '&media=' . $encodedImageUrl . '&description=' . $encodedContent;
        $icon = '<i class="fa-brands fa-pinterest-p" style="color:white"></i>';
        $pinterest = "<a href='{$pinterestUrl}' style='{$this->design->applyStyles()}'>{$icon}</a>";
        return $pinterest;
    }

    /**
     * Generate social share links and associated styles for Reddit.
     *
     * @param string $url The URL to be shared via Reddit.
     * @param string $content The title of the Reddit post.
     *
     * @return string HTML string containing the Reddit share link.
     */
    public function reddit($url, $content)
    {
        $this->design->setStyle('background-color', SocialShareConstants::REDDIT_COLOR);
        $encodedUrl = urlencode($url);
        $encodedContent = urlencode($content);
        $redditUrl = 'https://www.reddit.com/r/subreddit/submit?url=' . $encodedUrl . '&title=' . $encodedContent;
        $icon = '<i class="fa-brands fa-reddit" style="color:white"></i>';
        $redditLink = "<a href='{$redditUrl}' style='{$this->design->applyStyles()}'>{$icon}</a>";
        return $redditLink;
    }

    /**
     * Generate social share links and associated styles for Tumblr.
     *
     * @param string $url The URL to be shared via Tumblr.
     * @param string $title The title of the Tumblr post.
     *
     * @return array An array containing style, icon, and Tumblr share link.
     */
    public function tumblr($url, $title)
    {
        $this->design->setStyle('background-color', SocialShareConstants::TUMBLR_COLOR);
        $encodedUrl = urlencode($url);
        $encodedTitle = urlencode($title);
        // Adjust the Tumblr share URL based on the latest documentation or requirements.
        $tumblrUrl = 'https://www.tumblr.com/share/tool?canonicalUrl=' . $encodedUrl . '&name=' . $encodedTitle;
        $icon = '<i class="fa-brands fa-tumblr" style="color:white"></i>';
        $tumblrUrl = "<a href='{$tumblrUrl}' style='{$this->design->applyStyles()}'>{$icon}</a>";
        return $tumblrUrl;
    }

    /**
     * Generate social share links and associated styles for Outlook.
     *
     * @param string $url The URL to be shared via Outlook.
     * @param string $subject The subject of the email.
     * @param string $body The body of the email.
     *
     * @return array An array containing style, icon, and Outlook share link.
     */
    public function outlook($url, $subject, $body)
    {
        $this->design->setStyle('background-color', SocialShareConstants::OUTLOOK_COLOR);
        $encodedUrl = urlencode($url);
        $encodedSubject = urlencode($subject);
        $encodedBody = urlencode($body);
        $outlookUrl = "https://outlook.office.com/mail/deeplink/compose?body={$encodedBody}&subject={$encodedSubject}&messagebody={$encodedUrl}";
        $icon = '<svg width="15" height="15" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 2.25352V17.5587L11.7718 20V0L0 2.25352ZM5.93071 13.4655C2.18849 13.2268 2.57391 6.55516 6.01807 6.50215C9.70772 6.74336 9.34576 13.4123 5.93071 13.4655ZM5.98466 7.80844C4.01315 7.94383 4.10142 12.1212 5.95425 12.1547C7.91726 12.0296 7.80198 7.8409 5.98466 7.80844ZM13.7776 10.4691C13.9554 10.5983 14.1695 10.4691 14.1695 10.4691C13.9561 10.5983 20 6.62762 20 6.62762V13.8179C20 14.6005 19.4934 14.9288 18.9238 14.9288H12.5154L12.5158 9.61203L13.7776 10.4691ZM12.5161 4.24039V8.1525L13.8983 9.01332C13.9348 9.02387 14.0138 9.02461 14.0502 9.01332L19.9992 5.04637C19.9992 4.57691 19.5564 4.24039 19.3065 4.24039H12.5161Z" fill="white"></path></svg>';
        $outlookUrl = "<a href='{$outlookUrl}' style='{$this->design->applyStyles()}'>{$icon}</a>";
        return $outlookUrl;
    }

    /**
     * Generate social share links and associated styles for Twitter.
     *
     * @param string $url The URL to be shared via Twitter.
     * @param string $text The tweet text.
     *
     * @return array An array containing style, icon, and Twitter share link.
     */
    public function twitter($url, $text)
    {
        $this->design->setStyle('background-color', SocialShareConstants::TWITTER_COLOR);
        $encodedUrl = urlencode($url);
        $encodedText = urlencode($text);
        $twitterUrl = "https://twitter.com/intent/tweet?url={$encodedUrl}&text={$encodedText}";
        $icon = '<i class="fab fa-twitter" style="color:white"></i>';
        $twitterUrl = "<a href='{$twitterUrl}' style='{$this->design->applyStyles()}'>{$icon}</a>";
        return $twitterUrl;
    }

    /**
     * Set default design styles.
     */
    private function setDefaultStyles()
    {
        $this->design->setStyle('padding', '10px 20px');
        $this->design->setStyle('border-radius', '8px');
    }
}

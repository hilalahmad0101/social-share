<h1 align="center">Social-share PHP Package</h1>

<p align="center">
   <em>The Social-share PHP package is a versatile and easy-to-use library designed to simplify the integration of social media sharing functionality into PHP applications. With this package, developers can effortlessly generate share links for various social media platforms and customize the associated styles.</em>
</p>

<p align="center">
  <a href="https://github.com/fullstack124/social-share/issues">
    <img src="https://img.shields.io/github/issues/fullstack124/social-share" alt="GitHub issues">
  </a>
  <a href="https://github.com/fullstack124/social-share/stargazers">
    <img src="https://img.shields.io/github/stars/fullstack124/social-share" alt="GitHub stars">
  </a>
  <a href="https://packagist.org/packages/fullstack124/social-share">
    <img src="https://img.shields.io/packagist/dt/fullstack124/social-share" alt="Total Downloads">
  </a>
  <a href="https://github.com/fullstack124/social-share/blob/main/LICENSE">
    <img src="https://img.shields.io/github/license/fullstack124/social-share" alt="License">
  </a>
</p>

## Table of Contents

- [Installation](#installation)
- [Features](#features)
- [Usage](#usage)
  - [Basic Usage](#basic-usage) 
- [Contribution](#contribution)
- [License](#license)


## Installation

You can install this package using Composer, a popular PHP package manager:

```bash
composer require hilalahmad/social-share
```

## Features

### Platform Support: 
- Generate share links for popular social media platforms including Facebook, WhatsApp, Email, SMS, Pinterest, Reddit, Outlook, LinkedIn, and Twitter.
### Custom Styling: 
- Easily apply custom styles to the generated share links to seamlessly integrate them with your application's design.
### Simple Integration: 
- The package provides a straightforward interface, making it simple for developers to incorporate social media sharing features into their PHP projects.
### Flexibility: 
- Adapt the package to your specific use case by customizing the default design styles and easily extending it to support additional social media platforms.

## Basic Usage

Here's an example of how to use the HttpClient package to send a GET request:

```bash
use Hilalahmad\SocialShare\SocialShare;

$socialShare = new SocialShare();

echo $socialShare->facebook(url);
echo $socialShare->whatsapp(url);
echo $socialShare->email(url);
echo $socialShare->sms($phoneNumber,$message);
echo $socialShare->linkedin($url);
echo $socialShare->pinterest($url,$image_url,$content);
echo $socialShare->reddit($url,$content);
echo $socialShare->tumblr($url,$title);
echo $socialShare->outlook($url,$subject,$body);
echo $socialShare->twitter($url,$text);
```

### Generate Share Links in HTML
- You can now directly embed the generated share links with custom styles into your HTML code:
## Contribution

If you'd like to contribute to this package or report issues, please check the  <a href="https://github.com/fullstack124/social-share/issues"> Github repo</a> for more details.
 
## License
This package is open-source and is licensed under the MIT License. 
 

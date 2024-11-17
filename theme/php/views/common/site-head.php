<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--Etiquetas Movil APP IOS-->
      <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Gourmet">
    <link rel="apple-touch-icon" href="<?php echo DIR_URI . '/assets/icons/sushi-ios.png' ?>">
    <!--Etiquetas Movil APP ANDROID-->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#333333">
    <meta name="aplication-name" content="Gourmet">
    <link rel="icon" type="image/png" href="<?php echo DIR_URI . '/assets/icons/sushi-android.png' ?>">
    <title><?php echo bloginfo('name'); ?></title>
    <link rel="icon" type="image/x-icon" href="<?php echo DIR_URI . '/assets/icons/sushi-favicon.png' ?>">
    <!-- <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/> -->
    <?php wp_head();?>
</head>
<body <?php body_class("relative")?> id="siteBody"  >
    <!-- Loader -->
    <div id="pageLoader" style="position:absolute;display:flex;align-items:center;justify-content:center;left: 0;top:0;height:100vh;width:100vw;background-color:transparent; backdrop-filter: blur(40px);z-index:200;">
       <div style="width:240px;">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><radialGradient id="a12" cx=".66" fx=".66" cy=".3125" fy=".3125" gradientTransform="scale(1.5)"><stop offset="0" stop-color="#676767"></stop><stop offset=".3" stop-color="#676767" stop-opacity=".9"></stop><stop offset=".6" stop-color="#676767" stop-opacity=".6"></stop><stop offset=".8" stop-color="#676767" stop-opacity=".3"></stop><stop offset="1" stop-color="#676767" stop-opacity="0"></stop></radialGradient><circle transform-origin="center" fill="none" stroke="url(#a12)" stroke-width="6" stroke-linecap="round" stroke-dasharray="200 1000" stroke-dashoffset="0" cx="100" cy="100" r="70"><animateTransform type="rotate" attributeName="transform" calcMode="spline" dur="2" values="360;0" keyTimes="0;1" keySplines="0 0 1 1" repeatCount="indefinite"></animateTransform></circle><circle transform-origin="center" fill="none" opacity=".2" stroke="#676767" stroke-width="6" stroke-linecap="round" cx="100" cy="100" r="70"></circle></svg>
       </div>
    </div>
     <!-- Header Pad -->
    <div id="headerPad"></div>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Primewaretrades</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<style>
    /*-----------------------------------*\
  #style.css
\*-----------------------------------*/

/**
 * copyrights 2022 codewithsadee
 */





/*-----------------------------------*\
  #CUSTOM PROPERTY
\*-----------------------------------*/

:root {

/**
 * colors
 */

--cadet-blue-crayola: hsl(227, 13%, 73%);
--maximum-yellow-red: hsl(41, 95%, 61%);
--medium-sea-green: hsl(142, 43%, 54%);
--blue-crayola_10: hsla(222, 100%, 61%, 0.05);
--smocky-black_30: hsla(0, 0%, 6%, 0.3);
--eerie-black-1: hsl(240, 5%, 8%);
--eerie-black-2: hsl(228, 9%, 10%);
--raisin-black: hsl(225, 15%, 16%);
--blue-crayola: hsl(222, 100%, 61%);
--roman-silver: hsl(223, 10%, 52%);
--presian-red: hsl(0, 64%, 52%);
--gunmetal_50: hsla(230, 16%, 22%, 0.5);
--gainsboro: hsl(0, 0%, 85%);
--cultured: hsl(0, 0%, 93%);
--white_50: hsla(0, 0%, 100%, 0.5);
--white_30: hsla(0, 0%, 100%, 0.3);
--white_10: hsla(0, 0%, 100%, 0.1);
--black_10: hsla(0, 0%, 0%, 0.1);
--white: hsl(0, 0%, 100%);

/**
 * gradient color
 */

--gradient: linear-gradient(90deg, var(--white_10) 0px 77%, var(--white_50) 92%, transparent);

/**
 * typography
 */

--ff-dm-sans: 'DM Sans', sans-serif;

--fs-1: 3.2rem;
--fs-2: 3rem;
--fs-3: 2.4rem;
--fs-4: 2rem;
--fs-5: 1.8rem;
--fs-6: 1.5rem;
--fs-7: 1.4rem;
--fs-8: 1.2rem;

--fw-500: 500;
--fw-700: 700;

/**
 * spacing
 */

--section-padding: 100px;

/**
 * shadow
 */

--shadow-1: 0px 4px 8px var(--black_10);
--shadow-2: 0px 30px 10px -20px var(--smocky-black_30);
--shadow-3: 0px 15px 10px -20px var(--smocky-black_30);

/**
 * radius
 */

--radius-12: 12px;
--radius-24: 24px;

/**
 * transition
 */

--transition-1: 0.25s ease;
--transition-2: 0.5s ease;
--transition-3: 1s ease;
--cubic-out: cubic-bezier(0.33, 0.85, 0.4, 0.96);

}



.faq {
  padding-top: 80px;
}

.faq .accordion-item {
  border: 0;
  margin-bottom: 10px;
}

.faq .accordion-collapse {
  border: 0;
}

.faq .accordion-button {
  padding: 15px 30px 20px 60px;
  font-weight: 600;
  border: 0;
  font-size: 18px;
  color: var(--color-default);
  text-align: left;
  background: rgba(14, 29, 52, 0.03);
  border-radius: 5px;
}

.faq .accordion-button:focus {
  box-shadow: none;
}

.faq .accordion-button:not(.collapsed) {
  color: var(--color-primary);
  border-bottom: 0;
  box-shadow: none;
}

.faq .question-icon {
  position: absolute;
  top: 14px;
  left: 25px;
  font-size: 20px;
  color: var(--color-primary);
}

.faq .accordion-button:after {
  position: absolute;
  right: 15px;
  top: 15px;
}

.faq .accordion-body {
  padding: 0 30px 25px 60px;
  border: 0;
  background: rgba(14, 29, 52, 0.03);
  border-radius: 5px;
}
/*--------------------------------------------------------------
# KYLE CUSTOMIZED
--------------------------------------------------------------*/
.gld h3, h4{
    color: #fff !important;
}

/*-----------------------------------*\
#RESET
\*-----------------------------------*/

*,
*::before,
*::after {
margin: 0;
padding: 0;
box-sizing: border-box;
}

li { list-style: none; }

a {
text-decoration: none;
color: inherit;
}

a,
img,
svg,
data,
span,
button,
ion-icon { display: block; }

img { height: auto; }

button {
background: none;
border: none;
font: inherit;
cursor: pointer;
}

ion-icon { pointer-events: none; }

address { font-style: normal; }

table { border-collapse: collapse; }

html {
font-family: var(--ff-dm-sans);
font-size: 10px;
scroll-behavior: smooth;
}

body {
background-color: var(--eerie-black-2);
color: var(--cadet-blue-crayola);
font-size: 1.6rem;
line-height: 1.4;
}

body.active { overflow: hidden; }

::-webkit-scrollbar { width: 10px; }

::-webkit-scrollbar-track { background-color: hsl(220, 4%, 5%); }

::-webkit-scrollbar-thumb { background-color: hsl(220, 5%, 20%); }

::-webkit-scrollbar-thumb:hover { background-color: hsl(220, 5%, 30%); }

:focus-visible { outline-offset: 4px; }





/*-----------------------------------*\
#REUSED STYLE
\*-----------------------------------*/

.container { padding-inline: 15px; }

.btn {
color: var(--white);
border-radius: 50px;
}

.btn-outline {
font-size: var(--fs-6);
font-weight: var(--fw-500);
border: 1px solid var(--white);
padding: 5px 15px;
transition: var(--transition-1);
}

.btn-outline:is(:hover, :focus) {
background-color: var(--blue-crayola);
border-color: var(--blue-crayola);
}

.btn-primary {
position: relative;
background-color: var(--blue-crayola);
max-width: max-content;
font-weight: var(--fw-700);
padding: 13px 30px;
overflow: hidden;
z-index: 1;
}

.btn-primary::after {
content: "";
position: absolute;
top: 0;
left: 0;
bottom: 0;
right: -50px;
background-image: var(--gradient);
transform: translateX(-100%);
opacity: 0;
z-index: -1;
transition: var(--transition-2);
}

.btn-primary:is(:hover, :focus)::after {
transform: translateX(0);
opacity: 1;
}

.section { padding-block: var(--section-padding); }

[data-section] > * {
transform: translateY(50px);
opacity: 0;
transition: var(--transition-3);
}

[data-section].active > * {
opacity: 1;
transform: translateY(0);
}

.h1,
.h2,
.h3 {
color: var(--white);
line-height: 1.1;
}

.h1 { font-size: var(--fs-1); }

.h2 { font-size: var(--fs-2); }

.h3 { font-size: var(--fs-3); }

.w-100 { width: 100%; }

.badge {
color: var(--white);
font-size: var(--fs-8);
font-weight: var(--fw-700);
padding: 4px 8px;
border-radius: 50px;
}

.badge.red { background-color: var(--presian-red); }

.badge.green { background-color: var(--medium-sea-green); }

.last-update.red { color: var(--presian-red); }

.last-update.green { color: var(--medium-sea-green); }

.section-text {
font-size: var(--fs-5);
margin-block: 15px 35px;
}

.section-list { margin-block-end: 35px; }

.section-item:not(:last-child) { margin-block-end: 25px; }

.section-item .title-wrapper {
display: flex;
align-items: center;
gap: 10px;
margin-block-end: 15px;
}

.section-item .title-wrapper ion-icon {
flex-shrink: 0;
color: var(--blue-crayola);
font-size: 24px;
}





/*-----------------------------------*\
#HEADER
\*-----------------------------------*/

.header {
position: absolute;
top: 0;
left: 0;
width: 100%;
background-color: var(--eerie-black-1);
padding-block: 15px;
z-index: 4;
}

.header.active {
position: fixed;
top: -66px;
background-color: var(--white);
border-block-start: 1px solid var(--cultured);
box-shadow: var(--shadow-1);
animation: slideIn 0.25s var(--cubic-out) forwards;
}

@keyframes slideIn {

0% {
  transform: translateY(0);
  background-color: var(--white);
}

100% {
  transform: translateY(100%);
  background-color: var(--eerie-black-2);
}

}

.header > .container {
display: flex;
justify-content: space-between;
align-items: center;
gap: 10px;
}

.logo {
color: var(--white);
font-size: 2.5rem;
font-weight: var(--fw-700);
display: flex;
align-items: center;
gap: 5px;
}


.about .content h3 {
  font-weight: 700;
  font-size: 32px;
  font-family: var(--font-secondary);
  color: #001f8d;
}

.about .content ul {
  list-style: none;
  padding: 0;
}

.about .content ul li {
  display: flex;
  align-items: flex-start;
  margin-top: 40px;
}

.about .content ul i {
  flex-shrink: 0;
  font-size: 48px;
  color: var(--color-primary);
  margin-right: 20px;
  line-height: 0;
}

.about .content ul h5 {
  font-size: 18px;
  font-weight: 700;
  color: #19335c;
}

.about .content ul p {
  font-size: 15px;
}

.about .content p:last-child {
  margin-bottom: 0;
}

.about .play-btn {
  width: 94px;
  height: 94px;
  background: radial-gradient(var(--color-primary) 50%, rgba(13, 66, 255, 0.4) 52%);
  border-radius: 50%;
  display: block;
  position: absolute;
  left: calc(50% - 47px);
  top: calc(50% - 47px);
  overflow: hidden;
}

.about .play-btn:before {
  content: "";
  position: absolute;
  width: 120px;
  height: 120px;
  -webkit-animation-delay: 0s;
  animation-delay: 0s;
  -webkit-animation: pulsate-btn 2s;
  animation: pulsate-btn 2s;
  -webkit-animation-direction: forwards;
  animation-direction: forwards;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  -webkit-animation-timing-function: steps;
  animation-timing-function: steps;
  opacity: 1;
  border-radius: 50%;
  border: 5px solid rgba(13, 66, 255, 0.7);
  top: -15%;
  left: -15%;
  background: rgba(198, 16, 0, 0);
}

.about .play-btn:after {
  content: "";
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-40%) translateY(-50%);
  width: 0;
  height: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  z-index: 100;
  transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
}

.about .play-btn:hover:before {
  content: "";
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-40%) translateY(-50%);
  width: 0;
  height: 0;
  border: none;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  z-index: 200;
  -webkit-animation: none;
  animation: none;
  border-radius: 0;
}

.about .play-btn:hover:after {
  border-left: 15px solid var(--color-primary);
  transform: scale(20);
}

@-webkit-keyframes pulsate-btn {
  0% {
    transform: scale(0.6, 0.6);
    opacity: 1;
  }

  100% {
    transform: scale(1, 1);
    opacity: 0;
  }
}

@keyframes  pulsate-btn {
  0% {
    transform: scale(0.6, 0.6);
    opacity: 1;
  }

  100% {
    transform: scale(1, 1);
    opacity: 0;
  }
}

.nav-toggle-btn .line {
width: 26px;
height: 3px;
background-color: var(--white);
transition: var(--transition-1);
}

.nav-toggle-btn .line:not(:last-child) { margin-block-end: 4px; }

.nav-toggle-btn {
padding: 8px 5px;
margin-inline-start: auto;
}

.nav-toggle-btn.active .line-1 { transform: rotate(45deg) translate(5px, 6px); }

.nav-toggle-btn.active .line-2 { opacity: 0; }

.nav-toggle-btn.active .line-3 { transform: rotate(-45deg) translate(4px, -5px); }

.navbar {
position: absolute;
top: 100%;
left: 0;
width: 100%;
height: 100vh;
background-color: var(--eerie-black-1);
max-height: 0;
overflow: hidden;
visibility: hidden;
transition: 0.25s var(--cubic-out);
}

.navbar.active {
max-height: calc(100vh - 63px);
visibility: visible;
transition-duration: 0.5s;
}

.navbar-item:not(:last-child) { border-block-end: 1px solid var(--white_30); }

.navbar-link {
color: var(--white);
font-weight: var(--fw-700);
padding: 12px 30px;
transition: var(--transition-1);
}

.navbar-link:is(:hover, :focus, .active) { color: var(--blue-crayola); }





/*-----------------------------------*\
#HERO
\*-----------------------------------*/

.hero { padding-block: 150px 140px; }

.hero-content { margin-block-end: 80px; }

.hero-text {
font-size: var(--fs-5);
margin-block: 25px 40px;
}





/*-----------------------------------*\
#TREND
\*-----------------------------------*/

.trend {
background-color: var(--eerie-black-1);
padding-block-end: 0;
}

.trend-tab {
background-color: var(--eerie-black-2);
border: 1px solid var(--raisin-black);
border-radius: var(--radius-24);
padding: 20px;
box-shadow: var(--shadow-2);
margin-block-start: -160px;
}

.trend-tab .tab-nav {
display: flex;
flex-wrap: wrap;
padding-block-end: 20px;
margin-block-end: 20px;
border-block-end: 1px solid var(--raisin-black);
}

.trend-tab .tab-btn {
color: var(--white);
font-size: var(--fs-7);
font-weight: var(--fw-700);
padding: 7px 15px;
border-radius: 50px;
transition: var(--transition-1);
}

.trend-tab .tab-btn.active { background-color: var(--blue-crayola); }

.trend-tab .tab-content {
display: grid;
gap: 20px;
}

.trend-card {
padding: 20px;
border-radius: var(--radius-12);
transition: var(--transition-1);
}

.trend-card:is(:hover, .active) {
background-color: var(--gunmetal_50);
box-shadow: var(--shadow-3);
}

.trend-card .card-title-wrapper {
display: flex;
align-items: center;
gap: 8px;
}

.trend-card .card-title {
color: var(--white);
font-size: var(--fs-7);
font-weight: var(--fw-700);
transition: var(--transition-1);
}

.trend-card .card-title:is(:hover, :focus) { color: var(--blue-crayola); }

.trend-card .card-title .span {
color: var(--cadet-blue-crayola);
display: inline-block;
margin-inline-start: 5px;
}

.trend-card .card-value {
color: var(--white);
font-size: var(--fs-3);
font-weight: var(--fw-700);
margin-block: 10px;
}

.trend-card .card-analytics {
display: flex;
align-items: center;
gap: 8px;
}

.trend-card .current-price { font-size: var(--fs-7); }





/*-----------------------------------*\
#MARKET
\*-----------------------------------*/

.market {
background-color: var(--eerie-black-1);
color: var(--white);
}

.market .title-wrapper {
display: flex;
justify-content: space-between;
align-items: center;
gap: 20px;
margin-block-end: 25px;
}

.market .btn-link {
position: relative;
min-width: max-content;
font-weight: var(--fw-700);
transition: var(--transition-1);
}

.market .btn-link:is(:hover, :focus) { color: var(--blue-crayola); }

.market .btn-link::after {
content: "";
position: absolute;
bottom: 0;
left: 0;
width: 100%;
height: 2px;
background-color: var(--raisin-black);
transition: var(--transition-1);
}

.market .btn-link:is(:hover, :focus)::after { background-color: var(--blue-crayola); }

.market-tab {
overflow-x: auto;
padding-block-end: 30px;
}

.market-tab::-webkit-scrollbar { height: 14px; }

.market-tab::-webkit-scrollbar-thumb {
border: 2px solid hsl(220, 4%, 5%);
border-width: 2px 10px;
}

.market-tab .tab-nav {
display: flex;
align-items: center;
gap: 10px;
padding-block-end: 40px;
}

.market-tab .tab-btn {
min-width: max-content;
color: var(--white);
font-size: var(--fs-7);
font-weight: var(--fw-700);
padding: 7px 24px;
border-radius: 50px;
}

.market-tab .tab-btn.active { background-color: var(--blue-crayola); }

.market-table { width: 100%; }

.table-heading,
.table-data { padding: 8px; }

.table-heading {
font-size: var(--fs-5);
text-align: left;
white-space: nowrap;
}

.market-table .table-head { border-block-end: 2px solid var(--white); }

.table-row:not(.table-title) { height: 90px; }

.market-table .table-row {
font-size: var(--fs-5);
border-block-end: 1px solid var(--raisin-black);
transition: var(--transition-1);
}

.market-table .table-body .table-row:is(:hover, :focus-within) {
background-color: var(--blue-crayola_10);
}

.market-table .add-to-fav {
color: var(--cadet-blue-crayola);
font-size: 18px;
}

.market-table .add-to-fav.active .icon-outline,
.market-table .add-to-fav .icon-fill { display: none; }

.market-table .add-to-fav .icon-outline,
.market-table .add-to-fav.active .icon-fill { display: block; }

.market-table .add-to-fav.active ion-icon { color: var(--maximum-yellow-red); }

.market-table .wrapper {
display: flex;
align-items: center;
gap: 8px;
min-width: max-content;
}

.market-table .coin-name {
font-size: var(--fs-5);
display: flex;
align-items: center;
gap: 10px;
transition: var(--transition-1);
}

.market-table .coin-name .span {
color: var(--roman-silver);
font-size: var(--fs-7);
}

.market-table .coin-name:is(:hover, :focus) { color: var(--blue-crayola); }

.market-table :is(.rank, .last-price, .market-cap) { font-weight: var(--fw-700); }

.market-table .btn-outline {
border-width: 2px;
padding-inline: 10px;
}

.market-table .table-row:is(:hover, :focus-within) .btn-outline {
background-color: var(--blue-crayola);
border-color: var(--blue-crayola);
}





/*-----------------------------------*\
#INSTRUCTION
\*-----------------------------------*/

.instruction :is(.section-title, .section-text) { text-align: center; }

.instruction .section-title { margin-block-end: 15px; }

.instruction-list {
display: grid;
gap: 30px;
margin-block-start: 50px;
}

.instruction-card { text-align: center; }

.instruction-card .card-banner { transition: var(--transition-2); }

.instruction-card:hover .card-banner { transform: rotateY(1turn); }

.instruction-card .img {
margin-inline: auto;
margin-block-end: 12px;
}

.instruction-card .card-subtitle {
font-size: var(--fs-8);
font-weight: var(--fw-700);
text-transform: uppercase;
}

.instruction-card .card-title {
font-size: var(--fs-4);
margin-block: 5px 15px;
}

.instruction-card .card-text { padding-inline: 20px; }





/*-----------------------------------*\
#ABOUT
\*-----------------------------------*/

.about { background-color: var(--eerie-black-1); }

.about-banner { margin-block-end: 40px; }





/*-----------------------------------*\
#APP
\*-----------------------------------*/

.app {
overflow: hidden;
padding-block-end: 0;
}

.app-wrapper {
display: flex;
flex-wrap: wrap;
align-items: center;
gap: 15px;
}

.app-banner {
position: relative;
margin-block-start: 60px;
}

.app-banner .span {
position: absolute;
top: 10%;
left: 0;
color: var(--white);
font-size: var(--fs-7);
font-weight: var(--fw-700);
padding: 8px 15px;
border: 2px solid var(--white);
border-radius: 50px;
}





/*-----------------------------------*\
#FOOTER
\*-----------------------------------*/

.footer-top {
background-color: var(--eerie-black-1);
padding-block: 80px 50px;
}

.footer-top .container {
display: grid;
gap: 50px;
}

.footer .logo { font-size: 3rem; }

.footer-title {
color: var(--white);
font-size: var(--fs-3);
margin-block: 25px 20px;
}

.footer-contact-link:not(:last-child) { margin-block-end: 12px; }

address.footer-contact-link { max-width: 30ch; }

.footer-list-title {
color: var(--white);
font-size: var(--fs-7);
font-weight: var(--fw-700);
text-transform: uppercase;
letter-spacing: 1px;
}

.footer-list > li:not(:last-child) { margin-block-end: 10px; }

.footer-list > li:first-child { margin-block-end: 20px; }

.footer-link {
color: var(--gainsboro);
transition: var(--transition-1);
}

.footer-link:is(:hover, :focus) { color: var(--blue-crayola); }

.footer-bottom {
background-color: var(--eerie-black-2);
padding-block: 20px;
}

.copyright {
text-align: center;
margin-block-end: 20px;
}

.copyright-link {
display: inline-block;
color: var(--blue-crayola);
}

.social-list {
display: flex;
justify-content: center;
gap: 20px;
}

.social-link {
font-size: 18px;
transition: var(--transition-1);
}

.social-link:is(:hover, :focus) { color: var(--blue-crayola); }





/*-----------------------------------*\
#MEDIA QUERIES
\*-----------------------------------*/

/**
* responsive for larger than 575px screen
*/

@media (min-width: 575px) {

/**
 * CUSTOM PROPERTY
 */

:root {

  /**
   * typography
   */

  --fs-1: 4rem;
  --fs-2: 3.4rem;

}



/**
 * REUSED STYLE
 */

.container {
  max-width: 540px;
  width: 100%;
  margin-inline: auto;
}



/**
 * HERO
 */

.hero-text { --fs-5: 2rem; }

}





/**
* responsive for larger than 768px screen
*/

@media (min-width: 768px) {

/**
 * CUSTOM PROPERTY
 */

:root {

  /**
   * typography
   */

  --fs-1: 5rem;
  --fs-2: 4rem;

}



/**
 * REUSED STYLE
 */

.container { max-width: 750px; }



/**
 * HERO
 */

.hero-banner {
  max-width: max-content;
  margin-inline: auto;
}



/**
 * TREND
 */

.trend-tab .tab-content { grid-template-columns: 1fr 1fr; }



/**
 * INSTRUCTION
 */

.instruction { overflow: hidden; }

.instruction .section-text {
  max-width: 40ch;
  margin-inline: auto;
}

.instruction-list { grid-template-columns: 1fr 1fr; }

.instruction-card { position: relative; }

.instruction-card::after {
  content: "";
  width: 160px;
  height: 12px;
  background-image: url('../images/connect-line.png');
  background-repeat: no-repeat;
  background-size: contain;
  background-position: center;
  position: absolute;
  top: 50px;
  right: -95px;
}

.instruction-list > li:nth-child(even) .instruction-card::after {
  display: none;
}



/**
 * APP
 */

.app-banner { max-width: max-content; }



/**
 * FOOTER
 */

.footer-top .container { grid-template-columns: repeat(3, 1fr); }

.footer-brand { grid-column: 1 / 3; }

.footer-bottom .container {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.copyright { margin-block-end: 0; }

}





/**
* responsive for larger than 992px screen
*/

@media (min-width: 992px) {

/**
 * REUSED STYLE
 */

.container { max-width: 960px; }



/**
 * HEADER
 */

.header { padding-block: 5px; }

.header.active { top: -60px; }

.header > .container { gap: 50px; }

.nav-toggle-btn { display: none; }

.navbar,
.navbar.active {
  all: unset;
  margin-inline-end: auto;
}

.navbar-list {
  display: flex;
  align-items: center;
}

.navbar-item:not(:last-child) { border-block-end: none; }

.navbar-link {
  font-size: var(--fs-7);
  padding: 15px 12px;
}

.navbar-link:is(:hover, :focus, .active) {
  background-color: var(--blue-crayola);
  color: var(--white);
}



/**
 * HERO
 */

.hero .container {
  display: grid;
  grid-template-columns: 1fr 1fr;
  align-items: center;
  gap: 30px;
}

.hero-content { margin-block-end: 0; }



/**
 * MARKET
 */

.market-tab { padding-block-end: 0; }



/**
 * ABOUT
 */

.about .container {
  display: grid;
  grid-template-columns: 1fr 0.8fr;
  align-items: center;
  gap: 30px;
}

.about-banner { margin-block-end: 0; }



/**
 * APP
 */

.app { padding-block: 0; }

.app .container {
  display: grid;
  grid-template-columns: 0.8fr 1fr;
  align-items: flex-end;
  gap: 30px;
}

.app-banner { margin-block-start: 0; }

.app-content { margin-block: 50px; }

}





/**
* responsive for larger than 1200px screen
*/

@media (min-width: 1200px) {

/**
 * CUSTOM PROPERTY
 */

:root {

  /**
   * typography
   */

  --fs-1: 6.4rem;
  --fs-2: 4.8rem;

}



/**
 * REUSED STYLE
 */

.container { max-width: 1280px; }



/**
 * HEADER
 */

.header.active { top: -64px; }

.navbar-link { font-size: unset; }



/**
 * HERO
 */

.hero .container { gap: 100px; }



/**
 * TREND
 */

.trend-tab .tab-content { grid-template-columns: repeat(4, 1fr); }



/**
 * INSTRUCTION
 */

.instruction-list { grid-template-columns: repeat(4, 1fr); }

.instruction-list > li:nth-child(even) .instruction-card::after {
  display: block;
}

.instruction-list > li:last-child .instruction-card::after {
  display: none;
}



/**
 * ABOUT, APP
 */

:is(.about, .app) .container { gap: 60px; }

/* Dropdown Button */
.dropbtn {
  background-color: transparent;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: blue;}


/**
 * APP
 */

.app-content { margin-block: 100px; }



/**
 * FOOTER
 */

.footer-top { padding-block: 100px 90px; }

.footer-top .container { grid-template-columns: 1fr 0.5fr 0.5fr 0.5fr 0.5fr; }

.footer-brand { grid-column: auto; }

}
</style>
  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>

  <!--
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
       <img style="border-radius: 50%;" src="https://media.istockphoto.com/id/1369738799/photo/blue-round-clock-on-white-background.jpg?b=1&s=170667a&w=0&k=20&c=aBwVsg0PbTUoBIeYAX7M7uhT47cEihCbfml1q-YWyls=" alt=""width="60">
        Primestocktradefx
      </a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#" class="navbar-link active" data-nav-link>Homepage</a>
          </li>

          {{-- <li class="navbar-item">
            <a href="#" class="navbar-link" data-nav-link>About</a>
          </li> --}}

          <div class="dropdown">
            <button class="dropbtn" style="color: white">About</button>
            <div class="dropdown-content">
              <a href="#">Our Story</a>
              <hr>
              <a href="#">Careers</a>

            </div>
          </div>


          <li class="navbar-item">
            <a href="#" class="navbar-link" data-nav-link>Markets</a>
          </li>

          @if (Route::has('register'))
          <li class="navbar-item">
            <a href="{{ route('register') }}" class="navbar-link" data-nav-link>Register</a>
          </li>
          @endif



          @if (Route::has('login'))
          <li class="navbar-item">
            <a href="{{ route('login') }}" class="navbar-link" data-nav-link>Log In</a>
          </li>
          @endif

          <div class="dropdown">
            <button class="dropbtn" style="color: white">Trade</button>
            <div class="dropdown-content">
              <a href="#">Spot Trading</a>
              <hr>
              <a href="#">Margin Trading</a>
              <hr>
              <a href="#">Bot Trading</a>
            </div>
          </div>


<div class="dropdown">
            <button class="dropbtn" style="color: white"> Earn</button>
            <div class="dropdown-content">
              <a href="#">Forex</a>
              <hr>
              <a href="#">Crypto Currency</a>
              <hr>
              <a href="#">Stocks & EFTs</a>
              <hr>
              <a href="#">Staking</a>
              <hr>
              <a href="#">Commodities</a>
            </div>
          </div>
          {{-- <li class="navbar-item">
            <a href="#" class="navbar-link" data-nav-link>Blog</a>
          </li> --}}



        </ul>
      </nav>

      <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

      <a href="#" class="btn btn-outline">Wallet</a>

    </div>


    <div class="tradingview-widget-container mb-1-5m">
      <div class="tradingview-widget-container__widget"></div>
      <script type="text/javascript"
        src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
      {
        "symbols": [{
            "proName": "OANDA:SPX500USD",
            "title": "S&P 500"
          },
          {
            "proName": "OANDA:NAS100USD",
            "title": "Nasdaq 100"
          },
          {
            "proName": "FX_IDC:EURUSD",
            "title": "EUR/USD"
          },
          {
            "proName": "BITSTAMP:BTCUSD",
            "title": "BTC/USD"
          },
          {
            "proName": "BITSTAMP:ETHUSD",
            "title": "ETH/USD"
          }
        ],
        "colorTheme": "light",
        "isTransparent": false,
        "displayMode": "regular",
        "locale": "en"
      }
      </script>
    </div>
  </header>





  <main>
    <article>

      <!--
        - #HERO
      -->

      <section class="section hero" aria-label="hero" data-section>
        <div class="container">

          <div class="hero-content">

            <h1 class="h1 hero-title">Save And Earn Amazingly In  Primewaretrades</h1>

            <p class="hero-text">
                Primewaretrades is the easiest, safest way, to save and earn with a high rate of ROI.
            </p>

            <a style="font-size:large;" href="{{ route('register') }}" class="btn btn-primary">Get started now</a>

          </div>

          <figure class="hero-banner">
            <img src="https://images.unsplash.com/photo-1591696205602-2f950c417cb9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGludmVzdG1lbnR8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" width="570" height="448" alt="hero banner" class="w-100">
          </figure>

        </div>
      </section>





      <!--
        - #TREND
      -->

      <section class="section trend" aria-label="crypto trend" data-section>
        <div class="container">

          <div class="trend-tab">
            <h3>
                <li>
                    NewsFlash
                </li>
            </h3>
            <ul class="tab-nav">


              <li>
                <button class="tab-btn active">Crypto</button>
              </li>

              <li>
                <button class="tab-btn">DeFi</button>
              </li>

              <li>
                <button class="tab-btn">BSC</button>
              </li>

              <li>
                <button class="tab-btn">NFT</button>
              </li>

              <li>
                <button class="tab-btn">Metaverse</button>
              </li>

              <li>
                <button class="tab-btn">Polkadot</button>
              </li>

              <li>
                <button class="tab-btn">Solana</button>
              </li>

              <li>
                <button class="tab-btn">Opensea</button>
              </li>

              <li>
                <button class="tab-btn">Makersplace</button>
              </li>

            </ul>

            <ul class="tab-content">

              <li>
                <div class="trend-card">

                  <div class="card-title-wrapper">
                    <img src="./assets/images/coin-1.svg" width="24" height="24" alt="bitcoin logo">

                    <a href="#" class="card-title">
                      Bitcoin <span class="span">BTC/USD</span>
                    </a>
                  </div>

                  <data class="card-value" value="46168.95">USD 46,168.95</data>

                  <div class="card-analytics">
                    <data class="current-price" value="36641.20">36,641.20</data>

                    <div class="badge red">-0.79%</div>
                  </div>

                </div>
              </li>

              <li>
                <div class="trend-card active">

                  <div class="card-title-wrapper">
                    <img src="https://plus.unsplash.com/premium_photo-1670213989655-c9c4ec36d7f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dHJhZGV8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" width="24" height="24" alt="ethereum logo">

                    <a href="#" class="card-title">
                      Ethereum <span class="span">ETH/USD</span>
                    </a>
                  </div>

                  <data class="card-value" value="3480.04">USD 3,480.04</data>

                  <div class="card-analytics">
                    <data class="current-price" value="36641.20">36,641.20</data>

                    <div class="badge green">+10.55%</div>
                  </div>

                </div>
              </li>

              <li>
                <div class="trend-card">

                  <div class="card-title-wrapper">
                    <img src="./assets/images/coin-3.svg" width="24" height="24" alt="tether logo">

                    <a href="#" class="card-title">
                      Tether <span class="span">USDT/USD</span>
                    </a>
                  </div>

                  <data class="card-value" value="1.00">USD 1.00</data>

                  <div class="card-analytics">
                    <data class="current-price" value="36641.20">36,641.20</data>

                    <div class="badge red">-0.01%</div>
                  </div>

                </div>
              </li>

              <li>
                <div class="trend-card">

                  <div class="card-title-wrapper">
                    <img src="./assets/images/coin-4.svg" width="24" height="24" alt="bnb logo">

                    <a href="#" class="card-title">
                      BNB <span class="span">BNB/USD</span>
                    </a>
                  </div>

                  <data class="card-value" value="443.56">USD 443.56</data>

                  <div class="card-analytics">
                    <data class="current-price" value="36641.20">36,641.20</data>

                    <div class="badge red">-1.24%</div>
                  </div>

                </div>
              </li>

            </ul>

          </div>

        </div>
      </section>





      <!--
        - #MARKET
      -->

      <section class="section market" aria-label="market update" data-section>
        <div class="container">

          <div class="title-wrapper">
            <h2 class="h2 section-title">Primestocktradefx Update</h2>

            <a href="#" class="btn-link">See All Coins</a>
          </div>

          <div class="market-tab">

            <ul class="tab-nav">

              <li>
                <button class="tab-btn active">View All</button>
              </li>

              <li>
                <button class="tab-btn">Metaverse</button>
              </li>

              <li>
                <button class="tab-btn">Entertainment</button>
              </li>

              <li>
                <button class="tab-btn">Trades</button>
              </li>

              <li>
                <button class="tab-btn">Bitcoin</button>
              </li>

              <li>
                <button class="tab-btn">Gaming</button>
              </li>

              <li>
                <button class="tab-btn">Music</button>
              </li>

            </ul>

            <table class="market-table">

              <thead class="table-head">

                <tr class="table-row table-title">

                  <th class="table-heading"></th>

                  <th class="table-heading" scope="col">#</th>

                  <th class="table-heading" scope="col">Trader</th>

                  <th class="table-heading" scope="col">Amount</th>

                  <th class="table-heading" scope="col">24h %</th>

                  <th class="table-heading" scope="col">Market Cap</th>

                  <th class="table-heading" scope="col">Duration</th>

                  <th class="table-heading"></th>

                </tr>

              </thead>

              <tbody class="table-body">

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                    </button>
                  </td>

                  <th class="table-data rank" scope="row">1</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="./assets/images/coin-1.svg" width="20" height="20" alt="Bitcoin logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">Versatile <span class="span">eze</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">N56,623.54</td>

                  <td class="table-data last-update green">+1.45%</td>

                  <td class="table-data market-cap">$880,423,640,582</td>

                  <td class="table-data">
                    <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                  </td>

                  <td class="table-data">
                    <button class="btn btn-outline">Trade</button>
                  </td>

                </tr>

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                    </button>
                  </td>

                  <th class="table-data rank" scope="row">2</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="./assets/images/coin-2.svg" width="20" height="20" alt="Ethereum logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">Ethereum <span class="span">ETH</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$56,623.54</td>

                  <td class="table-data last-update red">-5.12%</td>

                  <td class="table-data market-cap">$880,423,640,582</td>

                  <td class="table-data">
                    <img src="./assets/images/chart-2.svg" width="100" height="40" alt="loss chart" class="chart">
                  </td>

                  <td class="table-data">
                    <button class="btn btn-outline">Trade</button>
                  </td>

                </tr>

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                    </button>
                  </td>

                  <th class="table-data rank" scope="row">3</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="./assets/images/coin-3.svg" width="20" height="20" alt="Tether logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">Tether <span class="span">USDT/USD</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$56,623.54</td>

                  <td class="table-data last-update green">+1.45%</td>

                  <td class="table-data market-cap">$880,423,640,582</td>

                  <td class="table-data">
                    <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                  </td>

                  <td class="table-data">
                    <button class="btn btn-outline">Trade</button>
                  </td>

                </tr>

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                    </button>
                  </td>

                  <th class="table-data rank" scope="row">4</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="./assets/images/coin-4.svg" width="20" height="20" alt="BNB logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">BNB <span class="span">BNB/USD</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$56,623.54</td>

                  <td class="table-data last-update red">-3.75%%</td>

                  <td class="table-data market-cap">$880,423,640,582</td>

                  <td class="table-data">
                    <img src="./assets/images/chart-2.svg" width="100" height="40" alt="loss chart" class="chart">
                  </td>

                  <td class="table-data">
                    <button class="btn btn-outline">Trade</button>
                  </td>

                </tr>

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                    </button>
                  </td>

                  <th class="table-data rank" scope="row">5</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="./assets/images/coin-5.svg" width="20" height="20" alt="Solana logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">Solana <span class="span">SOL</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$56,623.54</td>

                  <td class="table-data last-update green">+1.45%</td>

                  <td class="table-data market-cap">$880,423,640,582</td>

                  <td class="table-data">
                    <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                  </td>

                  <td class="table-data">
                    <button class="btn btn-outline">Trade</button>
                  </td>

                </tr>

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                    </button>
                  </td>

                  <th class="table-data rank" scope="row">6</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="./assets/images/coin-6.svg" width="20" height="20" alt="XRP logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">XRP <span class="span">XRP</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$56,623.54</td>

                  <td class="table-data last-update red">-2.22%</td>

                  <td class="table-data market-cap">$880,423,640,582</td>

                  <td class="table-data">
                    <img src="./assets/images/chart-2.svg" width="100" height="40" alt="loss chart" class="chart">
                  </td>

                  <td class="table-data">
                    <button class="btn btn-outline">Trade</button>
                  </td>

                </tr>

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                    </button>
                  </td>

                  <th class="table-data rank" scope="row">7</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="./assets/images/coin-7.svg" width="20" height="20" alt="Cardano logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">Cardano <span class="span">ADA</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$56,623.54</td>

                  <td class="table-data last-update green">+0.8%</td>

                  <td class="table-data market-cap">$880,423,640,582</td>

                  <td class="table-data">
                    <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                  </td>

                  <td class="table-data">
                    <button class="btn btn-outline">Trade</button>
                  </td>

                </tr>

                <tr class="table-row">

                  <td class="table-data">
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                      <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                      <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                    </button>
                  </td>

                  <th class="table-data rank" scope="row">8</th>

                  <td class="table-data">
                    <div class="wrapper">
                      <img src="./assets/images/coin-8.svg" width="20" height="20" alt="Avalanche logo" class="img">

                      <h3>
                        <a href="#" class="coin-name">Avalanche <span class="span">AVAX</span></a>
                      </h3>
                    </div>
                  </td>

                  <td class="table-data last-price">$56,623.54</td>

                  <td class="table-data last-update green">+1.41%</td>

                  <td class="table-data market-cap">$880,423,640,582</td>

                  <td class="table-data">
                    <img src="./assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                  </td>

                  <td class="table-data">
                    <button class="btn btn-outline">Trade</button>
                  </td>

                </tr>

              </tbody>

            </table>

          </div>

        </div>
      </section>






      <section class="own_trending_area mt-3" style="margin: 0 !important;">
        <div class="container gld">
            <div class="main_title aboutus" style="margin: 35px 0 0 0;">
                <h3>ABOUT US</h3>
            </div>
            <div class="row mb-3">
                <div class="col-lg-6">
                    <div class="trending_list">
                        <div class="media">
                            <div class="d-flex">

                            </div>
                            <div class="media-body">
                                <a href="#">
                                    <h4 class="my-3">Primewaretrades is committed to leading a wave of change; by connecting with, educating and empowering younger generations to reimagine, redefine and reengineer their lives, and the world.
                                    </h4>
                                </a>
                                <p class="my-3">We believe in learning to teach, and teaching to learn. PrimestocktradetradeFx Media is our channel to educate; to connect with the world, to maintain the integrity of our perspective, and to share our intellectual truth.
                               <br> We seek to provide access to tools and information that allows people to empower themselves (both financially and philosophically) as a means towards economic and intellectual sovereignty.
                               <br> We aim to actively contribute to the evolution of humanity through the application and provision of advanced technologies and tools that have a positive impact at both an individual and collective level.</p>

                            </div>
                        </div>
                    </div>
                </div>
                        <div class="col-lg-6 position-relative align-self-start order-lg-last order-first about">
                            <img src="https://media.istockphoto.com/id/1365603846/photo/shot-of-a-group-of-businesspeople-clapping-hands-in-a-meeting-at-work.jpg?b=1&s=170667a&w=0&k=20&c=qPOl9-Yt6W3rcDVI2Y5VsXWqB12RZNfRiQQH3RiwE6Y=" class="img-fluid" alt="">
                            <a href="https://www.youtube.com/watch?v=Uw_QyeHo8f0" class="glightbox play-btn"></a>
                          </div>



            </div>
        </div>
    </section>

    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>FAQs</h2>

        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-10">

            <div class="accordion accordion-flush" id="faqlist">

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <i class="bi bi-question-circle question-icon"></i>
                   Is Primewaretrades a safe investment trading platform?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Primewaretrades Trading Limited controls one of the world's most sophisticated security technology and maintenance team, and is constantly upgrading our security systems to ensure the safety of user assets and accounts.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <i class="bi bi-question-circle question-icon"></i>
                    What is Forex Trading?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
					Forex trading is the buying and selling of currencies on the foreign exchange market. When you trade forex online, you are counting on the value of the currency changing in your favor in the future.

                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <i class="bi bi-question-circle question-icon"></i>
                    What moves the forex market?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
					There are several key factors that move the forex market: interest rates, inflation, economic stability, central banks and global events.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <i class="bi bi-question-circle question-icon"></i>
					What is commodity trading?
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    <i class="bi bi-question-circle question-icon"></i>
					Commodity trading is the buying and selling of raw materials, such as precious metals and oil, that are important to the global economy.                   </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <i class="bi bi-question-circle question-icon"></i>
                    How do CFDs work?
                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
						Contract for Difference (CFD) is a popular format for online trading. Its main feature is the ability to profit from price movements of the underlying instrument in any direction. In this case, you do not need to own this asset physically.
                  </div>
                </div>
              </div><!-- # Faq item-->

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->




      <div class="cryptohopper-web-widget" data-id="1" data-table_style="dark" data-realtime="on" data-table_length="6"></div>





      <section class="section instruction" aria-label="instruction" data-section>
        <div class="container">

          <h2 class="h2 section-title">How It Works</h2>

          <p class="section-text">
            Primestocktradefx pays you an Amazingly hight percentage of your investment.
            Duely tested and testimonials speaks volumes
          </p>

          <ul class="instruction-list">

            <li>
              <div class="instruction-card">

                <figure class="card-banner">
                  <img src="https://plus.unsplash.com/premium_photo-1670213989655-c9c4ec36d7f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dHJhZGV8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" width="96" height="96" loading="lazy" alt="Step 1"
                    class="img">
                </figure>

                <p class="card-subtitle">Step 1</p>

                <h3 class="h3 card-title">Download</h3>

                <p class="card-text">
                   Register with us today and choose a suitable package for yourself.
                </p>

              </div>
            </li>

            <li>
              <div class="instruction-card">

                <figure class="card-banner">
                  <img src="https://plus.unsplash.com/premium_photo-1670213989452-100c125a6180?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTN8fHRyYWRlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" width="96" height="96" loading="lazy" alt="Step 2"
                    class="img">
                </figure>

                <p class="card-subtitle">Step 2</p>

                <h3 class="h3 card-title">Login to dash</h3>

                <p class="card-text">
                 monitor your business in your dashboard and know when your payment is due.
                </p>

              </div>
            </li>

            <li>
              <div class="instruction-card">

                <figure class="card-banner">
                  <img src="https://media.istockphoto.com/id/1365412652/photo/multiethnic-diverse-office-conference-room-meeting-team-of-two-creative-entrepreneurs-talk.jpg?b=1&s=170667a&w=0&k=20&c=lN50jV9S3uukAS0etC8xECGC0i6lb_e1lE3epHy-bi8=" width="96" height="96" loading="lazy" alt="Step 3"
                    class="img">
                </figure>

                <p class="card-subtitle">Step 3</p>

                <h3 class="h3 card-title">withdrawal request</h3>

                <p class="card-text">
                   do you need your money for your needs,make a withdrawal request and wait for response.
                </p>

              </div>
            </li>

            <li>
              <div class="instruction-card">

                <figure class="card-banner">
                  <img src="https://images.unsplash.com/file-1661973760703-91f50df21c28image?dpr=2&auto=format&fit=crop&w=416&q=60" width="96" height="96" loading="lazy" alt="Step 4"
                    class="img">
                </figure>

                <p class="card-subtitle">Step 4</p>

                <h3 class="h3 card-title">Boom!!!</h3>

                <p class="card-text">
                   Earn more by refering your friends to Primestocktradefx.
                </p>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!--
        - #ABOUT
      -->

      <section class="section about" aria-label="about" data-section>
        <div class="container">

          <figure class="about-banner">
            <img src="https://plus.unsplash.com/premium_photo-1661508888832-8f8cb5277ddf?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8d2hpdGUlMjBpbnZlc3RtZW50JTIwaW1hZ2V8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" width="748" height="436" loading="lazy" alt="about banner"
              class="w-100">
          </figure>

          <div class="about-content">

            <h2 class="h2 section-title">What Is Primewaretrades</h2>

            <p class="section-text">
                Primewaretrades is a Global trade platform,completely transparent and customer satisfying.we are duely registered and our testimonials speak volumes
            </p>

            <ul class="section-list">

              <li class="section-item">
                <div class="title-wrapper">
                  <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                  <h3 class="h3 list-title">View real-time cryptocurrency prices</h3>
                </div>

                <p class="item-text">
                  Experience a variety of trading on Bitcost. You can use various types of coin transactions such as
                  Spot Trade, Futures
                  Trade, P2P, Staking, Mining, and margin.
                </p>
              </li>

              <li class="section-item">
                <div class="title-wrapper">
                  <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                  <h3 class="h3 list-title">Buy and sell BTC, ETH, XRP, OKB, Etc...</h3>
                </div>

                <p class="item-text">
                  Experience a variety of trading on Bitcost. You can use various types of coin transactions such as
                  Spot Trade, Futures
                  Trade, P2P, Staking, Mining, and margin.
                </p>
              </li>

            </ul>

            <a href="#" class="btn btn-primary">Explore More</a>

          </div>

        </div>
      </section>





      <!--
        - #APP
      -->

      <section class="section app" aria-label="app" data-section>
        <div class="container">

          <div class="app-content">

            <h2 class="h2 section-title">Free Your Money & Invest With Confident in Primewaretrades</h2>

            <p class="section-text">
              With Primewaretrades, you can be sure your trading skills are matched
            </p>

            <ul class="section-list">

              <li class="section-item">
                <div class="title-wrapper">
                  <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                  <h3 class="h3 item-title">Register, Pay, And Earn On The Go</h3>
                </div>

                <p class="item-text">
                  Manage Your Savings From Your Mobile Decive
                </p>
              </li>

              <li class="section-item">
                <div class="title-wrapper">
                  <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                  <h3 class="h3 item-title">Take Control Of Your Wealth</h3>
                </div>

                <p class="item-text">
                  Rest Assured You (And Only You) Have Access To Your Funds
                </p>
              </li>

            </ul>

            <div class="app-wrapper">
              <a href="#">
                <img src="https://plus.unsplash.com/premium_photo-1661508888832-8f8cb5277ddf?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8d2hpdGUlMjBpbnZlc3RtZW50JTIwaW1hZ2V8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" width="135" height="40" loading="lazy"
                  alt="get it on google play">
              </a>

              <a href="#">
                <img src="https://plus.unsplash.com/premium_photo-1663931932505-439ad82a2ef6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8aW52ZXN0bWVudHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" width="120" height="40" loading="lazy"
                  alt="download on the app store">
              </a>
            </div>

          </div>

          <div class="app-banner">
            <img src="https://images.unsplash.com/photo-1559526324-593bc073d938?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8aW52ZXN0bWVudHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" width="618" height="526" loading="lazy" alt="app banner"
              class="w-100">

            <span class="span">Scan To Download</span>
          </div>

        </div>
      </section>

    </article>
  </main>





  <!--
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top" data-section>
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="https://plus.unsplash.com/premium_photo-1663931932688-306b0197d388?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTl8fGludmVzdG1lbnR8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" width="50" height="50" alt="Cryptex logo">
            Primewaretrades
          </a>

          <h2 class="footer-title">Let's talk! 🤙</h2>

          <a href="tel:+123456789101" class="footer-contact-link">+23481275454</a>

          <a href="" class="footer-contact-link">Primewaretrades@gmail.com</a>

          <address class="footer-contact-link">
            Cecilia Chapman 711-2880 Nulla St. Mankato Abuja
          </address>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Products</p>
          </li>

          <li>
            <a href="#" class="footer-link">Spot</a>
          </li>

          <li>
            <a href="#" class="footer-link">Inverse Perpetual</a>
          </li>

          <li>
            <a href="#" class="footer-link">USDT Perpetual</a>
          </li>

          <li>
            <a href="#" class="footer-link">Exchange</a>
          </li>

          <li>
            <a href="#" class="footer-link">Launchpad</a>
          </li>

          <li>
            <a href="#" class="footer-link">Binance Pay</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Services</p>
          </li>

          <li>
            <a href="#" class="footer-link">Buy Crypto</a>
          </li>

          <li>
            <a href="#" class="footer-link">Markets</a>
          </li>

          <li>
            <a href="#" class="footer-link">Tranding Fee</a>
          </li>

          <li>
            <a href="#" class="footer-link">Affiliate Program</a>
          </li>

          <li>
            <a href="#" class="footer-link">Referral Program</a>
          </li>

          <li>
            <a href="#" class="footer-link">API</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Support</p>
          </li>

          <li>
            <a href="#" class="footer-link">Bybit Learn</a>
          </li>

          <li>
            <a href="#" class="footer-link">Help Center</a>
          </li>

          <li>
            <a href="#" class="footer-link">User Feedback</a>
          </li>

          <li>
            <a href="#" class="footer-link">Submit a request</a>
          </li>

          <li>
            <a href="#" class="footer-link">API Documentation</a>
          </li>

          <li>
            <a href="#" class="footer-link">Trading Rules</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">About Us</p>
          </li>

          <li>
            <a href="#" class="footer-link">About Bybit</a>
          </li>

          <li>
            <a href="#" class="footer-link">Authenticity Check</a>
          </li>

          <li>
            <a href="#" class="footer-link">Careers</a>
          </li>

          <li>
            <a href="#" class="footer-link">Business Contacts</a>
          </li>

          <li>
            <a href="#" class="footer-link">Blog</a>
          </li>

        </ul>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2023 Primewaretrades All Rights Reserved  <a href="#" class="copyright-link"></a>
        </p>

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

      </div>
    </div>

  </footer>





  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>
  <script>
    'use strict';



/**
 * add event on element
 */

const addEventOnElem = function (elem, type, callback) {
  if (elem.length > 1) {
    for (let i = 0; i < elem.length; i++) {
      elem[i].addEventListener(type, callback);
    }
  } else {
    elem.addEventListener(type, callback);
  }
}



/**
 * navbar toggle
 */

const navbar = document.querySelector("[data-navbar]");
const navbarLinks = document.querySelectorAll("[data-nav-link]");
const navToggler = document.querySelector("[data-nav-toggler]");

const toggleNavbar = function () {
  navbar.classList.toggle("active");
  navToggler.classList.toggle("active");
  document.body.classList.toggle("active");
}

addEventOnElem(navToggler, "click", toggleNavbar);

const closeNavbar = function () {
  navbar.classList.remove("active");
  navToggler.classList.remove("active");
  document.body.classList.remove("active");
}

addEventOnElem(navbarLinks, "click", closeNavbar);



/**
 * header active
 */

const header = document.querySelector("[data-header]");

const activeHeader = function () {
  if (window.scrollY > 300) {
    header.classList.add("active");
  } else {
    header.classList.remove("active");
  }
}

addEventOnElem(window, "scroll", activeHeader);



/**
 * toggle active on add to fav
 */

const addToFavBtns = document.querySelectorAll("[data-add-to-fav]");

const toggleActive = function () {
  this.classList.toggle("active");
}

addEventOnElem(addToFavBtns, "click", toggleActive);



/**
 * scroll revreal effect
 */

const sections = document.querySelectorAll("[data-section]");

const scrollReveal = function () {
  for (let i = 0; i < sections.length; i++) {
    if (sections[i].getBoundingClientRect().top < window.innerHeight / 1.5) {
      sections[i].classList.add("active");
    } else {
      sections[i].classList.remove("active");
    }
  }
}

scrollReveal();

addEventOnElem(window, "scroll", scrollReveal);
  </script>
  <div data-rw-flash="32333"></div>
  <!-- End widget code -->
        <script src="https://www.cryptohopper.com/widgets/js/script"></script>


    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>


  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>


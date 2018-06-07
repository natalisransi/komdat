@charset UTF-8;
@import url(http://fonts.googleapis.com/css?family=Titillium+Web:400,600,700);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700);


/* Style Index * /

#0 Reset
#1 Layout Structure
#2 Main header
#3 Main menu
#4 Content styling
#5 Comments
#6 Photo gallery
#7 Sidebar styling
#8 Footer


/* #0 Reset */

@font-face {
    font-family: 'entypo';
    src: url('../fonticons/entypo.svg#entypo') format('svg');
    src: url('../fonticons/entypod41d.eot?#iefix') format('embedded-opentype'),
         url('../fonticons/entypo.svg#entypo') format('svg'),
         url('../fonticons/entypo.woff') format('woff'),
         url('../fonticons/entypo.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
}

body {
	font-size: 13px;
	font-family: Arial, sans-serif;
	margin: 0;
	padding: 0;
	color: #363635;
	background: #f0efef;
	line-height: 140%;
}


/* #1 Layout Structure */

a {
	color: #000;
	text-decoration: none;
	transition: all 0.2s;
	-moz-transition: all 0.2s;
	-webkit-transition: all 0.2s;
	-o-transition: all 0.2s;
}

h1 {
	font-size: 29px;
	font-weight: 600;
}

h2 {
	font-size: 20px;
}

h3 {
	font-size: 17px;
}

h4 {
	font-size: 14px;
}

h5 {
	font-size: 12px;
}

h6 {
	font-size: 11px;
}

h1, h2, h3,
h4, h5, h6 {
	font-family: 'Source Sans Pro', sans-serif;
	margin-bottom: 15px;
}

h1 a, h2 a, h3 a,
h4 a, h5 a, h6 a {
	color: #000;
}

.widget h1, .widget h2, .widget h3,
.widget h4, .widget h5, .widget h6 {
	font-weight: normal;
}

hr {
	height: 1px;
	display: block;
	border: 0px;
	border-bottom: 1px dotted #c0bfbf;
	margin-top: 10px;
	margin-bottom: 10px;
}

a:hover {
	color:#a4028f;
	text-decoration: none;
}

a:focus {
	outline: 0;
}

.clear-float {
	clear:both;
}

.icon-text {
	display: inline-block!important;
	font-weight: normal!important;
	font-family: 'Entypo', sans-serif!important;
}

.h-comment {
	display: inline-block;
	padding-left: 8px;
	position: relative;
	vertical-align: baseline;
	font-size: 90%;
	font-weight: bold;
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=60)";
	filter: alpha(opacity=60);
	opacity: 0.6;
}

.h-comment:before {
	display: inline-block;
	content: '\E718';
	font-family: 'Entypo';
	font-size: 83%;
	padding-right: 4px;
	margin-bottom: -5px;
	position: relative;
}

.meta-date {
	display: inline-block;
	padding-left: 8px;
	position: relative;
	vertical-align: baseline;
	font-size: 85%;
	font-weight: bold;
	color: #979797;
}

.meta-date:before {
	display: inline-block;
	content: '\1F554';
	font-family: 'Entypo';
	font-size: 90%;
	padding-right: 4px;
	margin-bottom: -4px;
	position: relative;
}

.wrapper {
	width: 1220px;
	margin: 0px auto;
	position: relative;
}

.boxed:not(.active) {
	background: transparent!important;
	min-width: 1220px;
}

.active.boxed {
	width: 1230px;
	margin: 0px auto;
	background: #f0efef;
	box-shadow: 0 0px 10px rgba(0,0,0,0.2);
	padding: 0px;
	min-height: 100%;
	min-width: 1220px;
}

.left {
	float: left;
}

.right {
	float: right;
}


/* #2 Main header */

.header {
	background-color: #a4028f;
	color: #fff;
	box-shadow: inset 0px -140px 200px -50px rgba(0,0,0,0.15);
}

.header a {
	color: #fff;
}

.header .header-menu a:hover {
	text-decoration: underline;
}

.header > .wrapper {
	padding: 30px 0px;
	background: transparent!important;
	position: relative;
}

.header .wrapper {
	background: inherit;
}

.header .header-logo {
	float: left;
	display: inline;
	margin-left: 12px;
}

.header .header-logo h1 {
	display: block;
	font-size: 48px;
	text-transform: uppercase;
	font-weight: bold;
	line-height: 50px;
}

.header .header-addons {
	float: right;
	display: inline;
	margin-right: 12px;
	text-align: right;
	margin-top: -7px;
}

.header .wrapper:after {
	display: block;
	content: '';
	clear: both;
}

.header .header-menu {
	display: inline;
	float: left;
	margin-left: 20px;
	width: 33%;
}

.header .header-menu ul {
	display: block;
	margin-bottom: 7px;
	margin-top: -3px;
}

.header .header-menu ul:after {
	display: block;
	content: '';
	clear: both;
}

.header .header-menu p {
	line-height: 130%;
	font-size: 12px;
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
	filter: alpha(opacity=80);
	opacity: 0.8;
}

.header .header-menu ul li {
	font-size: 13px;
	display: block;
	float: left;
	padding-right: 16px;
	position: relative;
}

.header .header-menu ul li:last-child:after {
	display: none;
}

.header .header-menu ul li:after {
	display: block;
	content: '';
	height: 15px;
	width: 1px;
	background: #fff;
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=30)";
	filter: alpha(opacity=30);
	opacity: 0.3;
	position: absolute;
	right: 7px;
	top: 2px;
}

.header .header-menu ul li a {
	font-weight: bold;
}

.header .header-menu ul li a:hover {
	color: #fff;
}

.header .header-addons .header-weather {
	display: block;
	margin-bottom: 10px;
	margin-top: -4px;
	line-height: 100%;
	vertical-align: baseline;
}

.header .header-addons .header-weather .report {
	display: inline-block;
	font-size: 26px;
	font-weight: bold;
	vertical-align: baseline;
	line-height: 100%;
}

.header .header-addons .header-weather .city small {
	display: block;
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=70)";
	filter: alpha(opacity=70);
	opacity: 0.7;
}

.header .header-addons .header-weather .city {
	display: inline-block;
	font-size: 12px;
	font-weight: bold;
	vertical-align: baseline;
	line-height: 100%;
	text-align: left;
}

.header .header-addons .header-weather img {
	display: inline-block;
	vertical-align: baseline;
	margin: 0px 3px -2px 3px;
}

.header .header-addons .header-search {
	display: block;
	text-align: right;
	position: relative;
}

.search-input {
	display: inline-block;
	padding: 8px 36px 8px 12px;
	border-radius: 2px;
	border: 0px;
	z-index: 1;
	position: relative;
	-webkit-box-shadow: 0px 0px 0px 1px rgba(0,0,0,0.2);
	box-shadow: 0px 0px 0px 1px rgba(0,0,0,0.2);
	width: 140px;
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=70)";
	filter: alpha(opacity=70);
	opacity: 0.7;
	transition: all 0.2s;
	-moz-transition: all 0.2s;
	-webkit-transition: all 0.2s;
	-o-transition: all 0.2s;
}

.search-input:focus {
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
	filter: alpha(opacity=100);
	opacity: 1;
	width: 200px;
}

#searchsubmit,
.search-button {
	display: block;
	position: absolute;
	z-index: 2;
	top: 0px;
	right: 0px;
	border: 0px;
	background: url(../images/icon-search.png) no-repeat center;
	cursor: pointer;
	height: 100%;
	overflow: hidden;
	color: transparent;
	font-size: 0;
	width: 34px;
}

#searchsubmit {
	height: 30px;
	top: auto;
	bottom: 0px;
}

.widget {
	position: relative;
}

.widget label.screen-reader-text {
	display: none;
}

.widget input.search {
	width: 100%;
}


/* #3 Main menu */

.main-menu {
	display: block;
	background: inherit;
	border-top: 1px solid rgba(0,0,0,0.15);
}

.main-menu .the-menu {
	display: block;
	font-size: 0;
	background: inherit;
}

.main-menu .the-menu:after {
	display: block;
	content: '';
	clear: both;
}

.main-menu .the-menu li {
	display: block;
	background: inherit;
	font-size: 13px;
	float: left;
}

.main-menu .the-menu.transition-active > li {
	perspective:600px;
	-moz-perspective:600px;
	-o-perspective:600px;
	-webkit-perspective:600px;
	perspective-origin:100% 100%;
	-moz-perspective-origin:100% 100%;
	-o-perspective-origin:100% 100%;
	-webkit-perspective-origin:100% 100%;
	position: relative;
	z-index: 10;
}

.main-menu .the-menu.transition-active > li > ul {
	display: block;
	transform:rotateX(-90deg);
	-moz-transform:rotateX(-90deg);
	-o-transform:rotateX(-90deg);
	-webkit-transform:rotateX(-90deg);
	transform-origin:0 0 0;
	-moz-transform-origin:0 0 0;
	-o-transform-origin:0 0 0;
	-webkit-transform-origin:0 0 0;
	-webkit-transition: all 400ms cubic-bezier(0.175, 0.885, 0.320, 1); /* older webkit */
	-webkit-transition: all 400ms cubic-bezier(0.175, 0.885, 0.320, 1.275); 
	-moz-transition: all 400ms cubic-bezier(0.175, 0.885, 0.320, 1.275); 
	-ms-transition: all 400ms cubic-bezier(0.175, 0.885, 0.320, 1.275); 
	-o-transition: all 400ms cubic-bezier(0.175, 0.885, 0.320, 1.275); 
	transition: all 400ms cubic-bezier(0.175, 0.885, 0.320, 1.275); /* easeOutBack */
}

.main-menu .the-menu.transition-active > li:hover > ul {
	transform:rotateX(0);
	-moz-transform:rotateX(0);
	-o-transform:rotateX(0);
	-webkit-transform:rotateX(0);
	transition-delay:.2s;
	-moz-transition-delay:.2s;
	-o-transition-delay:.2s;
	-webkit-transition-delay:.2s;
}

.main-menu .the-menu li:hover a {
	background: rgba(0,0,0,0.15);
	position: relative;
	color: #fff;
}

.main-menu .the-menu li a {
	display: block;
	padding: 14px 11px;
	font-weight: 700;
	text-transform: uppercase;
	font-family: 'Titillium Web', sans-serif;
}

.main-menu .the-menu > li > a {
	position: relative;
	z-index: 200;
	background: inherit;
}

.main-menu .the-menu li a span {
	padding-right: 12px;
	position: relative;
}

.main-menu .the-menu li a span:after {
	font-family: 'Entypo';
	content: '\25BE';
	font-weight: normal;
	position: absolute;
	right: 0px;
	top: 1px;
}

.main-menu .the-menu li:hover > ul {
	display: block;
}

.main-menu .the-menu li ul {
	display: none;
	position: absolute;
	z-index: 100;
	background: inherit;
	width: 240px;
}

.main-menu .the-menu li ul li {
	display: block;
	position: relative;
	font-size: 12px;
	float: none;
}

.main-menu .the-menu li ul li:hover > a {
	background: rgba(0,0,0,0.2);
}

.main-menu .the-menu li ul li a span {
	display: block;
}

.main-menu .the-menu li ul li a span:after {
	content: '\25B8';
	top: 0px;
}

.main-menu .the-menu li ul ul {
	left: 240px;
	top: 0px;
	display: none;
}



.secondary-menu {
	display: block;
	background: #fff;
	border-bottom: 1px solid rgba(0,0,0,0.15);
}

.secondary-menu ul {
	display: block;
	font-size: 0;
}

.secondary-menu ul:after {
	display: block;
	content: '';
	clear: both;
}

.secondary-menu ul li {
	display: block;
	background: inherit;
	font-size: 12px;
	float: left;
}

.secondary-menu ul li:hover a {
	background: rgba(0,0,0,0.06);
}

.secondary-menu ul li a {
	display: block;
	padding: 13px 11px;
	color: #FFE4E1;
	font-weight: 700;
	text-transform: uppercase;
	font-family: 'Titillium Web', sans-serif;
}


/* #4 Content styling */

.content {
	display: block;
	padding: 20px 0px 35px 0px;
	background: #f0efef;
	min-height: 630px;
}

.ad-banner {
	display: block;
	margin-bottom: 20px;
	text-align: center;
	position: relative;
}

.ad-link {
	display: block;
	font-size: 10px;
	font-weight: bold;
	color: #cacaca;
	text-align: center;
}

.ad-link.top {
	transform: rotate(-90deg);
	-ms-transform: rotate(-90deg); /* IE 9 */
	-webkit-transform: rotate(-90deg); /* Safari and Chrome */
	position: absolute;
	top: 35px;
	left: 175px;
}

.ad-link span {
	display: inline-block;
	padding: 0px 4px;
	margin-top: 2px;
}

.ad-banner .ad-link:hover {
	color: #232323;
}

.breaking-news {
	display: block;
	margin-bottom: 20px;
	background: #fff;
	box-shadow: 0px 3px 0px 0px rgba(0,0,0,0.04);
	position: relative;
	overflow: hidden;
}

.breaking-news:after {
	display: block;
	content: '';
	position: absolute;
	width: 20px;
	background: inherit;
	height: 100%;
	top: 0px;
	right: 0px;
	z-index: 10;
	box-shadow: -10px 0px 20px #fff;
}

.breaking-news .the-title {
	display: block;
	position: relative;
	float: left;
	background: #a4028f;
	color: #fff;
	font-size: 13px;
	font-weight: 600;
	text-transform: uppercase;
	font-family: 'Source Sans Pro', sans-serif;
	padding: 7px 13px;
	z-index: 6;
}

.breaking-news ul {
	position: absolute;
	z-index: 5;
}

.breaking-news ul:after {
	display: block;
	content: '';
	clear: both;
}

.breaking-news .slide_container {
	height: 32px!important;
}

.breaking-news ul li {
	display: block;
	float: left;
	font-weight: 400;
	font-size: 14px;
	font-family: 'Source Sans Pro', sans-serif;
	margin: 6px 0px 0px 0px;
	position: relative;
}

.breaking-news ul li:after {
	display: block;
	position: absolute;
	content: '\25CF';
	font-family: 'Entypo';
	font-size: 8px;
	top: 0px;
	right: -4px;
	color: #c9c9c9;
}

.breaking-news ul li:last-child:after {
	display: none;
}

.breaking-news ul li a {
	display: block;
	padding-left: 13px;
	padding-right: 10px;
}

.main-content {
	display: block;
}

.main-content .main-page {
	display: block;
}

.list-title {
	display: block;
	margin-bottom: 10px;
	padding-bottom: 10px;
	border-bottom: 2px solid #a4028f;
	color: #a4028f;
	font-family: 'Titillium Web', sans-serif;
	font-weight: 600;
}

.article-list {
	margin-left: 0px;
	margin-bottom: 10px;
}

.article-list li {
	list-style: disc;
	margin-left: 16px;
	margin-bottom: 6px;
	border-bottom: 1px dotted #c0bfbf;
	padding-bottom: 6px;
}

.more {
	font-size: 12px;
	color: #6b6b6b;
	text-align: center;
	display: block;
	border: 1px solid #dbdbdb;
	border-radius: 2px;
	-moz-border-radius: 2px;
	padding: 4px 0px;
	font-weight: bold;
	background: #f9f9f9;
	box-shadow: inset 0px -20px 20px -20px rgba(0,0,0,0.1);
}

.more:hover {
	background: #fff;
	color: #232323;
}

.more:active {
	box-shadow: none;
}

.banner {
	display: block;
	text-align: center;
	padding: 10px 0px;
}

.banner:first-child {
	padding-top: 0px;
}

.double-block .widget .social-bar a {
	width: 22.6%!important;
}

.wide-banner img,
.banner img {
	max-width: 100%;
	height: auto;
}

.article-block {
	display: block;
}

.article-block li {
	display: block;
	border-bottom: 1px dotted #c0bfbf;
	padding-bottom: 10px;
	margin-bottom: 10px;
}

.article-block li:last-child {
	border-bottom: 0px;
	padding-bottom: 0px;
}

.article-block .article-photo {
	display: block;
	float: left;
	margin-top: 3px;
}

.article-block .article-content {
	display: block;
	margin-left: 70px;
}

.article-block .article-content:after {
	display: block;
	content: '';
	clear: both;
}

.article-block-big .article-content h4,
.article-block .article-content h4 {
	font-weight: normal;
}

.article-block-big .meta,
.article-block .meta {
	display: block;
	font-size: 12px;
}

.article-block-big .meta a,
.article-block .meta a {
	color: #8b8b8b;
}

.meta .icon-text {
	display: inline-block;
	padding-right: 5px;
}

.block-title {
	display: block;
	margin-bottom: 10px;
	background: #a4028f;
	color: #fff;
	padding: 7px 13px;
}

.block-title h2 {
	text-transform: uppercase;
	font-size: 16px;
	color: #fff;
	font-family: 'Source Sans Pro', sans-serif;
	margin-bottom: 0px;
}

.block-title a {
	color: #fff;
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
	filter: alpha(opacity=80);
	opacity: 0.8;
	font-size: 12px;
}

.block-title a:hover {
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
	filter: alpha(opacity=100);
	opacity: 1;
}

.article-block-big {
	display: block;
	width: 110%;
	font-size: 0;
}

.article-block-big li {
	font-size: 13px;
	display: inline-block;
	margin-right: 15px;
	margin-bottom: 15px;
	width: 189px;
	/*box-shadow: 0px 1px 1px 0px rgba(0,0,0,0.2);*/
}

.article-block-big li .article-photo img,
.article-block-big li .article-photo {
	display: block;
	/*width: 200px;*/
	height: auto;
}

.article-block-big li .article-content {
	/*background: #f9f9f9;
	padding: 10px 12px;
	margin-top: -1px;*/
	padding-top: 5px;
}

.article-block-big .article-content h4 {
	font-size: 16px;
	margin-bottom: 5px;
}

.meta .tag {
	display: inline-block;
	background: #ca2020;
	line-height: 16px;
	padding: 0px 5px;
	font-size: 9px;
	font-weight: bold;
	color: #fff;
	text-transform: uppercase;
	vertical-align: top;
	margin-left: 5px;
	margin-top: 3px;
}

.wide-article {
	display: block;
	margin-bottom: 10px;
	padding-bottom: 10px;
	border-bottom: 1px dotted #c0bfbf;
}

.wide-article .article-photo {
	display: block;
	float: left;
}

.wide-article .article-content {
	display: block;
	margin-left: 170px;
}

.wide-article .article-content h2 {
	font-weight: 600;
	margin-bottom: 8px;
}

.article-block-big h2 .meta,
.article-block-big h3 .meta,
.article-block-big h4 .meta,
.article-block-big h5 .meta,
.article-block-big h6 .meta,
.article-block h2 .meta,
.article-block h3 .meta,
.article-block h4 .meta,
.article-block h5 .meta,
.article-block h6 .meta,
.wide-article h2 .meta ,
.wide-article h3 .meta ,
.wide-article h4 .meta ,
.wide-article h5 .meta ,
.wide-article h6 .meta {
	display: inline;
}

.wide-article .meta {
	display: block;
	font-size: 12px;
	color: #8b8b8b;
	margin-bottom: 6px;
}

.wide-article .meta a {
	color: #8b8b8b;
}

.wide-article .article-content:after {
	display: block;
	content: '';
	clear: both;
}

.featured-block .article-photo a,
.article-photo {
	display: block;
}

.featured-block {
	display: block;
	position: relative;
}

.featured-block .article-content {
	background: rgba(0,0,0,0.6);
	position: absolute;
	z-index: 1;
	color: #fff;
	width: 100%;
	left: 0px;
	bottom: 0px;
}

.main-sidebar .featured-block .article-content {
	bottom: 10px;
}

.main-sidebar .featured-block .article-content .meta a {
	color: #fff;
}

.featured-block .article-content a {
	color: #fff;
}

.featured-block .article-content h2 {
	margin: 10px 15px;
	font-size: 18px;
	font-weight: 600;
}

.featured-block .article-content h3 {
	margin: 10px 15px;
	font-size: 16px;
	font-weight: 600;
}

.featured-block .article-content .meta {
	margin: -5px 15px 10px 15px;
	display: block;
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=70)";
	filter: alpha(opacity=70);
	opacity: 0.7;
}

.article-big {
	display: block;
	margin-bottom: 10px;
	padding-bottom: 10px;
	border-bottom: 1px dotted #c0bfbf;
}

.article-big .article-photo {
	display: block;
	float: left;
}

.article-big .article-content {
	display: block;
	margin-left: 225px;
}

.article-big .article-content h2 {
	margin-bottom: 7px;
}

.article-big .article-content:after {
	display: block;
	content: '';
	clear: both;
}

.article-big .article-content .meta:not(:last-child) > span,
.article-big .article-content .meta:not(:last-child) > a {
	color: #8b8b8b;
	margin-right: 10px;
}

.article-big .article-content .meta:not(:last-child) {
	display: block;
	margin-bottom: 8px;
	font-size: 12px;
	color: #8b8b8b;
}

.article-big .article-content p {
	display: block;
	margin-bottom: 8px;
}

.article-big .article-content h2 {
	font-size: 19px;
	font-weight: 600;
}

.article-big .article-content .more {
	display: inline-block;
	padding-left: 12px;
	padding-right: 12px;
}

.article-big .article-content .more .icon-text {
	display: inline-block;
	padding-left: 5px;
}


.pagination {
	display: block;
	margin: 20px auto 30px auto;
	text-align: center;
}

.pagination a {
	background: #d4d3d3;
	display: inline-block;
	line-height: 150%;
	padding: 2px 7px;
	border-radius: 2px;
	-moz-border-radius: 2px;
	font-size: 12px;
	font-weight: bold;
	color: #505050;
	margin-left:4px;
}

.pagination .current {
	background: #d4d3d3;
	display: inline-block;
	line-height: 150%;
	padding: 2px 7px;
	border-radius: 2px;
	-moz-border-radius: 2px;
	font-size: 12px;
	font-weight: bold;
	color: #505050;
}

.pagination .nextprev {
	background: #d4d3d3;
	display: inline-block;
	line-height: 150%;
	padding: 2px 7px;
	border-radius: 2px;
	-moz-border-radius: 2px;
	font-size: 12px;
	font-weight: bold;
	color: #505050;
}

.pagination a:hover,
.pagination .current {
	color: #fff;
	background: #929292;
}

.pagination .nextprev .icon-text.right {
	display: inline-block;
	padding-left: 5px;
}

.pagination .nextprev .icon-text.left {
	display: inline-block;
	padding-right: 5px;
}

.article-big.no-image .article-content {
	margin-left: 0px;
}

.block-content.archive {
	display: block;
	width: 102%;
}

.block-content.archive:after {
	display: block;
	clear: both;
	content: '';
}

.block-content.archive > .block {
	display: block;
	width: 232px;
	float: left;
	margin-right: 10px;
	margin-bottom: 15px;
}/*

.block-content.archive > .block:nth-child(5n) {
	margin-right: 0px;
}*/


.article-title {
	display: block;
	margin-bottom: 10px;
	background: #e8e8e8;
	padding: 15px;
	border-top: 3px solid #c1c1c1;
	position: relative;
}

.article-title:after {
	display: block;
	content: '';
	clear: both;
}

.article-title h1 {
	display: block;
	margin-right: 300px;
	margin-bottom: 20px;
	line-height: 100%;
}

.article-title .author {
	display: block;
	margin-right: 300px;
}

.article-title .author .hover-effect {
	margin-right: 10px;
}

.article-title .author img {
	width: 30px;
	height: 30px;
}

.article-title .author .a-content {
	display: block;
}

.article-title .author .a-content > span {
	display: block;
	font-size: 12px;
	line-height: 15px;
	color: #6b6b6b;
	margin-right: 10px;
}

.article-title .author .a-content > span .tag {
	font-size: 8px;
	line-height: 16px;
}

.article-title .share-block {
	display: block;
	height: 100%;
	width: 270px;
	padding-left: 15px;
}

.article-title .share-block:not(.single):before {
	display: block;
	position: absolute;
	right: 300px;
	top: 0px;
	background: transparent;
	width: 1px;
	height: 100%;
	content: '';
	border-right: 1px dotted #c1c1c1;
}

.article-title .share-block > div {
	display: block;
	margin-bottom: 8px;
}

.article-title .share-block > div:last-child {
	margin-bottom: 0px;
}

a.small-button {
	display: inline-block;
	padding: 4px 11px;
	margin-right: 2px;
	background: #a4028f;
	color: #fff;
	border-radius: 2px;
	-moz-border-radius: 2px;
	font-size: 12px;
}

.small-button:hover {
	color: #fff;
	background: #232323;
}

a.custom-soc {
	display: inline-block;
	background: transparent;
	color: #232323;
	width: 22px;
	height: 22px;
	font-size: 11px;
	line-height: 23px;
	box-shadow: 0px 0px 0px 1px #232323;
	border-radius: 50%;
	-moz-border-radius: 50%;
	text-align: center;
	margin-right: 4px;
}

a.custom-soc:hover {
	background: #232323;
	color: #fff;
}

.share-article {
	display: block;
	margin-right: 15px;
	margin-bottom: 10px;
}

.share-article span {
	display: block;
	line-height: 100%;
	font-size: 10px;
	color: #6b6b6b;
	font-weight: bold;
	padding-bottom: 3px;
	margin-top: -1px;
}

.share-article strong {
	display: block;
	line-height: 100%;
	font-size: 12px;
}

.article-tags {
	display: block;
	margin-top: 15px;
	margin-right: 300px;
	font-size: 12px;
	vertical-align: baseline;
	line-height: 120%;
	margin-bottom: -4px;
}

.article-tags strong {
	vertical-align: baseline;
	line-height: 120%;
	margin-right: 10px;
}

.article-tags a {
	vertical-align: baseline;
	line-height: 120%;
}






/* #5 Comments */


.comment-block {
	display: block;
	margin-bottom: 25px;
}

.comment-block .commment-content {
	display: block;
	padding-bottom: 12px;
	margin-bottom: 15px;
	border-bottom: 1px dotted #ccc;
	position: relative;
}

.comment-block .commment-content .user-avatar {
	display: block;
	float: left;
	width: 60px;
	height: 60px;
	margin-right: 15px;
	margin-top: 3px;
}

.comment-block .commment-content .user-avatar img {
	width: 60px;
	height: 60px;
}

.comment-block .commment-content .user-nick {
	display: block;
	margin-left: 75px;
	color: #232323;
	font-family: 'Titillium Web', sans-serif;
	font-size: 16px;
	font-weight: bold;
	padding-bottom: 8px;
}

.comment-block .commment-content .user-nick .marker {
	font-size: 10px;
	display: inline-block;
	padding: 2px 4px;
	background: #232323;
	color: #fff;
	line-height: 100%;
	margin: 3px 0px 0px 10px;
	border-radius: 2px;
	-moz-border-radius: 2px;
	cursor: default;
}

.comment-block .commment-content .user-nick a {
	color: #232323;
}

.comment-block .commment-content .user-nick a:hover {
	text-decoration: underline;
}

.comment-block .commment-content .time-stamp {
	position: absolute;
	top: 0px;
	right: 0px;
	color: #b8b8b8;
	font-size: 11px;
}

.comment-block .commment-content .comment-text {
	display: block;
	margin-left: 75px;
	padding-bottom: 8px;
	margin-bottom: -13px;
}

.comment-block .commment-content .icon-link {
	color: #767676;
	font-size: 11px;
	font-weight: bold;
	margin-left: 75px;
	display: block;
}

.comment-block .commment-content .icon-link:hover {
	color: #232323;
	text-decoration: underline;
}

.comment-block .commment-content .icon-link .icon-text {
	display: inline-block;
	padding-right: 6px;
}


.comment-block > ol > li ul li .commment-content {
	display: block;
	background: #e8e8e8;
	margin-top: -15px;
	padding-top: 15px;
	padding-left: 75px;
	padding-right: 15px;
}

.comment-block > ol > li > ul {
	position: relative;
}

.comment-block > ol > li > ul:before {
	display: block;
	background: #f0efef;
	content: '';
	position: absolute;
	top: -3px;
	left: 90px;
	width: 6px;
	height: 6px;
	border-right: 1px solid #ccc;
	border-bottom: 1px solid #ccc;
	z-index: 10;
	transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	-webkit-transform: rotate(45deg);
	-o-transform: rotate(45deg);
	-moz-transform: rotate(45deg);
}

.comment-block > ol > li ul li .commment-content .user-avatar,
.comment-block > ol > li ul li .commment-content .user-avatar img {
	width: 40px;
	height: 40px;
}

.comment-block > ol > li ul li .commment-content .icon-link,
.comment-block > ol > li ul li .commment-content .comment-text,
.comment-block > ol > li ul li .commment-content .user-nick {
	margin-left: 55px;
}

.comment-block > ol > li ul li .commment-content .time-stamp {
	top: 15px;
	right: 15px;
}

#writecomment {
	display: block;
	width: 100%;
	max-width: 570px;
	margin: 20px auto;
}

#writecomment p {
	display: block;
	position: relative;
}

#writecomment p textarea{
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	width: 100%;
	padding: 8px 10px;
	display: block;
	background: #fff;
	font-size: 13px;
	border: 1px solid #d3d3d3;
	font-family: 'Arial';
	border-radius: 2px;
	-moz-border-radius: 2px;
}
#writecomment p input[type=text] {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	width: 65%;
	padding: 8px 10px;
	display: block;
	background: #fff;
	font-size: 13px;
	border: 1px solid #d3d3d3;
	font-family: 'Arial';
	border-radius: 2px;
	-moz-border-radius: 2px;
}

#writecomment p textarea:focus,
#writecomment p input[type=text]:focus {
	border: 1px solid #bababa;
	box-shadow: 0px 0px 10px rgba(0,0,0,0.05);
}

#writecomment p textarea {
	height: 100px;
}

#writecomment p label {
	display: block;
	position: absolute;
	left: -120px;
	white-space: nowrap;
	line-height: 30px;
	width: 100px;
	text-align: right;
	top: 2px;
	color: #6b6b6b;
}

p .required {
	display: inline-block;
	font-weight: bold;
	font-size: 18px;
	color: #cf680d;
	margin-left: 5px;
	margin-top: 2px;
}

#writecomment p .error-msg {
	display: block;
	background: #a12717;
	color: #fff;
	padding: 8px 10px;
	border-radius: 0px 0px 2px 2px;
	-moz-border-radius: 0px 0px 2px 2px;
}

#writecomment p textarea.error,
#writecomment p input[type=text].error {
	border: 1px solid #a12717;
	border-radius: 2px 2px 0px 0px;
	-moz-border-radius: 2px 2px 0px 0px;
}


.no-comment-block {
	display: block;
	width: 360px;
	margin: 35px auto 30px auto;
}

.no-comment-block p {
	display: block;
	margin-left: 70px;
	font-size: 12px;
	padding-bottom: 10px;
}

.no-comment-block .big-icon {
	display: block;
	float: left;
	font-size: 44px;
	color: #232323;
	line-height: 56px;
}

.no-comment-block b {
	display: block;
	margin-left: 70px;
	font-weight: bold;
	font-size: 22px;
	color: #232323;
	line-height: 150%;
	padding-bottom: 4px;
}

.no-comment-block .icon-link {
	margin-left: 70px;
}

.no-comment-block .icon-link {
	color: #767676;
	font-size: 11px;
	font-weight: bold;
	margin-left: 70px;
}

.no-comment-block .icon-link:hover {
	color: #232323;
	text-decoration: underline;
}

.no-comment-block .icon-link .icon-text {
	display: inline-block;
	padding-right: 6px;
}




/* #6 Photo gallery */

.photo-gallery-grid {
	display: block;
	width: 1210px;
}

.photo-gallery-grid:after {
	display: block;
	content: '';
	clear: both;
}

.photo-gallery-grid .photo-gallery-block {
	display: block;
	width: 232px;
	background: #fff;
	box-shadow: 0px 2px 1px rgba(0,0,0,0.1);
	float: left;
	margin-right: 10px;
	margin-bottom: 15px;
}

.photo-gallery-block .gallery-content {
	display: block;
	padding: 10px 15px 15px 15px;
}

.photo-gallery-block .gallery-content h3 {
	margin-bottom: 10px;
}

.overflow-fix {
	display: block;
	overflow: hidden;
}

.filter-block {
	display: block;
	padding-top: 5px;
	padding-bottom: 15px;
	margin-bottom: 15px;
	border-bottom: 2px solid #cfcfcf;
}

.filter-block strong {
	display: inline-block;
	color: #929292;
	line-height: 23px;
	padding-right: 10px;
	text-transform: uppercase;
	font-size: 12px;
}

.filter-block a {
	display: inline-block;
	background: #929292;
	color: #fff;
	line-height: 23px;
	padding: 0px 10px;
	font-size: 12px;
	font-weight: bold;
	border-radius: 2px;
	-moz-border-radius: 2px;
	margin-right: 5px;
	margin-bottom: 5px;
}

.filter-block a:hover,
.filter-block a.active {
	background: #232323;
	color: #fff;
}

.photo-gallery-full {
	display: block;
	margin-bottom: 20px;
	background: #fff;
	box-shadow: 0px 2px 1px rgba(0,0,0,0.2);
}

.the-image {
	display: block;
	padding: 15px;
	position: relative;
	text-align: center;
}

.the-image .photo-controls {
	display: block;
	position: absolute;
	top: 50%;
	font-size: 40px;
	color: #fff;
	text-shadow: 0px 0px 2px rgba(0,0,0,0.4);
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
	filter: alpha(opacity=50);
	opacity: 0.5;
	line-height: 40px;
	margin-top: -20px;
	z-index: 4;
}

.the-image .photo-controls:hover {
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
	filter: alpha(opacity=100);
	opacity: 1;
}

.the-image .photo-controls.left {
	left: 4%;
}

.the-image .photo-controls.right {
	right: 4%;
}

.photo-gallery-thumbs {
	display: block;
	margin: 0px 15px;
	padding-bottom: 15px;
	white-space: nowrap;
	overflow: hidden;
}

.photo-gallery-thumbs a {
	display: inline-block;
	width: 80px;
	height: 80px;
	overflow: hidden;
	margin: 0px 10px 0px 0px;
}

.photo-gallery-thumbs a.active:hover .cover i,
.photo-gallery-thumbs a.active .cover i {
	box-shadow: inset 0px 0px 0px 6px #dd1414;
}




/* #7 Sidebar styling */

.main-sidebar {
	display: block;
	width: 300px;
}

.main-sidebar .widget {
	display: block;
	margin-bottom: 20px;
}

.main-sidebar .widget > div {
	display: block;
	border-bottom: 1px dotted #c0bfbf;
	padding-bottom: 10px;
	margin-bottom: 10px;
}

.widget > h3 {
	display: block;
	background: #a4028f;
	text-transform: uppercase;
	font-size: 16px;
	color: #fff;
	font-family: 'Source Sans Pro', sans-serif;
	padding: 7px 13px;
	margin-bottom: 10px;
	font-weight: bold;
}

.widget .comment-content h3 {
	margin-bottom: 6px;
}

.widget .social-bar {
	display: block;
	width: 100%;
	margin-bottom: 10px;
}

.widget .social-bar:after {
	display: block;
	content: '';
	clear: both;
}

.widget .social-bar a {
	display: block;
	float: left;
	width: 69px;
	text-align: center;
	margin-right: 8px;
}

.widget .social-bar a:nth-child(4n+0) {
	margin-right: 0px;
}

.widget .social-bar a i {
	display: block;
	margin-bottom: 1px;
	font-style: normal;
	background: rgba(0,0,0,0.1);
	padding: 8px 0px;
	font-size: 13px;
	font-weight: bold;
	color: #232323;
	margin-left: 0px;
}

.widget .social-bar a:hover i {
	background: rgba(0,0,0,0.15);
}

.widget .social-bar a span {
	display: block;
	color: #fff;
	padding: 2px 0px;
	font-size: 11px;
	font-weight: bold;
}

.widget .social-bar a span.facebook {
	background: #4260b4;
}

.widget .social-bar a span.twitter {
	background: #3fb9d7;
}

.widget .social-bar a span.google {
	background: #bf4b37;
}

.widget .social-bar a span.linkedin {
	background: #2876c6;
}

.widget .widget-articles {
	display: block;
}

.widget .widget-articles li {
	display: block;
	border-bottom: 1px dotted #c0bfbf;
	padding-bottom: 10px;
	margin-bottom: 10px;
}

.widget .widget-articles li:last-child {
	border-bottom: 0px;
	padding-bottom: 0px;
	margin-bottom: 0px;
}

.widget li:after,
.widget .widget-articles:after {
	display: block;
	content: '';
	clear: both;
}

.widget .widget-articles .article-photo {
	display: block;
	float: left;
	margin-top: 3px;
}

.widget .widget-articles .article-content {
	display: block;
	margin-left: 70px;
}

.widget .widget-articles .no-image .article-content {
	margin-left: 0px;
}

.article-block .article-content h4,
.widget .widget-articles .article-content h4 {
	margin-bottom: 4px;
}

.widget .widget-articles .meta {
	display: block;
	font-size: 12px;
}

.widget .widget-articles .meta a {
	color: #8b8b8b;
}

.widget .widget-articles .meta a:hover {
	color: #232323;
}

.meta .icon-text {
	display: inline-block;
	padding-right: 5px;
}

.widget .comment-photo {
	display: block;
	float: left;
	margin-top: 3px;
}

.widget .comment-content {
	display: block;
	margin-left: 60px;
}

.widget .widget-comments li {
	display: block;
	border-bottom: 1px dotted #c0bfbf;
	padding-bottom: 10px;
	margin-bottom: 10px;
}

.widget .widget-comments li:last-child {
	border-bottom: 0px;
	padding-bottom: 0px;
	margin-bottom: 0px;
}

.widget .widget-comments p {
	margin-bottom: 6px;
}

.widget .meta {
	display: block;
	font-size: 12px;
	color: #8b8b8b;
}

.widget .meta a {
	color: #a4028f;
}

.widget .meta a:hover {
	color: #232323;
}

.tagcloud a,
.tag-cloud a {
	display: inline-block;
	font-size: 12px!important;
	background: #929292;
	color: #fff;
	font-weight: bold;
	padding: 3px 7px;
	margin: 0px 5px 5px 0px;
}

.tagcloud a:hover,
.tag-cloud a:hover {
	background: #232323;
	color: #fff;
}


.content input[type=text] {
	display: block;
	background: #fff;
	padding: 6px 13px;
	font-size: 13px;
	border: 1px solid #d3d3d3;
	font-family: 'Arial';
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

.content input[type=text]:focus {
	border: 1px solid #bababa;
}

.widget p {
	margin-bottom: 10px;
}

.widget .subscribe-block {
	display: block;
	margin: 20px auto;
	width: 230px;
}

.widget .subscribe-block input[type=text] {
	width: 100%;
}

.gallery-widget {
	display: block;
	border-bottom: 1px dotted #c0bfbf;
	padding-bottom: 10px;
	margin-bottom: 10px;
}

.widget .gallery-widget:last-child {
	border-bottom: 0px;
	padding-bottom: 0px;
	margin-bottom: 0px;
}

.gallery-widget .gallery-photo {
	display: block;
	margin-bottom: 10px;
	position: relative;
	overflow: hidden;
}

.gallery-widget .gallery-photo > a {
	display: block;
	position: absolute;
}

.gallery-widget .gallery-photo ul {
	position: relative;
	display: block;
	width: 100%;
	height: 190px;
	white-space: nowrap;
	font-size: 0;
}

.gallery-widget .gallery-photo ul li {
	font-size: 13px;
	white-space: nowrap;
	display: inline-block;
}

.gallery-widget .gallery-photo > a {
	display: block;
	position: absolute;
	z-index: 3;
	background: transparent;
	width: 40px;
	text-align: center;
	height: 190px;
	font-size: 27px;
	line-height: 190px;
	top: 0px;
	color: #fff;
	text-shadow: 0px 0px 2px rgba(0,0,0,0.6);
}

.gallery-widget .gallery-photo > a:hover {
	background: rgba(0,0,0,0.5);
}

.gallery-widget:hover .gallery-photo > a.slide-left {
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
	filter: alpha(opacity=100);
	opacity: 1;
	left: 0px;
}

.gallery-widget:hover .gallery-photo > a.slide-right {
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
	filter: alpha(opacity=100);
	opacity: 1;
	right: 0px;
}

.gallery-widget .gallery-photo > a.slide-left {
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
	filter: alpha(opacity=0);
	opacity: 0;
	left: -40px;
}

.gallery-widget .gallery-photo > a.slide-right {
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
	filter: alpha(opacity=0);
	opacity: 0;
	right: -40px;
}

.gallery-widget h4 {
	font-size: 17px;
	font-weight: normal;
}

.hover-effect {
	display: inline-block;
	background-color: #a4028f;
	overflow: hidden;
}

.hover-effect .cover {
	display: block;
	position: relative;
	color: #fff;
}

.hover-effect .cover img {
	position: relative;
	z-index: 0;
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
	filter: alpha(opacity=100);
	opacity: 1;
	transition: all 0.2s;
	-moz-transition: all 0.2s;
	-webkit-transition: all 0.2s;
	-o-transition: all 0.2s;
}

div[rel='hover-parent']:hover a.hover-effect .cover img,
a.hover-effect:hover .cover img {
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=30)";
	filter: alpha(opacity=30);
	opacity: 0.3;
	-webkit-filter: blur(3px);
    -moz-filter: blur(3px);
    -o-filter: blur(3px);
    -ms-filter: blur(3px);
    filter: blur(3px);
}

.hover-effect .cover i {
	z-index: 1;
	display: block;
	position: absolute;
	font-style: normal;
	top: 0px;
	left: 0px;
	width: 100%;
	height: 100%;
	box-shadow: inset 0px 0px 0px 1px rgba(0,0,0,0.2);
}

div[rel='hover-parent']:hover a.hover-effect .cover i,
a.hover-effect:hover .cover i {
	box-shadow: none;
}

a.hover-effect .cover i:before {
	display: block;
	position: absolute;
	z-index: 2;
	font-family: 'Entypo';
	content: '\1F517';
	height: 50px;
	width: 50px;
	line-height: 50px;
	top: 50%;
	left: 50%;
	margin-top: -25px;
	margin-left: -25px;
	text-shadow: 0px 1px 2px rgba(0,0,0,0.2);
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
	filter: alpha(opacity=0);
	opacity: 0;
	text-align: center;
	transition: opacity 0.2s;
	-moz-transition: opacity 0.2s;
	-webkit-transition: opacity 0.2s;
	-o-transition: opacity 0.2s;
}

div[rel='hover-parent']:hover a.hover-effect .cover i:before,
a.hover-effect:hover .cover i:before {
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
	filter: alpha(opacity=100);
	opacity: 1;
}

#wp-calendar {
	width: 100%;
	text-align: center;
}

#wp-calendar caption {
	font-size: 17px;
	padding: 5px 0px 15px 0px;
	font-weight: bold;
	font-family: 'Source Sans Pro', sans-serif;
}

#wp-calendar thead th {
	background: rgba(0,0,0,0.1);
	line-height: 35px;
}

#wp-calendar td a {
	font-weight: bold;
	display: block;
	text-align: center;
	background: rgba(0,0,0,0.05);
	color: #232323;
}

#wp-calendar td a:hover {
	background: rgba(0,0,0,0.1);
}

#wp-calendar td#today {
	background: #a4028f;
	color: #fff;
}

#wp-calendar td#today a {
	color: #fff;
	background: transparent;
}

#wp-calendar td#today a:hover {
	color: #fff;
	background: rgba(0,0,0,0.1);
}

#wp-calendar td {
	line-height: 35px;
}

.double-block {
	display: block;
	width: 100%;
}

.single-block .content-block {
	display: block;
	float: none;
	width: 890px;
}

.double-block .content-block {
	display: block;
	width: 250px;
}

.double-block .content-block.right {
	margin-left: 20px;
}

.double-block .content-block.main {
	display: block;
	width: 630px;
}

.main-page .block {
	display: block;
	margin-bottom: 20px;
}

.double-block .content-block .widget {
	display: block;
	margin-bottom: 10px;
}

.double-block .content-block .widget .featured-block .meta a {
	color: #fff;
}

.double-block .content-block .widget .meta a {
	color: #8b8b8b;
}

.list-title {
	font-weight: 600!important;
}




/* #8 Footer */

.footer {
	margin-top: 0px;
	display: block;
	color: #a0a0a0;
	background: #f0efef;
}

.footer p {
	font-size: 11px;
}

.footer .wrapper {
	border-top: 3px solid #c1c1c1;
	padding-top: 20px;
	padding-bottom: 20px;
}

.footer .wrapper:after {
	display: block;
	content: '';
	clear: both;
}

.footer ul {
	display: block;
	line-height: 33px;
	vertical-align: middle;
}

.footer ul li {
	display: block;
	float: left;
	margin-left: 20px;
	position: relative;
}

.footer ul li:after {
	display: block;
	content: '/';
	position: absolute;
	top: 0px;
	right: -10px;
}

.footer ul li:last-child:after {
	display: none;
}

.footer ul li a {
	display: block;
}

.footer a.#a4028f-themes {
	display: inline-block;
	vertical-align: bottom;
	background: url(../images/#a4028f-themes.png) no-repeat center center;
	color: transparent;
	overflow: hidden;
	text-indent: -200px;
	width: 93px;
}

.footer .logo-footer {
	display: block;
	float: left;
	margin-right: 20px;
	line-height: 33px;
	vertical-align: middle;
}

.footer .logo-footer img {
	display: inline-block;
	vertical-align: middle;
}


.error-search {
	display: block;
	width: 200px;
	margin: 40px auto;
	position: relative;
}

.error-search .search-input {
	display: block;
	width: 200px;
	border: 0px;
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
	filter: alpha(opacity=100);
	opacity: 1;
	box-shadow: none;
}

.big-error-sign {
	display: block;
	width: 400px;
	max-width: 100%;
	margin: 20px auto;
	text-align: center;
}

.big-error-sign h2 {
	display: block;
	font-size: 120px;
	line-height: 140%;
	color: #474747;
}

.big-error-sign strong {
	display: block;
	margin-bottom: 35px;
	font-size: 35px;
	line-height: 105%;
	font-family: 'Titillium Web', sans-serif;
	color: #474747;
}

.big-error-sign span {
	display: block;
	margin-bottom: 25px;
	font-size: 17px;
	line-height: 120%;
	color: #a3a3a3;
}


.block-content {
	overflow: hidden;
	background: #fcfcfc;
	padding: 17px;
	margin-top: -10px;
	box-shadow: 0 1px 1px rgba(0,0,0,0.08);
	margin-bottom: 20px;
}

.themenumobile {
	display: none;
}

.mobile-menu {
	display: none!important;
}





/* Additional Styles */

.lightbox hr {
	margin: 20px 0px;
}

.lightbox p,
.lightbox span,
.lightbox h2,
.lightbox h3 {
	color: #232323;
	text-shadow: none;
}

.lightbox .loading-box {
	padding:50px 0px;
	line-height: 24px;
}

.startlightbox  {
	overflow: hidden;
}

.startlightbox .lightbox {
	display:block;
}

.lightbox {
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.6);
    text-align:center;
	z-index:200;
	display:none;
	overflow-y:scroll!important;
}

.lightbox .main-black-block {
	box-shadow:none;
	background:#212121;
	color:#ccc;
	font-size: 11.5px;
	line-height: 20px;
	font-weight: 300;
	padding-bottom: 5px;
	color:#8a8a8a;
}

.lightbox .lightcontent .light-close span, .lightbox .lightcontent-loading .light-close span {
	font-family: 'Entypo';
	font-size:14px;
	display:inline-block;
	margin-top:-2px;
	margin-right:6px;
	color: inherit;
}

.lightbox .lightcontent .light-close:hover, .lightbox .lightcontent-loading .light-close:hover {
	color:#db2727;
}

.lightbox .lightcontent .light-close:active, .lightbox .lightcontent-loading .light-close:active {
	color:#b01e1e;
}

.lightbox .lightcontent .light-close, .lightbox .lightcontent-loading .light-close {
	display:block;
	right:0px;
	top:-30px;
	font-family: Arial;
	position:absolute;
	font-size:12px;
	color:#fff;
	text-shadow:0 1px 3px rgba(0,0,0,0.6);
}

.lightbox .lightcontent, .lightbox .lightcontent-loading {
	background:#f4f4f4;
	width:1200px;
	max-width: 100%;
	margin:100px auto 70px auto;
	position:relative;
	box-shadow: 0px 1px 4px rgba(0,0,0,0.5);
	text-align:left;
}

.lightbox .light-title {
	display:block;
	position:absolute;
	top:-33px;
	color:#fff;
	text-shadow:0 1px 3px rgba(0,0,0,0.6);
	height:23px;
	width:780px;
	overflow:hidden;
	text-overflow: ellipsis;
	white-space:nowrap; 
}

.lightbox .gallery-thumbs {
	margin-right: auto;
	margin-left: auto;
	margin-bottom: 30px;
	width: 95%;
}

.lightbox .thacontent {
	padding: 0px 25px 20px 25px;
}

.loading-box {
	display:block;
	text-align:center;
}

.loading-box .loading-image {
	display:block;
	text-align:center;
	padding-top:20px;
}

.lightbox .carousel-left {
	left:8px;
}

.lightbox .carousel-right {
	right:8px;
}

.lightbox blockquote {
	padding-bottom:30px;
}

.lightbox .article-main-content {
	padding: 0px 55px;
	width: auto;
}

.loading-message {
	display: block;
	background: #f0f0f0;
	padding: 10px 15px;
	font-size: 11px;
	line-height: 140%;
}

.loading-message img {
	display: block;
	float: left;
	width: 34px;
	padding-right: 15px;
}

.main-content-split .loading-message img {
	display: none;
}

.loading-message:before {
	display: block;
	content: '';
	clear: both;
}

.loading-message b {
	font-size: 18px;
	display: block;
	padding-bottom: 4px;
}

.ls-fullwidth .ls-nav-prev, .ls-fullwidth .ls-nav-next {
	z-index: 20;
}

.ls-fullwidth .ls-nav-next {
	right: 50px!important;
}

.ls-fullwidth .ls-nav-prev {
	left: 50px!important;
}


.lightbox .big-photo-block .the-image {
	box-shadow: none;
	text-align: center;
	padding-top: 10px;
	background-color: transparent;
}

.lightbox .big-photo-block .the-image img {
	max-width: 98%;
}

.lightbox .big-photo-block .the-thumbs {
	margin-left: 1%;
	margin-right: 1%;
	overflow: hidden;
}

.lightbox .lightbox-content {
	display: block;
	padding: 0px 2% 8px 2%;
}

.the-image img {
	max-width: 100%;
}

.lightbox .photo-gallery-full {
	box-shadow: none;
}




.info-message {
	display: block;
	background: #f4ebda;
	font-size: 11px;
	line-height: 140%;
	color: #8b755e;
	padding: 10px 10px;
}

.info-message p {
	display: block;
	margin-bottom: 0px;
}

.info-message b {
	font-size: 18px;
	display: block;
	padding-bottom: 4px;
}

.main-content-split .info-message span.icon-text {
	display: none;
}

.main-content-split .info-message b {
	font-size: 16px;
}

.info-message span.icon-text {
	display: block;
	float: left;
	font-size: 32px;
	height: 30px;
	padding-top: 10px;
	padding-right: 12px;
}

.info-message.success {
	background: #589f19;
	color: #fff;
}

.info-message.fail {
	background: #9f2919;
	color: #fff;
}



.article-big .article-content .meta > span.tag {
	color: #fff;
}

.pagination .page-numbers.dots {
	background: transparent;
	color: #232323;
}

.double-block .gallery-widget .gallery-photo > a,
.double-block .gallery-widget .gallery-photo ul {
	height: 158px;
	line-height: 158px;
}

.gallery-widget .gallery-photo img {
	width: 100%;
}

.double-block .widget {
	border-bottom: 1px dotted #c0bfbf;
	padding-bottom: 10px;
	margin-bottom: 15px;
}

.double-block .widget .banner {
	padding-bottom: 0px;
}

.widget .menu {
	display: block;
}

.widget .menu li {
	display: block;
}

.widget .menu li a {
	display: block;
	padding: 8px 10px;
	border-bottom: 1px solid #e2e2e2;
	border-left: 0px solid transparent;
}

.widget .menu li:last-child a {
	border-bottom: 0px;
}

.widget .menu li a:hover {
	background: #e2e2e2;
	color: #232323;
	border-left: 10px solid transparent;
}


.single-block .article-block-big li {
	padding-right: 15px;
}

.header,
.main-menu {
	position: relative;
	z-index: 1000;
}

.main-menu.sticky {
	padding: 0px!important;
}

.main-menu.sticky:before {
	display: block;
	background-color: inherit;
	content: '';
	position: fixed;
	height: inherit;
	left: 0px;
	top: 0px;
	width: 100%;
	z-index: 0;
}

.admin-bar .main-menu.sticky:before {
	top: 28px;
}



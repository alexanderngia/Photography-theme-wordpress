<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Mukta&display=swap');
		@import url('https://fonts.googleapis.com/css?family=Tangerine:700&display=swap');
     *{
         margin:0px;
         padding:0;
         box-sizing: border-box;
         list-style:none;
         text-decoration: none;
     }
     body{
         background: white;
     }

     .wrapper{
      display: flex;
      position: fixed;
      margin-top:0px;
      z-index:999;
	  top:0;
     }
     .wrapper .sidebar{
         position: fixed;
         width:200px;
         height: 100%;
         background-image: linear-gradient(to left, rgba(0,0,0,0), rgba(0,0,0,0.8));
         background-color: transparent;
         padding-top:30px;

    }
    .wrapper .sidebar img{
        display: block;
        max-width:160px;
        max-height:80px;
        width: auto;
        height: auto;
        padding-left: 70px;
		margin-bottom:10px;
        
    }
		.wrapper .sidebar h4{
			color:white;
			font-size: 18px;
			text-align: center;
			font-family: playfair display;
			margin-bottom:10px;
			
		}
		.wrapper .sidebar h5{
			color: white;
			font-size: 9px;
			text-align: center;
			font-family: raleway;
			margin-bottom: 100px;
		}


    .wrapper .sidebar ul li{
         padding: 9px;
         font-size: 11px;
         margin-left: 40px;
         margin-right: 25px;
		font-family: raleway;
		letter-spacing: 1px;
     }
     .wrapper .sidebar ul li i{
        width: 25px;
     }
     .wrapper .sidebar  ul li a{
		 font-size: 9px;
		 font-family: raleway;
         color: white;
         display: block; 
		 letter-spacing:1px;
		text-decoration:none;

     }
     .wrapper .sidebar ul li:hover{
         background:transparent;
     }
     .wrapper .sidebar ul li:hover a{
         color:#B8B8B8;
     }
     .wrapper .sidebar .social_media{
       position: absolute;
       bottom: 0;
       left: 50%;
       transform: translatex(-50%);
       display: flex;
     }
     
     .wrapper .sidebar .social_media a{
         display: block;
         width: 40px;
         background: grey;
         height: 40px;
         line-height: 40px;
         text-align: center;
         margin:0 5px;
         color:white;
         border-top-right-radius: 5px;
         border-top-left-radius: 5px;
     }
     .wrapper .main_content{
         width:100%;
     }
     .wrapper .main_content .header{
         padding: 20px;
         background: white;
         color: #717171
     }
     .wrapper .main_content .info{
         margin: 20px;
         color:#717171;
         line-height: 25px;
     }
.navbar{
  background-color:#1C1D22;
  overflow:hidden;
  height:50px;
  top:0;
  position:fixed;
  z-index:999;
}
.navbar img{
  width:10%;
  height:10%;
  margin-left:170px;
  margin-top:0px;
  position: relative;
  display:flex;
  z-index:999;
}
/** icon menu mobile **/
.open-slide{
    position:fixed;
    z-index:2000;
    margin-top:10px;
    margin-left:0px;
	top:0;
}
/** sidebar mobile **/
.side-nav{
  height:100%;
  width:0;
  position:fixed;
  z-index:1000;
  background-color:#1C1D22;
  overflow-x:hidden;
  padding-top:10px;
  transition:0.5s;
}
.side-nav img{
	display: block;
        max-width:160px;
        max-height:80px;
        width: auto;
        height: auto;
        padding-left: 16px;
	padding-top: 0px;
}

.side-nav h4{
	color:white;
	font-size: 12px;
	font-family: playfair display;
	margin-left:-11px;

}
.side-nav h5{
	color: white;
	font-size: 5px;
	font-family: open sans;
	margin-bottom: 10px;
	margin-left: 9px;
}
.side-nav a{
 font-size: 9px;
 margin-left: 72px;
 margin-right: 25px;
  padding-top:20px;
  text-decoration:none;
  color:#ccc;
  display:block;
  transition:0.3s;
letter-spacing:1px;
	font-family:raleway;
}
.side-nav a i{
    width:25px;
}
.side-nav .social_media{
       position: absolute;
       bottom: 0px;
       left: 50%;
       transform: translatex(-50%);
       display: flex;
     }
     
.side-nav .social_media a{
         display: block;
         width: 40px;
         background: grey;
         height: 40px;
         line-height: 40px;
         text-align: center;
         margin:0 5px;
         color:white;
         border-top-right-radius: 5px;
         border-top-left-radius: 5px;
         padding-top:0;
     }
.side-nav a:hover{
  color:#fff;
}

.side-nav .btn-close{
  position:absolute;
  top:0;
	right:-10px;
  font-size:40px;
}
.carousel-slide-desktop{
			pointer-events: none;
		}
#main{
pointer-events: none;
  transition:margin-left 0.5s;
  padding:20px;
  overflow:hidden;
  width:100%;
}
		
/** mobile **/
@media(max-width:576px){
	.carousel-slide-mobile{margin-top:50px;
	z-index:1;
	position:relative;
	display:inline-block;
	}}
@media(max-width:576px){
  .wrapper{display:none}
}
@media(max-width:576px){
			.carousel-slide-desktop{display:none}
		}

/** Ipad **/
@media(max-width:800px) and (min-width:576px){
	.carousel-slide-mobile{display:none;
	}}
@media(max-width:800px) and (min-width:576px)
{
  .wrapper{display:none}
}
@media(max-width:800px) and (min-width:576px){

.navbar img{
  width:6%;
  height:6%;
  margin-left:330px;
  margin-top:0px;
  position: relative;
  display:flex;
	z-index:999;}}
@media(max-width:800px) and (min-width:576px){
			.carousel-slide-desktop{margin-top:50px;}}
@media(max-width:800px) and (min-width:576px){
	.side-nav{top:0;}}
@media(max-width:800px) and (min-width:576px){
	.side-nav a{padding-top:11px;}}
/**desktop**/
		
@media(min-width:800px){
.open-slide{display:none}
}
@media(min-width:800px){
.navbar{display:none}
}
@media(min-width:800px){
  .carousel-slide-mobile{display:none}
}
@media(min-width:800px){
			.caption-cr-mobile-1, .caption-cr-mobile-2{display:none}
		}
		
    </style>
</head>
<body>
<nav class="navbar">
       <a href="https://charlienguyenwedding.com/" target="new"><img src="/demo/wp-content/themes/Photographic/charlie.png"></a>
        <span class="open-slide">
            <a href="#" onclick="openSlideMenu()">
              <svg width="30" height="30">
                  <path d="M0,5 30,5" stroke="white" stroke-width="5"/>
                  <path d="M0,14 30,14" stroke="white" stroke-width="5"/>
                  <path d="M0,23 30,23" stroke="white" stroke-width="5"/>
              </svg>
            </a>
          </span>
</nav>
        <div class="wrapper">
        <div class="sidebar">
                <a href="https://charlienguyenwedding.com/" target="new"><img src="/demo/wp-content/themes/Photographic/charlie.png"></a>
			<a>
				<h4>
					CHARLIE NGUYEN
				</h4>
			<h5>
				NGƯỜI LƯU GIỮ CẢM XÚC
				</h5>
			</a>
            <ul>
                <li><a href="https://charlienguyenwedding.com/about-me/"><i class="fab fa-black-tie"></i>ABOUT ME</a></li>
                <li><a href="https://charlienguyenwedding.com/gallery/"><i class="fab fa-empire"></i>GALLERY</a></li>
                <li><a href="https://charlienguyenwedding.com/portfolio/"><i class="fas fa-medal"></i>PORTFOLIOS</a></li>
                <li><a href="https://charlienguyenwedding.com/films/"><i class="fas fa-video"></i>FILM</a></li>
                <li><a href="https://charlienguyenwedding.com/information/"><i class="far fa-id-badge"></i>INFORMATION</a></li>
                <li><a href="https://charlienguyenwedding.com/feedback/"><i class="far fa-comment-dots"></i>FEEDBACK</a></li>
                <li><a href="https://charlienguyenwedding.com/blog/"><i class="fas fa-bold"></i>BLOG</a></li>
                <li><a href="https://charlienguyenwedding.com/contact/"><i class="fas fa-phone"></i>CONTACT</a></li>
            </ul>
            <div class="social_media">
                <a href="https://www.facebook.com/khanhchuong82"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/charlienguyenphotography/"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com/CharlieNguyenP1"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>
    <div id="side-menu" class="side-nav">
        <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
		<a href="https://charlienguyenwedding.com/" target="new"><img src="https://charlienguyenwedding.com/wp-content/uploads/2020/03/671b5e775a25a17bf834-1-1.png"></a>
		<a>
				<h4>
					CHARLIE NGUYEN
				</h4>
			<h5>
				NGƯỜI LƯU GIỮ CẢM XÚC
				</h5>
			</a>
            <li><a href="https://charlienguyenwedding.com/about-me/"><i class="fab fa-black-tie"></i>ABOUT ME</a></li>
                <li><a href="https://charlienguyenwedding.com/gallery/"><i class="fab fa-empire"></i>GALLERY</a></li>
                <li><a href="https://charlienguyenwedding.com/portfolio/"><i class="fas fa-medal"></i>PORTFOLIOS</a></li>
                <li><a href="https://charlienguyenwedding.com/films/"><i class="fas fa-video"></i>FILM</a></li>
                <li><a href="https://charlienguyenwedding.com/information/"><i class="far fa-id-badge"></i>INFORMATION</a></li>
                <li><a href="https://charlienguyenwedding.com/feedback/"><i class="far fa-comment-dots"></i>FEEDBACK</a></li>
                <li><a href="https://charlienguyenwedding.com/blog/"><i class="fas fa-bold"></i>BLOG</a></li>
                <li><a href="https://charlienguyenwedding.com/contact/"><i class="fas fa-phone"></i>CONTACT</a></li>
            <div class="social_media">
                <a href="https://www.facebook.com/CharlieWedding/"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/charlienguyenphotography/"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com/CharlieNguyenP1"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
      <div id="carouselExampleSlidesOnly" class="carousel-slide-desktop carousel-fade" data-ride="carousel">
	  <div class="carousel-inner">
		  <div class="carousel-item active" interval data="2000">
				<img src="https://images.pexels.com/photos/1779491/pexels-photo-1779491.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item" interval data="2000">
				<img src="https://images.pexels.com/photos/1779491/pexels-photo-1779491.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item" interval data="2000">
			  <img src="https://images.pexels.com/photos/1779491/pexels-photo-1779491.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item" interval data="2000">
			  <img src="https://images.pexels.com/photos/1779491/pexels-photo-1779491.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item" interval data="2000">
					<img src="https://images.pexels.com/photos/1779491/pexels-photo-1779491.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">
			</div>
		</div>
	  </div>

	
	<!-- carousel mobile-->
<div class="screen-mobile">
	
	<div id="carouselExampleSlidesOnly" class="carousel-slide-mobile carousel-fade" data-ride="carousel">
	  <div class="carousel-inner">
		<div class="carousel-item" interval data="2000">
				<img src="https://charlienguyenwedding.com/wp-content/uploads/2021/03/6-1.jpg" class="d-block w-100" alt="...">
		</div>
		  <div class="carousel-item" interval data="2000">
				<img src="https://charlienguyenwedding.com/wp-content/uploads/2021/03/26.jpg" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item" interval data="2000">
		  <img src="https://charlienguyenwedding.com/wp-content/uploads/2021/03/40.jpg" class="d-block w-100" alt="...">
		</div>
		  <div class="carousel-item" interval data="2000">
				<img src="https://charlienguyenwedding.com/wp-content/uploads/2021/03/O7A3854.jpg" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item active" interval data="2000">
			<img src="https://charlienguyenwedding.com/wp-content/uploads/2021/03/O7A3865.jpg" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item" interval data="2000">
		  <img src="https://charlienguyenwedding.com/wp-content/uploads/2021/03/O7A3988.jpg" class="d-block w-100" alt="...">
		  </div>
		  <div class="carousel-item" interval data="2000">
				<img src="https://charlienguyenwedding.com/wp-content/uploads/2021/03/O7A4245.jpg" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item" interval data="2000">
				<img src="https://charlienguyenwedding.com/wp-content/uploads/2021/03/O7A0992.jpg" class="d-block w-100" alt="...">
		</div>
		 
	  </div>
	</div>
	
</div>
      <script>
        function openSlideMenu(){
          document.getElementById('side-menu').style.width = '240px';
          document.getElementById('main').style.marginLeft = '240px';
        }
    
        function closeSlideMenu(){
          document.getElementById('side-menu').style.width = '0';
          document.getElementById('main').style.marginLeft = '0';
        }
      </script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
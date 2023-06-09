<?php
if(!isset($_SESSION)){
	session_start();
}
if(isset($_SESSION['username'])){
	header("location:Quick_Contact1.php");
}
?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <link rel="stylesheet" href="style.css" />
  <script src="script1.js"></script>
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap"
    rel="stylesheet"
  /> 
  
  <style>
  #iddd{
  background-image: url("main-crowd.jpg");
  }
  
  .auto-style2 {
	border: 4px solid #FFFFCC;
	background-color: #FFCC99;
}

  
  </style>
  
  
</head>

<body class="nav-link-1">
<?php if(isset($_SESSION['username'])) : ?>

  <nav class="navbar">
    <ul class="navbar-nav">
      <li class="logo">
        <a href="#" class="nav-link">
          <span class="link-text logo-text">Elder</span>
          <svg
            aria-hidden="true"
            focusable="false"
            data-prefix="fad"
            data-icon="angle-double-right"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 448 512"
            class="svg-inline--fa fa-angle-double-right fa-w-14 fa-5x"
          >
            <g class="fa-group">
              <path
                fill="currentColor"
                d="M224 273L88.37 409a23.78 23.78 0 0 1-33.8 0L32 386.36a23.94 23.94 0 0 1 0-33.89l96.13-96.37L32 159.73a23.94 23.94 0 0 1 0-33.89l22.44-22.79a23.78 23.78 0 0 1 33.8 0L223.88 239a23.94 23.94 0 0 1 .1 34z"
                class="fa-secondary"
              ></path>
              <path
                fill="currentColor"
                d="M415.89 273L280.34 409a23.77 23.77 0 0 1-33.79 0L224 386.26a23.94 23.94 0 0 1 0-33.89L320.11 256l-96-96.47a23.94 23.94 0 0 1 0-33.89l22.52-22.59a23.77 23.77 0 0 1 33.79 0L416 239a24 24 0 0 1-.11 34z"
                class="fa-primary"
              ></path>
            </g>
          </svg>
        </a>
      </li>




      <li class="nav-item">
        <a href="index.php" class="nav-link">
<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 113.97"><defs><style>.cls-1{fill-rule:evenodd;}</style></defs><title>homepage</title>


<path class="cls-1" d="M18.69,73.37,59.18,32.86c2.14-2.14,2.41-2.23,4.63,0l40.38,40.51V114h-30V86.55a3.38,3.38,0,0,0-3.37-3.37H52.08a3.38,3.38,0,0,0-3.37,3.37V114h-30V73.37ZM60.17.88,0,57.38l14.84,7.79,42.5-42.86c3.64-3.66,3.68-3.74,7.29-.16l43.41,43,14.84-7.79L62.62.79c-1.08-1-1.24-1.13-2.45.09Z"/></svg>

          <span class="Home page">Home</span>
        </a>
      </li>
      
       <li class="nav-item">
        <a href="Quick_Contact1.php" class="nav-link">
		<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 118.92"><defs><style>.cls-1{fill-rule:evenodd;}</style></defs><title>talk</title><path class="cls-1" d="M39.16,0H75.57a8.74,8.74,0,0,1,8.72,8.72V31.56a8.74,8.74,0,0,1-8.72,8.72H54.23L41,51.67a1.47,1.47,0,0,1-2.07-.16,1.49,1.49,0,0,1-.35-1l.71-10.18h-.12a8.74,8.74,0,0,1-8.72-8.72V8.72A8.74,8.74,0,0,1,39.16,0ZM51.51,89.14c2.06-3.31,2.8-8.53.56-12-.9-1.39-.54-3.64-.54-5.55,0-19-33.24-19-33.24,0,0,2.38.54,4-.74,5.91-2.19,3.16-1.06,8.76.78,11.67,1.87,5.44,9,8.6,2.9,14.26S2.49,102,0,118.92H122.88c-2.27-13.67-13-6.71-17.46-12.77-3.77-5.06,1-6.09,2.48-10.51,1.48-2.33,2.39-6.83.63-9.37-1-1.51-.6-3.08-.6-5,0-15.29-26.05-15.29-26.05,0,0,1.52.29,3.59-.43,4.7-1.8,2.8-1.2,7,.45,9.65,1.22,4.29,6.13,6.32,3,10.64s-10.39,3.49-14.89,6.1c-4.76-5.83-15.95-3.66-20.94-9.2-5.54-6.15.85-8.3,2.48-14ZM88.57,17.76A8.56,8.56,0,0,1,93,20.12a7.82,7.82,0,0,1,2.51,5.72V45.42A8.57,8.57,0,0,1,87,54h-.31l.91,11.88L72,53.63H48.19l8.63-8.77H81.34a7.27,7.27,0,0,0,7.25-7.25V18.34c0-.2,0-.39,0-.58ZM43.46,25.41a1.48,1.48,0,0,1,0-2.95H65.1a1.48,1.48,0,0,1,0,2.95Zm0-9.77a1.48,1.48,0,0,1,0-3H71.53a1.48,1.48,0,0,1,0,3Zm32.1-12.7H39.16a5.8,5.8,0,0,0-5.78,5.78V31.56a5.8,5.8,0,0,0,5.78,5.78h1.69a1.47,1.47,0,0,1,1.46,1.58l-.57,8.24,10.92-9.39a1.49,1.49,0,0,1,1-.43H75.56a5.8,5.8,0,0,0,5.78-5.78V8.72a5.8,5.8,0,0,0-5.78-5.78Z"/></svg>
          <span class="Quick Contact page">Quick Contact</span>
        </a>
      </li>




      <li class="nav-item">
        <a href="Service.php" class="nav-link">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 113.53" style="enable-background:new 0 0 122.88 113.53" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style><g><path class="st0" d="M87.86,19.65v28.62h-6.69v-4.42H41.71v4.42l-6.69,0V19.65h-2.31v-4.4h5.63l3.14-9.76 C42.41,2.61,43.95,0,46.97,0h30.1c3.02,0,4.76,2.56,5.49,5.49l2.43,9.76h5.17v4.4H87.86L87.86,19.65L87.86,19.65z M66.41,97.31 h21.91c1.76-1.75,3.69-3.57,5.65-5.42c4.11-3.89,8.4-7.95,12.81-13.03c5.04-5.81,5.58-7.82,7.11-13.51 c0.29-1.07,0.61-2.27,1.03-3.76l2.62-9.21l0.03-0.1c1.4-4.1,1.51-6.81,0.93-8.37c-0.18-0.48-0.41-0.8-0.68-0.97 c-0.21-0.14-0.49-0.19-0.78-0.16c-0.68,0.07-1.45,0.5-2.15,1.27l-7.78,18.53c-0.07,0.17-0.17,0.33-0.28,0.47 c-0.46,0.83-1.08,1.64-1.88,2.41l-13.8,15.39c-0.75,0.84-2.04,0.91-2.87,0.16c-0.84-0.75-0.91-2.04-0.16-2.87l13.81-15.39 c0.06-0.07,0.12-0.14,0.19-0.2c1.43-1.36,1.88-2.83,1.63-3.9c-0.08-0.33-0.22-0.61-0.42-0.8c-0.19-0.18-0.44-0.29-0.75-0.32v0 c-1.23-0.13-3.04,0.78-5.25,3.39l0,0c-0.06,0.07-0.13,0.14-0.2,0.21l-5.35,4.72l-0.03,0.03c-5.79,5.48-8.28,6.78-12.82,9.15 c-0.95,0.5-1.99,1.04-3.28,1.74c-0.51,0.28-1.01,0.62-1.5,0.99c-0.52,0.4-1.02,0.81-1.49,1.21c-2.4,2.02-3.66,3.66-4.38,5.47 c-0.75,1.88-1.02,4.17-1.39,7.31c-0.15,1.27-0.26,2.52-0.35,3.77C66.47,96.12,66.44,96.72,66.41,97.31L66.41,97.31L66.41,97.31z M56.47,97.31H34.55c-1.76-1.75-3.69-3.57-5.65-5.42c-4.11-3.89-8.4-7.95-12.81-13.03c-5.04-5.81-5.58-7.82-7.11-13.51 c-0.29-1.07-0.61-2.27-1.03-3.76l-2.62-9.21l-0.03-0.1c-1.4-4.1-1.51-6.81-0.93-8.37c0.18-0.48,0.41-0.8,0.68-0.97 c0.21-0.14,0.49-0.19,0.78-0.16c0.68,0.07,1.45,0.5,2.15,1.27l7.78,18.53c0.07,0.17,0.17,0.33,0.28,0.47 c0.46,0.83,1.08,1.64,1.88,2.41l13.8,15.39c0.75,0.84,2.04,0.91,2.87,0.16c0.84-0.75,0.91-2.04,0.16-2.87L20.96,62.73 c-0.06-0.07-0.12-0.14-0.19-0.2c-1.43-1.36-1.88-2.83-1.63-3.9c0.08-0.33,0.22-0.61,0.42-0.8c0.19-0.18,0.44-0.29,0.75-0.32v0 c1.23-0.13,3.05,0.78,5.25,3.39c0,0,0.19,0.19,0.21,0.21l5.35,4.72l0.03,0.03c5.79,5.48,8.28,6.78,12.82,9.15 c0.95,0.5,1.99,1.04,3.28,1.74c0.51,0.28,1.01,0.62,1.5,0.99c0.52,0.4,1.02,0.81,1.49,1.21c2.4,2.02,3.66,3.66,4.38,5.47 c0.75,1.88,1.02,4.17,1.39,7.31c0.15,1.27,0.26,2.52,0.35,3.77C56.41,96.12,56.44,96.72,56.47,97.31L56.47,97.31L56.47,97.31z M29.45,98.01c-0.31,0.36-0.5,0.83-0.5,1.34v12.14c0,1.13,0.92,2.04,2.04,2.04h27.58c1.13,0,2.04-0.92,2.04-2.04V99.24 c0-1.3-0.08-2.7-0.17-4c-0.09-1.33-0.21-2.65-0.36-3.96c-0.4-3.43-0.7-5.94-1.66-8.35c-0.99-2.47-2.58-4.6-5.53-7.09 c-0.54-0.46-1.09-0.92-1.67-1.35c-0.61-0.46-1.27-0.9-2.01-1.31c-1.2-0.65-2.32-1.24-3.34-1.78c-4.2-2.2-6.5-3.4-11.91-8.52 c-0.04-0.04-0.09-0.08-0.13-0.11l-5.22-4.61c-3.19-3.73-6.31-4.97-8.7-4.71l-0.01,0v0c-1.17,0.12-2.17,0.58-2.97,1.28l-5.27-12.56 l-0.01,0c-0.08-0.18-0.18-0.35-0.31-0.51c-1.46-1.75-3.31-2.77-5.08-2.95c-1.21-0.12-2.38,0.14-3.4,0.8 c-0.97,0.63-1.77,1.61-2.27,2.96c-0.88,2.35-0.86,6,0.86,11.05l2.6,9.15c0.38,1.32,0.71,2.59,1.02,3.71 c1.7,6.35,2.3,8.6,7.97,15.12c4.49,5.17,8.88,9.33,13.1,13.31C27.23,95.89,28.33,96.93,29.45,98.01L29.45,98.01L29.45,98.01z M33.35,101.39c0.27,0.06,0.55,0.06,0.83,0h22.34v8.06H33.03v-8.06H33.35L33.35,101.39z M93.43,98.01c0.31,0.36,0.5,0.83,0.5,1.34 v12.14c0,1.13-0.91,2.04-2.04,2.04H64.32c-1.13,0-2.04-0.92-2.04-2.04V99.24c0-0.07,0-0.15,0.01-0.22 c0.03-1.31,0.08-2.58,0.16-3.78c0.09-1.33,0.21-2.65,0.36-3.96c0.4-3.43,0.7-5.94,1.66-8.35c0.99-2.47,2.58-4.6,5.53-7.09 c0.54-0.46,1.09-0.92,1.67-1.35c0.61-0.46,1.27-0.9,2.01-1.31c1.2-0.65,2.32-1.24,3.34-1.78c4.2-2.2,6.5-3.4,11.91-8.52 c0.04-0.04,0.09-0.08,0.13-0.11l5.22-4.61c3.19-3.73,6.31-4.97,8.7-4.71l0.01,0v0c1.17,0.12,2.17,0.58,2.97,1.28l5.27-12.56l0.01,0 c0.08-0.18,0.18-0.35,0.31-0.51c1.46-1.75,3.31-2.77,5.08-2.95c1.21-0.12,2.38,0.14,3.4,0.8c0.97,0.63,1.77,1.61,2.27,2.96 c0.88,2.35,0.86,6-0.86,11.05l-2.6,9.15c-0.38,1.32-0.71,2.59-1.02,3.71c-1.7,6.35-2.3,8.6-7.97,15.12 c-4.49,5.17-8.88,9.33-13.1,13.31C95.65,95.89,94.55,96.93,93.43,98.01L93.43,98.01L93.43,98.01z M89.53,101.39 c-0.27,0.06-0.55,0.06-0.83,0H66.36v8.06h23.49v-8.06H89.53L89.53,101.39z M51.42,35.02h19.76v4.66l-19.76,0V35.02L51.42,35.02 L51.42,35.02z M37.27,24.16c5.04,0.16,8.12,2.27,8.91,6.66h-8.91V24.16L37.27,24.16z M84.98,24.16c-5.03,0.16-8.11,2.27-8.91,6.66 h8.91V24.16L84.98,24.16z M40.75,15.25h41.38l-1.77-8.18c-0.49-2.24-1.88-4.18-4.18-4.18H47.56c-2.3,0-3.48,1.99-4.18,4.18 L40.75,15.25L40.75,15.25L40.75,15.25z"/></g></svg>
          <span class="Service page">Service</span>
        </a>
      </li>
       <li class="nav-item">
	        <a href="profile1.php" class="nav-link">
			<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><defs><style>.cls-1{fill:#2b77c0;}.cls-2{fill:#3b4551;}</style></defs><title>a</title><path class="cls-1" d="M41.18431,90.66775,64,90.44518l22.81562.22257a1.29132,1.29132,0,0,0,1.33473-1.35949l-.5437-12.92817a3.6545,3.6545,0,0,0-2.62026-2.74381L72.55264,70.49693,64,76.924l-8.55271-6.427L43.01354,73.63629a3.6545,3.6545,0,0,0-2.62026,2.74381l-.5437,12.92817A1.29132,1.29132,0,0,0,41.18431,90.66775Z"/><path class="cls-1" d="M62.69906,67.31755c.42076.02688,2.41986.03485,2.94808-.03334,5.89054-.76065,9.15664-11.09909,9.15664-16.57478a10.80381,10.80381,0,1,0-21.60762,0C53.19615,56.29128,56.59036,66.92693,62.69906,67.31755Z"/><circle class="cls-1" cx="43.25238" cy="103.60834" r="3.13521"/><circle class="cls-1" cx="57.08417" cy="103.60834" r="3.13521"/><circle class="cls-1" cx="70.91597" cy="103.60834" r="3.13521"/><circle class="cls-1" cx="84.74777" cy="103.60834" r="3.13521"/><path class="cls-2" d="M105.47349,1.13353H22.52659a6.49376,6.49376,0,0,0-6.482,6.482V120.38447a6.49381,6.49381,0,0,0,6.482,6.482h82.9469a6.4938,6.4938,0,0,0,6.48193-6.482V7.61553A6.49375,6.49375,0,0,0,105.47349,1.13353ZM83.25169,11.44113H94.09116a3.11035,3.11035,0,1,1,0,6.22071H83.25169a3.11035,3.11035,0,1,1,0-6.22071Zm-49.34285,0H44.74831a3.11035,3.11035,0,1,1,0,6.22071H33.90884a3.11035,3.11035,0,1,1,0-6.22071Zm69.33758,106.71635H24.75358V27.96967h78.49285Z"/></svg>   
	       <span class="Service page">Profile</span>
	        </a>
      </li>


	   <li class="nav-item" id="themeButton">
	   
        <a href="logout.php" class="nav-link">
		<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="122.88px" height="93.504px" viewBox="0 0 122.88 93.504" 
		enable-background="new 0 0 122.88 93.504" xml:space="preserve">
		<g><path d="M8.431,5.385c-0.826,0-1.586,0.347-2.143,0.903C5.732,6.844,5.386,7.604,5.386,8.43v19.269v18.994v19.113v19.621 c0,0.59,0.379,1.158,0.926,1.615c0.805,0.676,1.873,1.076,2.804,1.076h9.585v-7.51c0-1.486,1.206-2.691,2.692-2.691h14.453 c1.487,0,2.692,1.205,2.692,2.691v7.51h47.527v-7.51c0-1.486,1.205-2.691,2.692-2.691h14.334c1.487,0,2.692,1.205,2.692,2.691v7.51 h9.018c0.711,0,1.382-0.314,1.88-0.813c0.499-0.498,0.813-1.168,0.813-1.879V19.233c0-0.744-0.301-1.417-0.789-1.904 c-0.486-0.487-1.159-0.789-1.904-0.789H64.887c-1.486,0-2.692-1.206-2.692-2.692c0-2.134-0.003-4.664-0.659-6.395 c-0.452-1.193-1.391-2.067-3.306-2.067H8.431L8.431,5.385z M68.604,58.285h39.33v5.227h-39.33V58.285L68.604,58.285z M68.604,30.956h39.33v5.226h-39.33V30.956L68.604,30.956z M68.604,44.621h39.33v5.227h-39.33V44.621L68.604,44.621z M26.408,27.895v4.501c-2.268,0.578-2.162,6.792,0.36,6.792c0.777-0.014,4.376,5.216,4.906,6.088c1.028,1.691,0,2.313,0,3.469 c-11.033,2.488-14.216,3.6-14.216,14.766h19.279h19.278c0-11.166-3.184-12.277-14.216-14.766c0-1.375-0.911-1.969,0-3.469 c1.028-1.692,2.911-4.06,4.846-6.089c2.659,0.05,2.725-6.204,0.42-6.792v-4.501C47.064,17.05,26.408,17.05,26.408,27.895 L26.408,27.895z M2.48,2.481C4.008,0.953,6.118,0,8.431,0h49.798c4.727,0,7.118,2.351,8.334,5.56 c0.675,1.782,0.901,3.732,0.978,5.595h47.261c2.232,0,4.251,0.904,5.713,2.366c1.462,1.462,2.365,3.482,2.365,5.712v66.195 c0,2.197-0.924,4.221-2.391,5.688c-1.467,1.465-3.489,2.389-5.688,2.389h-11.71c-1.487,0-2.692-1.205-2.692-2.691v-7.51H91.45v7.51 c0,1.486-1.205,2.691-2.692,2.691H35.846c-1.487,0-2.693-1.205-2.693-2.691v-7.51h-9.067v7.51c0,1.486-1.205,2.691-2.692,2.691 H9.116c-2.123,0-4.504-0.871-6.253-2.338C1.172,89.75,0,87.775,0,85.428V65.807V46.693V27.699V8.43C0,6.117,0.953,4.008,2.48,2.481 L2.48,2.481z"/></g></svg>
		          <span class="Login page" >Logout</span>
		        </a>
      </li>
      
	  
    </ul>
  </nav>
  
  <?php else : ?>
  <nav class="navbar">
    <ul class="navbar-nav">
      <li class="logo">
        <a href="#" class="nav-link">
          <span class="link-text logo-text">Elder</span>
          <svg
            aria-hidden="true"
            focusable="false"
            data-prefix="fad"
            data-icon="angle-double-right"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 448 512"
            class="svg-inline--fa fa-angle-double-right fa-w-14 fa-5x"
          >
            <g class="fa-group">
              <path
                fill="currentColor"
                d="M224 273L88.37 409a23.78 23.78 0 0 1-33.8 0L32 386.36a23.94 23.94 0 0 1 0-33.89l96.13-96.37L32 159.73a23.94 23.94 0 0 1 0-33.89l22.44-22.79a23.78 23.78 0 0 1 33.8 0L223.88 239a23.94 23.94 0 0 1 .1 34z"
                class="fa-secondary"
              ></path>
              <path
                fill="currentColor"
                d="M415.89 273L280.34 409a23.77 23.77 0 0 1-33.79 0L224 386.26a23.94 23.94 0 0 1 0-33.89L320.11 256l-96-96.47a23.94 23.94 0 0 1 0-33.89l22.52-22.59a23.77 23.77 0 0 1 33.79 0L416 239a24 24 0 0 1-.11 34z"
                class="fa-primary"
              ></path>
            </g>
          </svg>
        </a>
      </li>




      <li class="nav-item">
        <a href="index.php" class="nav-link">
<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 113.97"><defs><style>.cls-1{fill-rule:evenodd;}</style></defs><title>homepage</title>


<path class="cls-1" d="M18.69,73.37,59.18,32.86c2.14-2.14,2.41-2.23,4.63,0l40.38,40.51V114h-30V86.55a3.38,3.38,0,0,0-3.37-3.37H52.08a3.38,3.38,0,0,0-3.37,3.37V114h-30V73.37ZM60.17.88,0,57.38l14.84,7.79,42.5-42.86c3.64-3.66,3.68-3.74,7.29-.16l43.41,43,14.84-7.79L62.62.79c-1.08-1-1.24-1.13-2.45.09Z"/></svg>

          <span class="Home page">Home</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="Quick_Contact.php" class="nav-link">
		<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 118.92"><defs><style>.cls-1{fill-rule:evenodd;}</style></defs><title>talk</title><path class="cls-1" d="M39.16,0H75.57a8.74,8.74,0,0,1,8.72,8.72V31.56a8.74,8.74,0,0,1-8.72,8.72H54.23L41,51.67a1.47,1.47,0,0,1-2.07-.16,1.49,1.49,0,0,1-.35-1l.71-10.18h-.12a8.74,8.74,0,0,1-8.72-8.72V8.72A8.74,8.74,0,0,1,39.16,0ZM51.51,89.14c2.06-3.31,2.8-8.53.56-12-.9-1.39-.54-3.64-.54-5.55,0-19-33.24-19-33.24,0,0,2.38.54,4-.74,5.91-2.19,3.16-1.06,8.76.78,11.67,1.87,5.44,9,8.6,2.9,14.26S2.49,102,0,118.92H122.88c-2.27-13.67-13-6.71-17.46-12.77-3.77-5.06,1-6.09,2.48-10.51,1.48-2.33,2.39-6.83.63-9.37-1-1.51-.6-3.08-.6-5,0-15.29-26.05-15.29-26.05,0,0,1.52.29,3.59-.43,4.7-1.8,2.8-1.2,7,.45,9.65,1.22,4.29,6.13,6.32,3,10.64s-10.39,3.49-14.89,6.1c-4.76-5.83-15.95-3.66-20.94-9.2-5.54-6.15.85-8.3,2.48-14ZM88.57,17.76A8.56,8.56,0,0,1,93,20.12a7.82,7.82,0,0,1,2.51,5.72V45.42A8.57,8.57,0,0,1,87,54h-.31l.91,11.88L72,53.63H48.19l8.63-8.77H81.34a7.27,7.27,0,0,0,7.25-7.25V18.34c0-.2,0-.39,0-.58ZM43.46,25.41a1.48,1.48,0,0,1,0-2.95H65.1a1.48,1.48,0,0,1,0,2.95Zm0-9.77a1.48,1.48,0,0,1,0-3H71.53a1.48,1.48,0,0,1,0,3Zm32.1-12.7H39.16a5.8,5.8,0,0,0-5.78,5.78V31.56a5.8,5.8,0,0,0,5.78,5.78h1.69a1.47,1.47,0,0,1,1.46,1.58l-.57,8.24,10.92-9.39a1.49,1.49,0,0,1,1-.43H75.56a5.8,5.8,0,0,0,5.78-5.78V8.72a5.8,5.8,0,0,0-5.78-5.78Z"/></svg>
          <span class="Quick Contact page">Quick Contact</span>
        </a>
      </li>
            <li class="nav-item">
        <a href="Service1.php" class="nav-link">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 113.53" style="enable-background:new 0 0 122.88 113.53" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style><g><path class="st0" d="M87.86,19.65v28.62h-6.69v-4.42H41.71v4.42l-6.69,0V19.65h-2.31v-4.4h5.63l3.14-9.76 C42.41,2.61,43.95,0,46.97,0h30.1c3.02,0,4.76,2.56,5.49,5.49l2.43,9.76h5.17v4.4H87.86L87.86,19.65L87.86,19.65z M66.41,97.31 h21.91c1.76-1.75,3.69-3.57,5.65-5.42c4.11-3.89,8.4-7.95,12.81-13.03c5.04-5.81,5.58-7.82,7.11-13.51 c0.29-1.07,0.61-2.27,1.03-3.76l2.62-9.21l0.03-0.1c1.4-4.1,1.51-6.81,0.93-8.37c-0.18-0.48-0.41-0.8-0.68-0.97 c-0.21-0.14-0.49-0.19-0.78-0.16c-0.68,0.07-1.45,0.5-2.15,1.27l-7.78,18.53c-0.07,0.17-0.17,0.33-0.28,0.47 c-0.46,0.83-1.08,1.64-1.88,2.41l-13.8,15.39c-0.75,0.84-2.04,0.91-2.87,0.16c-0.84-0.75-0.91-2.04-0.16-2.87l13.81-15.39 c0.06-0.07,0.12-0.14,0.19-0.2c1.43-1.36,1.88-2.83,1.63-3.9c-0.08-0.33-0.22-0.61-0.42-0.8c-0.19-0.18-0.44-0.29-0.75-0.32v0 c-1.23-0.13-3.04,0.78-5.25,3.39l0,0c-0.06,0.07-0.13,0.14-0.2,0.21l-5.35,4.72l-0.03,0.03c-5.79,5.48-8.28,6.78-12.82,9.15 c-0.95,0.5-1.99,1.04-3.28,1.74c-0.51,0.28-1.01,0.62-1.5,0.99c-0.52,0.4-1.02,0.81-1.49,1.21c-2.4,2.02-3.66,3.66-4.38,5.47 c-0.75,1.88-1.02,4.17-1.39,7.31c-0.15,1.27-0.26,2.52-0.35,3.77C66.47,96.12,66.44,96.72,66.41,97.31L66.41,97.31L66.41,97.31z M56.47,97.31H34.55c-1.76-1.75-3.69-3.57-5.65-5.42c-4.11-3.89-8.4-7.95-12.81-13.03c-5.04-5.81-5.58-7.82-7.11-13.51 c-0.29-1.07-0.61-2.27-1.03-3.76l-2.62-9.21l-0.03-0.1c-1.4-4.1-1.51-6.81-0.93-8.37c0.18-0.48,0.41-0.8,0.68-0.97 c0.21-0.14,0.49-0.19,0.78-0.16c0.68,0.07,1.45,0.5,2.15,1.27l7.78,18.53c0.07,0.17,0.17,0.33,0.28,0.47 c0.46,0.83,1.08,1.64,1.88,2.41l13.8,15.39c0.75,0.84,2.04,0.91,2.87,0.16c0.84-0.75,0.91-2.04,0.16-2.87L20.96,62.73 c-0.06-0.07-0.12-0.14-0.19-0.2c-1.43-1.36-1.88-2.83-1.63-3.9c0.08-0.33,0.22-0.61,0.42-0.8c0.19-0.18,0.44-0.29,0.75-0.32v0 c1.23-0.13,3.05,0.78,5.25,3.39c0,0,0.19,0.19,0.21,0.21l5.35,4.72l0.03,0.03c5.79,5.48,8.28,6.78,12.82,9.15 c0.95,0.5,1.99,1.04,3.28,1.74c0.51,0.28,1.01,0.62,1.5,0.99c0.52,0.4,1.02,0.81,1.49,1.21c2.4,2.02,3.66,3.66,4.38,5.47 c0.75,1.88,1.02,4.17,1.39,7.31c0.15,1.27,0.26,2.52,0.35,3.77C56.41,96.12,56.44,96.72,56.47,97.31L56.47,97.31L56.47,97.31z M29.45,98.01c-0.31,0.36-0.5,0.83-0.5,1.34v12.14c0,1.13,0.92,2.04,2.04,2.04h27.58c1.13,0,2.04-0.92,2.04-2.04V99.24 c0-1.3-0.08-2.7-0.17-4c-0.09-1.33-0.21-2.65-0.36-3.96c-0.4-3.43-0.7-5.94-1.66-8.35c-0.99-2.47-2.58-4.6-5.53-7.09 c-0.54-0.46-1.09-0.92-1.67-1.35c-0.61-0.46-1.27-0.9-2.01-1.31c-1.2-0.65-2.32-1.24-3.34-1.78c-4.2-2.2-6.5-3.4-11.91-8.52 c-0.04-0.04-0.09-0.08-0.13-0.11l-5.22-4.61c-3.19-3.73-6.31-4.97-8.7-4.71l-0.01,0v0c-1.17,0.12-2.17,0.58-2.97,1.28l-5.27-12.56 l-0.01,0c-0.08-0.18-0.18-0.35-0.31-0.51c-1.46-1.75-3.31-2.77-5.08-2.95c-1.21-0.12-2.38,0.14-3.4,0.8 c-0.97,0.63-1.77,1.61-2.27,2.96c-0.88,2.35-0.86,6,0.86,11.05l2.6,9.15c0.38,1.32,0.71,2.59,1.02,3.71 c1.7,6.35,2.3,8.6,7.97,15.12c4.49,5.17,8.88,9.33,13.1,13.31C27.23,95.89,28.33,96.93,29.45,98.01L29.45,98.01L29.45,98.01z M33.35,101.39c0.27,0.06,0.55,0.06,0.83,0h22.34v8.06H33.03v-8.06H33.35L33.35,101.39z M93.43,98.01c0.31,0.36,0.5,0.83,0.5,1.34 v12.14c0,1.13-0.91,2.04-2.04,2.04H64.32c-1.13,0-2.04-0.92-2.04-2.04V99.24c0-0.07,0-0.15,0.01-0.22 c0.03-1.31,0.08-2.58,0.16-3.78c0.09-1.33,0.21-2.65,0.36-3.96c0.4-3.43,0.7-5.94,1.66-8.35c0.99-2.47,2.58-4.6,5.53-7.09 c0.54-0.46,1.09-0.92,1.67-1.35c0.61-0.46,1.27-0.9,2.01-1.31c1.2-0.65,2.32-1.24,3.34-1.78c4.2-2.2,6.5-3.4,11.91-8.52 c0.04-0.04,0.09-0.08,0.13-0.11l5.22-4.61c3.19-3.73,6.31-4.97,8.7-4.71l0.01,0v0c1.17,0.12,2.17,0.58,2.97,1.28l5.27-12.56l0.01,0 c0.08-0.18,0.18-0.35,0.31-0.51c1.46-1.75,3.31-2.77,5.08-2.95c1.21-0.12,2.38,0.14,3.4,0.8c0.97,0.63,1.77,1.61,2.27,2.96 c0.88,2.35,0.86,6-0.86,11.05l-2.6,9.15c-0.38,1.32-0.71,2.59-1.02,3.71c-1.7,6.35-2.3,8.6-7.97,15.12 c-4.49,5.17-8.88,9.33-13.1,13.31C95.65,95.89,94.55,96.93,93.43,98.01L93.43,98.01L93.43,98.01z M89.53,101.39 c-0.27,0.06-0.55,0.06-0.83,0H66.36v8.06h23.49v-8.06H89.53L89.53,101.39z M51.42,35.02h19.76v4.66l-19.76,0V35.02L51.42,35.02 L51.42,35.02z M37.27,24.16c5.04,0.16,8.12,2.27,8.91,6.66h-8.91V24.16L37.27,24.16z M84.98,24.16c-5.03,0.16-8.11,2.27-8.91,6.66 h8.91V24.16L84.98,24.16z M40.75,15.25h41.38l-1.77-8.18c-0.49-2.24-1.88-4.18-4.18-4.18H47.56c-2.3,0-3.48,1.99-4.18,4.18 L40.75,15.25L40.75,15.25L40.75,15.25z"/></g></svg>
          <span class="Service page">Service</span>
        </a>
      </li>



 
	  

	  
	  
	   <li class="nav-item" id="themeButton">
	   
        <a href="login.php" class="nav-link">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="122.88px" height="93.504px" viewBox="0 0 122.88 93.504" 
enable-background="new 0 0 122.88 93.504" xml:space="preserve">
<g><path 
d="M8.431,5.385c-0.826,0-1.586,0.347-2.143,0.903C5.732,6.844,5.386,7.604,5.386,8.43v19.269v18.994v19.113v19.621 c0,0.59,0.379,1.158,0.926,1.615c0.805,0.676,1.873,1.076,2.804,1.076h9.585v-7.51c0-1.486,1.206-2.691,2.692-2.691h14.453 c1.487,0,2.692,1.205,2.692,2.691v7.51h47.527v-7.51c0-1.486,1.205-2.691,2.692-2.691h14.334c1.487,0,2.692,1.205,2.692,2.691v7.51 h9.018c0.711,0,1.382-0.314,1.88-0.813c0.499-0.498,0.813-1.168,0.813-1.879V19.233c0-0.744-0.301-1.417-0.789-1.904 c-0.486-0.487-1.159-0.789-1.904-0.789H64.887c-1.486,0-2.692-1.206-2.692-2.692c0-2.134-0.003-4.664-0.659-6.395 c-0.452-1.193-1.391-2.067-3.306-2.067H8.431L8.431,5.385z M68.604,58.285h39.33v5.227h-39.33V58.285L68.604,58.285z M68.604,30.956h39.33v5.226h-39.33V30.956L68.604,30.956z M68.604,44.621h39.33v5.227h-39.33V44.621L68.604,44.621z M26.408,27.895v4.501c-2.268,0.578-2.162,6.792,0.36,6.792c0.777-0.014,4.376,5.216,4.906,6.088c1.028,1.691,0,2.313,0,3.469 c-11.033,2.488-14.216,3.6-14.216,14.766h19.279h19.278c0-11.166-3.184-12.277-14.216-14.766c0-1.375-0.911-1.969,0-3.469 c1.028-1.692,2.911-4.06,4.846-6.089c2.659,0.05,2.725-6.204,0.42-6.792v-4.501C47.064,17.05,26.408,17.05,26.408,27.895 L26.408,27.895z M2.48,2.481C4.008,0.953,6.118,0,8.431,0h49.798c4.727,0,7.118,2.351,8.334,5.56 c0.675,1.782,0.901,3.732,0.978,5.595h47.261c2.232,0,4.251,0.904,5.713,2.366c1.462,1.462,2.365,3.482,2.365,5.712v66.195 c0,2.197-0.924,4.221-2.391,5.688c-1.467,1.465-3.489,2.389-5.688,2.389h-11.71c-1.487,0-2.692-1.205-2.692-2.691v-7.51H91.45v7.51 c0,1.486-1.205,2.691-2.692,2.691H35.846c-1.487,0-2.693-1.205-2.693-2.691v-7.51h-9.067v7.51c0,1.486-1.205,2.691-2.692,2.691 H9.116c-2.123,0-4.504-0.871-6.253-2.338C1.172,89.75,0,87.775,0,85.428V65.807V46.693V27.699V8.43C0,6.117,0.953,4.008,2.48,2.481 L2.48,2.481z"/></g></svg>
          <span class="Login page">Login</span>
        </a>
		
		
		<a href="Register.php" class="nav-link">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 110.74 122.88" style="enable-background:new 0 0 110.74 122.88" xml:space="preserve">



<g><path d="M48.47,116.35c1.8,0,3.27,1.46,3.27,3.26c0,1.8-1.46,3.26-3.27,3.26H7.6c-2.09,0-3.99-0.85-5.37-2.23 C0.85,119.27,0,117.38,0,115.28V7.6C0,5.5,0.85,3.61,2.23,2.23C3.61,0.85,5.5,0,7.6,0h93.3c2.09,0,3.99,0.86,5.37,2.23 c1.38,1.38,2.23,3.27,2.23,5.37v53.95c0,1.8-1.46,3.26-3.26,3.26c-1.8,0-3.26-1.46-3.26-3.26V7.6c0-0.29-0.12-0.56-0.32-0.75 c-0.2-0.2-0.47-0.32-0.75-0.32H7.6c-0.29,0-0.56,0.12-0.76,0.31C6.65,7.05,6.53,7.31,6.53,7.6v107.68c0,0.29,0.12,0.56,0.32,0.75 c0.2,0.2,0.47,0.32,0.76,0.32L48.47,116.35L48.47,116.35L48.47,116.35z M33.94,57.92c-0.62-1.07-0.17-4.13,1.16-5.21 c3.8-2.22,9.04-1.53,12.7-4.09c0.21-0.32,0.44-0.78,0.67-1.29c0.33-0.76,0.64-1.59,0.83-2.16c-0.81-0.96-1.51-2.04-2.17-3.1 l-2.2-3.5c-0.8-1.2-1.22-2.3-1.25-3.2c-0.01-0.42,0.06-0.81,0.22-1.15c0.16-0.36,0.41-0.65,0.76-0.88c0.16-0.11,0.34-0.2,0.53-0.27 c-0.15-1.9-0.2-4.29-0.1-6.3c0.05-0.47,0.14-0.95,0.27-1.43c0.56-2.01,1.97-3.63,3.72-4.74c0.96-0.61,2.02-1.08,3.12-1.39 c0.7-0.2-0.6-2.43,0.13-2.51c3.5-0.36,9.15,2.83,11.59,5.47c1.22,1.32,1.99,3.08,2.16,5.4l-0.14,5.71l0,0 c0.61,0.19,1,0.57,1.16,1.2c0.18,0.7-0.01,1.67-0.61,3.01l0,0c-0.01,0.02-0.02,0.05-0.04,0.07l-2.51,4.13 c-0.92,1.52-1.86,3.04-3.08,4.24c0.11,0.16,0.23,0.32,0.34,0.48c0.5,0.73,1,1.46,1.64,2.11c0.02,0.02,0.04,0.05,0.05,0.07 c2.89,2.04,9.92,2.54,12.62,4.04l0.11,0.06c1.39,1.07,1.82,4.13,1.18,5.2H33.94L33.94,57.92z M102.29,79.04 c-0.53-0.51-1.14-0.75-1.84-0.74c-0.71,0.01-1.31,0.29-1.8,0.81l-4.05,4.22l11.37,10.98l4.09-4.26c0.49-0.5,0.69-1.14,0.68-1.84 c-0.01-0.69-0.26-1.33-0.76-1.8L102.29,79.04L102.29,79.04L102.29,79.04z M84.54,116.17c-1.5,0.48-3,0.97-4.49,1.46 c-1.5,0.5-3,1-4.49,1.5c-3.53,1.16-5.51,1.8-5.93,1.92c-0.4,0.12-0.17-1.53,0.73-4.99l2.81-10.83l0,0l17.82-18.18l11.36,10.93 L84.54,116.17L84.54,116.17L84.54,116.17z M31.74,95.36c-1.8,0-3.27-1.48-3.27-3.31s1.46-3.31,3.27-3.31h22.21 c1.8,0,3.27,1.48,3.27,3.31s-1.46,3.31-3.27,3.31H31.74L31.74,95.36L31.74,95.36z M31.74,74.67c-1.8,0-3.26-1.46-3.26-3.27 c0-1.8,1.46-3.26,3.26-3.26h44.05c1.8,0,3.26,1.46,3.26,3.26c0,1.8-1.46,3.27-3.26,3.27H31.74L31.74,74.67L31.74,74.67z"/></g>

</svg>
          <span class="Register page">Register</span>
        </a>
		
      </li>
	  
	  
	  
	  
	  
	  
	  
	  
	  
    </ul>
  </nav>
<?php endif; ?>

  <main >
<h1 >forgot password
<br>

<br></h1>


<form method="post">
	<table class="auto-style2" style="width: 100%">
	<tr>
		<td style="width: 84px">username:</td>
		<td><input name="username" type="text" /></td>
	</tr>
	<tr>
		<td style="width: 84px">Email:</td>
		<td><input name="Email" type="text" /></td>
	</tr>
</table>


	<a href="login.php">Back</a>
	&nbsp;&nbsp;
	<input type="submit"  value="submit" name="submit" />
	&nbsp;&nbsp;
	<input name="Reset1" type="reset" value="reset" />
	&nbsp;&nbsp;
	</form>

	
<?php
$g= rand(10000, 90000);


if (isset($_POST['submit']))
{

    // get the PDO instance
   include 'dbconnection.php';
    // getting the record for the given username
    $stmt = $conn->prepare("SELECT * FROM users WHERE username=?");
    $stmt->execute([$_POST['username']]);
    $user = $stmt->fetch();
    // verifying the password
    if ($user && $_POST['Email']==$user['Email'])
    {
		

		
		


				           
				
				$enpassword = password_hash($g, PASSWORD_DEFAULT);
				$sql="update users set   password='$enpassword ' where username=:usern";
				$stmt=$conn->prepare($sql);
				
				$stmt->execute(array(
				':usern'=>$_POST['username']));
				echo "<br>Plese Whit...";
	
		

		
		
		$_SESSION['Email'] =$_POST['Email'];
        $_SESSION['username'] = $user['username'];	
        $_SESSION['password'] ="$g";
		echo "<script>window.location.href='mail.php'</script>";
        exit;
    } else {
        $error = "don't match";
    }
}
?>
	<br>
	<br>
  </main>
</body>



</html>
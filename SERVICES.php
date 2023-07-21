<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    
    *{
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
  }
  body{
    background: linear-gradient(110deg, #f6f6f9ef 60%, #bdbdbd 60%);
  }
  nav{
    background: #030f45;
    height: 80px;
    width: 100%;
	position: fixed;
  }
 
  .image{
	height:76px;
	padding:2px;
	width:180px;
  }

nav ul{
  float: right;
  margin-right: 20px;
}
nav ul li{
  display: inline-block;
  line-height: 80px;
  margin: 0 5px;
}
nav ul li a{
  color: white;
  font-size: 17px;
  padding: 7px 13px;
  border-radius: 3px;
  text-transform: uppercase;
  margin: 1% 1em;
}
nav ul li a:hover{
	color: hsl(0, 0%, 100%);
	text-decoration: underline;
  }
    .header {

width: 100%;
height: 500px;
}


.p{
  margin-top: 0%;
  font-size: 20px;
}
.heading1 {
      background: linear-gradient(110deg, #3b5bfdef 60%, #0952ef 60%);
      
      height: 250px;
      padding: 30px;
    
    }
    .png{
 font-size: 50px;
 text-align: center;
 font-style: initial;
 
 
    }
    .item-1{
      display: flex;
      height: 70vh;
      margin: 2% 0.55em;
    
    }
    .item{
      margin: 3% 1em;
      border: #8f88887d solid;
      width: 430em;
      padding: 22px;
      height: 57vh;
      box-shadow: 10px 2px 5px 1.3px rgb(130, 134, 138);
      
     
    }
    .img{
      width: 100%;
      height: 25vh;
      
      
      
    }
    .item:hover{
      box-shadow: 10px 2px 5px 1.3px rgb(51, 55, 60);
      
    }
    p{
    text-align: left;
    }
    .span {
				margin: 100px;
    
			}

			.footer{
				
        background-color: #0d3aed93;
				color: aliceblue;
        height: 240px;
      
			}
      .unicode{
  margin: 40px 0;
  line-height: 10px;
  color: rgb(255, 255, 255);
  
  
  padding:  20px;
}
#footer{
  text-align: center;
  font-size: 1.2rem;

  font-weight:200;
  color: #dcd1d1;
  background: rgb(0, 0, 0);
  height:10vh;
  padding: 2%;
}
</style>
<body>
    
    
  <body>


   
  <?php include 'header.php';
     ?>

    <div class="heading1">
     <center><p class="png" style="font-family: Georgia, serif; font-size: 30px; padding: 5%; font-size: 130%;color: #ffffff;" ><br>
            Empowering Your Digital <br>Growth with DS Tech
        </p>
    </center>
      </div>
     <section>
    <div class="item-1">
      
     <div class="item" class="img"> 
      <center>
        <img src="./IMG/MObile Apps.jpg" width="30%" style="border-radius: 25%; margin: 2.60%;"> 
          <h1>
        MObile Apps
      </h1>
      <p style=" text-align: justify;">Advanced mobile application development company to quickly build a high-engaging mobile app. We prioritize interactive user experience and robust backend functionality. Our custom application development services include both native and hybrid apps. Know more about our working process.</p>
    
    </center>
     
      
      </div>
     <div class="item"  class="img">
      <center> 
        <img src="./IMG/WEB APPLICATIONS.jpg" width="30%" style="border-radius: 25%; margin: 2.60%;"> 

          <h1>
        WEB APPLICATIONS
      </h1>    
      <p style=" text-align: justify;">As a reliable software development services provider,. Get your web app customized that streamlines your business processes & attracts more visitors. The smooth layouts and stylish design set you apart from the average. Start your growth with us.</p></center>
      
          </div>
     <div class="item"  class="img"> 
      <center> 
        <img src="./IMG/online marketing.png" width="30%" style="border-radius: 25%; margin: 2.60%;"> <h1>
      
        ONLINE MARKETING
      </h1>  
<p style=" text-align: justify;">Are you worried about the rising costs of Facebook and Google ads?  Along with our software development solutions, we also provide holistic digital marketing to convert your customers. Choose from our diverse organic & paid marketing services.</p></center>
     </div>
     
     

    </div>
    <div class="item-1"  class="img">
      <div class="item"> 
        <center>  <h1>
        <img src="./IMG/BLOCKCHAIN DEVELOPMENT.png" width="30%" style="border-radius: 25%; margin: 2.60%;"> 
          <br>
          BLOCKCHAIN DEVELOPMENT
        </h1>  
        <p style=" text-align: justify;">Prepare your business for the future with the backbone of Web3. Our blockchain software services provider offers the most reliable and secure implementation of blockchain technology for enterprises and startups. Tell us your needs, and let us do it for you.</p></center>
      </div>
      <div class="item"   class="img"> 
        <center> 
        <img src="./IMG/WEB SCANNING.png" width="30%" style="border-radius: 25%; margin: 2.60%;"> 
          <h1>
           WEB SCANNING
        </h1>  
        <P style=" text-align: justify;">Operational excellence through electronic document solutions, all within your own premises. File Management. Onsite Records Management. Media Storage. Online Reporting & Tracking. Highlights: Case Studies Available, Experts Available, Customer Centre Available.</P></center>
      </div>
      <div class="item"  class="img">  
        <center>
        <img src="./IMG/IT MANAGEMENT.png" width="30%" style="border-radius: 25%; margin: 2.60%;"> <h1>
         IT MANAGEMENT
        </h1>  
        <p style=" text-align: justify;">
          Jira Service Management™ Adds Visibility and Velocity to Your ITSM Workflow. Try it Free! Help IT, Operations & Development Teams Deliver More Customer Impact While Managing Risk. Check Events. 
        </p></center>
      </div>
      
    </div>
  
     </section>
     <?php include 'footer.php';
     ?>

    
</body>

</html>
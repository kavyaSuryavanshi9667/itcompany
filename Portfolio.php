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
}
.heading1 {
      background: linear-gradient(110deg, #3b5bfdef 60%, #0952ef 60%);
    
      height: 250px;
    }
    .png{
 font-size: 44px;
 
    }

 .Portfolio1{
    
    display: flex;
  
   
    box-sizing: 2px 3px 6px 4.23px rgb(156, 148, 148);
 }  
 .Portfolio2{

    display: flex;
   height: 50vh;
    box-sizing: 2px 3px 6px 4.23px rgb(156, 148, 148);
    
 } 
 .item{
    margin: 2% 1em;
    
    width: 100%%;
    
 }
 .aside {
	 	width: 35%;
				padding-left: 15px;
				margin-left: 15px;
				float: right;
				max-width: 30%;
				padding: 7px;
				font-style: italic;
				font-size: 25px;
                margin: 1% 4em;
                

                height: 100%;
			}
      .span {
			margin: 100px;
               
        

			}
            .footer{
              background-color: #0d3aed93;
                width: 100%;
              
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
  background: rgb(7, 3, 3);
  height:10vh;
  padding: 2%;
}

</style>
<body>
   
<?php include 'header.php';
     ?>
      <div class="heading1">
        <center><p class="png"  style="font-family: Georgia, serif; font-size: 30px; padding: 5%; font-size: 160%; color: rgb(255, 255, 255);"  ><br><br>
            What is Portfolio
        </p>
       </center>
         </div>
         
         <section style="width: 100%; " class="loader" >
            <div class="Portfolio1">
             
                <img src="./IMG/1.jpg" class="item" width="30%">
                   <img src="./IMG/6.jpg" class="item" width="30%" >
                  <img src="./IMG/3.jfif" class="item" width="32%">
               
            </div>
            <div class="Portfolio2" style="width: 100%;" class="Animation"> 
                <img src="./IMG/13.jpg" class="item" width="30%">
                <img src="./IMG/5.webp" class="item" width="33%">
                <img src="./IMG/i2.jpg" class="item"width="33%" >
            </div>
            <aside class="aside" style="font-size: 18px; font-style: normal; ">
               
               <span style="font-size: larger; color: #051452; height: 44vh; margin: 10%;" >What is a Portfolio?</span>
                <br>
                As per portfolio definition, it is a collection of a wide range of assets that are owned by investors. The said collection of financial assets may also be valuables ranging from gold, stocks, funds, derivatives, property, cash equivalents, bonds, etc. Individuals put their money in such assets to generate revenue while ensuring that the original equity of the asset or capital does not erode. <br><br>
                Portfolio is very important today. When recruiting for a desired job, it may turn out to be even more important than a CV. Why? Because the portfolio is the best evidence of your skills, which is very important to your employer! However, how and where to create a professional portfolio? What to put in it? In this text we will answer all your questions. 
             </aside>
             <aside class="aside" style="" aria-colcount="aside1"> 
                <img src="./IMG/img.gif.gif" width="200%" height="400px" style="box-shadow: 5px 4px 3px 2.33px rgba(57, 51, 60, 0.548); margin-left: -65%; ">
             </aside>
             </div>
         </section>
         <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
         <script>
      AOS.init();
       </script>
</body>
<div>
<?php include 'footer.php';
     ?>

</html>
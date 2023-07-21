<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="action_page.php">
    <title>Document</title>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
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
      /* background: linear-gradient(110deg, #3b5bfdef 60%, #0952ef 60%); */
      margin-top:-4%;
      height: 200px;
    }
    .png{
 font-size: 44px;
 
    }
    
    input{
      margin-left: 10px;
        width: 65%;
        height: 30px
    }
    label{
        font-size: 20px;
        width: 65%;
        
        text-transform: uppercase;
     

    }
    
    .aside1{
    width: 30%;
      padding-left: 15px;
      margin-left: 15px;
      float: right;
      border: #151516 solid ;
      height: 454px;
      text-align: center;
      margin: 6%;
      padding: -4%;
      background-color: #bdbdbd49;
      
    }
   
    
   
    
  
.Contact{
  width:99.90%;
height: 44vh;
/* border: rgb(0, 60, 255) solid; */
background: linear-gradient(110deg, #0128ebc3 60%, #0048e2 60%);
text-align: center;
font-size: 30px;
}
.text2{
  height: 30vh;
  display: flex;
  padding: 2%;
  margin: 1% 1rem;
  font-size: 10px;
padding-top: 30px;

}
.text1{
  height: 30vh;
  display: flex;
  padding: 2%;
  margin: 1% 1rem;
  font-size: 10px;
}

.span {
				margin: 100px;
   color: aliceblue;
			}

			.footer {
				
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
  background: rgb(3, 6, 7);
  height:10vh;
  padding: 2%;
}
/* .contact-form{
  padding: 30px 0 0 0;
} */
textarea{
  margin: 3%;
  width: 90%;
  height: 20vh;
 
}
.contact-form{
  &:focus-within {
			z-index: 2;
		}
}
input[type="email"] {
		margin-bottom: -1px;
		border-bottom-right-radius: 0;
		border-bottom-left-radius: 0;
	}
   
  input {
      margin-right:0.5em;
      width:90%;
      &:checked {
        
        border-color: #81c63f;
      }
    }
  .form-control{
    display:flex;
    align-items:center;
     
      font-size:0.9em;
    
    }
  
  .contact-form{
   
    height:10vh;
  }
  button{
    width: 40%;
    
  }
</style>
<body>
   
<?php include 'header.php';
     ?>



<div class="Contact ">
  <br>
  <br>
  <br>
  <h1  style="font-family: Georgia, serif; font-size: 30px; padding: 3%; font-size: 130%; color: #ffffff;" >Contact</h1>
</div>
  
      <aside class="aside1">
        <div class="container">
        <form method="post" id="frmContactus">
					<div class="contact-form">
					  <div class="form-group">
              <br>    <br>
						 <!-- <label class="control-label col-sm-2" for="name">Name:</label> -->
						 <div class="col-sm-10">          
							<input type="text" class="form-control" id="name" placeholder="Enter name" name="name" onkeydown="return/[a-z A-Z]/i.test(event.key)" required>
              
						 </div>    <br>    <br>
					  </div>
					  <div class="form-group">
						 <!-- <label class="control-label col-sm-2" for="email">Email:</label> -->
						 <div class="col-sm-10">
							<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" autocomplete="off"  onkeypress="retarn validateNaber(event.kry)" required>
						 </div>    
					  </div>    <br>    <br>
					  <div class="form-group">
						 <!-- <label class="control-label col-sm-2" for="mobile">Mobile:</label> -->
						 <div class="col-sm-10">
							<input type="text" class="form-control" id="mobile"onkeypress="return validateNumber(event)" pattern="{/0-9/}" maxlength="10" placeholder="Enter mobile" name="mobile" required>
						 </div>
             <script>
            function validateNumber(e) {
              const pattern = /^[0-9]$/;

              return pattern.test(e.key)
            }
          </script>
					  </div>    <br>    <br>
					  
					  <div class="form-group">
						 <!-- <label class="control-label col-sm-2" for="comment">Comment:</label> -->
						 <div class="col-sm-10">
							<textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
						 </div>
					  </div>    <br>    <br>
					  <div class="form-group">
						 <div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default" name="submit" id="submit">Submit</button>
							<span style="color:red;" id="msg"></span>
						 </div>
					  </div>
				   </div>
			   </form>
            </div>
         </div>
      </div>
	  <script>
	  jQuery('#frmContactus').on('submit',function(e){
		jQuery('#msg').html('');
		jQuery('#submit').html('Please wait');
		jQuery('#submit').attr('disabled',true);
		jQuery.ajax({
			url:'submit.php',
			type:'post',
			data:jQuery('#frmContactus').serialize(),
			success:function(result){
				jQuery('#msg').html(result);
				jQuery('#submit').html('Submit');
				jQuery('#submit').attr('disabled',false);
				jQuery('#frmContactus')[0].reset();
			}
		});
		e.preventDefault();
	  });
	  </script>
        </div>
        

    
      </aside>
     <br>
      <aside class="aside2"><br><br>
       <div class="text2" >
        <div class="text2"style=" width:60%;  border:  rgb(123, 120, 120)  solid; box-shadow: 2px 3px 2px 4px #b6b8bb;">
          <h1><span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
          </svg></span>
            <br>
            Address
            <br>
           <span style="color: rgb(73, 78, 78);"> H-15 305 BSI Business <br>Park,Noida, UP,201301,India</span>
          </h1>
        
         
        </div>
        <div class="text2" style="width: 60%;border: rgb(123, 120, 120) solid; box-shadow: 2px 3px 2px 4px #b6b8bb;">
          <h1>
            <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-plus-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM12.5 1a.5.5 0 0 1 .5.5V3h1.5a.5.5 0 0 1 0 1H13v1.5a.5.5 0 0 1-1 0V4h-1.5a.5.5 0 0 1 0-1H12V1.5a.5.5 0 0 1 .5-.5z"/>
            </svg></span><br>
            Call Us
            <br><span style="color: rgb(73, 78, 78);">+91-8233739281</span>
          </h1>
        
          
          
          </div>
      </div>
      <br>
      <div class="text1">
        <div class="text1" style=" border:  rgb(123, 120, 120)  solid; width: 60%; box-shadow: 2px 3px 2px 4px #b6b8bb;">
          <h1>
            <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
              <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
              <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
            </svg></span><br>
            Email Us <br>
            <span style="color: rgb(73, 78, 78);" >@obiculetechnologies.com</span></h1>
        
        </div>
        <div class="text1" style=" width: 60%;  border:  rgb(123, 120, 120)  solid;  box-shadow: 2px 3px 2px 4px #b6b8bb;">
          <h1><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stopwatch-fill" viewBox="0 0 16 16">
            <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07A7.001 7.001 0 0 0 8 16a7 7 0 0 0 5.29-11.584.531.531 0 0 0 .013-.012l.354-.354.353.354a.5.5 0 1 0 .707-.707l-1.414-1.415a.5.5 0 1 0-.707.707l.354.354-.354.354a.717.717 0 0 0-.012.012A6.973 6.973 0 0 0 9 2.071V1h.5a.5.5 0 0 0 0-1h-3zm2 5.6V9a.5.5 0 0 1-.5.5H4.5a.5.5 0 0 1 0-1h3V5.6a.5.5 0 1 1 1 0z"/>
          </svg></span><br>
            Open Hours
            <br>
            <span  style="color: rgb(73, 78, 78);" >
              
              Mon-sat
              10:00AM - 7:00PM</span>
          </h1>
          </div>
      </div>
       
      </aside>

      

    <br>
    <div >
      <br>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.9903809109933!2d77.37673801455952!3d28.630050390945254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ceff8864e0cf1%3A0xa20290bf75099ebd!2sBSI%20Business%20Park%20H15!5e0!3m2!1sen!2sin!4v1678284329820!5m2!1sen!2sin" width="80%" height="350" style="border:0; margin-left: 90px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
  </div>
  <br>

<?php include 'footer.php';
     ?>
</body>
</html>

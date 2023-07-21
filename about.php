<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    *{
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
  }

body{
  background: linear-gradient(110deg, #f6f4f4ef 60%, #c4c1c1 60%);
}

nav{
    background: #030f45;
    height: 80px;
    width: 100%;
	position: fixed;
  }
  nav ul li a:hover{
    color: hsl(0, 0%, 100%);
	text-decoration: underline;
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
  color: rgb(254, 241, 241);
  font-size: 17px;
  padding: 7px 13px;
  border-radius: 3px;
  text-transform: uppercase;
  margin: 1% 1em;
}

    .header {

      width: 100%;
      height: 500px;
    }

    .gmail {
      width: 100%;

      display: flex;
      background-color: #0a0505;
      height: 30px;
      color: aliceblue;

    }

    .p {
      margin: 2px;
      font-style: normal;
    }

    .aside1 {
      width: 900%;
      padding-left: 15px;
      margin-left: 15px;
      float: left;
      max-width: 30%;
      padding: 25px;
     
    
  

    }

    .aside2 {
      width: 46%;
     
      float: right;
      height: 40%;
    padding: 3%;
      font-size: 15px;
      margin: 35px;
      font-family: Georgia, serif;
      margin: 2% 12em;
    /* border: #b0abab solid; */
    margin: 2% 6em;
    }

    .heading {
      width: 100%;
      font-size: 33px;
      font-style: oblique;
      padding: 44px;
      text-align: center;

    }

    .heading1 {
      background: linear-gradient(110deg, #3b5bfdef 60%, #0952ef 60%);
         height: 42vh;
         
    }

    .box-shadow {
      display: flex;
      /* margin: 100px; */
      padding: 40px;
      white-space: 20px;
      width: 100%;
      overflow: hidden;


    }
  
    .div1:hover{
      box-shadow: 4px 10px 5px 3px rgba(63, 83, 133, 0.457);
      background: #0952ef16;
    }
    .div2:hover{
      box-shadow: 4px 10px 5px 3px rgba(63, 83, 133, 0.457);
      background: #0952ef16;
    }
    .div3:hover{
      box-shadow: 4px 10px 5px 3px rgba(63, 83, 133, 0.457);
      background: #0952ef16;
    }
    .div1 {
      width: 33%;
      border-radius: 2%;
      text-align: center;
      box-shadow: 4px 10px 5px 3px rgba(151, 178, 247, 0.457);
         height: 44vh;
         padding: 3%;

    }

    .div2 {
      width: 33%;
      border-radius: 2%;
      text-align: center;
      box-shadow: 4px 10px 5px 3px rgba(151, 178, 247, 0.457);
      padding: 3%;
    }

    .div3 {
      width: 33%;
      border-radius: 2%;
      text-align: center;
      box-shadow: 4px 10px 5px 3px rgba(151, 178, 247, 0.457);
      padding: 3%;

    }

    .Mission {
      width: 300px;
      border-radius: 2%;
      text-align: center;
      box-shadow: 4px 10px 5px 3px rgba(151, 178, 247, 0.457);
    }

    .box {
      display: flex;
  
      padding: 30px;
      white-space: 20px;

      width: 100%;
    }

    .box {
      width: 100%;
      display: flex;
    }

    .Mission {
      width: 48%;
      border: 2px solid black;
      border-radius: 2%;
      text-align: left;
      box-shadow: 4px 10px 5px 3px rgba(151, 178, 247, 0.457);
      height: 450px;
      padding: 0.44rem;
      margin: 0rem 1rem;
      padding: 1%;

    }

    .Vision {
      width: 48%;
      border: 2px solid black;
      border-radius: 2%;
      text-align: left;
      box-shadow: 4px 10px 5px 3px rgba(151, 178, 247, 0.457);
      height: 500px;
      padding: 1%;
    }
    .span{
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
.Mission:hover{
  background-color: #8cadf6d2;
  
  box-shadow: 4px 10px 5px 3px rgb(137, 140, 147);
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
      <br> <br> <br>
      <h2 class="heading"  style="font-family: Georgia, serif; font-size: 30px; padding: 5%; font-size: 140%;color: #ffffff;" >We Do Things
        <br>That Matters
      </h2>
    </div>

    
        <section class="box-shadow">
          <div class="div1">
            <h3 class="img" width="200px" style="color: rgb(21, 218, 34);">
              &#x1F4D6; LEARN
            </h3>
            <br>
            <h1>We Ask the Right Questions About Your Business</h1>
            <p  style="text-align: left;">Before we start any project, we take the time to get to know your business. We ask the right questions to
              gain a deep understanding of your business, target audience, and competition. </p>
          </div>
          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
          <br>
          <div class="div2">
            <h3 class="img" width="200px" style="color: rgb(21, 218, 34);">
              &#x270D;PLAN
            </h3>
            <br>
            <h1> Developing Customized Solutions</h1>
            <p style="text-align: left;">Once we have a clear understanding of your business, we work alongside you to develop customized
              solutions that meet your specific needs. We deliver a solution that meets your expectations.</p>
          </div>
          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
          <br>
          <div class="div3">
            <h3 class="img" width="200px" style="color: rgb(21, 218, 34);">
              &#x2705;EXECUTE
            </h3>
            <br>
            <h1>Launching Your Solutions</h1>
            <p style="text-align: left;">We don’t just develop your solutions and leave you to it. We work alongside you to launch your solutions
              and provide ongoing support and maintenance to ensure that they continue to meet your needs over time.

            </p>
          </div>
          

        </section>

    

    <section class="section3">
      <aside class="aside1">
        <img src="./IMG/pexels-pavel-danilyuk-7120884.jpg" width="510px" height="495vh" style="border-radius: 20% ; text-align: justify; padding-bottom: -30px; ">
      </aside>
      <aside class="aside2">
        <h2>What We Are</h2>
        <BR>
          <BR>
        <p style=" text-align: justify; fond: size 50%;" >At DS Tech, we understand the unique challenges that small businesses face when it comes to establishing an
          online presence. That’s why we offer a range of affordable web design and digital marketing solutions that are
          tailored to meet the specific needs of small-scale businesses. We work closely with our clients to develop
          customized strategies that help them increase their visibility and attract more customers.<br><br>
          For larger-scale businesses, we offer a range of comprehensive solutions that can help them stay ahead of the
          competition. Our team of experts has experience working with businesses of all sizes and can help develop a
          strategy that aligns with your business goals and objectives.<br><br>The most well-known industry in the world now is Information Technology. It turns the dreams of every user into reality. The IT industry focuses on Machine Learning, Networking, Cloud computing, the Internet of Things, online development, mobile development, and more! <br><br>In India, there are a lot of IT companies. The primary goal of companies is to offer user services that are secure, dependable, convenient, and robust. Finding the top 10 IT companies in India is just as challenging as  
        </p>

      </aside>
    </section>
    
     <div class="box">
      <div class="Mission">

        <br>
        <h1><br> Mission</h1>
        <p style=" text-align: justify; fond: size 50%;">
          However, it seemed that Countrywide was mostly interested in delivering commissions and profits to the company by financing high-risk mortgages to unqualified borrowers. When the housing market collapsed, borrowers defaulted on their high-interest loans and the company fell apart. Countrywide faced a flood of lawsuits charging it had used deceptive practices to entice people into loans they could not afford. Mozilo, the CEO, was charged with insider trading and is now banned from serving as an officer or director of a public company. The company was sold to Bank of America in 2008.
<br>Our goal is to work with you to ensure that your IT needs are met as efficiently and seamlessly as possible. Whether supporting your entire small business network or providing experienced consulting and assistance with special projects to existing IT staff, we will engage with you every step of the way to make sure that you get the right solutions for your business.

At Mission IT, we ensure that your business is making the most of its existing technology before trying to sell you a solution you dont need. We prefer to focus on how you can get the most out of your systems, software, and networks.

        </p>
      </div>
      <div class=" Mission">

        <br>
        <br><br>
        <h1>Vision</h1>
        <p style=" text-align: justify; fond: size 50%; ">
          A vision statement is a statement of an organization’s overarching aspirations of what it hopes to achieve or to become. 
          The vision statement does not provide specific targets. Notice that each of the above examples could apply to many different organizations. Instead, the vision is a broad description of the value an organization provides. It is a visual image of what the organization is trying to produce or become. It should inspire people and motivate them to want to be part of and contribute to the organization. Vision statements should be clear and concise, usually not longer than a short paragraph.
       <br>
       Our goal from the beginning was to provide the best computers and computer parts, both in terms of value and quality, for our valued customers. Our affiliation with top tier brands in our niches has earned us the designation of Value Added Re-Seller, which lowers costs for our customers.
Today Vision IT is among one of the top End-to-End supplier for all IT products to organizations of all sorts, apart from being a value added supplier to several manufacturers and integrators of PCs, ATMs, Kiosks, Think-clients, automation companies, etc. located across the country.
        </p>
      </div>
    </div>
    <?php include 'footer.php';
     ?>

  </body>

</html>
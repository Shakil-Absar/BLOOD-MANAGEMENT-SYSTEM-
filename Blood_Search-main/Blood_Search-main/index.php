<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <meta charset="utf-8">
  <title></title>
  <?php include'links.php' ?>

</head>
<style>
  * {
    font-family: "Times New Roman", Times, serif;
  }
  .tot
      h3{
    font-size: 4vw;
    color: #fff;
    }
    .totalmenu{
    background: red;
    color: white;
    position: absolute;
    }
    
    .menu a{
    text-decoration: none;
    font-size: 1.5vw;
    margin: 1vw;
    color: white;;
    }
    .menu a:before{
    content: "";
    position: relative;
    top: 0;
    left: 0;
    }
    .main_div h3{
      color: red;
      animation: jump 1s linear;
    }
    @keyframes jump {
      0%{transform: translateY(0);}
      50%{transform: translateY(-3vw);}
      100%{transform: translateY(0);}
    }
    #c1{
      animation-delay: 0s;
    }
    #c2{
      animation-delay: 0.1s;
    }
    #c3{
      animation-delay: 0.2s;
    }
    #c4{
      animation-delay: 0.3s;
    }
    #c5{
      animation-delay: 0.4s;
    }
    #c6{
      animation-delay: 0.5s;
    }
    #c7{
      animation-delay: 0.6s;
    }
    #c8{
      animation-delay: 0.7s;
    }
    #c9{
      animation-delay: 0.8s;
    }
    #c10{
      animation-delay: 0.9s;
    }
    #c11{
      animation-delay: 1s;
    }
    h4{
    font-size: 2vw;
    }
    footer {
    text-align: center;
    padding: 3px;
    background-color: red;
    color: white;
    font-size: 1.5vw;
    }
    th, td{
      font-size: 2vw;
    }

    .qna{
      box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
      background: #ecf0f3;
      padding: 2vw;
      margin-bottom: 3.5vw;
      border-radius: 25px;
    }
    .question{
      font-weight: bold;
      font-size: 1.5vw;
      color: red;
    }
    .answer{
      font-size: 1.5vw;
    }
</style>
<body>
  <?php include 'menu.php' ?>
  
<div class="container main_div d-flex justify-content-center align-items-center">
      <pre style="font-size; font-weight: bold; 1.5vw;">Welcome to </pre>
      <h3 id="c1" style="font-size: 1.5vw;">B</h3>
      <h3 id="c2" style="font-size: 1.5vw;">L</h3>
      <h3 id="c3" style="font-size: 1.5vw;">O</h3>
      <h3 id="c4" style="font-size: 1.5vw;">O</h3>
      <h3 id="c5" style="font-size: 1.5vw;">D</h3>
      <h3 id="c6" style="font-size: 1.5vw;">S</h3>
      <h3 id="c7" style="font-size: 1.5vw;">E</h3>
      <h3 id="c8" style="font-size: 1.5vw;">A</h3>
      <h3 id="c9" style="font-size: 1.5vw;">R</h3>
      <h3 id="c9" style="font-size: 1.5vw;">C</h3>
      <h3 id="c9" style="font-size: 1.5vw;">H</h3>
    </div>
    <br><br>

    <div class="container">
      <div class="row">
        <div class="col-9 mb-5 mx-auto">
          <p class="" style="font-size:2vw;">Every two seconds of every day, someone needs blood. Since blood cannot be manufactured outside the body and has a limited shelf life, the supply must constantly be replenished by generous blood donors.Blood donors play a vital role in the healthcare of patients in your community. 37% of the population is eligible to donate blood, yet only 5% actually do. With every blood donation, you are providing strength, hope and courage to patients and their families in your local hospitals.p </p>
          <p class="text-center" style="color: crimson; font-weight: bold;font-size: 2.5vw;">Donate blood, save a life</b>
        </div>
      </div>
    </div>

    <div class="container">
      <p class="text-center" style="font-size: 2vw; font-weight: bold;">Donor and Patient relation</p>
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th class="text-center" colspan="10">Donors</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td rowspan="10" class="text-center" style="padding-top: 17vw; font-weight: bold;">Patients</td>
          </tr>

          <tr>
            <td class="text-center"></td>
            <td class="text-center" style="color: red; font-weight: bold;">O-</td>
            <td class="text-center" style="color: red; font-weight: bold;">O+</td>
            <td class="text-center" style="color: red; font-weight: bold;">B-</td>
            <td class="text-center" style="color: red; font-weight: bold;">B+</td>
            <td class="text-center" style="color: red; font-weight: bold;">A-</td>
            <td class="text-center" style="color: red; font-weight: bold;">A+</td>
            <td class="text-center" style="color: red; font-weight: bold;">AB-</td>
            <td class="text-center" style="color: red; font-weight: bold;">AB+</td>
          </tr>

          <tr>
            <td class="text-center" style="color: red; font-weight: bold;">AB+</td>
            <td class="text-center">Yes</td>
            <td class="text-center">Yes</td>
            <td class="text-center">Yes</td>
            <td class="text-center">Yes</td>
            <td class="text-center">Yes</td>
            <td class="text-center">Yes</td>
            <td class="text-center">Yes</td>
            <td class="text-center">Yes</td>
          </tr>

          <tr>
            <td class="text-center" style="color: red; font-weight: bold;">AB-</td>
            <td class="text-center" >Yes</td>
            <td class="text-center"></td>
            <td class="text-center">Yes</td>
            <td class="text-center"></td>
            <td class="text-center">Yes</td>
            <td class="text-center"></td>
            <td class="text-center">Yes</td>
            <td class="text-center"></td>
          </tr>

          <tr>
            <td class="text-center" style="color: red; font-weight: bold;">A+</td>
            <td class="text-center">Yes</td>
            <td class="text-center">Yes</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">Yes</td>
            <td class="text-center">Yes</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
          </tr>

          <tr>
            <td class="text-center" style="color: red; font-weight: bold;">A-</td>
            <td class="text-center">Yes</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">Yes</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
          </tr>

          <tr>
            <td class="text-center" style="color: red; font-weight: bold;">B+</td>
            <td class="text-center">Yes</td>
            <td class="text-center">Yes</td>
            <td class="text-center">Yes</td>
            <td class="text-center">Yes</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
          </tr>

          <tr>
            <td class="text-center" style="color: red; font-weight: bold;">B-</td>
            <td class="text-center">Yes</td>
            <td class="text-center"></td>
            <td class="text-center">Yes</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
          </tr>

          <tr>
            <td class="text-center" style="color: red; font-weight: bold;">O+</td>
            <td class="text-center">Yes</td>
            <td class="text-center">Yes</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
          </tr>

          <tr>
            <td class="text-center" style="color: red; font-weight: bold;">O-</td>
            <td class="text-center">Yes</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
          </tr>





        </tbody>

      </table>
    </div>

   

    <div class="container mt-5" data-aos="fade-left">
       <div>
      <p class="text-danger"  style="font-size: 2vw; font-weight: bold;">FAQs :</p>
    </div>

     <div class="qna">
        <p class="question">Who can donate blood?</p>
      <p class="answer">In most states, donors must be age 17 or older. Some states allow donation by 16-year-olds with a signed parental consent form. Donors must weigh at least 110 pounds and be in good health. Additional eligibility criteria apply.</p>
     </div>

     <div class="qna" data-aos="fade-left">
        <p class="question">How often can I donate blood?</p>
      <p class="answer">You must wait at least eight weeks (56 days) between donations of whole blood and 16 weeks (112 days) between Power Red donations. Platelet apheresis donors may give every 7 days up to 24 times per year. Regulations are different for those giving blood for themselves (autologous donors).</p>
     </div>

     <div class="qna" data-aos="fade-left">
       <p class="question">How long does a blood donation take?</p>
      <p class="answer">The entire process takes about one hour and 15 minutes; the actual donation of a pint of whole blood unit takes eight to 10 minutes. However, the time varies slightly with each person depending on several factors including the donor’s health history and attendance at the blood drive.</p>
     </div>

       <div class="qna" data-aos="fade-left">
       <p class="question">How long will it take to replenish the pint of blood I donate?</p>
      <p class="answer">The plasma from your donation is replaced within about 24 hours. Red cells need about four to six weeks for complete replacement. That’s why at least eight weeks are required between whole blood donations.What should I do after donating blood?After you give blood:</p>
     </div>

       <div class="qna" data-aos="fade-left">
       <p class="question">How long does a blood donation take?</p>
      <p class="answer">The entire process takes about one hour and 15 minutes; the actual donation of a pint of whole blood unit takes eight to 10 minutes. However, the time varies slightly with each person depending on several factors including the donor’s health history and attendance at the blood drive.Why does the Red Cross ask so many personal questions when I give blood?</p>
     </div>

       <div class="qna" data-aos="fade-left">
       <p class="question">Why does the Red Cross ask so many personal questions when I give blood?</p>
      <p class="answer">The highest priorities of the Red Cross are the safety of the blood supply and our blood donors. Some individuals may be at risk of transferring communicable disease through blood donation due to exposure via travel or other activities or may encounter problems with blood donation due to their health. We ask these questions to ensure that it is safe for patients to receive your blood and to ensure that it is safe for you to donate blood that day.</p>
     </div>

       <div class="qna" data-aos="fade-left">
       <p class="question">what Should I do after donating blood?</p>
      <p class="answer">
        <ol>
          <li>Drink extra fluids.</li>
          <li>Avoid strenuous physical activity or heavy lifting for about five hours.</li>
          <li>If you feel lightheaded, lie down with your feet up until the feeling passes.</li>
          <li>Keep your bandage on and dry for the next five hours.</li>
        </ol></p>
     </div>

      <div class="qna" data-aos="fade-left">
       <p class="question">Who cannot donate blood?</p>
      <p class="answer">
        <ol>
          <li>Cancer patient</li>
          <li>Cardiac disease patient</li>
          <li>HIV infection, AIDS or Sexually Transmitted Diseases (STD) patient</li>
          <li>High risk occupation (e.g. prostitution)</li>
          <li>Unexplained weight loss of more than 5 kg over 6 months person</li>
          <li>Chronic alcoholism person</li>
          <li>Other conditions or disease stated in the Guide to Medical Assessment of Blood Donors.</li>
          <li></li>
        </ol></p>
     </div>
 

      

     

      
    </div>
    

    
    
   
    <div class="container">
      <footer>
        <p>Blood Search<br>Copyright © 2020 | Team MYSTIC <br>Mystic Web Development Team</p>
      </footer>

</body>
<script>
  document.title = "Home | Blood Search";

</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      offset : 110,
      duration : 1000
    });
  </script>
</html>
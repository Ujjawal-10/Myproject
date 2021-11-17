<!DOCTYPE html>
<html lang="en">
<head>
  <title>Swedish BankID Generation</title>
  <link rel="icon" type="image/x-icon" href="images/logo.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
</head>
<style>

    .form {

        width: 40%;border: 1px solid lightgrey;
       padding: 15px;
       box-shadow: 4px 3px 8px 1px #969696;
        position: absolute;
        left: 30%;
    }

    .head { 
        border-bottom: 2px solid lightgrey ;
        
        box-shadow: 4px 3px 8px 1px #969696;
        color: rgb(29, 94, 235);
        padding: 10px 0 10px 0 ;
    
    }
    .row 
    {
        display:flex; 
        flex-direction: row;
         justify-content: center; 
         align-items: center;
         padding:10px 0 10px 0;

         position: relative;
    right: 40px;
    }
    /* .values{
        display:flex; 
        flex-direction: row;
         justify-content: center; 
         align-items: center;
         padding:10px 0 10px 0;
    } */
    #btn_line{
        border-top:2px solid lightgrey ;
        padding:20px 0 10px 0;
        margin-left: 40px;
        margin: 0 -4em 0 1.7em;
    }
    #cou{
        padding:10px 0 25px 0;
    }

    .gender>.toggle>.toggle-group>.toggle-off{
        background-color:pink;
    }

    .toggle.btn {
     min-width: 90px;

    }
   #pin{
    padding:5px 0 50px 0;
   }
   #pin_no{
    display:flex; 
        flex-direction: row;
         justify-content: center; 
         align-items: center;
         padding:10px 0 10px 250px;

         position: relative;
    right: 40px;
   }
    
    
    </style>
<body>

<header class="head"> 
        <center><h2>Swedish Personal Identity Number (Bank ID) Generation</h2></center>
</header><br><br>



<div class="container">
     
<!--pin no  -->
<div class="row" id="pin"> 
    <div class="col-md-3 offset-md-6" >
      <label for="date" id="pin_no">PIN</label>
    </div>
      <div class="col-md-3">
                <b id="pin1"></b>
    </div></div>
    <!-- pin no close -->

  <form action="/action_page.php" class="form">
    <div class="row">
        <div class="col-md-3 offset-md-3">
      <label for="date">Date Of Birth</label></div>
      <div class="col-md-3">
      <input style="width:200px;"  type="date" class="form-control" id="date" placeholder="Date" name="date">
</div>
    </div>
    <div class="row" >
        <div class="col-md-3 offset-md-3">
      <label for="my_gender">Gender  </label></div>
      <div class="col-md-3 gender">
      <input type="checkbox" id="gen" data-toggle="toggle" data-on="Male" data-off="Female"></div>
    </div>
    <div class="row">
    <div class="col-md-3 offset-md-3">
      <label for="imm">Immigrant  </label></div>
      <!-- <label>Yes <input type="radio" name="yes"></label>
      <label> No <input type="radio" name="no" checked></label> -->
      <div class="col-md-3">
      <input type="checkbox" id="immi"  data-toggle="toggle" data-on="Yes" data-off="No"></div>
    </div>

    <div class="row" id="cou">
    <div class="col-md-3 offset-md-3">
      <label for="date">County</label></div>
      <div class="col-md-3">
    <select style="width:200px;"  name="coun" id="country"  class="form-control"  >
                        <option value="Select" >Select</option>
                        <option value="01" > Stockholm</option>
                        <option value="24" > Vasterbotten</option>
                        <option value="25" > Norrbotten</option>
                        <option value="03" > Uppsala</option>
                        <option value="04" > Södermanland</option>
                        <option value="05" > Östergötland</option>
                        <option value="06" > Jönköping</option>
                        <option value="07" > Kronoberg</option>
                        <option value="08" > Kalmar</option>
                        <option value="09" > Gotland</option>
                        <option value="10" > Blekinge</option>
                        <option value="12" > Skåne</option>
                        <option value="13" > Halland</option>
                        <option value="14" > Västra Gotaland</option>
                        <option value="17" > Värmland</option>
                        <option value="20" > Dalarnas</option>
                        <option value="21" > Gaveleborg</option>
                        <option value="23" > Jamtland</option>
                        <option value="22" > Vastermorrland</option>
                        <option value="19" > Vastmanland</option>
                        <option value="18" > Orebro</option>
                        
                    </select>
    </div></div>

    <!-- <div class="row" id="pin"> 
    <div class="col-md-3 offset-md-3">
      <label for="date">PIN</label></div>
      <div class="col-md-3">
                <b id="pin1"></b>
    </div></div> -->



    <div class="row" id="btn_line">
    <button type="button" class="btn btn-primary" onclick="getInputValue();"><i class="fa fa-check"></i>&nbsp;Generate Personal Identity Number</button>
        </div>
    </form>
</div>


 <!-- Modal -->
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Swedish Personal Identity Number (Bank ID) Generation</h4>
        </div>
        <div class="modal-body">
          <p>The date of birth should not be a future date.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<script>
    var flag =0;
    //var mfv = 2;

        function getInputValue() { 
         var date = document.getElementById("date").value;
            var date1 = new Date(date);
            var year = date1.getFullYear();
            var day = date1.getDate();
            var month = date1.getMonth() +1;
            var gen = getGender();
            var count=0;
            var r;
            console.log("gen", gen);


            var random_array=[7,9];
            var random_item=random_array[Math.floor(Math.random()*random_array.length)];
            // var country_id=document.getElementById("country").value;
            //var pin=(((year*100)+month)*100)+day;
            var pin=((((year*100)+month)*100)+day);
           console.log(pin);


           
       

           if(date=="" || date==null){
               $("#date").css("border", "1px solid red");
           }else{

            $("#date").css("border", "1px solid lightgrey");

         


                var TodayDate = new Date();
                var endDate= new Date(Date.parse($("#date").val()));

                if (endDate> TodayDate) {
                    $("#myModal").modal();
                }else{

                    if(immi.checked==true )
                        {
                            var pin2=pin+'0'+random_item+''+gen;
                            console.log("pin007",random_item);
                            console.log("pin009",pin);
                           


                             // last digit
                       

                             let myFunc = num => Number(num);
  
                                var intArr = Array.from(String(pin2), myFunc);
                                console.log(intArr);
                                //last digit close

                            //multiply
                            for(var i=2;i<11;i++)
                            {
                                if(i%2==0)
                                {intArr[i]=intArr[i]*2;
                              
                                }
                                
                            }
                            console.log(intArr);

                            for(var j=0;j<11;j++)
                            {
                                var n=intArr[j];
                                while(n!=0)
                                {
                                    n=n/10;
                                    count++;
                                }
                                if(count==2)
                                r=r%10;
                                n=n+r;
                                intArr[j]=n;
                                console.log(intArr[j]);
                            }
                            
                            console.log(intArr);


                            console.log("intArr00",intArr[10]);
                           

                            var ld = String(intArr[10]);
                            var d1= ld.slice(0,1);
                            var d2= ld.slice(1,2);
                            console.log("d1",d1);
                            console.log("d2",d2);

                            //multiply

                                $("#pin1").text(pin2);

                            
                        }   
                        else {
                            var country_id=document.getElementById("country").value;
                        
                            var pin3=(pin)+country_id+gen;


                             // last digit
                       

                             let myFunc = num => Number(num);
  
                                var intArr = Array.from(String(pin3), myFunc);
                                console.log("intArr",intArr[10]);
                                //last digit close

                                $("#pin1").text(pin2);
                            


                        

                        $("#pin1").text(pin3);

                        console.log("pin008",pin3);
                        
                        }

                }

               
             }
            


           if(flag==0){
            var country = $("#country").val();
            // console.log("country", country);
            if(country=="Select"){
                $("#country").css("border", "1px solid red");
            }else{
                $("#country").css("border", "1px solid lightgrey");
            }

           }else{
            $("#country").css("border", "1px solid lightgrey");
           }

          
        
        }



        function getGender(){
            var oe="";
           

            if($("#gen").is(':checked')) {
               
            
            for(var i=0;i<100;i++){
                var randomItem = 1 + Math.floor(Math.random() * 9);
                // console.log("randomItem", randomItem);
                if(randomItem%2==1){
                    oe= randomItem;
                    return oe;
                    break;
                }
            }
               
            }else{
               
              
                for(var i=0;i<100;i++){
                    var randomItem = 1 + Math.floor(Math.random() * 9);
                    // console.log("randomItem", randomItem);
                if(randomItem%2==0){
                    oe= randomItem;
                    return oe;
                    break;
                }
            }
               
               
            }

        }

     
        

           

        


        $("#immi").change(function(){
            
            if($(this).parent("div").hasClass("off")){
                $("#country").attr("disabled", false);
                flag=0;
            }else{
                $("#country").attr("disabled", true);
                flag=1;
            }

        });


        

    
    </script>
    

</body>
</html>

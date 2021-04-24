<style>
*
{
  margin:0;
  padding:0;
  box-sizing: content-box;
}
.card-body:hover { 

  border-radius: 15%;
 
  box-shadow: 30px 30px 30px 10px rgba(0,0,0,0.5);
}


.card-body:hover img{
  filter:drop-shadow(9px);
</style>
<?php
    include("header.php");
 ?>
<?php                      
                      
          $con=mysqli_connect("localhost","root","","stoogle");
          $sel="select * from  jobs limit 1,30 ";
          $run=mysqli_query($con,$sel);
          if($row=mysqli_fetch_array($run))
          {
            $id=$row['id'];
            $name=$row['name'];
            $sal=$row['sal'];
            $address=$row['address'];
            $exp=$row['exp'];
            $category= $row['category'];
            
            $qual= $row['qual'];
            $jtype= $row['jtype'];
            $date= $row['date'];
            $cname= $row['cname'];
         
          }
           
        ?>
        <!-- <br> -->
          <div class="row choose-main">  
        <section class="offer-service-w3ls col-lg-12" >
        <div class="container ">
            <div class="inner-sec-wthree-w3ls py-md-5 py-4">
                <h3 class="tittle-w3l text-center mb-lg-5 mb-3">
                    <span>Mst 1 </span>5th Semester MST Notes</h3>
                  <div class="row">
                    <div class="col-lg-4 service-in text-center mt-2">
          <div class="card">
            <div class="card-body">
              
              <a href="images/erp.pdf"><i>
                  <img src="images/pdf.svg" height="150px">
              </i>
                <br><br>
              <h5 class="card-title">ERP</h5><br><br>
            </a>
            </div>
          </div>
        </div>
                    <div class="col-lg-4 service-in text-center mt-2">
                        <div class="card">
            <div class="card-body">
              <a href="images/flat.pdf"> <i>
                <img src="images/pdf.svg" height="150px">
              </i>
                            <br><br>
              <h5 class="card-title">FLAT</h5><br><br>
            </a>
            </div>
          </div>
                       
                    </div>
                       <div class="col-lg-4 service-in text-center mt-2">
                        <div class="card">
            <div class="card-body">
               <a href="images/coi.pdf"><i>
                 <img src="images/pdf.svg" height="150px">
               </i>
                <br><br>
              <h5 class="card-title">COI</h5><br><br>
            </a>
            </div>
          </div>
                       
                    </div>
                     <div class="col-lg-4 service-in text-center mt-2">
                        <div class="card">
            <div class="card-body">
              <a href="images/cn.pdf"> <i>
                <img src="images/pdf.svg" height="150px">
              </i><br><br>
              <h5 class="card-title">CN</h5><br><br>
            </a>
            </div>
          </div>
                       
                    </div>
                     <div class="col-lg-4 service-in text-center mt-2">
                        <div class="card">
            <div class="card-body">
               <a href="images/se.pdf"><i>
                 <img src="images/pdf.svg" height="150px">
               </i><br><br>
              <h5 class="card-title">SE</h5><br><br>
            </div>
          </div>
                       
                    </div>
                     <div class="col-lg-4 service-in text-center mt-2">
                        <div class="card">
            <div class="card-body">
               <a href="images/dbms.pdf"><i>
                 <img src="images/pdf.svg" height="150px">
               </i><br><br>
              <h5 class="card-title">DBMS</h5><br><br>
            </a>
            </div>
          </div>
                       
                    </div>

          <div class="col-lg-4 service-in text-center mt-2">
                                <div class="card">
                    <div class="card-body">
                       <a href="images/wt.pdf"><i>
                         <img src="images/pdf.svg" height="150px">
                       </i><br><br>
                      <h5 class="card-title">WT</h5><br><br>
                    </a>
                    </div>
                  </div>
                    </div>

                    <div class="col-lg-4 service-in text-center mt-2">
                        <div class="card">
            <div class="card-body">

            </div>
          </div>
                       
                    </div>
          </div>

            </div>
        </div>
    </section>

    <div class="testimonials py-lg-5 py-4"></div>


   <?php
    include("footer.php");
 ?>
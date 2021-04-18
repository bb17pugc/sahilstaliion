<?php 

include './headers_and_footers/header.php';

?>


<style>
    .find-dreams  
    {
            position: absolute;
            z-index: 5;
            top: 60;
            left: 40;
            background-color: #f8faff;
            padding: 30px;
            border-radius: 10px;
    }
    
    .find-dreams .header  
    {
        font-weight: 700;
        text-align: center;
    }
    
    .form-control input 
    {
        border:none;
        outline: none;
        padding: 14px;
        font-size: 18px;
    }
    
    .width-500
    {
        width: 200px;
    }
    .form-control 
    {
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }
    
    .form-control i 
    {
        color:#a2abcf;
    }
    
    .form-control select  
    {
        color:#a2abcf;
        border:none;
        outline:none;
        padding: 20px;
    }
</style>

<div>
    <div style="position:relative" >
                <img style="width: 100%" src="images/home.jpg" alt=""/>
                
                
                <form class="find-dreams" >
                    <h1 class="header" > Find Your Dreams </h1>
                    
                    <div class="form-control" >
                        <i class="fas fa-search" >   </i>
                        <input class="width-500"  />
                    </div>  
                    
                    
                    <br>
                    
                    <div class="d-flex" style="padding:0px" >
                        <div class="form-control" style="margin-right:10px" >
                        <input class="width-500" placeholder="$ Minimum" />
                    </div> 
                         
                          <div class="form-control" >
                        <input class="width-500" placeholder="$ Maximum"  />
                    </div> 
                    </div>  
                    
                      <div class="d-flex" style="padding:0px;margin-top: 10px" >
                          <div class="form-control" style="margin-right:10px"  >
                           <i class="fas fa-bed" >   </i>

                           <select class="width-500" >
                               <?php
                              for ($x = 0; $x <= 10; $x++) {
                                  ?> <option>  <?php echo $x;  ?> </option>  <?php
                              }
                               ?>
                           </select>
                    </div> 
                         
                          <div class="form-control" style="margin-right:0px"  >
                           <i class="fas fa-bed" >   </i>

                           <select class="width-500" >
                               <?php
                              for ($x = 0; $x <= 10; $x++) {
                                  ?> <option>  <?php echo $x;  ?> </option>  <?php
                              }
                               ?>
                           </select>
                    </div> 
                    </div>  
                    
                    
                     <div class="d-flex" style="padding:0px;margin-top: 10px" >
                          <div class="form-control"  >
                           <i class="fas fa-city" >   </i>

                           <select style="width:100%" >
                               <option>
                                   Karachi
                               </option>
                               <option>
                                   Lahore
                               </option>
                               <option>
                                   Faislabad
                               </option>
                               
                           </select>
                    </div> 
                         
                         
                    </div>  
                    
                    <br>
                       <div class="form-control" >
                        <i class="fas fa-city" >   </i>
                        <input placeholder="All areas" class="width-500"  />
                    </div> 
                    
                     <br>
                     <div class="form-control" style="padding:0px" >
                         <input type="button" style="width:100%;border-radius: 6px;background-color: #00ba74" value="Search Result" placeholder="All areas" class="btn-success"  />
                    </div> 
                </form>
                
    </div>

</div>

<?php
include './headers_and_footers/footer.php';
?>
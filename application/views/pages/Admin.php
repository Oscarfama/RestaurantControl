<?php
 include 'LogInPhp.php'
?>
 <div class="row tours">
        <div class="tourcard">
            <figure>
                <div class="tourpic">
                    <img width="320" height="180" src="https://placeimg.com/400/225/nature">
                </div>
                <figcaption>
                  <h3 class="entry-title">
                      <a href="https://reezhdesign.com"><?php echo $values["email"]?> Empresa</a></h3>
                  <span class="description">Direccion</span>
                </figcaption>
                <div class="tourbtn">
                    <a href="#" class="btn btn-sm" target="_blank" rel="noreferrer">
                      <i class="fa fa-edit"></i><span>Edit</span>
                    </a>
                    <a href="#" class="btn btn-sm" target="_blank" rel="noreferrer">
                        <i class="fa fa-trash"></i><span>Delete</span>
                    </a>
                </div>
            </figure>
        </div>
    </div>
    
<div style="text-align: center;">
<a href="Form" class="btn btn-info" role="button" style="background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px;
  display: inline-block;
  font-size: 15px;
  margin: 3px 1px;
  border-radius: 12px;
  cursor: pointer;">Add</a>

</div>

<!-- <input type="submit" value="Login" class="btn float-right login_btn"-->
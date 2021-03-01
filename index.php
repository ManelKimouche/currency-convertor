<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet"/>
   
    <link rel='stylesheet' type='text/css'  href="style.css">
   



    <title > Currency Convertor </title>


</head>
<body>
<?php require "traitement.php" ?>
    <div class="thediv"> 
        <h1 >  Currency Convertor </h1>
       
        <div class="div_form">
             <form method="POST" action="">
            
                <div class="div_sel">
                    <label >From</label>
                    <select name="from" >
                    <option  selected > Select Currency</option>
                       <option value="USD"  > &#xf155 - USD </option>
                       <option value="EURO" > &#xf153 - EURO </option>
                       <option value="POUND"> &#xf154 - POUND</option>
                       <option value="YEN"  > &#xf157- YEN</option>
                       <option value="DZD"  > DZD - DINAR</option>
                       <option value="AED"  > AED- DIRHAM EMIRATES</option>
                    </select>
                          
               
               
                       </br>                                                                                                       
                    <label >To</label></br>
                    <select name="to"  >
                    <option  selected > Select Currency</option>
                        <option value="USD"  > &#xf155 - USD</option>
                        <option value="EURO" > &#xf153 - EURO</option>
                        <option value="POUND"> &#xf154 - POUND</option>
                        <option value="YEN"  > &#xf157 - YEN</option>
                        <option value="DZD"  > DZD - DINAR</option>
                        <option value="UAE"  > AED - DIRHAM EMIRATES</option>
                    </select>
                </div>

                <div class="div_entry">
                    <label for="val"> Enter amount</label>
                    <input type="text" name="val" id="val" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    
               
               
                    <label > Result </label>
                    <input type="text" name="new_val"  value="<?php echo @$new_val  .  @$to;?>">
                </div>

              
                <div class="div_btn"><button type="submit" name="submit" value="convert" class="btn">Convert</button></div>
            
            </form>
        </div>
        <div class="img_div"> <img src="money exchange.png"> </div>
        
    </div>
    

</body>
</html>

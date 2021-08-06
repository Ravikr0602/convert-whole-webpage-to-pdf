<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export_html_table_to excel_file</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="contanier">

        <div class="title">
            <h1 id="title_name">Convert HTML Table to PDF File.</h1>
        </div>

    <!-------- All table data will be Convert in PDF File  --------->
    
<div class="record">  

    
<table class="record_table">
      <thead id="table_thead">
        <tr class="table_tr">
          <th class="table_th">Serial No</th>
          <th class="table_th"> Name</th>
          <th class="table_th"> Branch</th>
          <th class="table_th">Address</th>
        </tr>
      </thead>

      <tr class="table_tr">
          <td class="table_td" data-column="Serial No">01</td>
          <td class="table_td" data-column="Name">Ravi Kumar</td>
          <td class="table_td" data-column="Branch">CSE</td>
          <td class="table_td" data-column="Address">Dhanbad</td>
      </tr>
      <tr class="table_tr">
          <td class="table_td" data-column="Serial No">02</td>
          <td class="table_td" data-column="Name">Gourav Kumar</td>
          <td class="table_td" data-column="Branch">ECE</td>
          <td class="table_td" data-column="Address">Gomoh</td>
      </tr>
      <tr class="table_tr">
          <td class="table_td" data-column="Serial No">03</td>
          <td class="table_td" data-column="Name">Ankit Kumar</td>
          <td class="table_td" data-column="Branch">EE</td>
          <td class="table_td" data-column="Address">Ranchi</td>
      </tr>
      <tr class="table_tr">
          <td class="table_td" data-column="Serial No">04</td>
          <td class="table_td" data-column="Name">Alok Khatri</td>
          <td class="table_td" data-column="Branch">IT</td>
          <td class="table_td" data-column="Address">Durgapur</td>
      </tr>
      <tr class="table_tr">
          <td class="table_td" data-column="Serial No">05</td>
          <td class="table_td" data-column="Name">Shubham Kumar</td>
          <td class="table_td" data-column="Branch">CSE</td>
          <td class="table_td" data-column="Address">Patna</td>
      </tr>

        </tbody>
        </table>  
        
    <!----------------Convert the html table data to PDF File---------------->
    <!------------------------------------------------------------------------
     window.print() function in javascript using this function you can convert your whole web page to pdf file.   
    -------------------------------------------------------------------------> 

   <div class="convert_box">

        <input type="button" id="btn" onclick="window.print()" value="Download PDF File">
  </div>

</div>
</div>



</body>
</html>
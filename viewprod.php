<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/Style.css">
 
    <title>Ajout produit</title>
               
</head>
<body>
    <div class="interface" >
        <div class="titre">
        
            <h3>Add Medicine</h3> </div>
        <div class="lien">
            <Ul >
                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                <li class="breadcrumb-item active">Add Medicine</li>
            </Ul>
        </div>

                            <form action="addprod.php" class="" method="POST">

                           <input type="hidden" name="currnt_date" class="form-control">

                                <div class="form-group col-md-6">
                                        <label class="control-label">Medicine Image:</label>
                                         <div id="kv-avatar-errors-1" class="center-block" style="display:none;"></div>                         
                                            <div class="kv-avatar center-block">             
                                            <input type="file" class="form-control" id="MedicineImage" placeholder="Medicine Name" name="choisie_image" class="file-loading" >
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="ontrol-label">Medicine Name</label>
                                          <input type="text" class="form-control" id="productName" placeholder="Medicine Name" name="Medicine_Name" autocomplete="off" required="" />
                                        </div>
                                <div class="form-group col-md-6">
                                        <label class="control-label">Quantity</label>
                                          <input type="text" class="form-control" id="quantity" placeholder="Quantity" name="quantity" autocomplete="off"  required="" pattern="^[0-9]+$"/>
                                </div>
                                <div class="form-group col-md-6">
                                        <label class="control-label">Batch No</label>
                                           <input type="text" class="form-control" id="Batch No" placeholder="Batch No" name="Batch_No" autocomplete="off" required="" pattern="^[Aa-Zz]+$"/>
                                </div>
                                <div class="form-group col-md-6">
                                        <label class="control-label">Expiry Date</label>
                                           <input type="date" class="form-control" id="expdate" placeholder="Expiry Date" name="Expiry_Date" autocomplete="off" required="" pattern="^[0-9]+$"/>
                                </div>
                                <div class="form-group col-md-6">
                                        <label class="control-label">Status</label>
                                             <select class="form-control" id="productStatus" name="Status">
                <option value="">~~SELECT~~</option>
                <option value="1">Available</option>
                <option value="2">Not Available</option>
              </select>
                                </div>

                                <div class="col-md-1 mx-auto">
                                <button type="submit" name="create" id="createProductBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">adds</button></div>
                            </form>
                    
                        </div>
                      </form> 

</body>
</html>
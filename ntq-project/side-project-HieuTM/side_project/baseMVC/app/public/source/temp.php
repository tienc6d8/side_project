<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categories</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <!--Header--> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-12" style="background-color: #507298;">
                <nav class="navbar navbar-light" style="color:white">
                   <strong>NTQ Solution Admin</strong>
                </nav>                
            </div>
        </div>
    </div>
    <!--End Header--> 
    <!--  Status-->
    <div class="container-fluid">
        <div class="row" >
            <div class="col-md-3" id="left-status">
                Hi, admin
            </div>
            <div class="col-md-9" id="right-status">
                List Categories
            </div>
        </div>
    </div>
    <!--End Status-->
    <!--  Content-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3" id="left-bar">               
                  <!-- Sidebar -->
                    <nav id="sidebar">
                        <div >
                            <div class="row" style="margin-top: 15px;">
                                <div class="col-xs-3 offset-1">
                                  <div id="img">                                   
                                    <img src="/images/avatar.jpg" alt="Avatar" class="img-thumbnail">
                                  </div>
                                </div>
                                <div class="col-xs-6 offset-1">
                                    <p><i class="fa fa-cog"></i>Update Profile</p>
                                    <p><i class="fa fa-times-circle"></i>Loguot</p>
                                </div>
                              </div>
                        </div>
                        <div class="row">
                            <div class="list-group col-12">
                                <a href="#" class="list-group-item "><i class="fa fa-bars" aria-hidden="true"></i> Categories</a>
                                <a href="#" class="list-group-item"><i class="fa fa-product-hunt" aria-hidden="true"></i> Products</a>
                                <a href="#" class="list-group-item"><i class="fa fa-user" aria-hidden="true"></i> Users</a>
                            </div>                            
                       </div>              
                    </nav>
            </div>
            <div class="col-md-9" id="content">
                <!--Search Box-->
                <nav class="navbar navbar-light bg-light" style="margin-top: 15px;">
                    <form class="form-inline">
                      <input class="form-control" style="width: 850px;" id="search-input" type="search" name="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-primary"  style="margin-left: 10px;" type="submit">Search</button>
                    </form>
                </nav>
                <!--End Search Box-->
                <table class="table table-bordered table-striped" id="table">
                    <thead>
                        <div class="col-12" id="header-table" style="background-color: #507298;">
                            <nav class="navbar navbar-light" style="color:white">
                            <a><i class="fa fa-bars"></i> Categories Management</a>
                            </nav>                
                        </div> 
                    </thead>
                    <div id="add-category">
                        <button type="submit" style="background-color: #507298;" class="btn btn-primary">Add Category</button>
                    </div>                    
                    <tbody>
                        <tr style="color: #507298;">
                            <th scope="col"><input type="checkbox" aria-label="Checkbox for following text input"></th>
                            <th scope="col">ID  <i class="fa fa-sort" aria-hidden="true"></i></th>
                            <th scope="col">Category Name <i class="fa fa-sort" aria-hidden="true"></i></th>
                            <th scope="col">Active <i class="fa fa-sort" aria-hidden="true"></i></th>
                            <th scope="col">Time Created <i class="fa fa-sort" aria-hidden="true"></i></th>
                            <th scope="col">Time Updated <i class="fa fa-sort" aria-hidden="true"></i></th>
                            <th scope="col">Action </th>
                        </tr>
                      <tr>
                        <th scope="row"><input type="checkbox" aria-label="Checkbox for following text input"></th>
                        <td>1</td>
                        <td>Category 8</td>
                        <td>Activated</td>
                        <td><p class="datetime">10:20:25</p>
                            <p class="datetime">14/01/2020</p>
                        </td>
                        
                        <td><p class="datetime">10:20:25</p>
                            <p class="datetime">15/01/2020</p>
                        </td>
                        <td>
                            <input class="btn btn-primary" style="width: 80px;" value="Edit">
                        </td>
                        
                      </tr>
                      <tr>
                        <th scope="row"><input type="checkbox" aria-label="Checkbox for following text input"></th>
                        <td>1</td>
                        <td>Category 8</td>
                        <td>Activated</td>
                        <td>
                            <p class="datetime">10:20:25</p>
                            <p class="datetime">14/01/2020</p>
                        </td>
                        
                        <td>
                            <p class="datetime">10:20:25</p>
                            <p class="datetime">15/01/2020</p>
                        </td>
                        <td>
                            <input class="btn btn-primary" style="width: 80px;" value="Edit">
                        </td>                       
                      </tr>
                      <tr>
                        <th scope="row"><input type="checkbox" aria-label="Checkbox for following text input"></th>
                        <td>1</td>
                        <td>Category 8</td>
                        <td>Activated</td>
                        <td><p class="datetime">10:20:25</p>
                            <p class="datetime">14/01/2020</p>
                        </td>
                        
                        <td><p class="datetime">10:20:25</p>
                            <p class="datetime">15/01/2020</p>
                        </td>
                        <td>
                            <input class="btn btn-primary" style="width: 80px;" value="Edit">
                        </td>                        
                      </tr>
                      <tr>
                        <th scope="row"><input type="checkbox" aria-label="Checkbox for following text input"></th>
                        <td>2</td>
                        <td>Category 8</td>
                        <td>Activated</td>
                        <td><p class="datetime">10:20:25</p>
                            <p class="datetime">14/01/2020</p>
                        </td>
                        
                        <td><p class="datetime">10:20:25</p>
                            <p class="datetime">15/01/2020</p>
                        </td>
                        
                      </tr>
                      <tr>
                        <th scope="row"><input type="checkbox" aria-label="Checkbox for following text input"></th>
                        <td>3</td>
                        <td>Category 8</td>
                        <td>Activated</td>
                        <td><p class="datetime">10:20:25</p>
                            <p class="datetime">14/01/2020</p>
                        </td>
                        
                        <td><p class="datetime">10:20:25</p>
                            <p class="datetime">15/01/2020</p>
                        </td>
                        <td>
                            <input class="btn btn-primary" style="width: 80px;" value="Edit">
                        </td>  
                      </tr>
                      <tr>
                        <td colspan="7">
                            <button type="button" class="btn btn-success">Success</button>
                            <button type="button" class="btn btn-danger">Danger</button>   
                        </td>
                      </tr>

                    </tbody>                           
                     
                     
                </table>
            </div>
        </div>
    </div>
    <!--End content-->
</body>
</html>
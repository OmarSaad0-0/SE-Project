<?php
class Products extends Controller 
{

    

    
public function __construct() {
    $this->productModel = $this->model('Product');
}

public function index() {
    $data = [
        'title' => 'Home page'
    ];

    $this->view('products/index', $data);
}


public function admin_panel_products_men(){
        
    $data = $this->productModel->ViewMen();
                          
                          
                          
    $this->view('products/admin_panel_products_men',$data);
                          
                          }  

                          


public function admin_panel_products_men_add(){
        
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $data = [
         'Name' => $_POST['Product_Name']
];
    }
          // Add product in database
        if($this->productModel->AddMen($data)){
            header('Location: http://localhost/mvcframework/products/admin_panel_products_men');
        }
        else 
        return;
                        
        $this->view('products/admin_panel_products_men_addform',$data);
                        
                        } 



    
    public function admin_panel_products_unisex_add(){
        

        $data = [
             'Name' => $_POST['Product_Name']
    ];

              // Add product in database
            if($this->productModel->AddUnisex($data)){
                header('Location: http://localhost/mvcframework/products/admin_panel_products_unisex');
            }
            else 
            return;
                            
            $this->view('products/admin_panel_products_unisex_add',$data);
                            
                            }  

    public function admin_panel_products_unisex_delete(){
        
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                               
     
                        
                                      // Add product in database
     if($this->productModel->deleteUnisex($_GET['id'])){
     header('Location: http://localhost/mvcframework/products/admin_panel_products_unisex');
    }
    
    }
    $this->view('products/admin_panel_products_unisex');
                                                    
    }

    public function admin_panel_products_men_delete(){
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
                                   
         
                            
                                          // Add product in database
         if($this->productModel->deleteMen($_GET['id'])){
         header('Location: http://localhost/mvcframework/products/admin_panel_products_men');
        }
        
        }
        $this->view('products/admin_panel_products_men');
                                                        
        }

    public function admin_panel_products_unisex_edit(){
         // To show the current Product Name in the Input Field
         //$id = $_GET['id'];
         // $data = $this->productModel->getProduct($id);
         
         $id = $_GET['id'];
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            
                                   
            $data = [

                'productName' => $_POST['Product_Name'],
                'Id' => $id
    
             ];
                            
                                          // Add product in database
         if($this->productModel->updateUnisex($data)){
         header('Location: http://localhost/mvcframework/products/admin_panel_products_unisex');
        }
        
        }
        $this->view('products/admin_panel_products_unisex_edit');
                                                        
        }

        public function admin_panel_products_men_edit(){
            // To show the current Product Name in the Input Field
            //$id = $_GET['id'];
            // $data = $this->productModel->getProduct($id);
            
            $id = $_GET['id'];
           if($_SERVER['REQUEST_METHOD'] == 'POST'){
               
                                      
               $data = [
   
                   'productName' => $_POST['Product_Name'],
                   'Id' => $id
       
                ];
                               
                                             // Add product in database
            if($this->productModel->updateMen($data)){
            header('Location: http://localhost/mvcframework/products/admin_panel_products_men');
           }
           
           }
           $this->view('products/admin_panel_products_men_edit');
                                                           
           }



    
    
                            

                            public function admin_panel_products_unisex(){
    
        $data = $this->productModel->ViewUnisex();
                
                
                
                $this->view('products/admin_panel_products_unisex',$data);
                
                
            
    }  
                public function admin_panel_products_unisex_addform(){
        

                  
            
                          // Add product in database
                        $data = [];
                                        
                        $this->view('products/admin_panel_products_unisex_addform',$data);
                                        
                                        } 

                                        public function admin_panel_products_men_addform(){
        

                  
            
                                            // Add product in database
                                          $data = [];
                                                          
                                          $this->view('products/admin_panel_products_men_addform',$data);
                                                          
                                                          }
    public function admin_panel_products_women(){
        
        $data = $this->productModel->ViewWomen();
                                        
                                        
                                        
         $this->view('products/admin_panel_products_women',$data);
                                        
                                        } 

                                        public function admin_panel_products_women_addform(){
        

                  
            
                                            // Add product in database
                                          $data = [];
                                                          
                                          $this->view('products/admin_panel_products_women_addform',$data);
                                                          
                                                          }

                                                          public function admin_panel_products_women_edit(){
                                                            // To show the current Product Name in the Input Field
                                                            //$id = $_GET['id'];
                                                            // $data = $this->productModel->getProduct($id);
                                                            
                                                            $id = $_GET['id'];
                                                           if($_SERVER['REQUEST_METHOD'] == 'POST'){
                                                               
                                                                                      
                                                               $data = [
                                                   
                                                                   'productName' => $_POST['Product_Name'],
                                                                   'Id' => $id
                                                       
                                                                ];
                                                                               
                                                                                             // Add product in database
                                                            if($this->productModel->updateWomen($data)){
                                                            header('Location: http://localhost/mvcframework/products/admin_panel_products_women');
                                                           }
                                                           
                                                           }
                                                           $this->view('products/admin_panel_products_women_edit');
                                                                                                           
                                                           }

                                                           public function admin_panel_products_women_delete(){
        
                                                            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                                                                                       
                                                             
                                                                                
                                                                                              // Add product in database
                                                             if($this->productModel->deleteWomen($_GET['id'])){
                                                             header('Location: http://localhost/mvcframework/products/admin_panel_products_women');
                                                            }
                                                            
                                                            }
                                                            $this->view('products/admin_panel_products_women');
                                                                                                            
                                                            }
}

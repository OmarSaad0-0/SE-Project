
 <?php
class Orders extends Controller
{

 public function __construct()
 {
     $this->orderModel=$this->model('Order');
 }




 public function index()
 {
      
    $data['Men'] = $this->orderModel->SelectMenProducts();
        
        
    $data['Woman'] = $this->orderModel->SelectWomenProducts();

    $data['Uni'] = $this->orderModel->SelectuniSexProducts();

   

    $this->view('orders/index',$data);
 
 }

public function Enter()
{
    $data = [
            
        'name'=>'',
        'Fabric' =>'' ,
        'Colour' => '',
        'Printing' =>'',
        'Quantity' => '',
        'Info' => '',
        'Time' => '',
        'Pr' => $this->orderModel->SelectPrint(),
        'FabricError' => '',
        'ColourError' => '',
        'TimeError'   => ''
        
        
    ];
  
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    
    // Process form
    // Sanitize POST data
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


    $data = [
            
        
        'Fabric' =>$_POST['Fabric'] ,
        'Base' =>$_POST['Base'],
        

        'Colour' => $_POST['Colour'],
        'Printing' => $_POST['Printing'],
        'Quantity' => $_POST['Quantity'],
        'Info' => $_POST['Info'],
        'Time' => $_POST['Time'],
        'Pr' => $this->orderModel->SelectPrint(),
        'FabricError' => ' ',
        'ColourError' => ' ',
        'TimeError'   => ' ',
        'Status'      =>$_POST['status']
    ];

    if (empty($data['Fabric']))
    {
      $data['Fabric']='';
    } 

    if (empty($data['Colour']))
    {
       $data['Colour']='';
    } 


    if (empty($data['Time']))
    {
        $data['TimeError'] = 'Please Choose Required Time';
    } 



    

   $this->orderModel->InsOrder($data,$_SESSION['Id']);
    
  header("Location:http://localhost/mvcframework/orders/myOrders");

}


$this->view('orders/Enter',$data);

}

public function Checkout()
{
  $this->view('orders/Checkout',$data);
}

public function myOrders()
{
  $data=$this->orderModel-> get_Cart($_SESSION['Id']);
  $this->view('orders/myOrders',$data);
}
}